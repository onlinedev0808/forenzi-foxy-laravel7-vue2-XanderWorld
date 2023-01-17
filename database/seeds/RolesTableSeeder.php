<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['super admin' => 0, 'admin' => 1, 'moderator' => 2, 'editor' => 3, 'designer' => 3, 'vip-member' => 4, 'member' => 5, 'registered' => 6];
        foreach ($roles as $role => $level) {
            $newRole = new Role();
            $newRole->name = $role;
            $newRole->level = $level;
            $newRole->save();
        }
    }
}
