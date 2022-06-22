@extends('layout.master')


@section('title')
    Eduker - Grades
@endsection


@section('content')
    <div class="main-container container-fluid">
        <div class="side-app">
             
            <div class="page-header">
                <h1 class="page-title">Dashboard 01</h1>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard 01</li>
                    </ol>
                </div>
            </div>

            <div class="row" style="margin-top: 5rem;">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Laravel 8 CRUD Example from scratch - laravelcode.com</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('posts.create') }}"> Create New Post</a>
                    </div>
                </div>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($data as $key => $value)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $value->title }}</td>
                        <td>{{ \Str::limit($value->description, 100) }}</td>
                        <td>
                            <form action="{{ route('posts.destroy', $value->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('posts.show', $value->id) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('posts.edit', $value->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
            {!! $data->links() !!}




        </div>
    </div>
@endsection
