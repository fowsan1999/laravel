<?php

namespace Database\Seeders;

use App\Models\PermissionGroup;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions =[
            [
                'name'                  => 'Product Create',
                'permission_group_id'   => PermissionGroup::where('name','Product')->first()->id
            ],
            [
                'name'                  => 'Product List',
                'permission_group_id'   => PermissionGroup::where('name','Product')->first()->id
            ],
            [
                'name'                  => 'Product Edit',
                'permission_group_id'   => PermissionGroup::where('name','Product')->first()->id
            ],
            [
                'name'                  => 'Product Delete',
                'permission_group_id'   => PermissionGroup::where('name','Product')->first()->id
            ],
            [
                'name'                  => 'Customer Create',
                'permission_group_id'   => PermissionGroup::where('name','Customer')->first()->id
            ],
            [
                'name'                  => 'Customer List',
                'permission_group_id'   => PermissionGroup::where('name','Customer')->first()->id
            ],
            [
                'name'                  => 'Customer Edit',
                'permission_group_id'   => PermissionGroup::where('name','Customer')->first()->id
            ],
            [
                'name'                  => 'Customer Delete',
                'permission_group_id'   => PermissionGroup::where('name','Customer')->first()->id
            ],
            [
                'name'                  => 'User Create',
                'permission_group_id'   => PermissionGroup::where('name','User')->first()->id
            ],
            [
                'name'                  => 'User List',
                'permission_group_id'   => PermissionGroup::where('name','User')->first()->id
            ],
            [
                'name'                  => 'User Edit',
                'permission_group_id'   => PermissionGroup::where('name','User')->first()->id
            ],
            [
                'name'                  => 'User Delete',
                'permission_group_id'   => PermissionGroup::where('name','User')->first()->id
            ],
        ];

        echo '-------------------------------------'."\n";
        echo '--------Permission Seeding-----------'."\n";
        foreach ($permissions as $key => $value)
        {
            $permission            =new Permission;
            $permission->name      =$value['name'];
            $permission->permission_group_id      =$value['permission_group_id'];
            $permission->save();
            echo "------Permission Name=>$permission->name-------"."\n";
        }
        echo '------Permission Seeding Completed-------'."\n";
    }
}
