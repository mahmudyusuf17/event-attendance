@extends('layout.master')
@section('title', 'Event')
@section('content')
<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0 text-dark">Event</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Event</li>
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
            Daftar Event
            </div>
            <div class="ml-auto">
            <button class="btn btn-primary float-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus" aria-hidden="true"></i> Add Event</button>
            </div>
            </div><!-- /.card-header -->
            <div class="card-body">
            <table class="table table-bordered text-center" id="myTable">
            <thead>
                <th>No.</th>
                <th>Event</th>
                <th>Jadwal Event</th>
                <th>Lokasi</th>
                <th>Aksi</th>
            </thead>
            @php
            $i=0;
            @endphp
            @foreach($event as $key)
            <tbody>
                <td>{{ ++$i}}</td>
                <td>{{ $key->judul }}</td>
                <td>{{ $key->jadwal_acara }}</td>
                <td>{{ $key->lokasi }}</td>
                <td>
                    <a class="btn btn-success btn-sm" href="{{ url('admin/event/edit',$key->id )}}"><i class="fas fa-pencil-alt"></i></a>
                    <form action="{{ route('DeleteEvent',$key->id) }}"  method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm mt-2"  onclick="return confirm('Yakin Data Mau Dihapus??');"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
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
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-primary" id="exampleModalLabel">Create Event</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{ route('AddEvent') }}" method="POST">
					@csrf
					<div class="row">
						<div class="col-lg-12">
							<div class="form-group">
								<label>Judul</label>
								<input class="form-control" type="text" name="judul" id="judul" required>
							</div>	
						</div>
                        <div class="col-lg-6">
							<div class="form-group">
								<label>Jadwal Acara</label>
								<input class="form-control" type="date" name="jadwal_acara" id="jadwal_acara" required>
							</div>	
                        </div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>Lokasi</label>
								<input class="form-control" type="text" name="lokasi" id="lokasi" required>
							</div>		
						</div>
						<div class="col-lg-12 col-12">
							<div class="float-right">
								<button type="submit" class="btn btn-sm btn-primary">Submit</button>
                                <button type="submit" class="btn btn-sm btn-danger" data-dismiss="modal">Cancel</button>
							</div>	
						</div>
				</form>
			</div>
		</div>
	</div>
</div>
    @endsection