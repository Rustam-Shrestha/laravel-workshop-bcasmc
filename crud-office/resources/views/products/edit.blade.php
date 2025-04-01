<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen">
    <!-- Navbar -->
    <nav class="bg-gray-800 p-4 shadow-md">
        <div class="container mx-auto flex items-center justify-between">
            <a href="/" class="text-white text-lg font-bold">MyApp</a>
            <ul class="flex space-x-4">
                <li>
                    <a href="/product" class="text-gray-300 hover:text-white transition">Products</a>
                </li>
                <li>
                    <a href="/product/create" class="text-gray-300 hover:text-white transition">Add New Product</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="flex justify-center items-center mt-10">
        <div class="bg-white p-8 rounded shadow-lg w-full max-w-md">
            <h1 class="text-2xl font-bold mb-6 text-center text-gray-700">Edit Product</h1>
            <form action="{{ route('product.update', $product->id) }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="pname" class="block text-gray-600 font-semibold mb-1">Product Name:</label>
                    <input type="text" id="pname" name="pname" value="{{ $product->pname }}" required
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label for="qty" class="block text-gray-600 font-semibold mb-1">Quantity:</label>
                    <input type="number" id="qty" name="qty" value="{{ $product->qty }}" required
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label for="price" class="block text-gray-600 font-semibold mb-1">Price:</label>
                    <input type="number" id="price" name="price" value="{{ $product->price }}" step="0.01" required
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label for="description" class="block text-gray-600 font-semibold mb-1">Description:</label>
                    <textarea id="description" name="description"
                        class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">{{ $product->description }}</textarea>
                </div>
                <button type="submit" 
                    class="w-full bg-blue-500 text-white font-semibold py-2 rounded-md hover:bg-blue-600 transition">
                    Update
                </button>
            </form>
        </div>
    </div>
</body>
</html>
