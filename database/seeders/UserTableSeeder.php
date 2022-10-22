<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        echo '-------------------------------------'."\n";
        echo '------------User Seeding------------'."\n";
        $user           =   new User;
        $user->name     =   'Super Admin';
        $user->email    =   'superadmin@gmail.com';
        $user->password =   Hash::make('12345678');
        $user->save();
        echo "------User Added-------"."\n";
        echo '------------------------------------'."\n";
        echo "------Assing to User Role=>$user->email-------"."\n";

        $user->assignRole('Super Admin');
        echo "------Assin Role is=>Super Admin-------"."\n";
        echo "---------------Done----------------"."\n";

    }
}
