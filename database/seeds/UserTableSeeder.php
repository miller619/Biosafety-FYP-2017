<?php

use Illuminate\Database\Seeder;

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
            'password' => '123456',
            'userContact'=>'1234560',
            'userFax' => '12245123',
            'userRole' => 'student',
            'userInstitution' => 'swinburne',
            'userProgram' => 'cs',
            'userAddress' => 'kenny'
        ]);
    }
}
