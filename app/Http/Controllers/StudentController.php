<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $student = Student::all()->paginate(5);
        // return view('student.index', compact('student'))->with('i', (request()->input('page', 1) - 1) * 5);
        // echo $request->path();

        $data['lists'] = Student::all();

        return view('students.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id='')
    {
        $data = [];
        $data['buttonName'] = 'Submit';
        $data['formName'] = 'Add New User';
        if($id != ''){
            $data['userdata'] = Student::find($id);
            $data['id'] = $id;
            $data['buttonName'] = 'Update';
            $data['formName'] = 'Update User';

            // dd($data['userdata']);
        }
        if($request->method() == 'POST'){
            $validateData = $request->validate([
                'studname' => 'required',
                'course' => 'required',
                'fees' => 'required',
            ]);

            $responseArr = [
                'studname' => $request->input('studname'),
                'course' => $request->input('course'),
                'fees' => $request->input('fees'),
            ];


            if($id != ''){
                // Update data
                Student::where('id', $id)->update($responseArr);
                $request->session()->flash('message','Update successfull!');
            } else {
                // Insert data
                $insert = Student::create($responseArr);
                $request->session()->flash('message','Added successfull!');
            
            }
            return Redirect::to('students');
        }
        return view('students.create', $data);
    }
    
    public function delete(Request $request, $id)
    {
        if($id != ''){
            // Delete data
            Student::where('id', $id)->delete();
            $request->session()->flash('message','Delete successfull!');
            return Redirect::to('students');
        }
        
    }
}
