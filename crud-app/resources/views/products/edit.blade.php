<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>
    <form action="{{ route('product.update', $product->id) }}" method="POST">
        @csrf
        <label for="pname">Product Name:</label><br>
        <input type="text" id="pname" name="pname" value="{{ $product->pname }}" required><br><br>

        <label for="qty">Quantity:</label><br>
        <input type="number" id="qty" name="qty" value="{{ $product->qty }}" required><br><br>

        <label for="price">Price:</label><br>
        <input type="number" id="price" name="price" value="{{ $product->price }}" step="0.01" required><br><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description">{{ $product->description }}</textarea><br><br>

        <button type="submit" style="background-color: #4CAF50; color: white; padding: 8px 16px; border: none; cursor: pointer;">Update</button>
    </form>
</body>
</html>
