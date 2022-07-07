<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSections;
use App\Models\Classroom;
use App\Models\Grade;
use App\Models\Section;
use App\Models\Teacher;
use Illuminate\Http\Request;

class SectionController extends Controller
{

    public function index()
    {
        //
        $Grades = Grade::with(['Sections'])->get();

        $list_Grades = Grade::all();

        $teachers = Teacher::all();


        return view('pages.Sections.Sections', compact('Grades', 'list_Grades', 'teachers'));
    }


    public function create()
    {
        //
    }


    public function store(StoreSections $request)
    {
        //
        try {

            $validated = $request->validated();
            $Sections = new Section();

            $Sections->Name_Section = $request->Name_Section_Ar;
            $Sections->grade_id = $request->grade_id;
            $Sections->Class_id = $request->Class_id;
            $Sections->Status = 1;
            $Sections->save();
            /* toastr()->success(trans('messages.success')); */
            $Sections->teachers()->attach($request->teacher_id);

            return redirect()->route('Sections.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(StoreSections $request)
    {
        //
        try {
            $validated = $request->validated();
            $Sections = Section::findOrFail($request->id);

            $Sections->Name_Section = $request->Name_Section_Ar;
            $Sections->Grade_id = $request->grade_id;
            $Sections->Class_id = $request->Class_id;

            if (isset($request->Status)) {
                $Sections->Status = 1;
            } else {
                $Sections->Status = 2;
            }

            // update pivot tABLE
        if (isset($request->teacher_id)) {
            $Sections->teachers()->sync($request->teacher_id);
        } else {
            $Sections->teachers()->sync(array());
        }

            $Sections->save();
            /* toastr()->success(trans('messages.Update')); */

            return redirect()->route('sections.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }


    public function destroy(request $request)
    {
        //
        Section::findOrFail($request->id)->delete();
        /* toastr()->error(trans('messages.Delete')); */
        return redirect()->route('Sections.index');
    }

    public function getclasses($id)
    {
        $list_classes = Classroom::where("grade_id", $id)->pluck("Name_Class", "id");

        return $list_classes;
    }
}
