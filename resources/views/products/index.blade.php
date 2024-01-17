<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
    <link rel="stylesheet" href="{{ asset('css/products.css') }}">
</head>
<body>
<nav>
        <!-- Remplacez le chemin de l'image par le chemin réel de votre logo -->
        <img src="path/to/logo.png" alt="SmartShop Logo">
        <select>
            <option value="desktop">Desktop</option>
            <option value="web-cameras">Web Cameras</option>
            <option value="cameras">Cameras</option>
            <option value="components">Components</option>
            <option value="phones-pdas">Phones PDAs</option>
            <option value="laptop">Laptop</option>
        </select>
        <input type="text" placeholder="Search">
        <ul>
            <li><a href="/home">Home</a></li>
            <li><a href="/products/index">Products</a></li>
            <li><a href="/blogs">Blogs</a></li>
            <li><a href="/contact-us">Contact Us</a></li>
            <li><a href="/brands">Brands</a></li>
        </ul>
    </nav>

    <h1>All Products</h1>

    <div class="products-container">
        @forelse ($products as $product)
            <div class="product">
                <img src="{{ asset($product->image_path) }}" alt="{{ $product->name }}">
                <h3>{{ $product->name }}</h3>
                <p>Category: {{ $product->category->name }}</p>
                <p>Price: {{ $product->price }}</p>
                <form action="{{ route('cart.add', $product->id) }}" method="post">
                    @csrf
                    <button type="submit">Add to Cart</button>
                </form>
            </div>
        @empty
            <p>No products available.</p>
        @endforelse
        <a href="{{ route('products.create') }}" class="add-product-link">Add Product</a>
    </div>
</body>
</html>
