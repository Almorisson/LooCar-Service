<?php

use Illuminate\Database\Seeder;
use App\Model\Users;
use Illuminate\Support\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Users::create([
            'name' => 'Admin NIMDA',
            'email' => 'root@admin.com',
            'password' => bcrypt('adminnimda'),
            'user_category' => 1,
            'password_confirmation' => bcrypt('adminnimda'),
            'email_verified_at' => Carbon::now()
        ]);


        Users::create([
            'name' => 'Mountakha TALLA',
            'email' => 'mountakha@gmail.com',
            'password' => bcrypt('takha12'),
            'user_category' => 0,
            'password_confirmation' => bcrypt('takha12'),
            'email_verified_at' => Carbon::now()
        ]);
    }
}
