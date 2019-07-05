<?php

use Illuminate\Database\Seeder;

class slidesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slides')->insert([
            'image' => 'slide.png',
            'created_at'=>date('Y-m-d H:i:s'),
      	    'updated_at'=>date('Y-m-d H:i:s'),
           
        ]);
        DB::table('slides')->insert([
            'image' => 'slide.png',
            'created_at'=>date('Y-m-d H:i:s'),
      	    'updated_at'=>date('Y-m-d H:i:s'),
           
        ]);
        DB::table('slides')->insert([
            'image' => 'slide.png',
            'created_at'=>date('Y-m-d H:i:s'),
      	    'updated_at'=>date('Y-m-d H:i:s'),
           
        ]);
    }
}
