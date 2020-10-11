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
            <li class="breadcrumb-item"><a href="#">Event</a></li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
        <!-- Custom tabs (Charts with tabs)-->
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
            <div class="card-title">
            Edit Event
            </div>
            </div><!-- /.card-header -->
            <div class="card-body">
            @if (session('sukses'))
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert">×</button>
					{{ session('sukses') }}
				</div>
				@elseif(session('error'))
				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert">×</button>
					{{ session('error') }}
				</div>
				@endif
            <form action="{{ route('UpdateEvent', $event->id) }}" method="POST">
					@csrf
					<div class="row">
						<div class="col-lg-12">
							<div class="form-group">
								<label>Judul</label>
								<input class="form-control" type="text" name="judul" id="judul" value="{{ $event->judul }}" required>
                                <input type="hidden" id="id" name="id" value="{{ $event->id }}">
							</div>	
						</div>
                        <div class="col-lg-6">
							<div class="form-group">
								<label>Jadwal Acara</label>
								<input class="form-control" type="date" name="jadwal_acara" id="jadwal_acara" required> <p class="text-sm text-danger">tanggal sebelumnya: {{ $event->jadwal_acara }}</p>
							</div>	
                        </div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>Lokasi</label>
								<input class="form-control" type="text" name="lokasi" id="lokasi" value="{{ $event->lokasi }}" required>
							</div>		
						</div>
						<div class="col-lg-12 col-12">
							<div class="float-right">
								<button type="submit" class="btn btn-sm btn-primary">Submit</button>
                                <a href="{{url('admin/event')}}" class="btn btn-sm btn-danger" data-dismiss="modal">Cancel</a>
							</div>	
						</div>
				</form>
            </div><!-- /.card-body -->
        </div>
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