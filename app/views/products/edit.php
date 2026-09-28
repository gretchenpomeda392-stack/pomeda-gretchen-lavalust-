<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background-color: #eef4fb;
            color: #1e293b;
            margin: 0;
            padding: 40px 20px;
            min-height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 650px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            border: 1px solid #d6e2f0;
            box-shadow: 0 4px 15px rgba(30, 64, 175, 0.08);
        }

        .header {
            padding-bottom: 18px;
            margin-bottom: 25px;
        }

        .header h1 {
            margin: 0;
            color: #1e3a8a;
            font-size: 28px;
            font-weight: 600;
            text-align: center;
        }

        .form-container {
            width: 100%;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            color: #1e3a8a;
            margin-bottom: 7px;
        }

        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 11px 12px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            font-family: inherit;
            font-size: 14px;
            color: #334155;
            background-color: #f8fafc;
            transition: 0.2s ease;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        textarea:focus {
            outline: none;
            border-color: #cbd5e1;
            background-color: #f8fafc;
            box-shadow: none;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        .actions {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            gap: 10px;
            margin-top: 28px;
            padding-top: 20px;
            border-top: 1px solid #e2e8f0;
        }

        .btn-submit {
            background-color: #1d4ed8;
            color: #ffffff;
            border: 1px solid #1d4ed8;
            padding: 10px 20px;
            border-radius: 6px;
            font-family: inherit;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.2s ease;
        }

        .btn-cancel {
            display: inline-block;
            color: #1d4ed8;
            background-color: #ffffff;
            text-decoration: none;
            border: 1px solid #93c5fd;
            padding: 10px 18px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 600;
            transition: 0.2s ease;
        }

        @media (max-width: 600px) {
            body {
                padding: 20px 10px;
            }

            .container {
                padding: 20px;
            }

            .header h1 {
                font-size: 24px;
            }

            .form-container {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="header">
            <div>
                <h1>Update Product</h1>
            </div>
        </div>

        <div class="form-container">

            <form action="/products/edit/<?= $product['id']; ?>" method="POST">

                <div class="form-group">
                    <label for="product_name">PRODUCT NAME:</label>

                    <input
                        type="text"
                        id="product_name"
                        name="product_name"
                        value="<?= htmlspecialchars($product['product_name']); ?>"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="description">DESCRIPTION:</label>

                    <textarea
                        id="description"
                        name="description"
                        rows="4"
                        required><?= htmlspecialchars($product['description']); ?></textarea>
                </div>

                <div class="form-group">
                    <label for="price">PRICE:</label>

                    <input
                        type="number"
                        id="price"
                        step="0.01"
                        name="price"
                        value="<?= $product['price']; ?>"
                        min="0"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="quantity">QUANTITY:</label>

                    <input
                        type="number"
                        id="quantity"
                        name="quantity"
                        value="<?= $product['quantity']; ?>"
                        min="0"
                        required
                    >
                </div>

                <div class="actions">

                    <button type="submit" class="btn-submit">
                        Update Product
                    </button>

                    <a href="/Product_Views" class="btn-cancel">
                        Back to Product List
                    </a>

                </div>

            </form>

        </div>

    </div>

</body>
</html>