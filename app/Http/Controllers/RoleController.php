<?php

namespace App\Http\Controllers;

use App\Models\PermissionGroup;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles=Role::with('permissions')->get();
        return view('admin.roles.list',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permission=PermissionGroup::with('permissions')->get();
        return view('admin.roles.create')->with('permission',$permission);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate
        ([
            'name'=>'required'
        ]);

        $role =new Role();
        $role->name =$request->name;
        $role->save();
        $role->syncPermissions($request->permission_ids);
        return redirect('role')->with('success','Role Added Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $roles=Role::with('permissions')->find($id);
        $permission=PermissionGroup::with('permissions')->get();
        return view('admin.roles.edit',compact('roles','permission'));
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
        $role =Role::find($id);
        $role->name =$request->name;
        $role->save();
        $role->syncPermissions($request->permission_ids);
        return redirect('role')->with('update','Role Update Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //return $id= $request->id;
        Role::whereId($request->id)->delete();
        return redirect('role')->with('delete','Role Delete Success');
    }
}
