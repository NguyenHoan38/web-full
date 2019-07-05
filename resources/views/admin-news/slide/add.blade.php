@extends('layouts.admin')
@section('content')
	    <div class="content-wrapper">
                        <style>
    /*=== SEO ===*/
    .seo {
        margin-top: 30px;
    }
    #seo, #read {
        border: 1px solid #ddd;
        padding: 15px;
        font-family: arial;
        background: #fdfdfd;
    }
    .seo_main > ul {
        border-bottom-color: #fff;
        margin-bottom: -1px;
    }
    .seo_main > ul li a {
        border: 1px solid #ddd;
        border-radius: 0;
        margin-right: 5px;
        position: relative;
        display: flex;
        align-items: center;
        color: #333;
    }
    .seo_main > ul li a:hover {
        color: #00a0d2;
        background: none;
        border-color:  #ddd;
    }
    .seo_main > ul li a:before {
        content: "";
        width: 10px;
        height: 10px;
        background: #888;
        display: block;
        border-radius: 100%;
        margin-right: 10px;
    }
    .seo_main > ul li:first-child a:before {
        background: #dc3232
    }
    .seo_main > ul li:first-child a{
        color: #0073aa;
    }
    .seo_main > ul li:last-child a {
        font-style: italic;
    }
    h3.snippet_title, .snippet_main_title {
        margin: 0 0 15px 0;
        font-size: 15px;
        font-family:  arial;
    }
    .snippet {
        box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
        padding: 15px;
        background: #fff;
    }
    .snippet_main {
        box-shadow:  0 1px 2px rgba(0, 0, 0, .2);
    }
    .snippet_support {
        display:  none;
    }
    h3.snippet_main_title {
        color:  #1e0fbe;
        font-size:  18px;
        margin-bottom:  10px;
        padding: 15px 15px 0;
    }
    .snippet_main_slug {
        padding: 0 15px 15px;
        color:  #006621;
    }
    .snippet_main_description {
        border-top: 1px solid #dfe1e5;
        padding: 15px;
    }
    .snippet_action {
        display:  flex;
        align-items:  center;
        margin: 20px 0 0;
    }
    .snippet_action > div {
        background:  #f7f7f7;
        border:  1px solid #dbdbdb;
        border-radius:  3px;
        display:  flex;
        align-items:  center;
        overflow:  hidden;
        cursor:  pointer;
    }
    .snippet_action_device > span {
        font-size: 19px;
        width: 34px;
        display: inline-flex;
        height: 34px;
        position:  relative;
        align-items:  center;
        justify-content:  center;
        cursor:  pointer;
    }
    .snippet_action_device > span:hover:after{
        opacity: 1;
        visibility: visible;
        background: #1e8cbe;
    }
    .snippet_action_device > span:hover{
        color: #1e8cbe;
    }
    .snippet_action_device > span.active:hover{
        color: #333;
    }
    .snippet_action_device > span.active:hover:after{
        background: #333;
    }
    .snippet_action_device > span:first-child {
        font-size: 24px;
    }
    .snippet_action_edit i {
        font-size: 19px;
        margin-right: 10px;
    }
    .snippet_action_edit {
        height: 36px;
        display:  flex;
        align-items:  center;
        padding:  0 10px;
        margin-left: 5px;
    }
    .snippet_action_device > span:after {
        content:  "";
        width:  100%;
        height:  3px;
        background:  #333;
        position:  absolute;
        bottom:  0;
        left:  0;
        opacity:  0;
        visibility:  hidden;
        transition:  all ease .3s;
    }
    .snippet_action_device > span.active:after {
        opacity:  1;
        visibility:  visible;
    }
    .snippet_config{
        display: none;
    }
    h3.snippet_config_item_title {
        font-size:  16px;
        font-family: arial;
    }
    span.snippet_config_item_bar {
        display:  block;
        height: 8px;
        width:  100%;
        margin-top: 10px;
        position:  relative;
    }
    span.snippet_config_item_bar:before {
        content:  "";
        height:  100%;
        position:  absolute;
        left:  0;
    }
    .snippet_config_close {
        display:  inline-block;
        border:  1px solid #dbdbdb;
        border-radius:  3px;
        margin-top:  20px;
        background:  #f7f7f7;
        padding: 10px;
        cursor:  pointer;
    }
    .focus_key, .analysis {
        background:  #fff;
        padding:  15px;
        margin-top:  20px;
        box-shadow:  0 1px 2px rgba(0, 0, 0, .2);
    }
    h3.focus_key_title, .analysis_title {
        font-family:  arial;
        font-size: 16px;
    }
    .focus_key > input {
        margin: 25px 0;
    }
    .focus_key > div:last-child{
        margin-left: 10px;
        display: inline-block;
    }
    .focus_key > div:last-child span{
        color: #0073aa;
        text-decoration: underline;
    }
    h4.analysis_box_title {
        font-family:  arial;
        font-size:  14px;
        color: #0066cd;
        margin: 0 0 10px;
    }
    .analysis_box_main {
        font-size:  14px;
    }
    .analysis_box {
        margin-top: 30px;
    }
    .analysis_box_item {
        position:  relative;
        padding-left: 20px;
        margin-bottom: 10px;
    }
    .analysis_box_item:before {
        content:  "";
        width:  10px;
        height:  10px;
        position: absolute;
        border-radius:  100%;
        left:  0;
        top: 6px;
    }
    #error .analysis_box_item:before {
        background: #dc3232;
    }
    #improve .analysis_box_item:before {
        background: #ee7c1b;
    }
    #good .analysis_box_item:before {
        background: #7ad03a;
    }
    h3.analysis_title {
        margin: 0;
    }
    .snippet_main.pc .snippet_main_description {
        border:  none;
        padding: 0;
    }
    .snippet_main.pc .snippet_main_title {
        margin-bottom:  5px;
        padding: 10px 0 0;
    }
    .snippet_main.pc .snippet_main_slug {
        padding: 0 0 5px;
    }
    .snippet_main.pc {
        box-shadow:  none;
    }
    /*=== End SEO ===*/
    .fade.active {
        opacity: 1;
    }
</style>
<section class="content-header">
    <h1>
        Thêm slide
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Trang Chủ</a></li>
        <li><a href="{{route('adminslide')}}"> Danh sách slide</a></li>
        <li class="active">Thêm mới</li>
    </ol>
</section>
<section class="content">
    <div class="box box-primary">
        <form action="{{route('addproduct')}}" method="POST" enctype="multipart/form-data" id="form-add-post" class="formcategory-add-insurance-company validate">
             @csrf
            <div class="box-header with-border">
                <h3 class="box-title">Thêm slide</h3>
            </div>
            

                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ảnh slide</label>
                            <input type="file" name="thumbnail" accept="image/*" class="form-control preview-upload-image"/>
                            <img src="http://admin.cmc.paditech.com/img/placeholder.jpg" alt="" class="preview-feature-image preview-image"/>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ngày tạo (mặc định là ngày hiện tại)</label>
                            <div class='input-group date'>
                                <input type='text' class="form-control" id='datetimepicker1' name="created_fake" value="03-07-2019 14:29" />
                                <label class="input-group-addon btn" for="date">
                                    <span class="fa fa-calendar open-datetimepicker"></span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tình trạng</label>
                            <select name="feature_status" class="form-control">
                                <option value="0" selected>Bình thường</option>
                                <option value="1" >Nổi bật<n>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <div class="row">
                   
                    <div class="col-md-6 text-right"><button type="submit" class="btn btn-primary">Thêm mới</button></div>
                    <div class="col-md-6 text-left"><a id="btnBack" href="{{route('adminslide')}}" class="btn btn-default">Hủy</a></div>
                </div>
            </div>
        </form>
    </div>
 </section>
        </div>
@endsection