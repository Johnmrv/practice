<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation</title>
</head>
<body>
    <form action="registration" method = "POST">
            @csrf

            @if (count ($errors)>0)

            <div>
                <ul>
                    @foreach ($errors->all as $error )
                    <li >{{$error}}</li>                     
                    @endforeach
                </ul>
            </div>
                
            @endif

            <div>
                {{ session('success') }}
            </div>


            {{-- For Name --}}
            <div>
                <label >Name</label>
                <input type="text"
                        placeholder = "Name"
                        name = "name"
                        class = "form-control @error('name') is-invalid @enderror"
                        value = "{{ old ('name') }}">

                @error('name')
                    <div>{{$message}}</div>
                @enderror
            </div>

            <br>

            {{-- For Email --}}
            <div>
                <label >Email</label>
                <input type="text"
                        placeholder = "Email"
                        name = "email"
                        class = "form-control @error('email') is-invalid @enderror"
                        value = "{{ old ('email') }}">

                @error('email')
                    <div>{{$message}}</div>
                @enderror
            </div>

            <br>

            {{-- For Password --}}
            <div>
                <label >Password</label>
                <input type="text"
                        placeholder = "Password"
                        name = "password"
                        class = "form-control @error('password') is-invalid @enderror"
                        value = "{{ old ('password') }}">

                @error('password')
                    <div>{{$message}}</div>
                @enderror
            </div>

            <br>

            {{-- For Confirm Password --}}
            <div>
                <label >Confirm Password</label>
                <input type="text"
                        placeholder = "Confirm Password"
                        name = "password_confirm"
                        class = "form-control">
            </div>

            <br>
            
            <button type = "submit">Submit</button>

    </form>
</body>
</html>