<?php

namespace App\Http\Controllers;

use App\Department;
use App\Employee;
use App\Http\Requests\Employee\CreateEmployeeRequest;
use App\Http\Requests\Employee\UpdateEmployeeRequest;
use App\TimeSchedule;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{

    public function getTimeScheduleByEmployee(Request $request){

        if(!$request->id){
            $html = '<li class="tm"  value="">No Time Schedule For This Employee</li>';
        }else{
            $html = '';
            $employee = User::find($request->id);
            $timeSchedules = $employee->timeSchedules;
            foreach ($timeSchedules as $timeSchedule) {
                $html .= '<li class="tm list-group-item" value="'.$timeSchedule->id.'"><span class="icon icon-clock-o icon-lg icon-fw">'.$timeSchedule->week_day.'</li>';
            }
        }
        return response()->json(['html' => $html]);
    }

    public function getDayoffScheduleByEmployee(Request $request){

        if(!$request->id){
            $html = '<li class="tm"  value="">No Day Off Schedule For This Employee</li>';
        }else{
            $doctor = User::find($request->id);
            $dayoffSchedules = $employee->dayoffSchedules;
            $TS = collect();
            foreach ($dayoffSchedules as $dayoffSchedule) {
                    $TS->push($dayoffSchedule);
            }
            $json = $TS->toJson();
        }
        return response()->json(['html' => $json]);
    }

    public function treatmentHistory(User $employee)
    {
        return view('appointments.list')->with('appointments', $employee->appointments);
    }

    public function index()
    {
        return view('users.employee.list')->with('doctors', User::demployee()->get())->with('departments',Department::all());
    }


    public function create()
    {
        return view('users.employee.create')->with('departments',Department::all());
    }

    public function store(CreateEmployeeRequest $request)
    {

        $employee = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'national_id' => $request->national_id,
            'address' => $request->address,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'birth_date' => $request->birth_date,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'mobile' => $request->mobile,
            'emergency' => $request->emergency,
            'medical_degree' => $request->medical_degree,
            'specialist' => $request->specialist,
            'biography' => $request->biography,
            'educational_qualification' => $request->educational_qualification,
            'type' => 'employee',
        ]);

        if($request->picture){
            $pic = $request->picture->store('employee_pictures');
            $employee->picture = $pic;
            $employee->save();
        }

        if ($request->departments){
            $employee->departments()->attach($request->departments);
        }
        // flash message
        session()->flash('success', 'New Employee Added Successfully.');
        // redirect user
        return redirect(route('employee.index'));
    }


    public function show(User $employee)
    {
        return view('users.employee.show')->with('employee', $employee)->with('departments',Department::all());
    }

    public function edit(User $employee)
    {
        return view('users.employee.create')->with('employee', $employee)->with('departments',Department::all());
    }


    public function update(UpdateEmployeeRequest $request,User $employee)
    {
        $data = $request->only('first_name','last_name','national_id', 'email', 'address', 'birth_date', 'gender', 'phone', 'mobile', 'emergency', 'medical_degree', 'specialist', 'biography', 'educational_qualification');
        if ($request->hasFile('picture')) {

            $pic = $request->picture->store('employee_pictures');

            Storage::delete($employee->picture);

            $data['picture'] = $pic;
        }

        if ($request->departments) {
            $employee->departments()->sync($request->departments);
        }

        $employee->update($data);
        // flash message
        session()->flash('success', 'Employee Info Updated Successfully.');
        // redirect user
        return redirect(route('employee.index'));
    }

    public function destroy(User $employee)
    {
        $employee->departments()->detach();
       
        Storage::delete($employee->picture);
        $employee->delete();
        // flash message
        session()->flash('success', 'Employee Deleted Successfully.');
        // redirect user
        return redirect(route('employee.index'));
    }

}

