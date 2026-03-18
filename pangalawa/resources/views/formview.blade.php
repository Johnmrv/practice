<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms View</title>
</head>
<body>
    
    <form action = "registration" method = "POST">
        @csrf

        @if (count ($errors) > 0)

            <div>
                <ul>
                    @foreach ($errors as $error )
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>

        @endif

            <div>
                {{ session('success') }}
            </div>


            {{-- For Name --}}
            <div>
                <label>Name</label>
                <input type="text"
                        placeholder = "Your name Here"
                        name = "name"
                        class = "form-control @error('name')@enderror"
                        value = "{{ old ('name') }}"
                        >

                        @error('name')
                            <div>{{$message}}</div>           
                        @enderror
            </div>

            {{-- For Email --}}

            <div>
                <label>Email</label>
                <input type="email"
                    placeholder = "Type your email here"
                    name = "email"
                    class = "form-control @error('email')@enderror"
                    value = "{{ old ('email') }}">

                    @error('email')
                        <div>{{$message}}</div>
                    @enderror
            </div>






            {{-- For Birthdate --}}

            <div>
                <label>Birthdate</label>
                <input type="date"
                        placeholder = "Your Birthdate Here"
                        name = "bdate"
                        class = "form-control @error('bdate')@enderror"
                        value = "{{ old ('bdate') }}"
                >

                @error('bdate')
                    <div>{{$message}}</div>
                @enderror
            </div>




            {{-- For Address --}}
            <div>
                <label>Address</label>
                    <input type="text"
                        placeholder = "Address Here"
                        name = "addr"
                        class ="form-control @error('addr')@enderror"
                        value = "{{ old ('addr') }}"
                    >

                    @error('addr')
                        <div>{{$message}}</div>    

                    @enderror
            </div>

            <br>
            <input type="submit">


    </form>

</body>
</html>