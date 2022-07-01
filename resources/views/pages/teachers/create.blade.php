@extends('layout.master')


@section('title')
    Eduker - Add Teacher
@endsection



@section('content')
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <div class="page-header">

                    <h1 class="page-title">Teachers Information</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Teachers</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Teachers Information</li>
                        </ol>
                    </div>

                </div>
            </div>



            <!-- row -->
            <div class="row">
                <div class="col-md-12 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">

                            @if (session()->has('error'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>{{ session()->get('error') }}</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">


                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <div class="col-xs-12">
                                <div class="col-md-12">
                                    <br>
                                    <form action="{{ route('teachers.store') }}" method="post">
                                        @csrf
                                        <div class="form-row">
                                            <div class="col">
                                                <label for="title">Email</label>
                                                <input type="email" name="Email" class="form-control">
                                                @error('Email')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col">
                                                <label for="title">Password</label>
                                                <input type="password" name="Password" class="form-control">
                                                @error('Password')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <br>


                                        <div class="form-row">
                                            <div class="col">
                                                <label for="title">Name </label>
                                                <input type="text" name="Name_ar" class="form-control">
                                                @error('Name_ar')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            
                                        </div>
                                        <br>
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label for="inputCity">Specializations</label>
                                                <select class="custom-select my-1 mr-sm-2" name="Specialization_id">
                                                    <option selected disabled>Specializations...
                                                    </option>
                                                    @foreach ($specializations as $specialization)
                                                        <option value="{{ $specialization->id }}">
                                                            {{ $specialization->Name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('Specialization_id')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group col">
                                                <label for="inputState">Gender</label>
                                                <select class="custom-select my-1 mr-sm-2" name="Gender_id">
                                                    <option selected disabled>Choose Gender...
                                                    </option>
                                                    @foreach ($genders as $gender)
                                                        <option value="{{ $gender->id }}">{{ $gender->Name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('Gender_id')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <br>

                                        <div class="form-row">
                                            <div class="col">
                                                <label for="title">Date</label>
                                                <div class='input-group date'>
                                                    <input type="date" class="form-control" type="text" id="datepicker-action"
                                                        name="Joining_Date" data-date-format="yyyy-mm-dd" required>
                                                </div>
                                                @error('Joining_Date')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <br>

                                        <div class="form-group">
                                            <label
                                                for="exampleFormControlTextarea1">Adress</label>
                                            <textarea class="form-control" name="Address" id="exampleFormControlTextarea1" rows="4"></textarea>
                                            @error('Address')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <button class="btn btn-success btn-sm nextBtn btn-lg pull-right"
                                            type="submit">Next</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row closed -->












        </div>
    </div>
@endsection
