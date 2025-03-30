    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body style="font-family: Arial, sans-serif; background-color: #f4f4f9; padding: 20px;">

        <h2 style="text-align: center; color: #333;">Product Entry Form</h2>

        <!-- handling form in products.store controller writing them in action dows that by giving post request    -->


        <form method="post" action="{{ route('products.store') }}" style="max-width: 400px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px; background-color: #fff;">
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

            <button type="submit" style="width: 100%; padding: 10px; background-color: #28a745; color: white; border: none; border-radius: 4px; font-size: 16px; cursor: pointer;">
                Submit
            </button>
        </form>

    </body>
    </html>