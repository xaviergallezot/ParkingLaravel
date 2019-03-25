<?php

use Illuminate\Database\Seeder;

class PlacesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('places')->insert(
          array(
            array(
            'id'=>1,
            'Dispo_place'=>TRUE,
            'created_at'=>'2019-12-12 08:00:00',
            'updated_at'=>'2019-12-12 08:00:00'
          ),

            array(
              'id'=>2,
            'Dispo_place'=>TRUE,
            'created_at'=>'2019-12-12 01:00:00',
            'updated_at'=>'2019-12-12 01:00:00'
          ),
            array(
              'id'=>3,
            'Dispo_place'=>TRUE,
            'created_at'=>'2019-12-12 01:00:00',
            'updated_at'=>'2019-12-12 01:00:00'
          ),
            array(
              'id'=>4,
            'Dispo_place'=>TRUE,
            'created_at'=>'2019-12-12 01:00:00',
            'updated_at'=>'2019-12-12 01:00:00'
          ),
            array(
              'id'=>5,
            'Dispo_place'=>TRUE,
            'created_at'=>'2019-12-12 01:00:00',
            'updated_at'=>'2019-12-12 01:00:00'
          )
)

);




    }
}
