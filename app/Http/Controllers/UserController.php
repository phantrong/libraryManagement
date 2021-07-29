<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUserRequest;
use App\Models\Order;
use App\Repositories\Order\OrderRepository;
use App\Repositories\User\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class UserController extends Controller
{
    private $orderRepository;
    private $userRepository;

    public function __construct(OrderRepository $orderRepository, UserRepository $userRepository)
    {
        $this->orderRepository = $orderRepository;
        $this->userRepository = $userRepository;
    }

    public function viewProfile()
    {
        return view('user.profile');
    }

    public function viewListOrder(Request $request)
    {
        $userIds = [];
        $day_start = '2020-01-01';
        $day_end = Carbon::now()->addHours(7);
        $user = '';
        if ($request->get('day_start')) {
            $day_start = $request->get('day_start');
        }
        if ($request->get('day_end')) {
            $day_end = $request->get('day_end');
        }
        if ($request->get('username')) {
            $user = $this->userRepository->getUserByUserName($request->get('user'));
            $userIds[] = $user->id;
        } elseif ($request->get('user')) {
            $filler['name'] = $request->get('user');
            $listUser = $this->userRepository->getListUser($filler);
            if ($listUser) {
                foreach ($listUser as $user) {
                    $userIds[] = $user->id;
                }
            }
        }
        $listOrder = $this->orderRepository->getListOrderByUser($userIds, $day_start, $day_end->toDateTimeString());
        $listOrderConfirm = [];
        $listOrderOverdue = [];
        $listOrderBorrowing = [];
        $listOrderBorrowed = [];
        if ($listOrder) {
            foreach ($listOrder as $order) {
                $order = $this->orderRepository->changeStatusOver($order);
                if ($order->status == Order::STATUS_CONFIRM) {
                    $listOrderConfirm[] = $order;
                }
                if ($order->status == Order::STATUS_OVERDUE) {
                    $listOrderOverdue[] = $order;
                }
                if ($order->status == Order::STATUS_BORROWING) {
                    $listOrderBorrowing[] = $order;
                }
                if ($order->status == Order::STATUS_BORROWED) {
                    $listOrderBorrowed[] = $order;
                }
            }
        }
        return view('user.list_order', [
            'day_start' => $day_start,
            'day_end' => $day_end->toDateString(),
            'listOrder' => $listOrder,
            'users' => $user,
            'listOrderConfirm' => $listOrderConfirm,
            'listOrderOverdue' => $listOrderOverdue,
            'listOrderBorrowing' => $listOrderBorrowing,
            'listOrderBorrowed' => $listOrderBorrowed,
        ]);
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function loginPost(Request $request)
    {
        $e = $request->only('username', 'password');
        if (Auth::attempt($e)) {
            return redirect()->route('home');
        }
        return redirect()->route('user.login')->with('not_success', 1);
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function registerPost(RegisterUserRequest $request)
    {
        $user = $request->only([
            'name',
            'username',
            'images',
            'birth',
            'phone',
            'email',
            'address',
            'is_borrow'
        ]);
        $user['password'] = Hash::make($request->password);
        $this->userRepository->create($user);
        return redirect()->route('user.register')->with('success', 1);
    }
}
