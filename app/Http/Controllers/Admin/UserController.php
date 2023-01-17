<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
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
        return view('admin.users.create', compact('users'));
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
        // dd($data);
        $request->validate(
            [
                'name' => [
                    'min:3',
                    'max:8',
                    'required',
                ],
                'email' => [
                    'min:3',
                    'max:30',
                    'required',
                ],
                'password' => [
                    'min:3',
                    'max:20',
                    'required',
                ],
            ]
        );

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
        return view('admin.users.edit', compact('user'));
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

        $request->validate(
            [
                'name' => [
                    'min:3',
                    'max:10',
                    'required',
                ],
                'email' => [
                    'min:3',
                    'max:30',
                    'required',
                    Rule::unique('users')->ignore($oldData['email'], 'email'),
                ],
                'password' => [
                    'min:3',
                    'max:20',
                    'required',
                ],
            ]
        );
        $oldData = new User();
        $oldData->name = $data['name'];
        $oldData->email = $data['email'];
        $oldData->password = Hash::make($data['password']);
        $oldData->save();

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
