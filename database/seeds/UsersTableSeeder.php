<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //SEEDER de ma table users
        DB::table('users')->insert([
          'id'=>0,
          'name'=> 'Jean',
          'first_name'=> 'Valjean',
          'droit'=>2,
          'city'=> 'Versailles',
          'cp'=> '75018',
          'password'=>bcrypt('secret'),
          'email'=>'JeanValjean@gmail.com',
          'rang'=>2,
          'created_at'=>'2019-12-12 08:00:00',
          'updated_at'=>'2019-12-12 08:00:00'


        ]);
    }
}
