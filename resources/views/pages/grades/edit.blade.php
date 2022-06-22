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


            <div class="row">
                <div class="col-md-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit Grade :</h3>
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('grades.index') }}"> Back</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('grades.update', $grade->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <div class="form-floating">
                                                <input type="text" name="name" value="{{ $grade->name }}"
                                                    class="form-control" id="floatingInput" placeholder="Name">
                                                <label for="floatingInput">Grade Name</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-floating floating-label1">
                                                <textarea name="notes" class="form-control" placeholder="Notes" id="floatingTextarea2" style="height: 100px">{{ $grade->notes }}</textarea>
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
