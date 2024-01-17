


@extends('layouts.app')

@section('content')
    <h1>Create Product</h1>

    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        
        <label for="description">Description:</label>
        <textarea name="description" required></textarea>
        
        <label for="price">Price:</label>
        <input type="number" name="price" required>
        
        <label for="category_id">Category:</label>
        <select name="category_id" required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        
        <label for="image_path">Image:</label>
        <input type="file" name="image_path" accept="image/*" required>
        
        <button type="submit">Create Product</button>
    </form>
@endsection
