
@if ($currentStep != 1)
    <div style="display: none" class="row setup-content" id="step-1">
@endif
<div class="col-xs-12">
    <div class="col-md-12">
        <br>
        <div class="form-row">
            <div class="col">
                <label class="form-label" for="title">Email Adress </label>
                <input type="email" wire:model="Email" class="form-control">
                @error('Email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <label class="form-label" for="title">Password </label>
                <input type="password" wire:model="Password" class="form-control">
                @error('Password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-row">
            <div class="col">
                <label class="form-label" for="title">Name</label>
                <input type="text" wire:model="Name_Father" class="form-control">
                @error('Name_Father')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            
        </div>

        <div class="form-row">
            <div class="col-md-3">
                <label class="form-label" for="title">Job</label>
                <input type="text" wire:model="Job_Father" class="form-control">
                @error('Job_Father')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            

            <div class="col">
                <label class="form-label" for="title">National ID </label>
                <input type="text" wire:model="National_ID_Father" class="form-control">
                @error('National_ID_Father')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <label class="form-label" for="title">Passport ID</label>
                <input type="text" wire:model="Passport_ID_Father" class="form-control">
                @error('Passport_ID_Father')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col">
                <label class="form-label" for="title">Phone</label>
                <input type="text" wire:model="Phone_Father" class="form-control">
                @error('Phone_Father')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

        </div>


        <div class="form-row">
            <div class="form-group col-md-6">
                <label class="form-label" for="inputCity">Nationality </label>
                <select class="form-control form-select" wire:model="Nationality_Father_id">
                    <option selected>Nationality...</option>
                    @foreach ($Nationalities as $National)
                        <option value="{{ $National->id }}">{{ $National->Name }}</option>
                    @endforeach
                </select>
                @error('Nationality_Father_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            
            
        </div>


        <div class="form-group">
            <label class="form-label" for="exampleFormControlTextarea1">Adress</label>
            <textarea class="form-control" wire:model="Address_Father" id="exampleFormControlTextarea1" rows="4"></textarea>
            @error('Address_Father')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        @if($updateMode)
        <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" wire:click="firstStepSubmit_edit"
                type="button">Next
        </button>
    @else
        <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" wire:click="firstStepSubmit"
                type="button">Next
        </button>
    @endif

        

    </div>
</div>
</div>
