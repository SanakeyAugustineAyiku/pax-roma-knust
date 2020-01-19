<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
            "name" =>"Super Admin Default",
            "period" =>"2019/2020",
            "email" => "asanakey@yahoo.com",
            // "role_id" => $request->role_id,
            "password" => \Hash::make("password"),
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s")
        ]);
    }
}
