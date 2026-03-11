<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 6</title>
</head>
<body>
   <form action="md3" method="POST">
    @csrf
    <h3>Personal Information</h3>
    <hr>

    <p>First Name: 
        <input type="text" name="first_name" maxlength="50" required> 
    </p>

    <p>Last Name: 
        <input type="text" name="last_name" maxlength="50" required> 
    </p>

    <p>Sex: 
        <input type="radio" name="sex" value="Male" id="male"> <label for="male">Male</label>
        <input type="radio" name="sex" value="Female" id="female"> <label for="female">Female</label>
    </p>

    <p>Mobile Phone: 
        <input type="tel" name="mobile" placeholder="0998-XXX-XXX" 
               pattern="09[0-9]{2}-[0-9]{3}-[0-9]{3}" >
    </p>

    <p>Tel No. 
        <input type="text" name="tel_no" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
    </p>

    <p>Birth date: 
        <input type="date" name="birth_date" required> 
    </p>

    <p>Address: 
        <input type="text" name="address" maxlength="100" style="width: 300px;"> 
    </p>

    <p>Email: 
        <input type="email" name="email"> 
    </p>

    <p>Website: 
        <input type="url" name="website" placeholder="https://example.com"> 
    </p>

    <button type="submit">Submit</button>
</form>
</body>
</html>