<?php

use Illuminate\Database\Seeder;

class productsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('products')->insert([
	           'name' => 'BỘT SƯƠNG SÁO',
	          
	            'description' => 'Đây là một trong những thức ăn nhẹ siêu dễ làm cho các chị em' ,
	            'image'=> 'detail1.png',
	            'created_at'=>date('Y-m-d H:i:s'),
	      	    'updated_at'=>date('Y-m-d H:i:s'),
	           
	    ]);
              DB::table('products')->insert([
	           'name' => 'BỘT LÀM THẠCH',
	          
	            'description' => 'Đây là một trong những thức ăn nhẹ siêu dễ làm cho các chị em' ,
	            'image'=> 'detail2.png',
	            'created_at'=>date('Y-m-d H:i:s'),
	      	    'updated_at'=>date('Y-m-d H:i:s'),
	           
	    ]);
           	DB::table('products')->insert([
	           'name' => 'HỆ ỔN ĐỊNH KEM',
	          
	            'description' => 'Đây là một trong những thức ăn nhẹ siêu dễ làm cho các chị em' ,
	            'image'=> 'detail3.png',
	            'created_at'=>date('Y-m-d H:i:s'),
	      	    'updated_at'=>date('Y-m-d H:i:s'),
	           
	    ]);
           	DB::table('products')->insert([
	           'name' => 'MEN TỔNG HỢP',
	          
	            'description' => 'Đây là một trong những thức ăn nhẹ siêu dễ làm cho các chị em' ,
	            'image'=> 'detail4.png',
	            'created_at'=>date('Y-m-d H:i:s'),
	      	    'updated_at'=>date('Y-m-d H:i:s'),
	           
	    ]);           	
    }
}
