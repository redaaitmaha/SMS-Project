<?php


namespace App\Http\Controllers\Grades;

use App\Models\Grade;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;



class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $grades = Grade::latest()->paginate(5);

        return view('pages.grades.index', compact('grades'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.grades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'notes' => 'required',

        ]);
  
        Grade::create($request->all());

        return redirect()->route('grades.index')->with('success','Product created successfully.');
                        

        
        /* $request->validate([
            'name' => 'required',
            'notes' => 'required',
        ]);

        Grade::create($request->all());

        return redirect()->route('grades.index')->with('success','Post created successfully.'); */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function show(Grade $grade)
    {   
        return view('pages.grades.show',compact('grade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function edit(Grade $grade)
    {
        return view('pages.grades.edit',compact('grade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grade $grade)
    {
        $request->validate([
            'name' => 'required',
            'notes' => 'required',
        ]);

        $grade->update($request->all());

        return redirect()->route('grades.index')->with('success', 'Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grade $grade)
    {
        $grade->delete();

        return redirect()->route('grades.index')
            ->with('success', 'post deleted successfully');
    }
}
