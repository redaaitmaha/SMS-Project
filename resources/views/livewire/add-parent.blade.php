<div>




    @if (!empty($successMessage))
        <div class="alert alert-success" id="success-alert">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{ $successMessage }}
        </div>
    @endif



    @if ($show_table)
        @include('livewire.Parent_Table')
    @else


        <div class="stepwizard">
            <div class="stepwizard-row setup-panel">
                <div class="stepwizard-step">
                    <a href="#step-1" type="button"
                        class="btn btn-circle {{ $currentStep != 1 ? 'btn-default' : 'btn-success' }}">1</a>
                    <p>Father information</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-2" type="button"
                        class="btn btn-circle {{ $currentStep != 2 ? 'btn-default' : 'btn-success' }}">2</a>
                    <p>Mother information</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-3" type="button"
                        class="btn btn-circle {{ $currentStep != 3 ? 'btn-default' : 'btn-success' }}"
                        disabled="disabled">3</a>
                    <p>Confirmation</p>
                </div>
            </div>
        </div>


        @include('livewire.FatherForm')
        @include('livewire.MotherForm')

        <div class="row setup-content {{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">
            @if ($currentStep != 3)
                <div style="display: none" class="row setup-content" id="step-3">
            @endif
            <div class="col-xs-12">
                <div class="col-md-12">
                    <div class="text-wrap mb-4">
                        <div class="alert alert-warning">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-hidden="true">×</button>
                            <span class=""><svg xmlns="http://www.w3.org/2000/svg" height="40" width="40"
                                    viewBox="0 0 24 24">
                                    <path fill="#fad383"
                                        d="M15.728,22H8.272a1.00014,1.00014,0,0,1-.707-.293l-5.272-5.272A1.00014,1.00014,0,0,1,2,15.728V8.272a1.00014,1.00014,0,0,1,.293-.707l5.272-5.272A1.00014,1.00014,0,0,1,8.272,2H15.728a1.00014,1.00014,0,0,1,.707.293l5.272,5.272A1.00014,1.00014,0,0,1,22,8.272V15.728a1.00014,1.00014,0,0,1-.293.707l-5.272,5.272A1.00014,1.00014,0,0,1,15.728,22Z">
                                    </path>
                                    <circle cx="12" cy="16" r="1" fill="#f7b731"></circle>
                                    <path fill="#f7b731" d="M12,13a1,1,0,0,1-1-1V8a1,1,0,0,1,2,0v4A1,1,0,0,1,12,13Z">
                                    </path>
                                </svg></span>
                            <strong>Warning Message</strong>
                            <hr class="message-inner-separator">
                            <p>Are you sure to save the information ?!</p>
                        </div>
                    </div>
                </div>

                <input type="hidden" wire:model="Parent_id">


                <button class="btn btn-danger btn-sm nextBtn btn-lg pull-right" type="button"
                    wire:click="back(2)">Back</button>
                    @if($updateMode)
                    <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" wire:click="submitForm_edit"
                            type="button">Finish
                    </button>
                @else
                    <button class="btn btn-success btn-sm btn-lg pull-right" wire:click="submitForm"
                            type="button">Finish</button>
                @endif
            </div>
        </div>
        @endif
</div>



</div>
