@extends('admin.layout.index')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Cake
                        <small>Add</small>
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
                            <label> tensp</label>
                            <input class="form-control" name="tensp" placeholder="Please Enter Name" />
                        </div>
                        <div class="form-group" >
                            <label>Ten danh muc</label>
                            <select class="form-control" name="id_danhmuc" id="">
                                @foreach($tendanhmuc as $tdm)
                                    <option value="{{$tdm->id_danhmuc}}">{{$tdm->name}}</option>
                                @endforeach
                            </select>
                        </div>
                         <div class="form-group">
                            <label>Giasp</label>
                            <input class="form-control" name="giasp" placeholder="Please Enter Unit_price" />
                        </div>
                        <div class="form-group">
                            <label>mo ta</label>
                            <textarea class="form-control ckeditor" name="mota" rows="3" id="demo" ></textarea>
                        </div>
                        <div class="form-group">
                            <label>Hinh sp</label>
                            <input type="file" class="form-control" name="img" placeholder="Please Enter hinh" />
                        </div>
                        <button type="submit" class="btn btn-default">Add</button>
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
