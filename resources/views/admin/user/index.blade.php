@extends('admin.app')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><b>Data User</b></h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-wrap justify-content-center justify-content-xl-between">
            <div class="mb-2">
                <a href="" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Tambah Data</a>
            </div>
            <div class="">
                <a href="" class="btn btn-sm btn-success"><i class="fas fa-file-excel"></i> Excel</a>
                <a href="" class="btn btn-sm btn-danger"><i class="fas fa-file-excel"></i> PDF</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Status</th>
                            <th><i class="fas fa-cog"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Donna Snider</td>
                            <td class="text-center">
                                <span class="badge badge-info badge-pill">Admin</span>
                            </td>
                            <td class="text-center">
                                <span class="badge badge-danger badge-pill">Belum Ditugaskan</span>
                            </td>
                            <td class="text-center">
                                <a href="#" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid --> 
@endsection