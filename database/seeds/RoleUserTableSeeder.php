<?php

use App\Models\Role;
use App\User;
use Illuminate\Database\Seeder;


class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = Role::all();
        $users = User::all();

        foreach ($users as $user) {
            if ($user->email === 'alexander.mymails@gmail.com') {
                $user->roles()->attach(Role::where('name', 'super admin')->first());
            } else {
                $randomRole = $roles->random();
                $user->roles()->attach($randomRole->id);
            }
        }
    }
}
