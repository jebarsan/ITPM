<?php $__env->startSection('content'); ?>
    <!-- begin:: Content -->
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
        <!-- begin:: Content Head -->
        <div class="kt-subheader  kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">

                    <h3 class="kt-subheader__title">Empty Page</h3>

                    <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                    <span class="kt-subheader__desc">#XRS-45670</span>

                    <a href="#" class="btn btn-label-warning btn-bold btn-sm btn-icon-h kt-margin-l-10">
                        Add New
                    </a>

                    <div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-hidden">
                        <input type="text" class="form-control" placeholder="Search order..." id="generalSearch">
                        <span class="kt-input-icon__icon kt-input-icon__icon--right">
                        <span><i class="flaticon2-search-1"></i></span>
                </span>
                    </div>
                </div>
                
        <!-- end:: Content Head -->

        <!-- begin:: Content Container-->
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            Content goes here...
            <div id="example"></div>
        </div>
        <!-- end:: Content Container-->
    </div>
    <!-- begin:: Content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('users.admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Jebarshan\Desktop\HOSPITAL-MANAGEMENT- LARAVEL\resources\views/users/admin/dashboard.blade.php ENDPATH**/ ?>