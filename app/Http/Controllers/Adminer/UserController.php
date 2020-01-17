<?php

namespace App\Http\Controllers\Adminer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;
use App\User;
use App\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin2.user.index');
    }

    public function userData()
    {
        return Datatables::of(User::query())
        ->addColumn('roles', function(User $user){
            return $user->roles->pluck('name')->implode(', ');
        })
        ->addColumn('action', function ($user) {
                return '<a href="/admin2/users/'.$user->id.'/edit" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>'.
                '<span class="btn btn-xs btn-danger" data-id="'.$user->id.'"><i class="glyphicon glyphicon-remove"></i>Delete</a>';
        })
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user=new User;
        $roles=Role::pluck('name', 'id');
        return view('admin2.user.edit', compact('user', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required|min:5|max:32',
            'email'=>'required|email',
            'phone'=>'sometimes|nullable|integer|regex:/^[0-9]{7,10}$/'

        ]);
        $user=new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->password=\Hash::make($request->password);
        $user->save();
        $user->roles()->sync($request->roles);// синхронизация ролей
        return redirect('/admin2/users')->with ('success', 'User Edited');

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
        $user=User::find($id);
        $roles=Role::pluck('name', 'id');
        return view('admin2.user.edit', compact('user', 'roles'));

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
        $this->validate($request, [
            'name'=>'required|min:5|max:32',
            'email'=>'required|email',
            'phone'=>'sometimes|nullable|integer|regex:/^[0-9]{7,10}$/'

        ]);





        $user=User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->phone=$request->phone;
        if($request->password){
            $user->password=\Hash::make($request->password);
        }

        $user->roles()->sync($request->roles);// синхронизация ролей
        $user->save();
        return redirect('/admin2/users')->with ('success', 'User Edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
    }
}
