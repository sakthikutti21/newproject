<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $fname = $request['fname'];
        $lname = $request['lname'];
        $email = $request['email'];
        $password = $request['password'];
        
        
        DB::table('user')->insert(
            array(
                   'user_firstname'     =>   $fname, 
                   'user_lastname'   =>   $lname,
                   'user_email'   =>   $email,
                   'user_password'   =>   $password,
            )
       );

       return view('welcome');


    }

    public function update(Request $request)
    {
        $fname = $request['fname'];
        $lname = $request['lname'];
        $email = $request['email'];
        $id = $request['id'];

        DB::table('user')->where('user_id', '=', $id)->update([
            'user_firstname'     =>   $fname, 
            'user_lastname'   =>   $lname,
            'user_email'   =>   $email,
        ]);
        
        
       

        return redirect('list');

    }

    public function list()
    {
        $users = DB::select('select * from user');
      return view('list')->with('result', $users);
    }

    public function delete($id)
    {
        DB::table('user')->where('user_id', $id)->delete();
        return redirect('list');
    }
    public function edit($id)
    {
        $users = DB::table('user')->select('*')->where('user_id', $id)->first();
        
        return view('edit')->with('result', $users);
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
  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  

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
}
