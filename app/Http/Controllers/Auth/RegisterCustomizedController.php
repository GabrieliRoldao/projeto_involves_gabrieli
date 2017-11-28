<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\RegisterService;

class RegisterCustomizedController extends Controller
{
    private $service;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->service = new RegisterService();
        $this->middleware('guest');
    }

    public function register(Request $request)
    {
        $validacao = $this->service->validateUser($request->all());

        if ($validacao['status'] == 'error') {
            return redirect()->back()->withErrors($validacao['obj']);
        }

        $this->guard()->login($validacao['obj']);

        return redirect()->route('home');
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }

}