<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Museum;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.index',[
            'museums'=> Museum::all(),
        ]);
    }

    /**
     * Login form
     */

     public function loginForm()
     {
        return view('user.login');
     }
    /**
     * submit the form login
     */

     public function login()
     {
        $attributes = request()->validate(
            [
                'email' => 'required|email',
                'password' =>'required',
            ]
            );

            if(auth()->attempt($attributes)){
                return redirect('/admin/index');
            }

            return back()
            ->withInput()
            ->withErrors(['email' => 'Invalid email/password']);
     }  

     public function logout()
     {
        auth()->logout();
        return redirect('/user/index');
     }

     /**
      * List all users
      */
      public function list()
      {
        return view('user.list', ['users' => User::all()]);
      }

    /**
     * Show the form for creating a new resource.
     */
    public function add()
    {
        return view ('user.add');
    }

    public function create()
    {
        $attributes = request()->validate(
            ['fname'=> 'required',
            'lname'=> 'required',
            'email'=>'required|email',
            'password' =>'required',
            'active' => 'required',
            'permission'=>'required'
            ]
        );
        $user = new User();
        $user->fname = $attributes['fname'];
        $user->lname = $attributes['lname'];
        $user->email = $attributes['email'];
        $user->password = $attributes['password'];
        $user->active = $attributes['active'];
        $user->permission = $attributes['permission'];
        $user->save();
        return redirect('/user/list')
        ->with('message','User has been added');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('user.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(User $user)
    {
        $attributes = request()->validate(
            [
                'fname' => 'required',
                'lname' => 'required',
                'email'=>'required|email',
                'password' =>'nullable',
                'active' => 'required',
            ]
        );
        $user-> fname = $attributes['fname'];
        $user->lname = $attributes['lname'];
        $user ->email = $attributes['email'];
        $user->password = $attributes['password'];
        $user->active = $attributes['active'];

        $user->save();

        return redirect('/user/list')
        ->with('message','User has been updated');
    }


    /**
     * delete
     */
    public function delete(User $user)
    {
        $user->delete();
        return redirect('/user/list')
        -> with('message','User has been deleted ');
    }

    
}
