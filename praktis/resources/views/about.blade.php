@extends('layouts.master')

@section('title', 'About Page')

@section('content')
<h1>About Us</h1>
<p>This page also extends the same master layout</p>
@endsection

@push('scripts')
<script>
    console.log('Custom Script');
</script>
@endpush