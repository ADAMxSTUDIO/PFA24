<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e(config('app.name')); ?> | Register</title>
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('img/icon.png')); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo e(asset('css/auth/login.css')); ?>">
</head>

<body>
    <section class="container-fluid p-5 w-25 bg-warning">
        <img id="logo" class="w-50" src="<?php echo e(asset('images/logo.png')); ?>" alt="EMSI Logo">
        <?php if(session()->has('hasPassed')): ?>
            <div class="alert alert-danger" role="alert" style="margin-top: 30px">
                <i class="fa-solid fa-circle-exclamation"></i>
                Error, <?php echo e(session('hasPassed')); ?>

            </div>
        <?php elseif(session()->has('submitted')): ?>
            <div class="alert alert-success" role="alert" style="margin-top: 30px">
                <i class="fa-solid fa-circle-check"></i>
                <?php echo e(session('submitted')); ?>

            </div>
        <?php elseif(session()->has('register.success')): ?>
            <div class="alert alert-success" role="alert" style="margin-top: 30px">
                <i class="fa-solid fa-circle-check"></i>
                <?php echo e(session('register.success')); ?>

            </div>
        <?php elseif(session()->has('register.error')): ?>
            <div class="alert alert-danger" role="alert" style="margin-top: 30px">
                <i class="fa-solid fa-circle-check"></i>
                <?php echo e(session('register.error')); ?>

            </div>
        <?php elseif(session()->has('isAdmin')): ?>
            <div class="alert alert-danger" role="alert" style="margin-top: 30px">
                <i class="fa-solid fa-circle-exclamation"></i>
                Error, <?php echo e(session('isAdmin')); ?>

            </div>
        <?php endif; ?>

        <h1 class="p-5 text-center">REGISTER NOW!</h1><br>
        <form method="POST" action="<?php echo e(route('register')); ?>">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="name" class="form-label">Name: </label>
                <input id="name" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    value="<?php echo e(old('name')); ?>" autocomplete="name" autofocus required name="name" type="name"
                    aria-describedby="nameHelp" />

                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email: </label>
                <input id="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    value="<?php echo e(old('email')); ?>" autocomplete="email" autofocus required name="email" type="email"
                    aria-describedby="emailHelp" />

                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password: </label>
                <div class="input-group">
                    <input id="password" name="password" type="password"
                        class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required
                        autocomplete="current-password" />
                    <button type="button" class="btn btn-outline-secondary" id="togglePassword">
                        <i class="fa-solid fa-eye"></i>
                    </button>
                </div>

                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback d-flex" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <p>Already joined! <a href="<?php echo e(route('loginForm')); ?>">Log in now</a></p>

            <input name="submit" type="submit" class="btn btn-light w-100 mt-4" value="Register" />
        </form>
    </section>

    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordField = document.getElementById('password');
        const eyeIcon = document.querySelector('#togglePassword i.fa-solid');

        togglePassword.addEventListener('click', function() {
            // Toggle the password field visibility
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);

            // Change the eye icon based on password field visibility
            if (type === 'text') {
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            } else {
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            }
        });
    </script>

</body>

</html>
<?php /**PATH C:\Users\ADAM\OneDrive\Documents\EMSI\3rd Grade\Phase 2\Projects\PFA\Realisation\app\resources\views/auth/register.blade.php ENDPATH**/ ?>