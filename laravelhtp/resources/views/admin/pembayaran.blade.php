@extends('admin.layouts.index')

@section('content')
    
   
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Verifikasi Pembayaran</h4>

        <!-- Basic Bootstrap Table -->
        <div class="card">
            <h5 class="card-header">Table Basic</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Action</th>    
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Miralani</strong>
                            </td>
                            <td>laniwambuliga@gmail.com</td>   
                            <td><span class="badge bg-label-primary me-1">lunas</span></td>
                            
                            <td>
                                <a href="{{ url("admin/pembayarandetail") }}" class="btn btn-primary">Cek</a>
                                <a href="" class="btn btn-warning">Hapus</a>
                            </td>
                        </tr>
                       
                  
                           
                    </tbody>
                </table>
            </div>
        </div>




@endsection