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
                <div class="row">
                    <div class="col-md-12 mb-30">
                        <div class="card card-statistics h-100">
                            <div class="card-body">
                                <div class="col-xl-12 mb-30">
                                    <div class="card card-statistics h-100">
                                        <div class="card-body">
                                            <a href="{{ route('students.create') }}" class="btn btn-success btn-sm"
                                                role="button"
                                                aria-pressed="true">Add Student</a><br><br>
                                            <div class="table-responsive">
                                                <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                                    data-page-length="50" style="text-align: center">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Name </th>
                                                            <th>Email</th>
                                                            <th>Gender</th>
                                                            <th>Grade</th>
                                                            <th>Classe</th>
                                                            <th>Section</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($students as $student)
                                                            <tr>
                                                                <td>{{ $loop->index + 1 }}</td>
                                                                <td>{{ $student->name }}</td>
                                                                <td>{{ $student->email }}</td>
                                                                <td>{{ $student->gender->Name }}</td>
                                                                <td>{{ $student->grade->name }} </td>
                                                                <td>{{ $student->classroom->Name_Class }}</td>
                                                                <td>{{ $student->section->Name_Section }}</td>
                                                                <td>
                                                                    <a href="{{ route('students.edit', $student->id) }}"
                                                                        class="btn btn-info btn-sm" role="button"
                                                                        aria-pressed="true"><i class="fa fa-edit"></i></a>
                                                                    <button type="button" class="btn btn-danger btn-sm"
                                                                        data-toggle="modal"
                                                                        data-target="#Delete_Student{{ $student->id }}"
                                                                        title="{{ trans('Grades_trans.Delete') }}"><i
                                                                            class="fa fa-trash"></i></button>
                                                                    <a href="#" class="btn btn-warning btn-sm"
                                                                        role="button" aria-pressed="true"><i
                                                                            class="far fa-eye"></i></a>
                                                                </td>
                                                            </tr>
                                                            {{-- @include('pages.Students.Delete') --}}
                                                        @endforeach
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row closed -->



            </div>
        </div>
    </div>
@endsection
