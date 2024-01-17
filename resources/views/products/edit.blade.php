<!-- resources/views/products/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Product - {{ $product->name }}</h1>

    <form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $product->name }}" required>
        
        <label for="description">Description:</label>
        <textarea name="description" required>{{ $product->description }}</textarea>
        
        <label for="price">Price:</label>
        <input type="number" name="price" value="{{ $product->price }}" required>
        
        <label for="category_id">Category:</label>
        <select name="category_id" required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
            @endforeach
        </select>
        
        <label for="image_path">Image:</label>
        <input type="file" name="image_path" accept="image/*">
        
        <button type="submit">Update Product</button>
    </form>
@endsection
