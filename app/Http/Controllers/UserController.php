<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUserRequest;
use App\Repositories\User\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function viewProfile()
    {
        return view('user.profile');
    }

    public function viewListOrder()
    {
        return view('user.list_order');
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
