<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('users.admin.dashboard');
})->name('admin-dashboard');

Route::resource('/departments', 'DepartmentController');
Route::get('/treatmenthistory/{doctor}', 'DoctorController@treatmentHistory')->name('treatment-history');
Route::resource('/employee', 'EmployeeController');
Route::resource('/patients', 'PatientController');
Route::resource('/nurses', 'NurseController');
Route::resource('/accountants', 'AccountantController');
Route::resource('/pharmacists', 'PharmacistController');
Route::resource('/receptionists', 'ReceptionistController');
Route::resource('/laboratorists', 'LaboratoristController');
Route::get('/timeschedule/{doctor}', 'TimeScheduleController@timeSchedulesForDoctor')->name('doctor-time-schedules');
Route::get('/timeschedule/{doctor}/create/', 'TimeScheduleController@createtimeScheduleForDoctor')->name('create-time-schedule-for-doctor');
Route::resource('/timeschedules', 'TimeScheduleController');
Route::resource('/casehistories', 'CaseHistoryController');
Route::resource('/appointments', 'AppointmentController');
Route::resource('/documents', 'DocumentController');
Route::resource('/prescriptions', 'PrescriptionController');
Route::resource('/medicines/categories', 'MedicineCategoryController', ['as' => 'medicines']);
Route::resource('/medicines', 'MedicineController');
Route::resource('/services', 'ServiceController');
Route::resource('/beds', 'BedController');
Route::resource('/report', 'ReportController');
Route::resource('/laptemplates', 'LapTemplateController');
Route::resource('/bedallotments', 'BedAllotmentController');
Route::resource('/servicepackages', 'ServicePackageController');
Route::resource('/dayoffschedules', 'DayoffScheduleController');
Route::resource('/payments', 'PaymentController');
Route::resource('/paymentitems', 'PaymentItemController');
Route::resource('/expenses', 'ExpenseController');


Route::get('/getdoctorsbydepartment/', 'AppointmentController@getDoctorsByDepartment')->name('get-doctors-by-department');
Route::get('/gettimeschedulebydoctor/', 'EmployeeController@getTimeScheduleByEmployee')->name('get-time-schedule-by-employee');
Route::get('/getdayoffschedulebydoctor/', 'EmployeeController@getDayoffScheduleByEmployee')->name('get-dayoff-schedule-by-employee');
Route::get('/gettimebytimeschedule/', 'TimeScheduleController@getTimeByTimeSchedule')->name('get-time-by-time-schedule');
Route::get('/getappointmentsbydate/', 'AppointmentController@getAppointmentsByDate')->name('get-appointments-by-date');
Route::get('/getbedallotmentsbydate/', 'BedAllotmentController@getBedAllotmentsByDate')->name('get-bedallotments-by-date');
Route::get('/gettemplatebyid/', 'ReportController@getTemplateById')->name('get-template-by-id');
Route::get('/getpaymentitembyitemid/', 'PaymentItemController@getPaymentItemByItemId')->name('get-payment-item-by-item-id');
Route::get('/getpaymentitembydoctorid/', 'PaymentItemController@getPaymentItemByDoctorId')->name('get-payment-item-by-doctor_id');
Route::get('/getuserbyusertype/', 'PublicController@getUserByUserType')->name('get-user-by-user-type');
