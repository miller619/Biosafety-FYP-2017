<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class EDFormB3TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('e_d_form_b3s')->insert([
            'name'=> 'Name1',
			'current_qualification'=> 'Qualification1',
			'department'=> 'Department1',
			'p_address'=> 'Address1',
			'tele'=> '0112557251',
			'fax'=> '0112557251',
			'email_address'=> 'Mad@yahoo.com',
			'ed_form_id'=> 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('e_d_form_b3s')->insert([
            'name'=> 'Name2',
			'current_qualification'=> 'Qualification2',
			'department'=> 'Department2',
			'p_address'=> 'Address2',
			'tele'=> '0222557252',
			'fax'=> '0222557252',
			'email_address'=> 'Mad@yahoo.com',
			'ed_form_id'=> 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('e_d_form_b3s')->insert([
            'name'=> 'Name3',
			'current_qualification'=> 'Qualification3',
			'department'=> 'Department3',
			'p_address'=> 'Address3',
			'tele'=> '0332557253',
			'fax'=> '0332557253',
			'email_address'=> 'Mad@yahoo.com',
			'ed_form_id'=> 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('e_d_form_b3s')->insert([
            'name'=> 'Name1',
			'current_qualification'=> 'Qualification1',
			'department'=> 'Department1',
			'p_address'=> 'Address1',
			'tele'=> '0112557251',
			'fax'=> '0112557251',
			'email_address'=> 'Mad@yahoo.com',
			'ed_form_id'=> 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('e_d_form_b3s')->insert([
            'name'=> 'Name2',
			'current_qualification'=> 'Qualification2',
			'department'=> 'Department2',
			'p_address'=> 'Address2',
			'tele'=> '0222557252',
			'fax'=> '0222557252',
			'email_address'=> 'Mad@yahoo.com',
			'ed_form_id'=> 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('e_d_form_b3s')->insert([
            'name'=> 'Name3',
			'current_qualification'=> 'Qualification3',
			'department'=> 'Department3',
			'p_address'=> 'Address3',
			'tele'=> '0332557253',
			'fax'=> '0332557253',
			'email_address'=> 'Mad@yahoo.com',
			'ed_form_id'=> 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('e_d_form_b3s')->insert([
            'name'=> 'Name1',
			'current_qualification'=> 'Qualification1',
			'department'=> 'Department1',
			'p_address'=> 'Address1',
			'tele'=> '0112557251',
			'fax'=> '0112557251',
			'email_address'=> 'Mad@yahoo.com',
			'ed_form_id'=> 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('e_d_form_b3s')->insert([
            'name'=> 'Name2',
			'current_qualification'=> 'Qualification2',
			'department'=> 'Department2',
			'p_address'=> 'Address2',
			'tele'=> '0222557252',
			'fax'=> '0222557252',
			'email_address'=> 'Mad@yahoo.com',
			'ed_form_id'=> 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('e_d_form_b3s')->insert([
            'name'=> 'Name3',
			'current_qualification'=> 'Qualification3',
			'department'=> 'Department3',
			'p_address'=> 'Address3',
			'tele'=> '0332557253',
			'fax'=> '0332557253',
			'email_address'=> 'Mad@yahoo.com',
			'ed_form_id'=> 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
