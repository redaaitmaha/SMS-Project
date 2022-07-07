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


            {{-- -----------------------------------------Tableauuuuuuu-------------------------------------- --}}

            <div class="card">

                <div class="card-header">
                    <h3 class="card-title">Accordion style</h3>
                </div>
                <div class="card-body">
                    @foreach ($Grades as $Grade)
                        <div class="panel-group1" id="accordion1">
                            <div class="panel panel-default mb-4">
                                <div class="panel-heading1 ">
                                    <h4 class="panel-title1">
                                        <a class="accordion-toggle collapsed" data-bs-toggle="collapse"
                                            data-bs-parent="#accordion" href="#collapseFour"
                                            aria-expanded="false">{{ $Grade->name }}</a>
                                    </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-expanded="false"
                                    style="">
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered border text-nowrap mb-0" id="basic-edit">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Section</th>
                                                        <th>Classe</th>
                                                        <th>Status</th>
                                                        <th name="bstable-actions">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 0; ?>
                                                    @foreach ($Grade->Sections as $list_Sections)
                                                        <tr>
                                                            <?php $i++; ?>
                                                            <td> {{ $i }} </td>
                                                            <td> {{ $list_Sections->Name_Section }} </td>
                                                            <td> {{ $list_Sections->My_classs->Name_Class }} </td>
                                                            <td>
                                                                @if ($list_Sections->Status === 1)
                                                                    <label
                                                                        class="badge rounded-pill bg-success-gradient badge-sm me-1 mb-1 mt-1">ACTIVE</label>
                                                                @else
                                                                    <label
                                                                        class="badge rounded-pill bg-danger-gradient badge-sm me-1 mb-1 mt-1">INACTIVE</label>
                                                                @endif
                                                            </td>
                                                            <td name="bstable-actions">
                                                                <div class="btn-list">
                                                                    <button data-bs-toggle="modal"
                                                                        data-bs-target="#edit{{ $list_Sections->id }}"
                                                                        id="bEdit" type="button"
                                                                        class="btn btn-sm btn-primary">
                                                                        <span class="fe fe-edit"> </span>
                                                                    </button>
                                                                    <button data-toggle="modal"
                                                                        data-target="#delete{{ $list_Sections->id }}"
                                                                        id="bDel" type="button"
                                                                        class="btn  btn-sm btn-danger">
                                                                        <span class="fe fe-trash-2"> </span>
                                                                    </button>
                                                                    {{-- <button id="bAcep" type="button"
                                                                        class="btn  btn-sm btn-primary"
                                                                        style="display:none;">
                                                                        <span class="fe fe-check-circle"> </span>
                                                                    </button>
                                                                    <button id="bCanc" type="button" 
                                                                        class="btn  btn-sm btn-danger"

                                                                        style="display:none;">
                                                                        <span class="fe fe-x-circle"> </span>
                                                                    </button> --}}
                                                                    {{-- <a href="#"
                                                                               class="btn btn-outline-info btn-sm"
                                                                               data-toggle="modal"
                                                                               data-target="#exampleModal{{ $list_Sections->id }}">Edit </a>
                                                                            <a href="#"
                                                                               class="btn btn-outline-danger btn-sm"
                                                                               data-toggle="modal"
                                                                               data-target="#delete{{ $list_Sections->id }}">Delete</a> --}}
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        {{-- ---------------------------------------Edit modal --------------------------------------- --}}

                                                        <div class="modal fade" id="edit{{ $list_Sections->id }}"
                                                            tabindex="-1" aria-labelledby="exampleModalLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Modal
                                                                            title</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form
                                                                            action="{{ route('sections.update', 'test') }}"
                                                                            method="POST">
                                                                            {{ method_field('patch') }}
                                                                            {{ csrf_field() }}
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <input type="text"
                                                                                        name="Name_Section_Ar"
                                                                                        class="form-control"
                                                                                        placeholder="Name"value="{{ $list_Sections->Name_Section }}">
                                                                                    <input id="id" type="hidden"
                                                                                        name="id" class="form-control"
                                                                                        value="{{ $list_Sections->id }}">

                                                                                </div>
                                                                            </div>
                                                                            <br>
                                                                            <div class="col">
                                                                                <label for="inputName"
                                                                                    class="form-label">Grade Name</label>
                                                                                <select name="grade_id"
                                                                                    class="form-control form-select"
                                                                                    onclick="console.log($(this).val())">
                                                                                    <!--placeholder-->
                                                                                    <option value="{{ $Grade->id }}">
                                                                                        {{ $Grade->name }}
                                                                                    </option>
                                                                                    @foreach ($list_Grades as $list_Grade)
                                                                                        <option
                                                                                            value="{{ $list_Grade->id }}">
                                                                                            {{ $list_Grade->name }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                            <br>

                                                                            <div class="col">
                                                                                <label for="inputName"
                                                                                    class="form-label">Classe Name</label>
                                                                                <select name="Class_id"
                                                                                    class="form-control form-select">
                                                                                    <option
                                                                                        value="{{ $list_Sections->My_classs->id }}">
                                                                                        {{ $list_Sections->My_classs->Name_Class }}
                                                                                    </option>

                                                                                </select>
                                                                            </div>

                                                                            <br>

                                                                            <div class="col">
                                                                                <div class="form-check">

                                                                                    @if ($list_Sections->Status === 1)
                                                                                        <input type="checkbox" checked
                                                                                            class="form-check-input"
                                                                                            name="Status"
                                                                                            id="exampleCheck1">
                                                                                    @else
                                                                                        <input type="checkbox"
                                                                                            class="form-check-input"
                                                                                            name="Status"
                                                                                            id="exampleCheck1">
                                                                                    @endif
                                                                                    <label class="form-check-label"
                                                                                        for="exampleCheck1">Status</label>
                                                                                </div>
                                                                            </div><br>

                                                                            <div class="col">
                                                                                <label for="inputName" class="control-label">Name Teacher</label>
                                                                                <select multiple name="teacher_id[]" class="form-control" id="exampleFormControlSelect2">
                                                                                    @foreach($list_Sections->teachers as $teacher)
                                                                                        <option selected value="{{$teacher['id']}}">{{$teacher['Name']}}</option>
                                                                                    @endforeach

                                                                                    @foreach($teachers as $teacher)
                                                                                        <option value="{{$teacher->id}}">{{$teacher->Name}}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>

                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Close</button>
                                                                                <button type="submit"
                                                                                    class="btn btn-primary">Save
                                                                                    changes</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>


                                                        <!-- delete_modal_Grade -->
                                                        <div class="modal fade" id="delete{{ $list_Sections->id }}"
                                                            tabindex="-1" aria-labelledby="exampleModalLabel"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                                            Modal
                                                                            title</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form
                                                                            action="{{ route('sections.destroy', 'test') }}"
                                                                            method="post">
                                                                            {{ method_field('Delete') }}
                                                                            @csrf
                                                                            &&
                                                                            <input id="id" type="hidden"
                                                                                name="id" class="form-control"
                                                                                value="{{ $list_Sections->id }}">
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-dismiss="modal">Close</button>
                                                                                <button type="submit"
                                                                                    class="btn btn-danger">Submit</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                    @endforeach

                </div>
            </div>
        </div>






        {{-- --------------------------Add Modal------------------------------------ --}}
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Launch demo modal
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('sections.store') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col">
                                    <input type="text" name="Name_Section_Ar" class="form-control"
                                        placeholder="Name">
                                </div>
                            </div>
                            <br>
                            <div class="col">
                                <label for="inputName" class="form-label">Grade Name</label>
                                <select name="grade_id" class="form-control form-select"
                                    onchange="console.log($(this).val())">
                                    <!--placeholder-->
                                    <option value="" selected disabled>
                                        Grade...
                                    </option>
                                    @foreach ($list_Grades as $list_Grade)
                                        <option value="{{ $list_Grade->id }}">{{ $list_Grade->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <div class="col">
                                <label for="inputName" class="form-label">Classe Name</label>
                                <select name="Class_id" class="form-control form-select">

                                </select>
                            </div>
                            <br>
                            <div class="col">
                                <label for="inputName" class="control-label">Teaher Name</label>
                                <select multiple name="teacher_id[]" class="form-control" id="exampleFormControlSelect2">
                                    @foreach($teachers as $teacher)
                                        <option value="{{$teacher->id}}">{{$teacher->Name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- ------------------------------------------------------------------------------- --}}






    </div>
    </div>
    </div>
    </div>
@endsection




@section('js')
    <script>
        $(document).ready(function() {
            $('select[name="grade_id"]').on('change', function() {
                var grade_id = $(this).val();
                if (grade_id) {
                    $.ajax({
                        url: "{{ URL::to('classes') }}/" + grade_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="Class_id"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="Class_id"]').append('<option value="' +
                                    key + '">' + value + '</option>');
                            });
                        },
                    });
                } else {
                    console.log('AJAX load did not work');
                }
            });
        });
    </script>
@endsection
