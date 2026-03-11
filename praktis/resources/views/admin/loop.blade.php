<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="loop" method = "post">
        @csrf
        <input type="number" placeholder = "Row" name = "row">
        <input type="number" placeholder = "Column" name = "col">
        <input type="submit">

    </form>
</body>
</html>