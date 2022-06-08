<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsSeeder extends Seeder
{
    public function run()
    {
        DB::table('permissions')->insert([
            ["id"=>1,"name"=>"Manage Home","guard_name"=>"web"],
            ["id"=>2,"name"=>"Manage Bookings","guard_name"=>"web"],
            ["id"=>3,"name"=>"Manage Hotels","guard_name"=>"web"],
            ["id"=>4,"name"=>"Manage Programs","guard_name"=>"web"],
            ["id"=>5,"name"=>"Contact Messages","guard_name"=>"web"],
            ["id"=>6,"name"=>"Manage Drives","guard_name"=>"web"],
            ["id"=>7,"name"=>"Manage Authentication","guard_name"=>"web"],
        ]);

        DB::table('roles')->insert([
            ["id"=>1,"name"=>"Super Admin","guard_name"=>"web"]
        ]);

        DB::table('model_has_roles')->insert([
            ["role_id"=>1,"model_type"=>"App\Models\User","model_id"=>"1"],
        ]);

        DB::table('role_has_permissions')->insert([
            ["permission_id"=>1,"role_id"=>1],
            ["permission_id"=>2,"role_id"=>1],
            ["permission_id"=>3,"role_id"=>1],
            ["permission_id"=>4,"role_id"=>1],
            ["permission_id"=>5,"role_id"=>1],
            ["permission_id"=>6,"role_id"=>1],
            ["permission_id"=>7,"role_id"=>1],
        ]);
    }
}
