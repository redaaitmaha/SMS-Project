@if ($currentStep != 2)
    <div style="display: none" class="row setup-content" id="step-2">
@endif
<div class="col-xs-12">
    <div class="col-md-12">
        <br>

        <div class="form-row">
            <div class="col">
                <label class="form-label" for="title">Name </label>
                <input type="text" wire:model="Name_Mother" class="form-control">
                @error('Name_Mother')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

        </div>

        <div class="form-row">
            <div class="col-md-3">
                <label class="form-label" for="title">Job</label>
                <input type="text" wire:model="Job_Mother" class="form-control">
                @error('Job_Mother')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            

            <div class="col">
                <label class="form-label" for="title">National ID </label>
                <input type="text" wire:model="National_ID_Mother" class="form-control">
                @error('National_ID_Mother')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <label class="form-label" for="title">Passport ID</label>
                <input type="text" wire:model="Passport_ID_Mother" class="form-control">
                @error('Passport_ID_Mother')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col">
                <label class="form-label" for="title">Phone </label>
                <input type="text" wire:model="Phone_Mother" class="form-control">
                @error('Phone_Mother')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

        </div>


        <div class="form-row">
            <div class="form-group col-md-6">
                <label class="form-label" for="inputCity">Nationality</label>
                <select class="form-control form-select" wire:model="Nationality_Mother_id">
                    <option selected>Choose...</option>
                    @foreach ($Nationalities as $National)
                        <option value="{{ $National->id }}">{{ $National->Name }}</option>
                    @endforeach
                </select>
                @error('Nationality_Mother_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            
        </div>

        <div class="form-group">
            <label class="form-label" for="exampleFormControlTextarea1">Adress</label>
            <textarea class="form-control" wire:model="Address_Mother" id="exampleFormControlTextarea1" rows="4"></textarea>
            @error('Address_Mother')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button class="btn btn-danger btn-sm nextBtn btn-lg pull-right" type="button" wire:click="back(1)">
            Back
        </button>

        @if($updateMode)
                    <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" wire:click="secondStepSubmit_edit"
                            type="button">Next
                    </button>
                @else
                    <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="button"
                            wire:click="secondStepSubmit">Next</button>
                @endif

    </div>
</div>
</div>
