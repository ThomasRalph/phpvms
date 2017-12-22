@extends('admin.app')

@section('title', 'Users')
@section('actions')
    <li>
        <a href="{!! route('admin.users.create') !!}">
            <i class="ti-plus"></i>
            Add New</a>
    </li>
@endsection

@section('content')
    <div class="card">
        @include('admin.users.table')
    </div>

    <div class="row">
        <div class="col-12 text-center">
            {{ $users->links('admin.pagination.default') }}
        </div>
    </div>
@endsection

