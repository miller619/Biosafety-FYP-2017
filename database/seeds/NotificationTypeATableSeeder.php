<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class NotificationTypeATableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notification_type_as')->insert([
            'material_type'=>'LMO',
            'item_name' => 'LMO1',
            'risk_level' => 'Low',
            'volume' => '100',
            'quantity' => '1',
            'notification_id'=>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('notification_type_as')->insert([
            'material_type'=>'LMO',
            'item_name' => 'LMO2',
            'risk_level' => 'high',
            'volume' => '1000',
            'quantity' => '10',
            'notification_id'=>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('notification_type_as')->insert([
            'material_type'=>'LMO',
            'item_name' => 'LMO3',
            'risk_level' => 'Medium',
            'volume' => '500',
            'quantity' => '5',
            'notification_id'=>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('notification_type_as')->insert([
            'material_type'=>'Biohazardous Material',
            'item_name' => 'LMO1',
            'risk_level' => 'Low',
            'volume' => '100',
            'quantity' => '1',
            'notification_id'=>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('notification_type_as')->insert([
            'material_type'=>'Biohazardous Material',
            'item_name' => 'LMO2',
            'risk_level' => 'high',
            'volume' => '1000',
            'quantity' => '10',
            'notification_id'=>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('notification_type_as')->insert([
            'material_type'=>'Biohazardous Material',
            'item_name' => 'LMO3',
            'risk_level' => 'Medium',
            'volume' => '500',
            'quantity' => '5',
            'notification_id'=>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('notification_type_as')->insert([
            'material_type'=>'Biohazardous Material',
            'item_name' => 'LMO1',
            'risk_level' => 'Low',
            'volume' => '100',
            'quantity' => '1',
            'notification_id'=>3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('notification_type_as')->insert([
            'material_type'=>'Biohazardous Material',
            'item_name' => 'LMO2',
            'risk_level' => 'high',
            'volume' => '1000',
            'quantity' => '10',
            'notification_id'=>3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('notification_type_as')->insert([
            'material_type'=>'Biohazardous Material',
            'item_name' => 'LMO3',
            'risk_level' => 'Medium',
            'volume' => '500',
            'quantity' => '5',
            'notification_id'=>3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('notification_type_as')->insert([
            'material_type'=>'Biohazardous Material',
            'item_name' => 'LMO4',
            'risk_level' => 'Low',
            'volume' => '100',
            'quantity' => '1',
            'notification_id'=>4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('notification_type_as')->insert([
            'material_type'=>'LMO',
            'item_name' => 'LMO5',
            'risk_level' => 'Low',
            'volume' => '100',
            'quantity' => '1',
            'notification_id'=>4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('notification_type_as')->insert([
            'material_type'=>'Biohazardous Material',
            'item_name' => 'LMO4',
            'risk_level' => 'Low',
            'volume' => '100',
            'quantity' => '1',
            'notification_id'=>5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('notification_type_as')->insert([
            'material_type'=>'Biohazardous Material',
            'item_name' => 'LMO5',
            'risk_level' => 'Low',
            'volume' => '100',
            'quantity' => '1',
            'notification_id'=>5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('notification_type_as')->insert([
            'material_type'=>'Biohazardous Material',
            'item_name' => 'LMO4',
            'risk_level' => 'Low',
            'volume' => '100',
            'quantity' => '1',
            'notification_id'=>5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('notification_type_as')->insert([
            'material_type'=>'Biohazardous Material',
            'item_name' => 'LMO5',
            'risk_level' => 'Low',
            'volume' => '100',
            'quantity' => '1',
            'notification_id'=>6,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('notification_type_as')->insert([
            'material_type'=>'Biohazardous Material',
            'item_name' => 'LMO6',
            'risk_level' => 'Low',
            'volume' => '100',
            'quantity' => '1',
            'notification_id'=>7,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('notification_type_as')->insert([
            'material_type'=>'Biohazardous Material',
            'item_name' => 'LMO6',
            'risk_level' => 'Low',
            'volume' => '100',
            'quantity' => '1',
            'notification_id'=>8,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('notification_type_as')->insert([
            'material_type'=>'Biohazardous Material',
            'item_name' => 'LMO6',
            'risk_level' => 'Low',
            'volume' => '100',
            'quantity' => '1',
            'notification_id'=>9,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
