@extends('admin.layout.index')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Quản Lý Khách Hàng
                        <small>Sửa Khách Hàng</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="admin/khachhang/sua/{{$khachhang->id}}" method="POST" enctype="multipart/form-data"> 
                
                    <input type="hidden" name="_token" value="{{csrf_token()}}" placeholder="">
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

                        <div class="form-group">
                            <label>Tên Khách Hàng</label>
                            <input class="form-control" name="tenkh" value="{{$khachhang->tenkh}}" placeholder="Please Enter Category Name" />
                        </div>
                        <div class="form-group">
                            <label>Địa Chỉ</label>
                            <textarea class="form-control ckeditor" value="" name="diachi" rows="3">
                                {{$khachhang->diachi}}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Số Điện Thoại</label>
                            <input class="form-control" name="sodienthoai" value="{{$khachhang->sodienthoai}}" placeholder="sdt" />
                        </div>
                        <div class="form-group">
                            
                            <label>Email</label>
                            <input class="form-control"  name="email" value="{{$khachhang->email}}" placeholder="email" />
                        </div>
                        
                        <button type="submit" class="btn btn-default">Sửa Lại</button>
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

