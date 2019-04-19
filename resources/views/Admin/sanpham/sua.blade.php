@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sửa
                    <small>Sản Phẩm</small>
                </h1>
            </div>
            <form action="admin/sanpham/sua/{{$sanpham->id}}" method="POST" enctype="multipart/form-data">
       <input type="hidden" name="_token" value="{{csrf_token()}}" placeholder="">
                @if(count($errors)>0)
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $er)
                        {{$er}}<br>
                        @endforeach
                    </div>
                    @endif
                    @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                    @endif
                    {{-- <input type="hidden" name="_token" value="{{csrf_token()}}" placeholder=""> --}}
                    <div class="form-group">
                        <label>Tên sản phẩm</label>
                        <input class="form-control" name="tensp" placeholder="Please Enter Name"  value="{{$sanpham->tensp}}" />
                    </div>
                    <div class="form-group" >
                        <form action="" method="POST">
                        <label>Tên danh mục</label>
                        <select class="form-control" name="tendanhmuc" >
                            @foreach($tendanhmuc as $tdm)
                                <option
                                @if($sanpham->id_danhmuc == $tdm->id_danhmuc)
                                    {{"selected"}}
                                @endif 
                                    value="{{$tdm->id_danhmuc}}">{{$tdm->name}}</option>
                            @endforeach
                        </select>
                    </div>
                       <div class="form-group">
                        <label>Giá sản phẩm</label>
                        <input class="form-control" name="giasp" placeholder="Please Enter Unit_price" value="{{$sanpham->giasp}}" />
                    </div>
                    <div class="form-group">
            
                        <label>Mô tả</label>
                        <textarea  name="mota" rows="3" id="demo" >
                            {{$sanpham->mota}}
                        </textarea>
                    </div>
                   
                    <div class="form-group">
                        <label>Hình sản phẩm</label>
                        <p>
                            <img width="400px" src="source/img/{{$sanpham->img}}" alt="">
                        </p>
                            <input type="file" class="form-control" name="img" placeholder="Please Enter hinh" />
                    </div>


                    <button type="submit" class="btn btn-default">Sua</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
        @endsection
