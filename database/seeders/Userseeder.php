<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\Hash;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email','milon@gmail.com')->first();
        if(is_null($user)){
            $user = new User();
            $user->name = "Milon";
            $user->email = "milon@gmail.com";
            $user->password = Hash::make('123456789');
            $user->save();
        }
    }
}
