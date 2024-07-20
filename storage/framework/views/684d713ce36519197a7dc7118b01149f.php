<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e(config('app.name')); ?> | Admin Dashboard</title>
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('images/logo.png')); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo e(asset('css/admin/index.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/layouts/adminPanel.css')); ?>">
</head>

<body>
    <?php echo $__env->make('layouts.adminPanel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="container">
        <h1 class="text-center bg-light"><b>ADMIN DASHBOARD</b></h1>

        <?php echo $__env->make('layouts.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="product">
            <div class="alert alert-success d-flex align-items-center justify-content-between" role="alert">
                <h5 style="font-weight: 700">PRODUCT SECTION</h5>
                <a href="<?php echo e(route('admin.product.create')); ?>" class="btn btn-success">ADD NEW PRODUCT</a>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Poster</th>
                        <th scope="col">Label</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Category</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <th scope="row"><?php echo e($product->id); ?></th>
                        <td> <img src="<?php echo e(asset('storage/' . $product->poster)); ?>" alt="Product Image" style="width: 60px; height: 80px"></td>
                        <td><?php echo e($product->label); ?></td>
                        <td><?php echo e($product->description); ?></td>
                        <td><?php echo e($product->price); ?></td>
                        <td><?php echo e($product->category_id); ?> - <?php echo e($product->category->label); ?></td>
                        <td>
                            <a class="btn btn-success w-100" href="<?php echo e(route('admin.product.edit', $product->id)); ?>">
                                <i class="fa-solid fa-pen"></i>
                                <strong> Edit</strong>
                            </a>
                            <a class="btn btn-danger w-100 mt-1" href="<?php echo e(route('admin.product.destroy', $product->id)); ?>">
                                <i class="fa-solid fa-trash"></i>
                                <strong> Delete</strong>
                            </a>    
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <th colspan="7">No product has been added!</th>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div><br>

        <div class="category">
            <div class="alert alert-success d-flex align-items-center justify-content-between mt-5" role="alert">
                <h5 style="font-weight: 700">CATEGORY SECTION</h5>
                <a href="<?php echo e(route('admin.category.create')); ?>" class="btn btn-success">ADD NEW CATEGORY</a>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Label</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <th scope="row"><?php echo e($category->id); ?></th>
                        <td><?php echo e($category->label); ?></td>
                        <td>
                            <a class="btn btn-success" href="<?php echo e(route('admin.category.edit', $category->id)); ?>">
                                <i class="fa-solid fa-pen"></i>
                                <strong>Edit</strong>
                            </a>
                            <a class="btn btn-danger" href="<?php echo e(route('admin.category.destroy', $category->id)); ?>">
                                <i class="fa-solid fa-pen"></i>
                                <strong>Delete</strong>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <th colspan="3">No category has been added!</th>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div><br>

    </section>

</body>

</html>
<?php /**PATH C:\Users\ADAM\OneDrive\Documents\EMSI\3rd Grade\Phase 2\Projects\PFA\Realisation\app\resources\views/admin/index.blade.php ENDPATH**/ ?>