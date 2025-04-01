<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload Form</title>
    <style>
        *{
            margin: 0;
        padding: 0;        
        }        
    </style>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f9; padding: 20px;">
    <nav style="background-color: #2d3748; padding: 16px;">
        <div style="max-width: 1200px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center;">
            <!-- Logo -->
            <a href="/" style="color: white; font-size: 20px; font-weight: bold; text-decoration: none;">
                MyApp
            </a>
            
            <!-- Navbar Links -->
            <ul style="list-style: none; display: flex; gap: 16px; margin: 0; padding: 0;">
                <li>
                    <a href="/product" style="color: #cbd5e0; text-decoration: none; font-weight: 500;"
                       onmouseover="this.style.color='#63b3ed'" onmouseout="this.style.color='#cbd5e0'">
                        Products
                    </a>
                </li>
                <li>
                    <a href="/product/create" style="color: #cbd5e0; text-decoration: none; font-weight: 500;"
                       onmouseover="this.style.color='#63b3ed'" onmouseout="this.style.color='#cbd5e0'">
                        Add New Product
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    
    <h2 style="text-align: center; color: #333;">Product Entry Form with Image Upload</h2>

    <!-- Form handling with image upload action in products.store controller -->
    <form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data" style="max-width: 400px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px; background-color: #fff;">
        @csrf
        @method('POST')

        <label for="pname" style="display: block; margin-bottom: 10px; font-weight: bold; color: #555;">Product Name</label>
        <input type="text" id="pname" name="pname" style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;" placeholder="Enter product name" required>

        <label for="qty" style="display: block; margin-bottom: 10px; font-weight: bold; color: #555;">Quantity</label>
        <input type="number" id="qty" name="qty" style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;" placeholder="Enter quantity" required>

        <label for="price" style="display: block; margin-bottom: 10px; font-weight: bold; color: #555;">Price</label>
        <input type="number" step="0.01" id="price" name="price" style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;" placeholder="Enter price" required>

        <label for="description" style="display: block; margin-bottom: 10px; font-weight: bold; color: #555;">Description</label>
        <textarea id="description" name="description" style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;" placeholder="Enter description" required></textarea>

        <label for="image" style="display: block; margin-bottom: 10px; font-weight: bold; color: #555;">Upload Image</label>
        <input type="file" id="image" name="image" style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;" accept="image/*" required>

        <button type="submit" style="width: 100%; padding: 10px; background-color: #007bff; color: white; border: none; border-radius: 4px; font-size: 16px; cursor: pointer;">
            Submit
        </button>
    </form>

</body>
</html>
