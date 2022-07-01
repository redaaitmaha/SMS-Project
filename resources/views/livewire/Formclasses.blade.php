@extends('layout.master')


@section('title')
    Eduker - Add New Classe
@endsection



@section('content')
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <div class="page-header">

                    <h1 class="page-title">Classe Information</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Parents</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Classe Information</li>
                        </ol>
                    </div>

                </div>
            </div>

            @livewire('add-classes')




        </div>
    </div>
@endsection
