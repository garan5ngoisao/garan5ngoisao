@extends('admin.layout.index')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Quản Lý Khách Hàng
                        <small>Thêm Khách Hàng</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="{{'admin/khachhang/them'}}" method="POST" enctype="multipart/form-data">
                     
                    @csrf
                    @if(count($errors)>0)
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
                   <input type="hidden" name="_token" value="{{csrf_token()}}" placeholder="">
                         <div class="form-group">
                            <label>Tên Khách Hàng</label>
                            <input class="form-control" name="tenkh" placeholder="Nhập tên khách hàng..." />
                        </div>
                        <div class="form-group">
                            <label>Địa Chỉ</label>
                            <textarea class="form-control ckeditor" name="diachi" rows="3" placeholder="Nhập đia chỉ khách hàng..."></textarea>
                        </div>
                         <div class="form-group">
                            <label>Số Điện Thoại</label>
                            <input class="form-control" name="sodienthoai" placeholder="Nhập số điện thoại..." />
                        </div>
                         <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" name="email" placeholder="Nhập email..." />
                        </div>
                       
                        <button type="submit" class="btn btn-default">Thêm</button>
                        <button type="reset" class="btn btn-default">Tạo Mới</button>
                        <form>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
        <!-- /#page-wrapper -->
@endsection
