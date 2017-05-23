<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EDForm1TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('e_d_form1s')->insert([
            'Title' 			=> 	'Project1',
			'Project_summary'  	=> 	'Project test seed 1',
			'Possible_hazards'  =>	'no Possible Biohazards',
            'Building_No'  		=>	'Block B',		
			'Room_No'  			=>	'B605',
			'Containment_No'  	=>	'C1123',
			'Certificate_No'  	=>	'CF123',
			'name_of_officer'  	=> 	'Officer1',
			'name_lab_mngr'  	=>	'Labmanager1',
			'user_id'			=>	1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('e_d_form1s')->insert([
            'Title' => 'ProjectTwo',
			'Project_summary' => 'Project test seed Two',
			'Possible_hazards' => 'Two Possible Biohazards',
            'Building_No' => 'Block B',		
			'Room_No'  			=>	'B604',
			'Containment_No'  	=>	'C112233',
			'Certificate_No'  	=>	'CF112233',
			'name_of_officer'  	=> 	'Officer2',
			'name_lab_mngr'  	=>	'Labmanager2',
			'user_id'			=>	1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('e_d_form1s')->insert([
            'Title' 			=> 	'Project3',
			'Project_summary'  	=> 	'Project test seed 3',
			'Possible_hazards'  =>	'3 Possible Biohazards',
            'Building_No'  		=>	'Block B',		
			'Room_No'  			=>	'B603',
			'Containment_No'  	=>	'C111222333',
			'Certificate_No'  	=>	'CF111222333',
			'name_of_officer'  	=> 	'Officer23',
			'name_lab_mngr'  	=>	'Labmanager3',
			'user_id'			=>	1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('e_d_form1s')->insert([
            'Title' 			=> 	'Project1',
			'Project_summary'  	=> 	'Project test seed 1',
			'Possible_hazards'  =>	'no Possible Biohazards',
            'Building_No'  		=>	'Block B',		
			'Room_No'  			=>	'B605',
			'Containment_No'  	=>	'C1123',
			'Certificate_No'  	=>	'CF123',
			'name_of_officer'  	=> 	'Officer1',
			'name_lab_mngr'  	=>	'Labmanager1',
			'user_id'			=>	2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('e_d_form1s')->insert([
            'Title' 			=> 	'ProjectTwo',
			'Project_summary'  	=> 	'Project test seed Two',
			'Possible_hazards'  =>	'Two Possible Biohazards',
            'Building_No'  		=>	'Block B',		
			'Room_No'  			=>	'B604',
			'Containment_No'  	=>	'C112233',
			'Certificate_No'  	=>	'CF112233',
			'name_of_officer'  	=> 	'Officer2',
			'name_lab_mngr'  	=>	'Labmanager2',
			'user_id'			=>	2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('e_d_form1s')->insert([
            'Title' 			=> 	'Project3',
			'Project_summary'  	=> 	'Project test seed 3',
			'Possible_hazards'  =>	'3 Possible Biohazards',
            'Building_No'  		=>	'Block B',		
			'Room_No'  			=>	'B603',
			'Containment_No'  	=>	'C111222333',
			'Certificate_No'  	=>	'CF111222333',
			'name_of_officer'  	=> 	'Officer3',
			'name_lab_mngr'  	=>	'Labmanager3',
			'user_id'			=>	2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('e_d_form1s')->insert([
            'Title' 			=> 	'Project1',
			'Project_summary'  	=> 	'Project test seed 1',
			'Possible_hazards'  =>	'no Possible Biohazards',
            'Building_No'  		=>	'Block B',		
			'Room_No'  			=>	'B605',
			'Containment_No'  	=>	'C1123',
			'Certificate_No'  	=>	'CF123',
			'name_of_officer'  	=> 	'Officer1',
			'name_lab_mngr'  	=>	'Labmanager1',
			'user_id'			=>	3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('e_d_form1s')->insert([
            'Title' 			=> 	'ProjectTwo',
			'Project_summary'  	=> 	'Project test seed Two',
			'Possible_hazards'  =>	'Two Possible Biohazards',
            'Building_No'  		=>	'Block B',		
			'Room_No'  			=>	'B604',
			'Containment_No'  	=>	'C112233',
			'Certificate_No'  	=>	'CF112233',
			'name_of_officer'  	=> 	'Officer2',
			'name_lab_mngr'  	=>	'Labmanager2',
			'user_id'			=>	3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('e_d_form1s')->insert([
            'Title' 			=> 	'Project3',
			'Project_summary'  	=> 	'Project test seed 3',
			'Possible_hazards'  =>	'3 Possible Biohazards',
            'Building_No'  		=>	'Block B',		
			'Room_No'  			=>	'B603',
			'Containment_No'  	=>	'C111222333',
			'Certificate_No'  	=>	'CF111222333',
			'name_of_officer'  	=> 	'Officer3',
			'name_lab_mngr'  	=>	'Labmanager3',	
			'user_id'			=>	3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
