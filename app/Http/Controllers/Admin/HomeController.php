<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Admin.home');
    }
    // public function home()
    // {
    //     return view('Admin.home');
    // }

    // Users Logic

    public function users()
    {
        $users = User::get();
        return view('Admin/user/users', compact('users'));
    }

    public function addUsers()
    {
        return view('Admin/user/addUsers');
    }


    public function store(Request $request)
    {
        // Insert
        User::create([
            'name'      => $request->name,
            'password'  => $request->pass,
            'email'     => $request->email,
        ]);
        return redirect()->route('users');
    }


    public function edit($id)
    {
        // User::findOrFail($id);
        $duser = User::get();

        $user = User::find($id); // search in given table id only
        if (!$user)
            return redirect()->back();

        $_user = User::select('id', 'name', 'password', 'email')->find($id);

        return view('Admin/user/editUser', compact('_user'));
    }

    public function update(Request $request, $id)
    {
        // check if offer exists
        $user = User::get();
        $_user = User::find($id);
        if (!$_user)
            return redirect()->back();

        // update data
        if ($request->pass) {
            $_user->update([
                'name' => $request->name,
                'password' => $request->pass,
                'email' => $request->email,
            ]);
        } else {
            $_user->update([
                'name' => $request->name,
                'password' => $_user->password,
                'email' => $request->email,
            ]);
        }

        return redirect()->route('users')->with(['success' => 'Update Success']);
    }

    public function delete(Request $request, $id)
    {
        $user = User::find($id);
        if (!$user)
            return redirect()->back()->with(['error' => 'User Deleted']);

        $user->delete();
        return redirect()->back();
    }

    // Contact Logic
    public function contact()
    {
        $contact = Contact::get();
        return view('Admin/contact/contact', compact('contact'));
    }
}
