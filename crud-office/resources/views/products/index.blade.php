<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
            margin: 0;
        padding: 0;        
        }        
    </style>
    <title>Styled Table</title>
</head>
<body>
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
    
    
    
    <table style="width: 100%; border-collapse: collapse; font-family: Arial, sans-serif;">
        <thead>
            <tr style="background-color: #4CAF50; color: white; text-align: left;">
                <th style="padding: 12px; border: 1px solid #ddd;">Product Name</th>
                <th style="padding: 12px; border: 1px solid #ddd;">Quantity</th>
                <th style="padding: 12px; border: 1px solid #ddd;">Price</th>
                <th style="padding: 12px; border: 1px solid #ddd;">Description</th>
                <th style="padding: 12px; border: 1px solid #ddd;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr style="border: 1px solid #ddd;">
                    <td style="padding: 12px; border: 1px solid #ddd;">{{ $product->pname }}</td>
                    <td style="padding: 12px; border: 1px solid #ddd;">{{ $product->qty }}</td>
                    <td style="padding: 12px; border: 1px solid #ddd;">{{ $product->price }}</td>
                    <td style="padding: 12px; border: 1px solid #ddd;">{{ $product->description }}</td>
                    <td style="padding: 12px; border: 1px solid #ddd;">
                       <button onclick="window.location.href='{{ route('product.edit', $product->id) }}'" 
        style="background-color: #008CBA; color: white; padding: 8px 16px; border: none; cursor: pointer; margin-right: 4px;">Update</button>

        <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"  style="background-color: #f44336; color: white; padding: 8px 16px; border: none; cursor: pointer;" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
