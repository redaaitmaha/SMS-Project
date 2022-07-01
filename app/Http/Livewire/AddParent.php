<?php

namespace App\Http\Livewire;

use App\Models\Models\MyParent;
use Livewire\Component;

use App\Models\Models\Nationalitie;
use Illuminate\Support\Facades\Hash;

class AddParent extends Component
{

    protected $listeners = ['delete'];

    public $successMessage = '';

    public $catchError, $updateMode = false, $show_table = true, $Parent_id;

    public $currentStep = 1,

        // Father_INPUTS
        $Email, $Password,
        $Name_Father, $Name_Father_en,
        $National_ID_Father, $Passport_ID_Father,
        $Phone_Father, $Job_Father, $Job_Father_en,
        $Nationality_Father_id, $Blood_Type_Father_id,
        $Address_Father, $Religion_Father_id,

        // Mother_INPUTS
        $Name_Mother, $Name_Mother_en,
        $National_ID_Mother, $Passport_ID_Mother,
        $Phone_Mother, $Job_Mother, $Job_Mother_en,
        $Nationality_Mother_id, $Blood_Type_Mother_id,
        $Address_Mother, $Religion_Mother_id;




    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'Email' => 'required|email',
            'National_ID_Father' => 'required',
            'Passport_ID_Father' => 'min:10|max:10',
            'Phone_Father' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'National_ID_Mother' => 'required|string|min:10|max:10',
            'Passport_ID_Mother' => 'min:10|max:10',
            'Phone_Mother' => 'regex:/^([0-9\s\-\+\(\)]*)$/|min:10'
        ]);
    }



    public function render()
    {


        return view('livewire.add-parent', [
            'Nationalities' => Nationalitie::all(),
            'my_parents' => MyParent::all(),

        ]);
    }



    public function showformadd()
    {
        $this->show_table = false;
    }




    //firstStepSubmit
    public function firstStepSubmit()
    {
        $this->validate([
            'Email' => 'required|unique:my_parents,Email,' . $this->id,
            'Password' => 'required',
            'Name_Father' => 'required',
            'Job_Father' => 'required',

            'National_ID_Father' => 'required|unique:my_parents,National_ID_Father,' . $this->id,
            'Passport_ID_Father' => 'required|unique:my_parents,Passport_ID_Father,' . $this->id,
            'Phone_Father' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'Nationality_Father_id' => 'required',

            'Address_Father' => 'required',
        ]);

        $this->currentStep = 2;
    }

    //secondStepSubmit
    public function secondStepSubmit()
    {
        $this->validate([
            'Name_Mother' => 'required',

            'National_ID_Mother' => 'required|unique:my_parents,National_ID_Mother,' . $this->id,
            'Passport_ID_Mother' => 'required|unique:my_parents,Passport_ID_Mother,' . $this->id,
            'Phone_Mother' => 'required',
            'Job_Mother' => 'required',
            'Nationality_Mother_id' => 'required',
            'Address_Mother' => 'required',
        ]);

        $this->currentStep = 3;
    }

    public function submitForm()
    {

        try {
            $My_Parent = new MyParent();
            // Father_INPUTS
            $My_Parent->Email = $this->Email;
            $My_Parent->Password = Hash::make($this->Password);
            $My_Parent->Name_Father =  $this->Name_Father;
            $My_Parent->National_ID_Father = $this->National_ID_Father;
            $My_Parent->Passport_ID_Father = $this->Passport_ID_Father;
            $My_Parent->Phone_Father = $this->Phone_Father;
            $My_Parent->Job_Father = $this->Job_Father;
            $My_Parent->Passport_ID_Father = $this->Passport_ID_Father;
            $My_Parent->Nationality_Father_id = $this->Nationality_Father_id;
            $My_Parent->Address_Father = $this->Address_Father;

            // Mother_INPUTS
            $My_Parent->Name_Mother = $this->Name_Mother;
            $My_Parent->National_ID_Mother = $this->National_ID_Mother;
            $My_Parent->Passport_ID_Mother = $this->Passport_ID_Mother;
            $My_Parent->Phone_Mother = $this->Phone_Mother;
            $My_Parent->Job_Mother = $this->Job_Mother;
            $My_Parent->Passport_ID_Mother = $this->Passport_ID_Mother;
            $My_Parent->Nationality_Mother_id = $this->Nationality_Mother_id;
            $My_Parent->Address_Mother = $this->Address_Mother;

            $My_Parent->save();
            /*  $this->successMessage = trans('messages.success'); */
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'message' => 'User Created Successfully!',
                'text' => 'It will list on users table soon.'
            ]);
            $this->clearForm();



            $this->currentStep = 1;
        } catch (\Exception $e) {
            $this->catchError = $e->getMessage();
        };
    }

    public function edit($id)
    {
        $this->show_table = false;
        $this->updateMode = true;
        $My_Parent = MyParent::where('id', $id)->first();
        $this->Parent_id = $id;
        $this->Email = $My_Parent->Email;
        $this->Password = $My_Parent->Password;
        $this->Name_Father = $My_Parent->Name_Father;
        $this->Job_Father = $My_Parent->Job_Father;
        $this->National_ID_Father = $My_Parent->National_ID_Father;
        $this->Passport_ID_Father = $My_Parent->Passport_ID_Father;
        $this->Phone_Father = $My_Parent->Phone_Father;
        $this->Nationality_Father_id = $My_Parent->Nationality_Father_id;
        $this->Address_Father = $My_Parent->Address_Father;

        $this->Name_Mother = $My_Parent->Name_Mother;
        $this->Job_Mother = $My_Parent->Job_Mother;
        $this->National_ID_Mother = $My_Parent->National_ID_Mother;
        $this->Passport_ID_Mother = $My_Parent->Passport_ID_Mother;
        $this->Phone_Mother = $My_Parent->Phone_Mother;
        $this->Nationality_Mother_id = $My_Parent->Nationality_Mother_id;
        $this->Address_Mother = $My_Parent->Address_Mother;
    }



    public function firstStepSubmit_edit()
    {
        $this->updateMode = true;
        $this->currentStep = 2;
    }

    //secondStepSubmit_edit
    public function secondStepSubmit_edit()
    {
        $this->updateMode = true;
        $this->currentStep = 3;
    }

    public function submitForm_edit()
    {

        if ($this->Parent_id) {
            $parent = MyParent::find($this->Parent_id);
            $parent->update([
                'Passport_ID_Father' => $this->Passport_ID_Father,
                'National_ID_Father' => $this->National_ID_Father,
                //Faatherrr    
                'Email' => $this->Email,
                /* 'Password' => $this->Password, */
                'Name_Father' => $this->Name_Father,
                'Job_Father' => $this->Job_Father,

                /*'National_ID_Father' => $this->National_ID_Father,
            'Passport_ID_Father' => $this->Passport_ID_Father,
            'Phone_Father' => $this->Phone_Father,
            'Nationality_Father_id' => $this->Nationality_Father_id,

            'Address_Father' => $this->Address_Father,


            //Maaaaatherrrrr
            'Name_Mother' => $this->Name_Mother,
            'National_ID_Mother' => $this->National_ID_Mother,
            'Passport_ID_Mother' => $this->Passport_ID_Mother,
            'Phone_Mother' => $this->Phone_Mother,
            'Job_Mother' => $this->Job_Mother,
            'Nationality_Mother_id' => $this->National_ID_Mother,
            'Address_Mother' => $this->Address_Mother, */

            ]);
        }

        return redirect()->to('/add-parent');
    }


    public function alertDelet($id)
    {
        $this->dispatchBrowserEvent('swal:confirm', [
            'type' => 'warning',
            'message' => 'Are you sure?',
            'text' => 'If deleted, you will not be able to recover this imaginary file!',
            'id' => $id
        ]);
    }


    public function delete($id)
    {

        MyParent::where('id',$id)->delete();
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',  
            'message' => 'User Delete Successfully!', 
            'text' => 'It will not list on users table soon.'
        ]);
        
         
    }






    //clearForm
    public function clearForm()
    {
        $this->Email = '';
        $this->Password = '';
        $this->Name_Father = '';
        $this->Job_Father = '';
        $this->National_ID_Father = '';
        $this->Passport_ID_Father = '';
        $this->Phone_Father = '';
        $this->Nationality_Father_id = '';
        $this->Address_Father = '';
        $this->Religion_Father_id = '';

        $this->Name_Mother = '';
        $this->Job_Mother = '';
        $this->Name_Mother_en = '';
        $this->National_ID_Mother = '';
        $this->Passport_ID_Mother = '';
        $this->Phone_Mother = '';
        $this->Nationality_Mother_id = '';
        $this->Address_Mother = '';
    }


    //back
    public function back($step)
    {
        $this->currentStep = $step;
    }
}
