<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::all();
        return view('dashboard.admin.admin_index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.admin_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'              => 'required|regex:/^[a-zA-Z]+(?:\s[a-zA-Z]+)$/|max:70',
            'email'             => 'required|email',
            'password'          => 'required|min:6|confirmed',
            'profile_avatar'    => 'sometimes|nullable|mimes:jpeg,jpg,png|max:1000'
        ]);

        // Storing image in storage and setting the image's name in database
        if ($file = $request->file('profile_avatar')) {
            $file_name =  rand() . $file->getClientOriginalName();
            $file->move('admin/profile_images', $file_name);
        } else {
            $file_name = "default-avatar.png";
        }

        // Checking if field was checked then convert to boolean (0,1)
        $isSuperAdmin = $request->isSuperAdmin ? 1 : 0;

        Admin::create([
            'name'          => $request->name,
            'email'         => $request->email,
            'password'      => Hash::make($request->password),
            'image'         => $file_name,
            'isSuperAdmin'  => $isSuperAdmin

        ]);

        return redirect()->route('admins.index')
            ->with('success', 'Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        return view('dashboard.admin.admin_edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        $request->validate([
            'name'              => 'required|regex:/^[a-zA-Z]+(?:\s[a-zA-Z]+)$/|max:70',
            'email'             => 'required|email',
            'password'          => 'sometimes|nullable|min:6|confirmed',
            'profile_avatar'    => 'sometimes|nullable|mimes:jpeg,jpg,png|max:1000'
        ]);

        //Getting old password or replacing with new one if exists
        if ($request->password) {
            $password = Hash::make($request->password);
        } else {
            $password = $admin->password;
        }

        //Getting old image or replacing with new one if exists
        if ($file = $request->file('profile_avatar')) {
            $file_name =  rand() . $file->getClientOriginalName();
            $file->move('admin/profile_images', $file_name);
            $image = $file_name;
        } else {
            $image = $admin->image;
        }

        // Checking if field was checked then convert to boolean (0,1)
        $isSuperAdmin = $request->isSuperAdmin ? 1 : 0;

        $admin->update([
            $admin->name            = $request->name,
            $admin->email           = $request->email,
            $admin->password        = $password,
            $admin->image           = $image,
            $admin->isSuperAdmin    = $isSuperAdmin
        ]);

        return redirect(route('admins.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        $admin->delete();
        $admins = Admin::all();
        return view('dashboard.admin.admin_index', compact('admins'));
    }
}
