<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function showDashboard()
    {
        $users = User::all();

        return view('dashboard', compact('users'));
    }

    public function editUser($id)
    {

        $user = User::find($id);
        return view('admin.edit', compact('user'));
    }

    public function userUpdate(Request $request)
    {
        $user = User::find($request->userid);

        $data = $request->all();
        $user->update($data);

        $request->session()->flash('alert-success', "User has been  updated");
        return redirect('dashboard');
    }

    public function deleteUser($id)
    {

        User::whhere('id', $id)->delete();

        return Redirect::back()->with('success','User has been deleted');
    }

    public function order()
    {
        return view('user')->with('success','You just have logged in successfully');
    }
}
