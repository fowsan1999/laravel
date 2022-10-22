<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        echo '-------------------------------------'."\n";
        echo '------------Role Seeding------------'."\n";
        $role=new Role;
        $role->name='Super Admin';
        $role->save();
        echo "------Role Added=>$role->name-------"."\n";
        echo '------------------------------------'."\n";
        echo "------Assing Permissions to=>$role->name-------"."\n";

        $permission=Permission::get();

        foreach ($permission as $key => $value) {
            $role->givePermissionTo($value->name);
            echo "----Permission are => $value->name---------"."\n";
        }

        echo '------Role Seeding Done-------------'."\n";
        echo '------------------------------------'."\n";
    }
}
