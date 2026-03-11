<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registration</h1><br>
    <form action="{{ route('register.store') }}" method="post">
        @csrf
        @if (count($errors) > 0)
        
        <div>
            <ul>
                @foreach ( $errors->all() as $error )
                <li  style="color:red">{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        
        {{-- @if (session('success')) --}}
        <div style="color:green">
            {{ session ('success') }}
        </div>
        
        {{-- @endif --}}

        <div>
            <label >Name</label>
            <input type="text"
                        placeholder = "Name"
                        name ="name"
                        class = "form-control @error('name') is-invalid @enderror"
                        value = "{{ old('name') }}">

                        @error('name')
                            <div style="color:red">
                                {{ $message  }}
                            </div>
                        @enderror
        </div><br>
            
        <div>
            <label >Email</label>
            <input type="text"
                        placeholder = "Email"
                        name ="email"
                        class = "form-control @error('email') is-invalid @enderror"
                        value = "{{ old('email') }}">
                        @error('email')
                                <div  style="color:red">
                                    {{ $message  }}
                                </div>
                            @enderror
        </div><br>
        <div>
            <label >Password</label>
            <input type="text"
                        placeholder = "Password"
                        name ="password"
                        class = "form-control @error('password') is-invalid @enderror"
                        value = "{{ old('password') }}">

                        @error('password')
                            <div  style="color:red">
                                {{ $message  }}
                            </div>
                        @enderror
        </div><br>

        <div>
            <label >Confirm Password</label>
            <input type="text"
                        placeholder = "Confirm Password"
                        name ="password_confirmation"
                        class = "form-control"
                        >
        </div><br>

        <input type="submit">


    </form>
</body>
</html>