<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="regis" method = "post">
        @csrf
        <input type="text" name = "fname" placeholder = "F Name">
        <input type="text" name = "lname" placeholder = "L Name">
        <input type="text" name = "mname" placeholder = "M Name">
        <input type="text" name = "add" placeholder = "Address">
        <input type="date" name = "date" placeholder = "BOD">
        <input type="submit">


    </form>
</body>
</html>