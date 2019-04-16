@extends('admin.layout.index')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Thêm
                        <small>Sản Phẩm</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="{{'admin/sanpham/them'}}" method="POST" enctype="multipart/form-data">
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
                            <label>Tên sản phẩm</label>
                            <input class="form-control" name="tensp" placeholder="Mời bạn nhập tên sản phẩm" />
                        </div>
                        <div class="form-group" >
                            <label>Tên danh mục</label>
                            <select class="form-control" name="id_danhmuc" id="">
                                @foreach($tendanhmuc as $tdm)
                                    <option value="{{$tdm->id_danhmuc}}">{{$tdm->name}}</option>
                                @endforeach
                            </select>
                        </div>
                         <div class="form-group">
                            <label>Giá sản phẩm</label>
                            <input class="form-control" name="giasp" placeholder="Mời bạn nhập giá" />
                        </div>
                        <div class="form-group">
                            <label>Mô tả</label>
                            <textarea  name="mota" rows="3" id="demo" placeholder="Mời bạn nhập mô tả"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Hình sản phẩm</label>
                            <input type="file" class="form-control" name="img"  />
                        </div>
                        <button type="submit" class="btn btn-default">Thêm</button>
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
