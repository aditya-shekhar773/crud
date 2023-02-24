<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $req): View
    {
        
        $data['sdata']=Student::paginate(10);
        $data['StudentsCount'] = Student::count();
        if($req->search !=""){
            $search = $req->search;
            $data['sdata'] = Student::where("name","LIKE","%$search%")->orwhere("contact",$search)->paginate(10);
            $data['StudentCount'] = $data['sdata']->count();
        }
        return view('home',$data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('insert');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request -> validate([
            'name' => 'required',
            'father_name' => 'required',
            'contact' => 'required|integer|unique:App\Models\Student,contact|digits:10',
            'email' => 'required|unique:App\Models\Student,email|email',
            'city' => 'required',
            'pin_code' => 'required',
        ]);

        Student::create($data);
        return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('view');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student):RedirectResponse
    {
       
        $student->delete();
        return redirect()->route('student.index');
    }
}
