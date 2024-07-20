<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e(config('app.name')); ?> | Product - Edit</title>
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('img/icon.png')); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo e(asset('css/layouts/adminPanel.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/admin/crud.css')); ?>">
</head>

<body>
</body>
<?php echo $__env->make('layouts.adminPanel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section class="container mb-5 w-50">
    <h1 class="text-warning text-center m-5">Product - Edit</h1>

    <form action="<?php echo e(route('admin.product.update', $product->id)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3">
            <label for="label" class="form-label text-warning">Label</label>
            <input type="text" class="form-control" id="label" name="label" value="<?php echo e($product->label); ?>"
                autofocus>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label text-warning">Description</description>
            <textarea class="form-control" id="description" name="description" style="width:48vw;"><?php echo e($product->description); ?></textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label text-warning">Price</price>
            <input type="text" class="form-control w-100" id="price" name="price" value="<?php echo e($product->price); ?>">
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label text-warning">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity" value="<?php echo e($product->quantity); ?>">
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text text-warning" for="inputGroupFile01">Upload Picture</label>
            <input type="file" class="form-control" id="inputGroupFile01" name="poster" accept="image/jpg, image/gng,image/jpeg,image/gif">
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label text-warning">Category</label>
            <select class="form-select" aria-label="Default select example" name="category_id">
                <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php if($category->id === $product->category->id): ?>
                        <option selected value="<?php echo e($category->id); ?>"><?php echo e($category->id); ?> - <?php echo e($category->label); ?>

                        </option>
                    <?php else: ?>
                        <option value="<?php echo e($category->id); ?>"><?php echo e($category->id); ?> - <?php echo e($category->label); ?></option>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <option>No question is inserted yet!</option>
                <?php endif; ?>
            </select>
        </div>

        <input type="submit" class="btn btn-warning w-100" value="Update">
    </form>
</section>

</html>
<?php /**PATH C:\Users\ADAM\OneDrive\Documents\EMSI\3rd Grade\Phase 2\Projects\PFA\Realisation\app\resources\views/admin/product/edit.blade.php ENDPATH**/ ?>