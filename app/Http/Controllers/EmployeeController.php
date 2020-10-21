<?php namespace App\Http\Controllers;

use App\Models\Employee;
use Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Employee::orderBy('id','desc')->paginate(10)->setPath('Employees');
        return view('employees.index',compact(['data']));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $request->validate([
         'name' => 'required',
         'lastname' => 'required',
         'email' => 'required|email',
         'phone' => 'required'
        ]);

        Employee::create($request->all());
        return redirect()->back()->with('success','Create Successfully');
    }

    public function show($id)
    {
       $data =  Employee::find($id);
       return view('employees.show',compact(['data']));
    }

    public function edit($id)
    {
       $data = Employee::find($id);
       return view('employees.edit',compact(['data']));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
         'name' => 'required',
         'lastname' => 'required',
         'email' => 'required|email',
         'phone' => 'required'
        ]);

        Employee::where('id',$id)->update($request->all());
        return redirect()->back()->with('success','Update Successfully');
        
    }

    public function destroy($id)
    {
        Employee::where('id',$id)->delete();
        return redirect()->back()->with('success','Delete Successfully');
    }

}