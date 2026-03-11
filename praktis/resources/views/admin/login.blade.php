<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cred" method = "post">
        @csrf
        <input type="text" name = "user" placeholder = "Username">
        <input type="text" name = "pass" placeholder = "Password">
        <input type="submit">


    </form>
</body>
</html>