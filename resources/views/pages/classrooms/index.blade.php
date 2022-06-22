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

            <div class="content-body">
                <section id="form-repeater-wrapper">
                    <!-- form default repeater -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        Repeating Forms
                                    </h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form repeater-default">
                                            <div data-repeater-list="group-a">
                                                <div data-repeater-item>
                                                    <div class="row justify-content-between">
                                                        <div class="col-md-2 col-sm-12 form-group">
                                                            <label for="Email">Email </label>
                                                            <input type="email" class="form-control" id="Email"
                                                                placeholder="Enter email id">
                                                        </div>
                                                        <div class="col-md-2 col-sm-12 form-group">
                                                            <label for="password">password</label>
                                                            <input type="password" class="form-control" id="password"
                                                                placeholder="Enter Password">
                                                        </div>
                                                        <div class="col-md-2 col-sm-12 form-group">
                                                            <label for="gender">Gender</label>
                                                            <select name="gender" id="gender" class="form-control">
                                                                <option value="Male">Male</option>
                                                                <option value="Female">female</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-2 col-sm-12 form-group">
                                                            <label for="Profession">Profession</label>
                                                            <select name="profession" id="Profession" class="form-control">
                                                                <option value="FontEnd Developer">Designer</option>
                                                                <option value="BackEnd Developer">Developer</option>
                                                                <option value="Bussiness Analystic">Tester</option>
                                                                <option value="Project Cordinator">Manager</option>
                                                            </select>
                                                        </div>
                                                        <div
                                                            class="col-md-2 col-sm-12 form-group d-flex align-items-center pt-2">
                                                            <button class="btn btn-danger text-nowrap px-1"
                                                                data-repeater-delete type="button"> <i class="bx bx-x"></i>
                                                                Delete
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col p-0">
                                                    <button class="btn btn-primary" data-repeater-create type="button"><i
                                                            class="bx bx-plus"></i>
                                                        Add
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ form default repeater -->
                </section>


            </div>

        </div>

    </div>
    
@endsection
