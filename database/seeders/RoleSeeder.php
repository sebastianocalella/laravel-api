<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'level' => 1,
                'name' => 'viewer'
            ],
            [
                'level' => 2,
                'name' => 'follower'
            ],
            [
                'level' => 3,
                'name' => 'user'
            ],
            [
                'level' => 101,
                'name' => 'publisher'
            ],
            [
                'level' => 102,
                'name' => 'influencer'
            ],
            [
                'level' => 201,
                'name' => 'editor'
            ],
            [
                'level' => 202,
                'name' => 'moderator'
            ],
            [
                'level' => 301,
                'name' => 'admin'
            ],
            [
                'level' => 302,
                'name' => 'owner'
            ],
        ];
        foreach ($roles as $role) {
            $role = new Role();
            $role->level = $role['level'];
            $role->name = $role['name'];
            $role->save();
        }
    }
}
