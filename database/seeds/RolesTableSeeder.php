<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            "role" =>"SUPER_ADMIN",
            "description" =>"Administrator with all level access",
            "created_at" => date("Y-m-d H:i:s") ,
            "updated_at" => date("Y-m-d H:i:s")
        ]);

        DB::table('roles')->insert([
            "role" =>"ADMIN",
            "description" =>"Administrator with administative level access",
            "created_at" => date("Y-m-d H:i:s") ,
            "updated_at" => date("Y-m-d H:i:s")
        ]);
        DB::table('roles')->insert([
            "role" =>"EC",
            "description" =>"Administrator with Election level access",
            "created_at" => date("Y-m-d H:i:s") ,
            "updated_at" => date("Y-m-d H:i:s")
        ]);
    }
}
