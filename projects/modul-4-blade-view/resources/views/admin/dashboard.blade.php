@extends('layouts.app')

@section('tittle', 'Admin Dashboard')

@section('content')
    <h2 class="mb-4">Admin Dashboard</h2>
    <div class="list-group">
        <a href="#" class="list-group-item-action">Manage Users</a>
        <a href="#" class="list-group-item-action">Site Setting</a>
        <a href="#" class="list-group-item-action">System Logs</a>
    </div>

@endsection