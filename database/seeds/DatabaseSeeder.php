<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $countries = DB::table('countries')->first();

        if(empty($countries))
        {
            $countries = file_get_contents("database/seeds/files/countries.json");

            DB::table('countries')->insert(json_decode($countries, true));
        }

        $states = DB::table('states')->first();

        if(empty($states))
        {
            $states    = file_get_contents("database/seeds/files/states.json");

            DB::table('states')->insert(json_decode($states, true));
        }

        $cities = DB::table('cities')->first();

        if(empty($cities))
        {
            $cities    = file_get_contents("database/seeds/files/cities.json");

            DB::table('cities')->insert(json_decode($cities, true));
        }   

        $sexes = DB::table('sexes')->first();

        if(empty($sexes))
        {
            $sexes    = file_get_contents("database/seeds/files/sexes.json");

            DB::table('sexes')->insert(json_decode($sexes, true));
        }          


        $admins = DB::table('admins')->first();

        if(empty($admins))
        {
            DB::table('admins')->insert([
                'boss'          => 1,
                'class'         => '1:0',
                'name'          => 'Administrador',
                'username'      => 'admin',
                'image'         => 'default.jpg',
                'email'         => 'admin@consilio.com.br',
                'password'      => bcrypt('123123'),
                'status'        => '1',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')
            ]);
        } 
    }
}
