@extends('admin.layout.index')
@section('content')
    <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Quản lý  
                            <small>Gà rán</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>Mã sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá sản phẩm</th>
                                <th>Mô tả</th>
                                <th>Mã danh mục</th>
                                <th>Hình</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sp as $sanpham)
                            
                                <tr class="odd gradeX" align="center">
                                    <th>{{$sanpham->id}}</th>
                                    <th>{{$sanpham->tensp}}</th>
                                    <th>{{$sanpham->giasp}}</th>
                                    <th>{{$sanpham->mota}}</th>
                                    <th>{{$sanpham->id_danhmuc}}</th>
                                    <th><img width="200" height="150" src="source/img/{{$sanpham->img}}" alt=""></th>
                         
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/sanpham/xoa/{{$sanpham->id}}"> Delete</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/sanpham/sua/{{$sanpham->id}}">Edit</a></td>
                             </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection
