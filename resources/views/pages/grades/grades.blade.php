@extends('layout.master')


@section('title')
    Eduker - Grades
@endsection


@section('content')


    <div id="app">

        <div class="page-header">
            <h1 class="page-title">School Grades </h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Grades </li>
                </ol>
            </div>
        </div>

        <!----------------------Grades Table -------------------------->

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


                <!-- Inout modal -->
                <div class="modal fade" id="input-modal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content modal-content-demo">
                            <div class="modal-header">
                                <h6 class="modal-title">Add Grade</h6>
                                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('grades.store') }}" method="post">
                                    @csrf

                                    <div class="mb-3">
                                        <label for="name" class="col-form-label">Grade Name :</label>
                                        <input id="name" name="name" type="text" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="notes" class="col-form-label">Notes :</label>
                                        <textarea class="form-control" name="notes" id="notes" type="text"></textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn ripple btn-success" type="submit">Save changes</button>
                                        <button class="btn ripple btn-danger" data-bs-dismiss="modal"
                                            type="button">Close</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Datepicker modal -->


                <div class="card-body">
                    <button type="button" class="btn btn-green me-3  mt-2" data-bs-toggle="modal"
                        data-bs-target="#input-modal" data-bs-whatever="@mdo">Add Grade</button>
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

                                @if ($grades->count())
                                    @foreach ($grades as $grade)
                                        <tr>
                                            <td>{{ $grade->id }}</td>
                                            <td>{{ $grade->name }}</td>
                                            <td>{{ $grade->notes }}</td>
                                            <td name="bstable-actions">
                                                <div class="btn-list">
                                                    <button type="button" class="btn btn-sm btn-primary"
                                                        data-bs-toggle="modal" data-bs-target="#edit{{ $grade->id }}">
                                                        <span class="fe fe-edit"> </span>
                                                    </button>


                                                    <form action="{{ route('grades.destroy', $grade->id) }}"
                                                        method="post">
                                                        @method('DELETE')
                                                        @csrf

                                                        <button id="bDel" type="button"
                                                            class="btn  btn-sm btn-danger">
                                                            <span class="fe fe-trash-2"> </span>
                                                        </button>
                                                    </form>


                                                    <button id="bAcep" type="button" class="btn  btn-sm btn-primary"
                                                        style="display:none;">
                                                        <span class="fe fe-check-circle"> </span>
                                                    </button>
                                                    <button id="bCanc" type="button" class="btn  btn-sm btn-danger"
                                                        style="display:none;">
                                                        <span class="fe fe-x-circle"> </span>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- Edit  modal -->
                                        <div class="modal fade" id="edit{{ $grade->id }}" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content modal-content-demo">
                                                    <div class="modal-header">
                                                        <h6 class="modal-title">edit Grade</h6>
                                                        <button class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('grades.update', $grade->id) }}"
                                                            method="POST">

                                                            @csrf

                                                            @method('PUT')

                                                            <div class="mb-3">
                                                                <label for="name" class="col-form-label">Grade Name
                                                                    :</label>
                                                                <input id="name" name="name" type="text"
                                                                    class="form-control" value="{{ $grade->name }}"
                                                                    required>

                                                                <input id="id" type="" name="id"
                                                                    type="text" class="form-control"
                                                                    value="{{ $grade->id }}">

                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="notes" class="col-form-label">Notes
                                                                    :</label>
                                                                <textarea class="form-control" name="notes" id="notes" type="text">{{ $grade->notes }}</textarea>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button class="btn ripple btn-success" type="submit">Save
                                                                    changes</button>
                                                                <button class="btn ripple btn-danger"
                                                                    data-bs-dismiss="modal" type="button">Close</button>
                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="4"> No record found </td>
                                    </tr>
                                @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>






    </div>







@include('sweetalert::alert')

@endsection
