<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display</title>
</head>
<body>
    <div class="container">
    <h2>Submitted Personal Information</h2>
    <hr>
    <ul>
        <li><strong>Full Name:</strong> {{ $data['first_name'] }} {{ $data['last_name'] }}</li>
        <li><strong>Sex:</strong> {{ $data['sex'] }}</li>
        <li><strong>Mobile Phone:</strong> {{ $data['mobile'] }}</li>
        <li><strong>Telephone No:</strong> {{ $data['tel_no'] ?? 'N/A' }}</li>
        <li><strong>Birth Date:</strong> {{ $data['birth_date'] }}</li>
        <li><strong>Address:</strong> {{ $data['address'] ?? 'N/A' }}</li>
        <li><strong>Email:</strong> {{ $data['email'] ?? 'N/A' }}</li>
        <li><strong>Website:</strong> <a href="{{ $data['website'] }}">{{ $data['website'] ?? 'N/A' }}</a></li>
    </ul>

    <a href="{{ url()->previous() }}">Go Back</a>
</div>
</body>
</html>