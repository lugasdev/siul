@extends('layouts.app')

@section('page_title') DashBoard @endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
    <li class="breadcrumb-item active">My Profile</li>
@endsection

@section('content')

<div class="card" >
    <div class="card-header"> My Profile </div>
    <div class="card-body">
        {{--  <h4 class="card-title">My Profile</h4>  --}}
        <form method="post" action="/users/profile">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="name" class="form-control" placeholder="Masukkan Nama" value="{{$user->name}}" required >
            </div>
            <div class="form-group">
                <label >Email</label>
                <input type="email" name="email" class="form-control"  placeholder="Alamat Email" value="{{$user->email}}" required >
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="address" class="form-control" placeholder="Alamat" value="{{$profile->address}}" required >
            </div>
            <div class="form-group">
                <label>No. Telp / HP </label>
                <input type="number" name="telp" class="form-control" placeholder="Nomor Telp / HP" value="{{ $profile->telp }}" required >
            </div>

            <button type="submit" class="btn btn-primary"> Simpan </button>
        </form>
    </div>
</div>

    {{--  <div class="col-12">
        <div class="card">
            <div class="card-block">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        Check me out
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>  --}}

@endsection

@section('js')
@endsection
