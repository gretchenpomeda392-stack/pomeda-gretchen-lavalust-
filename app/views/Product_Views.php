<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Views</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #eef4fb;
            color: #1e293b;
            margin: 0;
            padding: 40px 20px;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            border: 1px solid #d6e2f0;
            box-shadow: 0 4px 15px rgba(30, 64, 175, 0.08);
        }

        .header h1 {
            display: flex;
            justify-content: center;
            align-items: center;
            padding-bottom: 18px;
            margin-bottom: 25px;
            color: #1E3A8A;
        }

        .btn {
            display: inline-block;
            padding: 9px 17px;
            text-decoration: none;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 600;
            transition: 0.2s ease;
        }

        .btn-add {
            background-color: #1d4ed8;
            color: #ffffff;
            border: 1px solid #1d4ed8;
        }

        .table-wrapper {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 5px;
            border: 1px solid #dbe7f3;
        }

        th {
            background-color: #1e3a8a;
            color: #ffffff;
            text-align: center;
            padding: 14px 15px;
            font-size: 14px;
            font-weight: 600;
        }

        td {
            padding: 14px 15px;
            border-bottom: 1px solid #e2e8f0;
            font-size: 14px;
            color: #334155;
            text-align: center;
        }

        .action-link {
            text-decoration: none;
            font-weight: 600;
            margin-right: 12px;
            font-size: 14px;
        }

        .link-edit {
            color: #7199ef;
        }

        .link-delete {
            color: #130172;
        }

        .addproduct {
            display: flex;
            justify-content: flex-start;
            margin-top: 20px;
        }

    </style>
</head>

<body>

    <div class="container">
        <div class="header">
            <div>
                <h1>Welcome to Products View</h1>
            </div>
        </div>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>PRODUCT NAME</th>
                        <th>DESCRIPTION</th>
                        <th>PRICE</th>
                        <th>QUANTITY</th>
                        <th>ACTION</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if (!empty($products)): ?>

                        <?php foreach ($products as $p): ?>
                            <tr>
                                <td><?= $p['id']; ?></td>

                                <td>
                                    <?= htmlspecialchars($p['product_name']); ?>
                                </td>

                                <td>
                                    <?= htmlspecialchars($p['description']); ?>
                                </td>

                                <td>
                                    ₱<?= number_format($p['price'], 2); ?>
                                </td>

                                <td>
                                    <?= $p['quantity']; ?>
                                </td>

                                <td>
                                    <a
                                        href="/products/edit/<?= $p['id']; ?>"class="action-link link-edit">
                                        Edit
                                    </a>
                                    
                                    <a
                                        href="/products/delete/<?= $p['id']; ?>"class="action-link link-delete"
                                        onclick="return confirm('Are you sure you want to delete this product?');">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    <?php else: ?>

                        <tr>
                            <td colspan="6" class="no-products">
                                No products found.
                            </td>
                        </tr>

                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <div class="addproduct">
            <a href="/products/create" class="btn btn-add">
                Create New Product
            </a>
        </div>
    </div>
</body>
</html>