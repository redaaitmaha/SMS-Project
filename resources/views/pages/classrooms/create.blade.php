@extends('layout.master')


@section('title')
    Eduker - Classes
@endsection



@section('content')
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <div class="page-header">

                    <h1 class="page-title">Classes Liste</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Classes Liste</li>
                        </ol>
                    </div>

                </div>
            </div>

            <!-- ROW OPEN -->
            <div class="row  targetDiv" id="div1">

                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Add new class</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('classroom.store') }}" method="POST">
                                @csrf

                                <div class="row entry">
                                    <div class="col-xl-6 mb-3">
                                        <label for="validationCustom01">Class Name</label>
                                        <input type="text" name="Name_Class" class="form-control" id="validationCustom01"
                                            value="Mark" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-xl-6 mb-3">
                                        <div class="form-group">
                                            <label for="validationCustom04">Grade Name</label>
                                            <select value="grade_id" name="name" class="form-control select2"
                                                id="validationCustom04" required>
                                                <option selected disabled>Select Grade</option>

                                                @foreach ($grades as $grade)
                                                    <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                        <button type="button" class="btn btn-success btn-sm btn-add">
                                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                                        </button>
                                    </div>

                                </div>


                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            
@endsection
