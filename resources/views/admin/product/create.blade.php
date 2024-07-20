<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} | Product - Create</title>
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
    <h1 class="text-warning text-center m-5">Product - Create</h1>

    <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="label" class="form-label text-warning">Label</label>
            <input type="text" class="form-control" id="label" name="label" value="{{ old('label') }}"
                autofocus>
        </div>
        <div class="mb-3">
            <label for="description" class="form-description text-warning">Description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}"
                autofocus>
        </div>
        <div class="mb-3">
            <label for="price" class="form-price text-warning">Price</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}"
                autofocus>
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-quantity text-warning">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity" value="{{ old('quantity') }}"
                autofocus>
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text text-warning" for="inputGroupFile01">Upload Picture</label>
            <input type="file" class="form-control" id="inputGroupFile01" name="poster" accept="image/jpg, image/gng,image/jpeg,image/gif">
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label text-warning">Category</label>
            <select class="form-select" aria-label="Default select example" name="category_id">
                <option selected disabled>Choose the corresponding category to this product</option>
                @forelse ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->id }} - {{ $category->label }}</option>
                @empty
                    <option value="0">No category is inserted yet!</option>
                @endforelse
            </select>
        </div>
        <input type="submit" class="btn btn-warning w-100" value="Store">
    </form>
</section>

</html>
