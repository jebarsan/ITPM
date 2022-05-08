@extends('users.admin.layouts.master')
@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/material_green.css">

@endsection
@section('content')

    <!-- begin:: Content -->
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
        <!-- begin:: Content Head -->
        <div class="kt-subheader  kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">

                    <h3 class="kt-subheader__title">{{isset($doctor) ? 'Edit Doctor Info' : 'Add Doctor Page'}}</h3>

                    <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                    <span class="kt-subheader__desc"></span>

                    <div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-hidden">
                        <input type="text" class="form-control" placeholder="Search order..." id="generalSearch">
                        <span class="kt-input-icon__icon kt-input-icon__icon--right">
                        <span><i class="flaticon2-search-1"></i></span>
                </span>
                    </div>
                </div>
               
                                <!--end::Nav-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end:: Content Head -->

        <!-- begin:: Content Container-->
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <div class="row">
                <div class="offset-2 col-md-8">
                    <!--begin::Portlet-->
                    <div class="kt-portlet">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    {{isset($doctor) ? 'Edit Doctor Info' : 'Add Doctor'}}
                                </h3>
                            </div>
                        </div>
                        <!--begin::Form-->
                        <form class="kt-form kt-form--label-right"
                              action="{{isset($doctor) ? route('doctors.update',$doctor->id) : route('doctors.store')}}"
                              method="POST"
                              enctype="multipart/form-data">
                            <div class="kt-portlet__body">
                                <div class="form-group form-group-last">
                                    <div class="alert alert-secondary" role="alert">
                                        <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                                        <div class="alert-text">
                                            You Can Add New Doctor From This Form.
                                        </div>
                                    </div>
                                </div>
                                @csrf
                                @if(isset($doctor))
                                    @method('PUT')
                                @endif
                                <div class="form-group">
                                    <label>Avatar</label>
                                    <div>
                                        <div class="kt-avatar kt-avatar--outline kt-avatar--circle-" id="kt_user_edit_avatar">
                                            <div class="kt-avatar__holder" @if(isset($doctor)) @if(strpos($doctor->picture,'users_pictures')!==false) style="background-image: url({{asset('storage/'.$doctor->picture)}})" @else style="background-image: url({{$doctor->picture}})" @endif  @else style="background-image: url({{asset('storage/nopic.jpg')}});" @endif>

                                            </div>
                                            <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
                                                <i class="fa fa-pen"></i>
                                                <input type="file" name="picture" accept=".png, .jpg, .jpeg">
                                            </label>
                                            <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
                                                    <i class="fa fa-times"></i>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>First Name</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-heading"></i></span></div>
                                        <input id="first_name" class="form-control" type="text" name="first_name"
                                               value="{{isset($doctor) ? $doctor->first_name : ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-heading"></i></span></div>
                                        <input id="last_name" class="form-control" type="text" name="last_name"
                                               value="{{isset($doctor) ? $doctor->last_name : ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>National ID Number</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-address-card"></i></span></div>
                                        <input id="national_id" class="form-control" type="text" name="national_id"
                                               value="{{isset($doctor) ? $doctor->national_id : ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-location-arrow"></i></span></div>
                                        <textarea class="form-control" name="address" id="address" cols="30"
                                                  rows="5">{{isset($doctor) ? $doctor->address : ''}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text">@</span></div>
                                        <input id="email" class="form-control" type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                                               value="{{isset($doctor) ? $doctor->email : ''}}">
                                    </div>
                                </div>
                                @if(!isset($doctor))
                                    <div class="form-group">
                                        <label>Password</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-key"></i></i></span></div>
                                            <input id="password" class="form-control" type="text" name="password">
                                        </div>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label>Birth Date</label>
                                    <div class="input-group date">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-calendar"></i></span></div>
                                        <input type="text" class="form-control" readonly="" name="birth_date" id="date"
                                               value="{{isset($doctor) ? $doctor->birth_date : ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Gender</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-venus-mars"></i></span></div>
                                        <select class="form-control" name="gender" id="gender">
                                            <option>Select Gender</option>
                                            <option
                                                value="male" @if(isset($doctor)) {{$doctor->gender == 'male' ? 'selected' : ''}} @endif>
                                                male
                                            </option>
                                            <option
                                                value="female" @if(isset($doctor)) {{$doctor->gender == 'female' ? 'selected' : ''}} @endif>
                                                female
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>LandLine Phone</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-phone"></i></span></div>
                                        <input id="phone" class="form-control" type="number" name="phone"
                                               value="{{isset($doctor) ? $doctor->phone : ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Mobile Number</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-mobile"></i></span></div>
                                        <input id="mobile" class="form-control" type="number" name="mobile"
                                               value="{{isset($doctor) ? $doctor->mobile : ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Emergency Number</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-h-square"></i></span></div>
                                        <input id="emergency" class="form-control" type="number" name="emergency"
                                               value="{{isset($doctor) ? $doctor->emergency : ''}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Departments</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-h-square"></i></span></div>
                                        <select id="kt_select2_3" class="kt-select2 form-control" name="departments[]" id="departments" multiple>
                                            @foreach($departments as $department)
                                                <option value="{{$department->id}}" @if(isset($doctor)) {{$doctor->hasDepartment($department->id) ? 'selected' : ''}} @endif>
                                                    {{$department->name}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Medical Degree</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-file-alt"></i></span></div>
                                        <textarea class="form-control" name="medical_degree" id="medical_degree"
                                                  cols="30"
                                                  rows="5">{{isset($doctor) ? $doctor->medical_degree : ''}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Specialist</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-file-alt"></i></span></div>
                                        <textarea class="form-control" name="specialist" id="specialist" cols="30"
                                                  rows="5">{{isset($doctor) ? $doctor->specialist : ''}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Biography</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-file-alt"></i></span></div>
                                        <textarea class="form-control" name="biography" id="biography" cols="30"
                                                  rows="5">{{isset($doctor) ? $doctor->biography : ''}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Educational Qualification</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-file-alt"></i></span></div>
                                        <textarea class="form-control" name="educational_qualification"
                                                  id="educational_qualification" cols="30"
                                                  rows="5">{{isset($doctor) ? $doctor->educational_qualification : ''}}</textarea>
                                    </div>
                                </div>
                                <div class="kt-portlet__foot">
                                    <div class="kt-form__actions">
                                        <input type="submit" value="{{isset($doctor) ? 'Update' : 'Submit'}}"
                                               class="btn-lg btn-primary">
                                        <input type="reset" class="btn-lg btn-danger" value="Cancel">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Portlet-->
                </div>
            </div>
        </div>
        <!-- end:: Content Container-->
    </div>
    <!-- begin:: Content -->

@endsection

@section('scripts')
    <script src="{{url('adminpanel')}}/assets/js/demo12/pages/custom/user/edit-user.js" type="text/javascript"></script>
    <script src="{{url('adminpanel')}}/assets/js/demo3/pages/crud/forms/widgets/select2.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        flatpickr('#date', {
            altInput: true,
            altFormat: "F j, Y",
            dateFormat: "Y-m-d",
        });
    </script>

@endsection
