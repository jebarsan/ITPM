<?php $__env->startSection('content'); ?>
    <!-- begin:: Content -->
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
        <!-- begin:: Content Head -->
        <div class="kt-subheader  kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">

                    <h3 class="kt-subheader__title">Doctor / <?php echo e($doctor->first_name); ?> <?php echo e($doctor->last_name); ?></h3>

                    <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                    <span class="kt-subheader__desc">#Page-ID</span>

                    

                    
                </div>
                
            </div>
        </div>
        <!-- end:: Content Head -->

        <!-- begin:: Container -->
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

            <!--Begin::App-->
            <div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">
                <!--Begin:: App Aside Mobile Toggle-->
                <button class="kt-app__aside-close" id="kt_user_profile_aside_close">
                    <i class="la la-close"></i>
                </button>
                <!--End:: App Aside Mobile Toggle-->

                <!--Begin:: App Aside-->
                <div class="kt-grid__item kt-app__toggle kt-app__aside" id="kt_user_profile_aside">
                    <!--Begin::Portlet-->
                    <div class="kt-portlet kt-portlet--height-fluid-">
                        <div class="kt-portlet__head kt-portlet__head--noborder">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">

                                </h3>
                            </div>
                            <div class="kt-portlet__head-toolbar">
                                <a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
                                    <i class="flaticon-more-1"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="kt-nav">
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                                <span class="kt-nav__link-text">Reports</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-send"></i>
                                                <span class="kt-nav__link-text">Messages</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                                <span class="kt-nav__link-text">Charts</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                                <span class="kt-nav__link-text">Members</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-settings"></i>
                                                <span class="kt-nav__link-text">Settings</span>
                                            </a>
                                        </li>
                                    </ul>            </div>
                            </div>
                        </div>
                        <div class="kt-portlet__body">
                            <!--begin::Widget -->
                            <div class="kt-widget kt-widget--user-profile-2">
                                <div class="kt-widget__head">
                                    <div class="kt-widget__media">
                                        <?php if(strpos($doctor->picture,'doctors_pictures')!==false): ?>
                                            <img src="<?php echo e(asset('storage/'.$doctor->picture)); ?>" class="img-circle kt-widget__img">
                                        <?php else: ?>
                                            <img src="<?php echo e($doctor->picture); ?>" class="img-circle kt-widget__img">
                                        <?php endif; ?>

                                    </div>
                                    <div class="kt-widget__info">
                                        <a href="#" class="kt-widget__username">
                                            <?php echo e($doctor->first_name); ?> <?php echo e($doctor->last_name); ?>

                                        </a>
                                        <span class="kt-widget__desc">
                                            <?php echo e($doctor->national_id); ?>

                                        </span>
                                    </div>
                                </div>

                                <div class="kt-widget__body">
                                    <div class="kt-widget__section">
                                        <?php echo e($doctor->biography); ?>

                                    </div>

                                    <div class="kt-widget__content">
                                        <div class="kt-widget__stats kt-margin-r-20">
                                            <div class="kt-widget__icon">
                                                <i class="flaticon-piggy-bank"></i>
                                            </div>
                                            <div class="kt-widget__details">
                                                <span class="kt-widget__title">Total Appointments</span>
                                                <span class="kt-widget__value"><span></span>999999</span>
                                            </div>
                                        </div>

                                        <div class="kt-widget__stats">
                                            <div class="kt-widget__icon">
                                                <i class="flaticon-pie-chart"></i>
                                            </div>
                                            <div class="kt-widget__details">
                                                <span class="kt-widget__title">Working Hours</span>
                                                <span class="kt-widget__value"><span></span>40 h/w</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="kt-widget__item">
                                        <div class="kt-widget__contact">
                                            <span class="kt-widget__label">Email:</span>
                                            <a href="#" class="kt-widget__data"><?php echo e($doctor->email); ?></a>
                                        </div>
                                        <div class="kt-widget__contact">
                                            <span class="kt-widget__label">Mobile:</span>
                                            <a href="#" class="kt-widget__data"><?php echo e($doctor->mobile); ?></a>
                                        </div>
                                        <div class="kt-widget__contact">
                                            <span class="kt-widget__label">Gender:</span>
                                            <span class="kt-widget__data"><?php echo e($doctor->gender); ?></span>
                                        </div>
                                        <div class="kt-widget__contact">
                                            <span class="kt-widget__label">Birth Date:</span>
                                            <span class="kt-widget__data"><?php echo e($doctor->birth_date); ?></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="kt-widget__footer">
                                    <button type="button" class="btn btn-label-success btn-lg btn-upper">write message</button>
                                </div>
                            </div>
                            <!--end::Widget -->

                        </div>
                    </div>
                    <!--End::Portlet-->

                </div>
                <!--End:: App Aside-->

                <!--Begin:: App Content-->
                <div class="kt-grid__item kt-grid__item--fluid kt-app__content">
                    <div class="row">
                        <div class="col">
                            <!--Begin::Section-->
                            <div class="kt-portlet">
                                <div class="kt-portlet__body kt-portlet__body--fit">
                                    <div class="row row-no-padding row-col-separator-xl">
                                        <div class="col-md-12 col-lg-12 col-xl-4">
                                            <!--begin:: Widgets/Stats2-1 -->
                                            <div class="kt-widget1">
                                                <div class="kt-widget1__item">
                                                    <div class="kt-widget1__info">
                                                        <h3 class="kt-widget1__title">Departments</h3>
                                                        <?php $__currentLoopData = $doctor->departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $de): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <span
                                                                class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill"><?php echo e($de->name); ?></span>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </div>
                                                </div>

                                                <div class="kt-widget1__item">
                                                    <div class="kt-widget1__info">
                                                        <h3 class="kt-widget1__title">Phone</h3>
                                                        <span class="kt-widget1__desc"><?php echo e($doctor->phone); ?></span>
                                                    </div>
                                                </div>

                                                <div class="kt-widget1__item">
                                                    <div class="kt-widget1__info">
                                                        <h3 class="kt-widget1__title">Emergency Number</h3>
                                                        <span class="kt-widget1__desc"><?php echo e($doctor->emergency); ?></span>
                                                    </div>
                                                </div>

                                                <div class="kt-widget1__item">
                                                    <div class="kt-widget1__info">
                                                        <h3 class="kt-widget1__title">Address</h3>
                                                        <span class="kt-widget1__desc"><?php echo e($doctor->address); ?></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <!--end:: Widgets/Stats2-1 -->                            </div>
                                        <div class="col-md-12 col-lg-12 col-xl-4">
                                            <!--begin:: Widgets/Stats2-2 -->
                                            <div class="kt-widget1">
                                                <div class="kt-widget1__item">
                                                    <div class="kt-widget1__info">
                                                        <h3 class="kt-widget1__title">Medical Degree</h3>
                                                        <span class="kt-widget1__desc"><?php echo e($doctor->medical_degree); ?></span>
                                                    </div>
                                                </div>

                                                <div class="kt-widget1__item">
                                                    <div class="kt-widget1__info">
                                                        <h3 class="kt-widget1__title">Specialist</h3>
                                                        <span class="kt-widget1__desc"><?php echo e($doctor->specialist); ?></span>
                                                    </div>
                                                </div>

                                                <div class="kt-widget1__item">
                                                    <div class="kt-widget1__info">
                                                        <h3 class="kt-widget1__title">Educational Qualification</h3>
                                                        <span class="kt-widget1__desc"><?php echo e($doctor->educational_qualification); ?></span>
                                                    </div>
                                                </div>

                                            </div>
                                            <!--end:: Widgets/Stats2-2 -->                            </div>
                                    </div>
                                </div>
                            </div>
                            <!--End::Section-->
                        </div>
                    </div>
                </div>
                <!--End:: App Content-->
            </div>
            <!--End::App-->	</div>
        <!-- end:: Container -->
    </div>
    <!-- end:: Content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('users.admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\HOSPITAL-MANAGEMENT- LARAVEL\resources\views/users/doctors/show.blade.php ENDPATH**/ ?>