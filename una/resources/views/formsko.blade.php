<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormsHere</title>
</head>
<body>
    <form action="store" method="post">

        @csrf

            <input type="text" name = "fname" placeholder = "First Name">
            <input type="text" name = "lname" placeholder = "Last Name">
            <input type="text" name = "mname" placeholder = "Middle Name">
            <input type="text" name = "add" placeholder = "Address">
            <input type="date" name = "date" placeholder = "DOB">

            <button type = "submit"> Submit </button>



    </form>
</body>
</html>