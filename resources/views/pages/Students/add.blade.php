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

            <!-- row -->
            <div class="row">
                <div class="col-md-12 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form method="post" action="{{ route('students.store') }}" autocomplete="off">
                                @csrf
                                <h6 style="font-family: 'Cairo', sans-serif;color: blue">
                                    Personal Information</h6><br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Student Name : <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="name_ar" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                         
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email: </label>
                                            <input type="email" name="email" class="form-control">
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Password:</label>
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="gender">Gender : <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control select2" name="gender_id">
                                                <option selected disabled>Choose...</option>
                                                @foreach ($Genders as $Gender)
                                                    <option value="{{ $Gender->id }}">{{ $Gender->Name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="nal_id">Nationality: <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control select2" name="nationalitie_id">
                                                <option selected disabled>Nationality...</option>
                                                @foreach ($nationals as $nal)
                                                    <option value="{{ $nal->id }}">{{ $nal->Name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Date :</label>
                                            <input class="form-control" type="date" id="datepicker-action"
                                                name="Date_Birth" data-date-format="yyyy-mm-dd">
                                        </div>
                                    </div>

                                </div>

                                <h6 style="font-family: 'Cairo', sans-serif;color: blue">
                                    Student Information</h6><br>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="Grade_id">Grade : <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control select2" name="Grade_id">
                                                <option selected disabled>Choose...</option>
                                                @foreach ($my_classes as $c)
                                                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="Classroom_id">Classe : <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control select2" name="Classroom_id">

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="section_id">Section : </label>
                                            <select class="form-control select2" name="section_id">

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="parent_id">Parent : <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control select2" name="parent_id">
                                                <option selected disabled>Choose...</option>
                                                @foreach ($parents as $parent)
                                                    <option value="{{ $parent->id }}">{{ $parent->Name_Father }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="academic_year">Academic Year : <span
                                                    class="text-danger">*</span></label>
                                            <select class="form-control select2" name="academic_year">
                                                <option selected disabled>Choose...</option>
                                                @php
                                                    $current_year = date('Y');
                                                @endphp
                                                @for ($year = $current_year; $year <= $current_year + 1; $year++)
                                                    <option value="{{ $year }}">{{ $year }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>
                                </div><br>
                                <button class="btn btn-success btn-sm nextBtn btn-lg pull-right"
                                    type="submit">Submit</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- row closed -->




        </div>
    </div>
    </div>

    <script>
        $(document).ready(function () {
            $('select[name="Grade_id"]').on('change', function () {
                var Grade_id = $(this).val();
                if (Grade_id) {
                    $.ajax({
                        url: "{{ URL::to('Get_classrooms') }}/" + Grade_id,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            $('select[name="Classroom_id"]').empty();
                            $.each(data, function (key, value) {
                                $('select[name="Classroom_id"]').append('<option selected disabled >Choose...</option>');
                                $('select[name="Classroom_id"]').append('<option value="' + key + '">' + value + '</option>');
                            });
                        },
                    });
                }
                else {
                    console.log('AJAX load did not work');
                }
            });
        });
    </script>   
    <script>
        $(document).ready(function () {
            $('select[name="Classroom_id"]').on('change', function () {
                var Classroom_id = $(this).val();
                if (Classroom_id) {
                    $.ajax({
                        url: "{{ URL::to('Get_Sections') }}/" + Classroom_id,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            $('select[name="section_id"]').empty();
                            $.each(data, function (key, value) {
                                $('select[name="section_id"]').append('<option value="' + key + '">' + value + '</option>');
                            });
                        },
                    });
                }
                else {
                    console.log('AJAX load did not work');
                }
            });
        });
    </script>
@endsection
