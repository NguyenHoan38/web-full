<?php

use Illuminate\Database\Seeder;

class newsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
	           'tieude' => 'Thực phẩm hữu cơ có thực sự tốt',
	          
	            'mota' => 'Đây là một trong những thức ăn nhẹ siêu dễ làm cho các chị em. Chỉ cần hòa bột với một lượng nước vừa phải' ,
	            'noidung'=>'ffffffffffffffffffffffffffffzczzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz',
	            'hinh'=> 'news1.png',
	            'noibat' => 1,
	            'luotxem'=>0,
	            'created_at'=>date('Y-m-d H:i:s'),
	      	    'updated_at'=>date('Y-m-d H:i:s'),
	           
	    ]);
    }
}
