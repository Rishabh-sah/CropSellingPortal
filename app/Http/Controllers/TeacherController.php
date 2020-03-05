<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class TeacherController extends Controller
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
    public function create()
    {
        return redirect('/registeradmin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $data)
    {     
        $this->validate($data ,[
            'name' =>'required|min:2|max:50',
            'email' =>'required|email',
            'phone' =>'required|digits:10',
            'password' =>'required|min:6|max:20',
            'address'=>'nullable',
            'pin'=>'nullable',
            'percent'=>'nullable',
            'dte'=>'nullable',
        ]); 
        $user=new User;
        $user->name=$data->input('name');
        $user->email=$data->input('email');
        $user->phone=$data->input('phone');
        $user->role=$data->input('role');
        $user->password=bcrypt($data->input('password'));
        $user->address=NULL;
        $user->pin=NULL;
        $user->percent=NULL;
        $user->dte=NULL;
        $user->save();
        return redirect('/registeradmin')->with('success','Teacher Added Successfully');
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
        $user=User::find($id);
        $user->delete();
        return redirect('/registeradmin')->with('success','Teacher Deleted Successfully');;
    }
}
