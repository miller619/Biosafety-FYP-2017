<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class NotificationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notifications')->insert([
            'unit_code' => 'BIO30001',
            'unit_title' => 'Biotechnology',
            'storage_location' => 'Unimas',
            'keeper_name' => 'Yasir',
            'user_id'=>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('notifications')->insert([
            'unit_code' => 'BIO30001',
            'unit_title' => 'Biotechnology',
            'storage_location' => 'Unimas',
            'keeper_name' => 'Yasir',
            'user_id'=>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('notifications')->insert([
            'unit_code' => 'BIO30001',
            'unit_title' => 'Biotechnology',
            'storage_location' => 'Unimas',
            'keeper_name' => 'Yasir',
            'user_id'=>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('notifications')->insert([
            'unit_code' => 'BIO30002',
            'unit_title' => 'Advance',
            'storage_location' => 'Unimas',
            'keeper_name' => 'Yasir',
            'user_id'=>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('notifications')->insert([
            'unit_code' => 'BIO30002',
            'unit_title' => 'Advance',
            'storage_location' => 'Unimas',
            'keeper_name' => 'Yasir',
            'user_id'=>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('notifications')->insert([
            'unit_code' => 'BIO30002',
            'unit_title' => 'Advance',
            'storage_location' => 'Unimas',
            'keeper_name' => 'Yasir',
            'user_id'=>2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('notifications')->insert([
            'unit_code' => 'BIO30003',
            'unit_title' => 'Microbiology',
            'storage_location' => 'UITM',
            'keeper_name' => 'John',
            'user_id'=>3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('notifications')->insert([
            'unit_code' => 'BIO30003',
            'unit_title' => 'Microbiology',
            'storage_location' => 'UITM',
            'keeper_name' => 'John',
            'user_id'=>3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('notifications')->insert([
            'unit_code' => 'BIO30003',
            'unit_title' => 'Microbiology',
            'storage_location' => 'UITM',
            'keeper_name' => 'John',
            'user_id'=>3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
