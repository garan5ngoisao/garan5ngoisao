@extends('admin.layout.index')
@section('content')
    <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Quan ly 
                            <small>Ga ran</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>masp</th>
                                <th>tensp</th>
                                <th>giasp</th>
                                <th>mota</th>
                                <th>id_danhmuc</th>
                                <th>img</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sp as $sanpham)
                                <tr class="odd gradeX" align="center">
                                    <th>{{$sanpham->masp}}</th>
                                    <th>{{$sanpham->tensp}}</th>
                                    <th>{{$sanpham->giasp}}</th>
                                    <th>{{$sanpham->mota}}</th>
                                    <th>{{$sanpham->id_danhmuc}}</th>
                                    <th><img width="200" height="150" src="source/img/{{$sanpham->img}}" alt=""></th>
                         
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/sanpham/xoa/{{$sanpham->masp}}"> Delete</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin.sanpham.sua">Edit</a></td>
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
