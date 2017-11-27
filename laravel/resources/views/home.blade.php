@extends('layouts.app')

@section('page_title') DashBoard @endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
    <li class="breadcrumb-item active">Dash Board</li>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                {{ $id }} {{ $name }}
                You are logged in!
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
@endsection
