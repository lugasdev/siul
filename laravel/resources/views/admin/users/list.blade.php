@extends('layouts.app')

@section('page_title') DashBoard @endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
    <li class="breadcrumb-item active">User List</li>
@endsection

@section('content')

<div class="card" >
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('users') }}">List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('users/add') }}">Create</a>
            </li>
        </ul>
    </div>
    {{--  <div class="card-header"> User List </div>  --}}
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <a href="/users/{{$user->id}}" class="btn btn-warning btn-sm" > Edit </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $users->links() }}
    </div>
</div>

@endsection

@section('js')
@endsection
