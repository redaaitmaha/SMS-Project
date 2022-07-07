<?php


namespace App\Repository;

use App\Models\Classroom;
use Exception;
use App\Models\Grade;
use App\Models\Gender;
use App\Models\Models\MyParent;
use App\Models\Models\Nationalitie;
use App\Models\Models\Students;
use App\Models\Section;
use App\Models\Teacher;
use App\Models\Specialization;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;

class StudentRepository implements StudentRepositoryInterface
{


    public function Get_Student()
    {
        $students = Students::all();
        return view('pages.Students.index', compact('students'));
    }

    public function Edit_Student($id)
    {
        $data['Grades'] = Grade::all();
        $data['parents'] = MyParent::all();
        $data['Genders'] = Gender::all();
        $data['nationals'] = Nationalitie::all();
        $Students =  Students::findOrFail($id);
        return view('pages.Students.edit', $data, compact('Students'));
    }



    public function Create_Student()
    {

        $data['my_classes'] = Grade::all();
        $data['parents'] = MyParent::all();
        $data['Genders'] = Gender::all();
        $data['nationals'] = Nationalitie::all();
        return view('pages.Students.add', $data);
    }

    public function Get_classrooms($id)
    {

        $list_classes = Classroom::where("Grade_id", $id)->pluck("Name_Class", "id");
        return $list_classes;
    }

    //Get Sections
    public function Get_Sections($id)
    {

        $list_sections = Section::where("Class_id", $id)->pluck("Name_Section", "id");
        return $list_sections;
    }

    public function Store_Student($request)
    {

        try {
            $students = new Students();
            $students->name = $request->name_ar;
            $students->email = $request->email;
            $students->password = Hash::make($request->password);
            $students->gender_id = $request->gender_id;
            $students->nationalitie_id = $request->nationalitie_id;
            $students->Date_Birth = $request->Date_Birth;
            $students->Grade_id = $request->Grade_id;
            $students->Classroom_id = $request->Classroom_id;
            $students->section_id = $request->section_id;
            $students->parent_id = $request->parent_id;
            $students->academic_year = $request->academic_year;
            $students->save();
            /* toastr()->success(trans('messages.success')); */
            return redirect()->route('students.create');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
