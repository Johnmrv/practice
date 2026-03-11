<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Here</title>
</head>
<body>
    <h2>Galing sa form</h2>
    <hr>
    <ul>
        <li>Full Name:  {{ $data['fname'] }} , {{ $data['mname'] }} , {{ $data['lname'] }} </li>
        <li>Address:  {{ $data['add'] }} </li>
        <li>Birthdate: {{$data['date']}}</li>

    </ul>
</body>
</html>