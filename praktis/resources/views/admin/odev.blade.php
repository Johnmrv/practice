<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="store" method = "post">
        @csrf
        <input type="number" placeholder =  "Enter a number" name = "num" > 
        <input type="submit">
    </form>

</body>
</html>