<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\user;

class adminController extends Controller
{
       
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }
     public function register()
    {

        return view('admin.register');
    }
    public function show_user_list(){
         $users=user::all();
        return view('admin.user_list',compact('users'));
    }

    public function user_edit($id)
    {
        $user=user::find($id);
        return view('admin.edit_user',compact('user'));
    
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
        $input=$request->all();
        $input['password'] = Hash::make($request->password);
        //dd($input);
        user::find($id)->update($input);
        return redirect()->route('admin.dashboard')
        ->with('success','User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        user::find($id)->delete();
          return redirect()->route('admin.dashboard')
                        ->with('success','user deleted successfully');
    }
    
}
