{{-- <h1>
    <p>If method</p>
    <br>
    <font size = '5' face = 'Arial'>
        @if (($id)==1)
            student is equal to 1.
        @else
            student is not equal to 1.
        @endif
    </font>
    <br>
    <p>Unless method</p>

    <font size = '5' face = 'Arial'>
        @unless ($id == 1)
            student is not equal to 1.
        @endunless
    </font>

    <br>
    <br>
    Student id is: 
    <?php echo $id?> --}}

    
        {{-- $i = 3; --}}
@php
    $i = 0;
@endphp

        @while (($i)<5)
            javatpoint: 
            {{ $i++ }}
        @endwhile




</h1>