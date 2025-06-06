<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Table</title>
</head>
<body>
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

                        <button style="background-color: #f44336; color: white; padding: 8px 16px; border: none; cursor: pointer;">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
