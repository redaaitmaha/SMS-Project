<div class="card">
    <div class="card-header">

        <h3 class="card-title">Parents Table </h3>
    </div>
    <div class="card-body">




        <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
            style="text-align: center">
            <thead>
                <tr class="table-primary">
                    <th>#</th>
                    <th>Email</th>
                    <th>Name</th>
                    <th>National ID</th>
                    <th>Passport ID</th>
                    <th>Phone Father</th>
                    <th>Job Father</th>
                    <th>Processes</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 0; ?>
                @foreach ($my_parents as $my_parent)
                    <tr>
                        <?php $i++; ?>
                        <td>{{ $i }}</td>
                        <td>{{ $my_parent->Email }}</td>
                        <td>{{ $my_parent->Name_Father }}</td>
                        <td>{{ $my_parent->National_ID_Father }}</td>
                        <td>{{ $my_parent->Passport_ID_Father }}</td>
                        <td>{{ $my_parent->Phone_Father }}</td>
                        <td>{{ $my_parent->Job_Father }}</td>
                        <td>
                            <button wire:click="edit({{ $my_parent->id }})" title="{{ trans('Grades_trans.Edit') }}"
                                class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
                            <button type="button" class="btn btn-danger btn-sm"
                                wire:click="alertDelet({{ $my_parent->id }})"
                                title="{{ trans('Grades_trans.Delete') }}"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                @endforeach
        </table>
        <button class="btn btn-success btn-sm btn-lg pull-right" wire:click="showformadd" type="button">Add
            Parent</button><br><br>
        <div class="table-responsive">
        </div>
    </div>

</div>
