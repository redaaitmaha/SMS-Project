<?php

namespace App\Http\Livewire;

use App\Models\Classroom;
use App\Models\Grade;
use Livewire\Component;

class AddClasses extends Component
{
    public $successMessage ='success';
    public $Name_Class,
    $grade_id,$name;




    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'Name_Class' => 'required',
            'grade_id' => 'required'
            
        ]);
    }

    public function render()
    {
        return view('livewire.add-classes', [
            'Grade' => Grade::all(),
            'Classroom' => Classroom::all(),

        ]);
    }

    public function formsubmit(){

        $myClass = new Classroom();

        $myClass -> Name_Class = $this->Name_Class;
        $myClass -> Grade_id = $this->grade_id;

        $myClass -> save();
        session()->flash('message', 'Post successfully updated.');
        $this -> clearform();

    }


    public function clearform(){
        $this -> Name_Class = '';
        $this -> grade_id = '';

    }
}
