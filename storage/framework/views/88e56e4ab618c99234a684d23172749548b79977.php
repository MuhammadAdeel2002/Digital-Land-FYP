<?php $__env->startSection('title'); ?>
    <?php echo e('Pay with '.optional($order->gateway)->name ?? ''); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="transaction-history mt-4">
        <div class="container">
            <div class="row">
                <div class="col ms-2">
                    <div class="header-text-full">
                        <h3 class="dashboard_breadcurmb_heading"><?php echo e('Pay with '.optional($order->gateway)->name ?? ''); ?></h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card secbg br-4">
                        <div class="card-body bg-light profile-setting">
                            <div class="row ">
                                <div class="col-md-12">
                                    <h4 class="title text-center"><?php echo e(trans('Please follow the instruction below')); ?></h4>
                                    <p class="text-center mt-2 "><?php echo e(trans('You have requested to deposit')); ?>  <b class="text--base"><?php echo e(getAmount($order->amount)); ?>

                                            <?php echo e($basic->currency); ?></b> , <?php echo e(trans('Please pay')); ?>

                                        <b class="text--base"><?php echo e(getAmount($order->final_amount)); ?> <?php echo e($order->gateway_currency); ?></b>  <?php echo e(trans('for successful payment')); ?>

                                    </p>

                                    <p class="mt-2 ">
                                        <?php echo optional($order->gateway)->note; ?>
                                    </p>


                                    <form action="" method="post" enctype="multipart/form-data"
                                          class="form-row  preview-form">
                                        <?php echo csrf_field(); ?>
                                        <?php if(optional($order->gateway)->parameters): ?>
                                            <?php $__currentLoopData = $order->gateway->parameters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($v->type == "text"): ?>
                                                    <div class="col-md-12 mt-2">
                                                        <div class="form-group input-box">
                                                            <label><?php echo e(trans($v->field_level)); ?> <?php if($v->validation == 'required'): ?> <span class="text--danger">*</span>  <?php endif; ?> </label>
                                                            <input type="text" name="<?php echo e($k); ?>"  class="form-control" <?php if($v->validation == "required"): ?> required <?php endif; ?>>
                                                            <?php if($errors->has($k)): ?>
                                                                <span class="text--danger"><?php echo e(trans($errors->first($k))); ?></span>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                <?php elseif($v->type == "textarea"): ?>
                                                    <div class="col-md-12 mt-2">
                                                        <div class="form-group input-box">
                                                            <label><?php echo e(trans($v->field_level)); ?> <?php if($v->validation == 'required'): ?> <span class="text--danger">*</span>  <?php endif; ?> </label>
                                                            <textarea name="<?php echo e($k); ?>" class="form-control " rows="3" <?php if($v->validation == "required"): ?> required <?php endif; ?>></textarea>
                                                            <?php if($errors->has($k)): ?>
                                                                <span class="text--danger"><?php echo e(trans($errors->first($k))); ?></span>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                <?php elseif($v->type == "file"): ?>
                                                    <div class="col-md-12 mt-2">
                                                        <label><?php echo e(trans($v->field_level)); ?> <?php if($v->validation == 'required'): ?> <span class="text--danger">*</span>  <?php endif; ?> </label>

                                                        <div class="form-group">
                                                            <div class="fileinput fileinput-new " data-provides="fileinput">
                                                                <div class="fileinput-new thumbnail withdraw-thumbnail"
                                                                     data-trigger="fileinput">
                                                                    <img class="w-150px"
                                                                         src="<?php echo e(getFile(config('location.default'))); ?>"
                                                                         alt="...">
                                                                </div>
                                                                <div class="fileinput-preview fileinput-exists thumbnail wh-200-150 "></div>

                                                                <div class="img-input-div">
                                                                <span class="btn btn-success btn-file">
                                                                    <span
                                                                        class="fileinput-new "> <?php echo app('translator')->get('Select'); ?> <?php echo e($v->field_level); ?></span>
                                                                    <span
                                                                        class="fileinput-exists"> <?php echo app('translator')->get('Change'); ?></span>
                                                                    <input type="file" name="<?php echo e($k); ?>" accept="image/*"
                                                                           <?php if($v->validation == "required"): ?> required <?php endif; ?>>
                                                                </span>
                                                                    <a href="#" class="btn btn-danger fileinput-exists"
                                                                       data-dismiss="fileinput"> <?php echo app('translator')->get('Remove'); ?></a>
                                                                </div>

                                                            </div>
                                                            <?php if($errors->has($k)): ?>
                                                                <br>
                                                                <span
                                                                    class="text--danger"><?php echo e(__($errors->first($k))); ?></span>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>

                                        <div class="col-md-12 ">
                                            <div class=" form-group">
                                                <button type="submit" class="btn-custom w-100 mt-3">
                                                    <span><?php echo app('translator')->get('Confirm Now'); ?></span>
                                                </button>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php $__env->startPush('css-lib'); ?>
        <link rel="stylesheet" href="<?php echo e(asset($themeTrue.'css/bootstrap-fileinput.css')); ?>">
    <?php $__env->stopPush(); ?>

    <?php $__env->startPush('extra-js'); ?>
        <script src="<?php echo e(asset($themeTrue.'js/bootstrap-fileinput.js')); ?>"></script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($theme.'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\digital land project\digitalland\resources\views/themes/original/user/payment/manual.blade.php ENDPATH**/ ?>