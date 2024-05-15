<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if (request()->ajax()) {
            $users = User::query();
            return DataTables::of($users)
            ->addIndexColumn()
            ->addColumn('action','dashboard.user.action')
            // ->editColumn('role', function(User $user) {
            //     if($user->role == 1){
            //         $badges = '<span class="badge bg-primary">Admin</span>';
            //     }else {
            //         $badges = '<span class="badge bg-success">Employee</span>';
            //     }

            //     return $badges;
                    
            // })
            ->make();
        }
        return view('dashboard.user.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|max:255',
        //     'username' => 'required|unique:users',
        //     'phone' => 'required',
        //     'email' => 'required|email:dns|unique:users',
        //     'password' => 'required|min:5|max:255',
        //     'konf_password' => 'required|same:password',
        // ]);

        // $data = [
        //     'name' => $request->name,
        //     'username' => $request->username,
        //     'phone' => $request->phone,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        //     'role' => 2,
        // ];

        // // var_dump($data);die;

        // User::create($data);

        // return redirect('/dashboard/user')->with('success', 'New user has been added!');

        //define validation rules
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'username' => 'required|unique:users',
            'phone' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'konf_password' => 'required|same:password',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $data = [
            'name' => $request->name,
            'username' => $request->username,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 2,
        ];

        //create post
        $user = User::create($data);

        //return response
        return response()->json([
            'success' => true,
            'message' => 'New user has been added!',
            'data'    => $user  
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user= User::find($id);

        return view('dashboard.user.edit',['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);

        return redirect('/dashboard/user')->with('success', 'User has been deleted!');
    }
}
