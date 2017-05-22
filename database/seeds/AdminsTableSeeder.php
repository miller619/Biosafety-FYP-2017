<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'Admin',
            'email' => 'ssbc.swinburne@gmail.com',
            'password' => bcrypt('123456'),
            'adminContact'=>'1234560',
            'adminFax' => '12245123',
            'adminRole' => 1,
            'adminInstitution' => 'swinburne',
            'adminAddress' => 'Swinburne',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('admins')->insert([
            'name' => 'admin2',
            'email' => 'ahamed_isteaque@yahoo.com',
            'password' => bcrypt('123456'),
            'adminContact'=>'12345602',
            'adminFax' => '1224512223',
            'adminRole' => 2,
            'adminInstitution' => 'swinburne',
            'adminAddress' => 'Swinburne',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
