<?php

use Illuminate\Database\Seeder;

class TrademarksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                DB::table('trademarks')->insert([
	           'tieude' => '<p class="Title">CÂU CHUYỆN<br> <span>của Dr.Food</span></p>',
	            'image'=> 'sp.png',
	            'mota' => ' <h3> QUY TRÌNH <span>NGHIÊM NGẶT</span> <br>
                TẠO HƯƠNG VỊ <span>ĐỈNH CAO</span>
              </h3>' ,
	            'noidung'=>'<p style="font-size: 18px;color: #333;">Đây là một trong những thức ăn nhẹ siêu dễ làm cho các chị em. Chỉ cần hòa bột với một lượng nước vừa phải rồi khuấy đều trong khi đun hỗn hợp. Để nguội tầm 1-2 tiếng để thạch đông lại, các bạn hãy dùng cùng một chút cốt dừa hoặc sữa đặc, mật ong để thạch có vị ngọt và ngậy hơn nhé. </p>
          			<p class="advantages"><i class="fas fa-check"></i>Đây là một trong những thứ dễ làm cho các chị em</p>
          			<p class="advantages"><i class="fas fa-check"></i>Chỉ cần hòa bột với một lượng nước vừa phải rồi khuấy đều trong khi đun hỗn hợp.</p>
         			 <p class="advantages pa"><i class="fas fa-check" ></i>Thạch sương sáo rất tốt cho hệ tiêu hóa, huyết áp cao và tiểu đường.</p>',
	           'tieude_en' => '<p class="Title">CÂU CHUYỆN<br> <span>của Dr.Food</span></p>',
	          
	            'mota_en' => ' <h3> QUY TRÌNH <span>NGHIÊM NGẶT</span> <br>
                TẠO HƯƠNG VỊ <span>ĐỈNH CAO</span>
              </h3>' ,
	            'noidung_en'=>'<p style="font-size: 18px;color: #333;">Đây là một trong những thức ăn nhẹ siêu dễ làm cho các chị em. Chỉ cần hòa bột với một lượng nước vừa phải rồi khuấy đều trong khi đun hỗn hợp. Để nguội tầm 1-2 tiếng để thạch đông lại, các bạn hãy dùng cùng một chút cốt dừa hoặc sữa đặc, mật ong để thạch có vị ngọt và ngậy hơn nhé. </p>
          			<p class="advantages"><i class="fas fa-check"></i>Đây là một trong những thứ dễ làm cho các chị em</p>
          			<p class="advantages"><i class="fas fa-check"></i>Chỉ cần hòa bột với một lượng nước vừa phải rồi khuấy đều trong khi đun hỗn hợp.</p>
         			 <p class="advantages pa"><i class="fas fa-check" ></i>Thạch sương sáo rất tốt cho hệ tiêu hóa, huyết áp cao và tiểu đường.</p>', 

	            'created_at'=>date('Y-m-d H:i:s'),
	      	    'updated_at'=>date('Y-m-d H:i:s'),
	           
	    ]);
    }
}
