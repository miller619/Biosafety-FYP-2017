<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Isteak Ahamed',
            'email' => 'hailstone19@gmail.com',
            'password' => bcrypt('123456'),
            'userContact'=>'1234560',
            'userFax' => '12245123',
            'userDesignation' => 'student',
            'userInstitution' => 'swinburne',
            'userInstitutionID' => '432574',
            'userFaculty' => 'cs',
            'userAddress' => 'kenny',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('users')->insert([
            'name' => 'Madhawa',
            'email' => 'madhawaudawatta@gmail.com',
            'password' => bcrypt('123456'),
            'userContact'=>'987654',
            'userFax' => '852147',
            'userDesignation' => 'student',
            'userInstitution' => 'swinburne',
            'userInstitutionID' => '437574',
            'userFaculty' => 'cs',
            'userAddress' => 'tabuan',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('users')->insert([
            'name' => 'Dulitha',
            'email' => 'dulitha60@hotmail.com',
            'password' => bcrypt('123456'),
            'userContact'=>'963258',
            'userFax' => '852369',
            'userDesignation' => 'student',
            'userInstitution' => 'swinburne',
            'userInstitutionID' => '432594',
            'userFaculty' => 'cs',
            'userAddress' => 'kenny',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
