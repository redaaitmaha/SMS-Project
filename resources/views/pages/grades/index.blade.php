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

                    <h1 class="page-title">Grades Liste</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Grades Liste</li>
                        </ol>
                    </div>

                </div>
            </div>

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Grades Table</h3>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif





                    <div class="card-body">

                        <a class="btn btn-success" href="{{ route('grades.create') }}"> Create New Product</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered border text-nowrap mb-0" id="basic-edit">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>grade name</th>
                                        <th>notes</th>
                                        <th name="bstable-actions">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($grades as $grade)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $grade->name }}</td>
                                            <td>{{ $grade->notes }}</td>
                                            <td name="bstable-actions">
                                                <div class="btn-list">


                                                    <form action="{{ route('grades.destroy', $grade->id) }}"
                                                        method="POST">

                                                        <a class="btn btn-primary"
                                                            href="{{ route('grades.edit', $grade->id) }}"><span
                                                                class="fe fe-edit"> </span></a>


                                                        @csrf
                                                        @method('DELETE')

                                                        <button id="bDel" type="submit" class="btn  btn-danger">
                                                            <span class="fe fe-trash-2"> </span>
                                                        </button>

                                                    </form>





                                                </div>
                                            </td>
                                        </tr>

                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
