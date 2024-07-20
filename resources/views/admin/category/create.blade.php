<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} | Category - Create</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/icon.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/layouts/adminPanel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/crud.css') }}">
</head>

<body>
</body>
@include('layouts.adminPanel')

<section class="container mb-5 w-50">
    <h1 class="text-warning text-center m-5">Category - Create</h1>

    <form action="{{ route('admin.category.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="label" class="form-label text-warning">Label</label>
            <input type="text" class="form-control" id="label" name="label" value="{{ old('label') }}"
                autofocus>
        </div>

        <input type="submit" class="btn btn-warning w-100" value="Store">
    </form>
</section>

</html>
