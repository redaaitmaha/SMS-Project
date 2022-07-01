<div>
    
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    

    <div class="col-lg-12">
        <div class="card">
            




            <div class="row  targetDiv" id="div1">

                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Add new classe</h3>
                        </div>
                        <div class="card-body">
                           
                         

                                <div class="row entry">
                                    <div class="col-xl-6 mb-3">
                                        <label for="validationCustom01">Class Name</label>
                                        <input type="text"wire:model="Name_Class" name="Name_Class" class="form-control" id="validationCustom01"
                                            value="Mark" required>
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                    <div class="col-xl-6 mb-3">
                                        <div class="form-group">
                                            <label for="validationCustom04">Grade Name</label>
                                            <select value="grade_id" wire:model="grade_id" name="name" class="form-control select2"
                                                id="validationCustom04" required>
                                                <option selected >Select Grade...</option>

                                                @foreach ($Grade as $grad)
                                                <option value="{{ $grad->id }}">{{ $grad->name}}</option>
                                                @endforeach
                                                    
                                   

                                            </select>
                                        

                                </div>


                                <button class="btn btn-primary"  wire:click="formsubmit" >Submit form</button>
                          
                        </div>
                    </div>
                </div>
            </div>










            {{-- <div class="card-body">

                <a class="btn btn-success" href=""> Create New Product</a>
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
                            
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td name="bstable-actions">
                                        <div class="btn-list">


                                            <form action=""
                                                method="POST">

                                                <a class="btn btn-primary"
                                                    href=""><span
                                                        class="fe fe-edit"> </span></a>


                                               

                                                <button id="bDel" type="submit" class="btn  btn-danger">
                                                    <span class="fe fe-trash-2"> </span>
                                                </button>

                                            </form>


                                        </div>
                                    </td>
                                </tr>

                        </tbody>
                       
                    </table>
                </div>
            </div> --}}
        </div>
    </div>
</div>
