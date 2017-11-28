@extends('layouts.app') @section('page_title') DashBoard @endsection @section('breadcrumb')
<li class="breadcrumb-item">
	<a href="javascript:void(0)">Home</a>
</li>
<li class="breadcrumb-item active">Create User</li>
@endsection @section('content')

<div class="card">
	<div class="card-header">
		<ul class="nav nav-tabs card-header-tabs">
			<li class="nav-item">
				<a class="nav-link " href="{{ route('users') }}">List</a>
			</li>
			<li class="nav-item">
				<a class="nav-link active" href="{{ route('users/add') }}">Create</a>
			</li>
		</ul>
	</div>
	<div class="card-body">
		@if ($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
			<p>{{ $error }}</p>
			@endforeach
		</div>
		@endif

		<form method="post" action="/users/add">
			{{ csrf_field() }}
			<div class="form-group">
				<label>Nama</label>
				<input type="text" name="name" class="form-control" placeholder="Masukkan Nama" value="{{ old('name') }}" required>
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" class="form-control" placeholder="Alamat Email" value="{{ old('email') }}" required>
			</div>
			<div class="form-group">
				<label>Alamat</label>
				<input type="text" name="address" class="form-control" placeholder="Alamat" value="{{ old('address') }}" required>
			</div>
			<div class="form-group">
				<label>No. Telp / HP </label>
				<input type="number" name="telp" class="form-control" placeholder="Nomor Telp / HP" value="{{ old('telp') }}" required>
			</div>

			<div class="form-group">
				<label>Password </label>
				<input type="password" name="password" class="form-control" placeholder="Password" required>
			</div>

			<div class="form-group">
				<label>Password Confirmation </label>
				<input type="password" name="password_confirmation" class="form-control" placeholder="Password" required>
			</div>

			<button type="submit" class="btn btn-primary"> Simpan </button>
		</form>
	</div>
</div>
@endsection @section('js') @endsection