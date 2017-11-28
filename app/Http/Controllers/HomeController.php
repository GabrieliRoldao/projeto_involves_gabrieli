<?php

namespace App\Http\Controllers;

use App\Services\HomeService;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    private $homeService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->homeService = new HomeService();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->homeService->allUsers();
        return view('home', ['users' => $users]);
    }

    public function findUser(int $id)
    {
        $searchUser = $this->homeService->findUser($id);

        if ($searchUser['status'] == 'error') {
            return back()->withErrors($searchUser['message']);
        }

        return view('user_details',['user' => $searchUser]);
    }
}
