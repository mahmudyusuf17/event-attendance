@extends('layout.master')
@section('title', 'Attendance')
@section('content')
<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Attendance</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Attendance</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
        <!-- Custom tabs (Charts with tabs)-->
        <div class="card">
            <div class="card-header">
            <div class="card-title">
            Daftar Kehadiran
            </div>
            </div><!-- /.card-header -->
            <div class="card-body">
            <table class="table table-bordered" id="myTable">
            <thead>
                <th>No.</th>
                <th>Nama</th>
                <th>Event</th>
                <th>Status Kehadiran</th>
                <th>Waktu Kehadiran</th>
            </thead>
            @php
            $i = 0;
            @endphp
            @foreach($attendance as $key)
            <tbody>
                <td>{{++$i}}</td>
                <td>{{ $key->name }}</td>
                <td>{{ $key->event }}</td>
                <td>
                @if($key->status === "hadir")
                <span class="badge badge-success">Hadir</span>
                @elseif($key->status === "tidak hadir")
                <span class="badge badge-danger">Tidak Hadir</span>
                @endif
                </td>
                <td>{{ $key->created_at }}</td>
            </tbody>
            @endforeach
            </table>
            </div><!-- /.card-body -->
        </div>
        <!-- /.card -->
        <!-- /.card -->
        </section>
        <!-- /.Left col -->
        <!-- right col -->
    </div>
    <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
    @endsection