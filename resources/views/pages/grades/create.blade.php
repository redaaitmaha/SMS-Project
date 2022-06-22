@extends('layout.master')


@section('title')
    Eduker - Grades
@endsection



@section('content')
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <div class="page-header">
                    <h1 class="page-title">Create</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Grades Liste</li>
                        </ol>
                    </div>
                    <h1>
                    </h1>
                </div>
            </div>
            {{-- <a class="btn btn-success" href="{{ route('grades.create') }}"> Create New
                Product</a> --}}
            <div class="row">
                <div class="col-md-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Add New Grade :</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('grades.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <div class="form-floating">
                                                <input type="text" name="name" class="form-control" id="floatingInput"
                                                    placeholder="Name">
                                                <label for="floatingInput">Grade Name</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-floating floating-label1">
                                                <textarea name="notes" class="form-control" placeholder="Notes" id="floatingTextarea2" style="height: 100px"></textarea>
                                                <label for="floatingTextarea2">Notes </label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
