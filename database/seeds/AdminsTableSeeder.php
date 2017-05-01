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
            'name' => 'JiaNi',
            'email' => 'jiani@yahoo.com',
            'password' => bcrypt('123456'),
            'adminContact'=>'1234560',
            'adminFax' => '12245123',
            'adminRole' => 'Officer',
            'adminInstitution' => 'swinburne',
            'adminProgram' => 'Biotech',
            'adminAddress' => 'Swinburne',
            'permissionLevel' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('admins')->insert([
            'name' => 'JiaNi2',
            'email' => 'jiani2@yahoo.com',
            'password' => bcrypt('123456'),
            'adminContact'=>'12345602',
            'adminFax' => '1224512223',
            'adminRole' => 'Officer2',
            'adminInstitution' => 'swinburne',
            'adminProgram' => 'Biotech',
            'adminAddress' => 'Swinburne',
            'permissionLevel' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
