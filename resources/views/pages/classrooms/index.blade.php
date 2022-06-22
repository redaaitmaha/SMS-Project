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

            <div class="row targetDiv" id="div0">
                <div class="col-md-12">
                    <div id="group1" class="fvrduplicate">
                        <div class="row entry">
                            <div class="col-xs-12 col-md-5">
                                <div class="form-group">
                                    <label>Length(mm)</label>
                                    <input class="form-control form-control-sm" name="fields[]" type="text"
                                        placeholder="Length">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-5">
                                <div class="form-group">
                                    <label>Qty(pcs)</label>
                                    <input class="form-control form-control-sm" name="fields[]" type="text" placeholder="Qty">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-2">
                                <div class="form-group">
                                    <label>&nbsp;</label>
                                    <button type="button" class="btn btn-success btn-sm btn-add">
                                        <i class="fa fa-plus" aria-hidden="true">+</i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr> <!-- second form starts below: -->
            <div class="row targetDiv" id="div1">
                <div class="col-md-12">
                    <div id="group2" class="fvrduplicate">
                        <div class="row entry">
                            <!-- Field Start -->
                            <div class="col-xs-12 col-md-5">
                                <div class="form-group">
                                    <label>Length(mm)</label>
                                    <input class="form-control form-control-sm" name="fields[]" type="text"
                                        placeholder="Length">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-5">
                                <div class="form-group">
                                    <label>Qty(pcs)</label>
                                    <input class="form-control form-control-sm" name="fields[]" type="text" placeholder="Qty">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-2">
                                <div class="form-group">
                                    <label>&nbsp;</label>
                                    <button type="button" class="btn btn-success btn-sm btn-add">
                                        <i class="fa fa-plus" aria-hidden="true">+</i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Repeater-->
        
          
            

        </div>

    </div>
    <script>
        $(function () {
            $(document).on('click', '.btn-add', function (e) {
                e.preventDefault();
                var controlForm = $(this).closest('.fvrduplicate'),
                    currentEntry = $(this).parents('.entry:first'),
                    newEntry = $(currentEntry.clone()).appendTo(controlForm);
                newEntry.find('input').val('');
                controlForm.find('.entry:not(:last) .btn-add')
                    .removeClass('btn-add').addClass('btn-remove')
                    .removeClass('btn-success').addClass('btn-danger')
                    .html('<i class="fa fa-minus" aria-hidden="true">-</i>');
            }).on('click', '.btn-remove', function (e) {
                $(this).closest('.entry').remove();
                return false;
            });
        });

    </script>
    
@endsection
