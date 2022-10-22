<?php

namespace Database\Seeders;

use App\Models\PermissionGroup;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissionGroups =[
                [
                    'name'  =>  'Product'
                ],
                [
                    'name'  =>  'Customer'
                ],
                [
                    'name'  =>  'User'
                ]
            ];

            echo '-------------------------------------'."\n";
            echo '------Permission Group Seeding-------'."\n";
            foreach ($permissionGroups as $key => $value) {
                $permissionGroup            =new PermissionGroup;
                $permissionGroup->name      =$value['name'];
                $permissionGroup->save();
                echo "------Permission Group Name=>$permissionGroup->name-------"."\n";
            }
            echo '------Permission Group Seeding Completed-------'."\n";

    }
}
