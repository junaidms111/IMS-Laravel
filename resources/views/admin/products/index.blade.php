<
@extends('layouts.admin')
@section('admin-content')

<div class="row">
        <div class="col-lg-6">
            <h1 class="page-header">
                Categories
            </h1>
        </div>
        <div class="col-lg-6">
            <h1 class="page-header  text-right">
                <a href="{{ route('categories.create') }}" class="btn btn-primary">Add New Category</a>
            </h1>
        </div>
    </div>

@endsection