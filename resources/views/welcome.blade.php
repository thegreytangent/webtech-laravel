<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table>
        <tr>
            <th>Item Name</th>
            <th>Item Qty</th>
        </tr>
        @foreach (Item::all() as $item )
        <tr>
            <td></td>
            <td></td>
        </tr>
        @endforeach
      
    </table>

</body>
</html>
