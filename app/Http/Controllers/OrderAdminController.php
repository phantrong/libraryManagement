<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Order\OrderRepository;
use App\Models\Order;
use App\Repositories\User\UserRepository;
use Carbon\Carbon;
use Facade\FlareClient\Http\Response;

class OrderAdminController extends Controller
{
    private $orderRepository;
    private $userRepository;

    public function __construct(OrderRepository $orderRepository, UserRepository $userRepository)
    {
        $this->orderRepository = $orderRepository;
        $this->userRepository = $userRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
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
        return view('admin.manage_order.index', [
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function changeStatusToBorrowing(Request $request)
    {
        if ($request->id && $request->type == 'one-to-three') {
            $order = $this->orderRepository->find($request->id);
            if ($order) {
                $this->orderRepository->changeStatusOver($order, true);
                return Response()->json([
                    'success' => '1'
                ]);
            }
        }
        return Response()->json([
            'success' => '0'
        ]);
    }
}
