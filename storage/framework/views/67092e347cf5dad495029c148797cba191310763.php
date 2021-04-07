

<?php $__env->startSection('content'); ?>
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Edit Category</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('admin')); ?>"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item">Category</li>
                            <li class="breadcrumb-item active">Edit Category</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-md-12">
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="body">
                            <form action="<?php echo e(route('category.update',$category->id)); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('patch'); ?>
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Category name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Title" name="title" value="<?php echo e($category->title); ?>" id="categoryTitle">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                        <label for="">Category URL<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="blog-slug" name="slug" value="<?php echo e($category->slug); ?>" id="categorySlug">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Description</label>
                                            <textarea id="description" class="form-control" placeholder="Write some text..." name="description"><?php echo e($category->description); ?></textarea>
                                        </div>
                                    </div>









                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Is parent : </label>
                                            <input type="checkbox" id="is_parent" name="is_parent" value="1" <?php echo e($category->is_parent==1 ? 'checked' : ''); ?> data-toggle="switchbutton"  data-size="sm">


                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="onMenu">On Menu : </label>
                                            <input type="checkbox" id="onMenu" name="on_menu" value="1" data-toggle="switchbutton" data-size="sm" <?php echo e($category->on_menu==1 ? 'checked' : ''); ?>>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-sm-12 <?php echo e($category->is_parent==1 ? 'd-none' : ''); ?>" id="parent_cat_div">
                                        <label for="parent_id">Parent Category</label>
                                        <select name="parent_id" id="parent_cat" class="form-control show-tick">
                                            <option value="">-- Parent Category --</option>
                                            <?php $__currentLoopData = $parent_cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pcats): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($pcats->id); ?>" <?php echo e($pcats->id==$category->parent_id ? 'selected' : ''); ?>><?php echo e(ucfirst($pcats->title)); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="">Photo</label>
                                            <input type="file" name="photo" class="dropify" data-height="150" value="<?php echo e(asset($category->image_path)); ?>" data-default-file="<?php echo e(asset($category->image_path)); ?>">
                                        </div>
                                    </div>

                                </div>

                                <button type="submit" class="btn btn-success">Update</button>
                                <button type="reset" class="btn btn-outline-secondary">Cancel</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
        // $('#lfm').filemanager('image');
    </script>

    <script>
        $(document).ready(function() {
            $('#description').summernote();
        });
        $("#categoryTitle").focusout(function(e){
            var categoryTitle = $("#categoryTitle").val();
            var createdSlug = convertToSlug(categoryTitle.trim());
            var blogSlug = $("#categorySlug").val(createdSlug);
        });

        function convertToSlug(Text){
            return Text
                .toLowerCase()
                .replace(/[^\w ]+/g,'')
                .replace(/ +/g,'-')
                ;
        }
    </script>
    <script>
        $('#is_parent').change(function(e){
            e.preventDefault();
            var is_checked=$('#is_parent').prop('checked');
            // alert(is_checked);
            if(is_checked){
                $('#parent_cat_div').addClass('d-none');
                $('#parent_cat').val('');
            }
            else{
                $('#parent_cat_div').removeClass('d-none');
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\All_projects\indian_friend\gwsmed\resources\views/backend/category/edit.blade.php ENDPATH**/ ?>