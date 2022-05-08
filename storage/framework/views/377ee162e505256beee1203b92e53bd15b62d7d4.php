<?php $__env->startSection('styles'); ?>
    <link href="<?php echo e(url('adminpanel')); ?>/assets/vendors/custom/datatables/datatables.bundle.css" rel="stylesheet"
          type="text/css"/>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <!-- begin:: Content -->
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <!-- begin:: Content Head -->
        <div class="kt-subheader  kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">

                    <h3 class="kt-subheader__title">Departments List</h3>

                    <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                    <span class="kt-subheader__desc">#Page-ID</span>

                </div>
            </div>
        </div>
        <!-- end:: Content Head -->

        <!-- begin:: Container -->
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <!-- begin:: Alert -->
            <?php if(session()->has('success')): ?>
                <div class="alert alert-light alert-elevate" role="alert">
                    <div class="alert-icon"><i class="flaticon2-check-mark kt-font-success"></i></div>
                    <div class="alert-text">
                        <?php echo e(session()->get('success')); ?>

                    </div>
                </div>
        <?php endif; ?>
        <!-- end:: Alert -->

            <!-- begin:: Portlet -->
            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__head kt-portlet__head--lg">
                    <div class="kt-portlet__head-label">
			<span class="kt-portlet__head-icon">
				<i class="kt-font-brand flaticon2-line-chart"></i>
			</span>
                        <h3 class="kt-portlet__head-title">
                            Departments List
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-wrapper">
                            <div class="kt-portlet__head-actions">
                                <a href="<?php echo e(route('departments.create')); ?>" class="btn btn-brand btn-elevate btn-icon-sm">
                                    <i class="la la-plus"></i>
                                    Add Department
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="kt-portlet__body">
                    <!--begin: Datatable -->
                    <table class="table table-striped- table-bordered table-hover table-checkable kt_table_1">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Actions</th>
                            <th>Delete</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($department->name); ?></td>
                                <td><?php echo e($department->description); ?></td>

                                <td>
                                     <span class="dropdown">
                                    <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                                       <i class="la la-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="<?php echo e(route('departments.edit',$department->id)); ?>"><i
                                                class="fa fa-edit"></i>Edit Details</a>
                                        <a href="<?php echo e(route('departments.show',$department->id)); ?>" class="dropdown-item"><i
                                                class="la la-eye"></i>Display</a>
                                    </div>
                                     </span>
                                </td>
                                <td>
                                    <form action="<?php echo e(route('departments.destroy',$department->id)); ?>" method="post">
                                        <?php echo method_field('DELETE'); ?>
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-sm btn-clean btn-icon btn-icon-md"><i
                                                class="fa fa-trash-alt"></i></button>
                                    </form>
                                </td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>

                    </table>
                    <!--end: Datatable -->
                </div>
            </div>
            <!-- end:: Portlet -->
        </div>
        <!-- end:: Container -->
    </div>
    <!-- begin:: Content -->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(url('adminpanel')); ?>/assets/vendors/custom/datatables/datatables.bundle.js"
            type="text/javascript"></script>
    <script src="<?php echo e(url('adminpanel')); ?>/assets/js/demo3/pages/crud/datatables/advanced/multiple-controls.js"
            type="text/javascript"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('users.admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp2\htdocs\HOSPITAL-MANAGEMENT- LARAVEL\resources\views/departments/list.blade.php ENDPATH**/ ?>