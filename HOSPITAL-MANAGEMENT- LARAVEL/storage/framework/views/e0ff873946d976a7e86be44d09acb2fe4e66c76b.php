<?php $__env->startSection('styles'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/material_green.css">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <!-- begin:: Content -->
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
        <!-- begin:: Content Head -->
        <div class="kt-subheader  kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">

                    <h3 class="kt-subheader__title"><?php echo e(isset($medicine) ? 'Edit Medicine Info' : 'Add Medicine'); ?></h3>

                    <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                    <span class="kt-subheader__desc">#XRS-45670</span>

                    <div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-hidden">
                        <input type="text" class="form-control" placeholder="Search order..." id="generalSearch">
                        <span class="kt-input-icon__icon kt-input-icon__icon--right">
                        <span><i class="flaticon2-search-1"></i></span>
                </span>
                    </div>
                </div>
                <div class="kt-subheader__toolbar">
                    <div class="kt-subheader__wrapper">
                        <a href="#" class="btn kt-subheader__btn-secondary">Today</a>

                        <a href="#" class="btn kt-subheader__btn-secondary">Month</a>

                        <a href="#" class="btn kt-subheader__btn-secondary">Year</a>

                        <a href="#" class="btn kt-subheader__btn-daterange" id="kt_dashboard_daterangepicker"
                           data-toggle="kt-tooltip" title="Select dashboard daterange" data-placement="left">
                            <span class="kt-subheader__btn-daterange-title" id="kt_dashboard_daterangepicker_title">Today</span>&nbsp;
                            <span class="kt-subheader__btn-daterange-date"
                                  id="kt_dashboard_daterangepicker_date">Aug 16</span>
                            <i class="flaticon2-calendar-1"></i>
                        </a>

                        <div class="dropdown dropdown-inline" data-toggle-="kt-tooltip" title="Quick actions"
                             data-placement="left">
                            <a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                     class="kt-svg-icon kt-svg-icon--success kt-svg-icon--md">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon id="Shape" points="0 0 24 0 24 24 0 24"/>
                                        <path
                                            d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z"
                                            id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                        <path
                                            d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z"
                                            id="Combined-Shape" fill="#000000"/>
                                    </g>
                                </svg>                        <!--<i class="flaticon2-plus"></i>-->
                            </a>
                            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">
                                <!--begin::Nav-->
                                <ul class="kt-nav">
                                    <li class="kt-nav__head">
                                        Add anything or jump to:
                                        <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right"
                                           title="Click to learn more..."></i>
                                    </li>
                                    <li class="kt-nav__separator"></li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-drop"></i>
                                            <span class="kt-nav__link-text">Order</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                                            <span class="kt-nav__link-text">Ticket</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
                                            <span class="kt-nav__link-text">Goal</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-new-email"></i>
                                            <span class="kt-nav__link-text">Support Case</span>
                                            <span class="kt-nav__link-badge">
                                        <span class="kt-badge kt-badge--brand kt-badge--rounded">5</span>
                                    </span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__separator"></li>
                                    <li class="kt-nav__foot">
                                        <a class="btn btn-label-brand btn-bold btn-sm" href="#">Upgrade plan</a>
                                        <a class="btn btn-clean btn-bold btn-sm kt-hidden" href="#"
                                           data-toggle="kt-tooltip" data-placement="right"
                                           title="Click to learn more...">Learn more</a>
                                    </li>
                                </ul>
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
                                    <?php echo e(isset($medicine) ? 'Edit Medicine Info' : 'Add Medicine'); ?>

                                </h3>
                            </div>
                        </div>

                        <!--begin::Form-->
                        <form class="kt-form kt-form--label-right"
                              action="<?php echo e(isset($medicine) ? route('medicines.update',$medicine->id) : route('medicines.store')); ?>"
                              method="POST"
                              enctype="multipart/form-data">
                            <div class="kt-portlet__body">
                                <div class="form-group form-group-last">
                                    <div class="alert alert-secondary" role="alert">
                                        <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                                        <div class="alert-text">
                                            You Can Add New Medicine From This Form.
                                        </div>
                                    </div>
                                </div>
                                <?php echo csrf_field(); ?>
                                <?php if(isset($medicine)): ?>
                                    <?php echo method_field('PUT'); ?>
                                <?php endif; ?>
                                <div class="form-group">
                                    <label>Name</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <input id="name" class="form-control" type="text" name="name"
                                               value="<?php echo e(isset($medicine) ? $medicine->name : ''); ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Instruction</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-location-arrow"></i></span></div>
                                        <textarea class="form-control" name="instruction" id="instruction" cols="30"
                                                  rows="5"><?php echo e(isset($medicine) ? $medicine->instruction : ''); ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Category</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <?php if(isset($categories)): ?>
                                            <select class="form-control" name="category" id="category">
                                                <option>Select Category</option>
                                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option
                                                        value="<?php echo e($category->id); ?>" <?php if(isset($medicine)): ?> <?php echo e($category->id == $medicine->category_id ? 'selected' : ''); ?> <?php endif; ?>><?php echo e($category->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Purchase Price</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <input id="purchase_price" class="form-control" type="number" name="purchase_price"
                                               value="<?php echo e(isset($medicine) ? $medicine->purchase_price : ''); ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Sale Price</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <input id="sale_price" class="form-control" type="number" name="sale_price"
                                               value="<?php echo e(isset($medicine) ? $medicine->sale_price : ''); ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Quantity</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <input id="quantity" class="form-control" type="number" name="quantity"
                                               value="<?php echo e(isset($medicine) ? $medicine->quantity : ''); ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Company</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                        <input id="company" class="form-control" type="text" name="company"
                                               value="<?php echo e(isset($medicine) ? $medicine->company : ''); ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Expire Date</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-calendar"></i></span></div>
                                        <input class="form-control" type="text" name="expire_date" id="expire_date"
                                               placeholder="Select Date"
                                               <?php if(isset($medicine)): ?> value="<?php echo e($medicine->expire_date); ?>"<?php endif; ?>>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-portlet__foot">
                                <div class="kt-form__actions">
                                    <input type="submit" value="<?php echo e(isset($medicine) ? 'Update' : 'Submit'); ?>"
                                           class="btn-lg btn-primary">
                                    <input type="reset" class="btn-lg btn-danger" value="Cancel">
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

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
        flatpickr('#expire_date', {
            altInput: true,
            altFormat: "F j, Y",
            dateFormat: "Y-m-d",
            minDate: "today",
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('users.admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\HOSPITAL-MANAGEMENT- LARAVEL\resources\views/medicines/create.blade.php ENDPATH**/ ?>