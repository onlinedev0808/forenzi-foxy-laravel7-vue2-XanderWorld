<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Role;
use App\Models\userDetail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $roles = Role::all();
        return view('admin.users.create', compact('users', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();
        dd($data);

        // dd($data);
        $oldData = new User();
        $oldData->name = $data['name'];
        $oldData->email = $data['email'];
        $oldData->password = Hash::make($data['password']);
        $oldData->save();


        return redirect()
            ->route('admin.users.show', $oldData->id)
            // ->route('admin.products.index')
            ->with('created', $data['name']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $levels = userDetail::select('admin')->distinct()->get();
        return view('admin.users.edit', compact('user', 'levels'));
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
        $data = $request->all();
        $oldData = User::findOrFail($id);
        // dd($data);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $oldData->id,
            'password' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'business_name' => 'string|max:255',
            'address' => 'required|string|max:255',
            'cap' => 'required|string',
            'city' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'pec' => 'required|string|max:255',
            'code_sdi' => 'required|integer',
            'notes' => 'string|max:255',
            'admin' => 'required'
        ]);

        // i already have a column admin for the user
        // foreach ($request->roles as $role) {

        //     $roleId = $role['role_id'];
        //     $thisRole = Role::findOrFail($roleId);

        //     $thisRole->name = $role['name'];
        //     switch ($role['name']) {
        //         case 'super admin':
        //             $thisRole->level = 0;
        //             break;
        //         case 'admin':
        //             $thisRole->level = 1;
        //             break;
        //         case 'moderator':
        //             $thisRole->level = 2;
        //             break;
        //         case 'editor':
        //             $thisRole->level = 3;
        //             break;
        //         case 'designer':
        //             $thisRole->level = 3;
        //             break;
        //         case 'vip-member':
        //             $thisRole->level = 4;
        //             break;
        //         case 'member':
        //             $thisRole->level = 5;
        //             break;
        //         case 'registered':
        //             $thisRole->level = 6;
        //             break;
        //     }
        //     $thisRole->save();
        // }

        $oldData->name = $data['name'];
        $oldData->email = $data['email'];
        $oldData->password = Hash::make($data['password']);
        $oldData->save();

        $oldData->userDetail->surname = $data['surname'];
        $oldData->userDetail->business_name = $data['business_name'];
        $oldData->userDetail->address = $data['address'];
        $oldData->userDetail->cap = $data['cap'];
        $oldData->userDetail->city = $data['city'];
        $oldData->userDetail->province = $data['province'];
        $oldData->userDetail->state = $data['state'];
        $oldData->userDetail->phone = $data['phone'];
        $oldData->userDetail->pec = $data['pec'];
        $oldData->userDetail->code_sdi = $data['code_sdi'];
        $oldData->userDetail->notes = $data['notes'];
        $oldData->userDetail->admin = $data['admin'];

        $oldData->userDetail->save();



        return redirect()
            ->route('admin.users.show', ['user' => $oldData])
            ->with('edited', $oldData['name']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()
            ->route('admin.users.index')
            ->with('deleted', $user['name']);
    }
}
