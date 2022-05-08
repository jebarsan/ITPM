<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use Illuminate\Support\Facades\DB;
use Auth;
use PDF;

class ReportController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        date_default_timezone_set('asia/ho_chi_minh');
        $format = 'Y/m/d';
        $now = date($format);
        $to = date($format, strtotime("+30 days"));
        $constraints = [
            'from' => $now,
            'to' => $to
        ];

        $employees = $this->getHiredEmployees($constraints);
        return view('system-mgmt/report/index', ['employees' => $doctor, 'searchingVals' => $constraints]);
    }

    public function exportExcel(Request $request) {
        $this->prepareExportingData($request)->export('xlsx');
        redirect()->intended('system-management/report');
    }

    public function exportPDF(Request $request) {
         $constraints = [
            'from' => $request['from'],
            'to' => $request['to']
        ];
        $doctor = $this->getExportingData($constraints);
        $pdf = PDF::loadView('system-mgmt/report/pdf', ['doctor' => $doctor, 'searchingVals' => $constraints]);
        return $pdf->download('report_from_'. $request['from'].'_to_'.$request['to'].'pdf');
        // return view('system-mgmt/report/pdf', ['doctor' => $doctor, 'searchingVals' => $constraints]);
    }
    
    private function prepareExportingData($request) {
        $author = Auth::user()->username;
        $doctor = $this->getExportingData(['from'=> $request['from'], 'to' => $request['to']]);
        return Excel::create('report_from_'. $request['from'].'_to_'.$request['to'], function($excel) use($employees, $request, $author) {

        // Set the title
        $excel->setTitle('List of Employee from '. $request['from'].' to '. $request['to']);

        // Chain the setters
        $excel->setCreator($author)
            ->setCompany('HoaDang');

        // Call them separately
        $excel->setDescription('The Report Of Employee');

        $excel->sheet('Hired_Employees', function($sheet) use($doctor) {

        $sheet->fromArray($doctor);
            });
        });
    }

    public function search(Request $request) {
        $constraints = [
            'from' => $request['from'],
            'to' => $request['to']
        ];

        $doctor = $this->getdoctor($constraints);
        return view('system-mgmt/report/index', ['doctor' => $doctor, 'searchingVals' => $constraints]);
    }

    private function getdoctor($constraints) {
        $doctor = Employee::where('date_hired', '>=', $constraints['from'])
                        ->where('date_hired', '<=', $constraints['to'])
                        ->get();
        return $doctor;
    }

    private function getExportingData($constraints) {
        return DB::table('doctor')
       
        ->leftJoin('department', 'employees.department_id', '=', 'department.id')
        ->leftJoin('Salary', 'employees.state_id', '=', 'state.id')
        ->leftJoin('Experiance', 'employees.country_id', '=', 'country.id')
        ->leftJoin('Address', 'employees.division_id', '=', 'division.id')
        ->select('employees.firstname', 'employees.middlename', 'employees.lastname', 
        'employees.age','employees.birthdate', 'employees.address', 'employees.zip', 'employees.date_hired',
        'department.name as department_name', 'division.name as division_name')
        ->where('date_hired', '>=', $constraints['from'])
        ->where('date_hired', '<=', $constraints['to'])
        ->get()
        ->map(function ($item, $key) {
        return (array) $item;
        })
        ->all();
    }
}
