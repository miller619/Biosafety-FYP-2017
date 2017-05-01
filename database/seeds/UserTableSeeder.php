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
            'email' => 'isteak@yahoo.com',
            'password' => bcrypt('123456'),
            'userContact'=>'1234560',
            'userFax' => '12245123',
            'userRole' => 'student',
            'userInstitution' => 'swinburne',
            'userProgram' => 'cs',
            'userAddress' => 'kenny',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('users')->insert([
            'name' => 'Madhwa',
            'email' => 'madhwa@yahoo.com',
            'password' => bcrypt('123456'),
            'userContact'=>'987654',
            'userFax' => '852147',
            'userRole' => 'student',
            'userInstitution' => 'swinburne',
            'userProgram' => 'cs',
            'userAddress' => 'tabuan',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        DB::table('users')->insert([
            'name' => 'Dulitha',
            'email' => 'dulitha@yahoo.com',
            'password' => bcrypt('123456'),
            'userContact'=>'963258',
            'userFax' => '852369',
            'userRole' => 'student',
            'userInstitution' => 'swinburne',
            'userProgram' => 'cs',
            'userAddress' => 'kenny',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
