@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
<div class="container px-md-0">
    <div class="container-fluid px-0 py-5">  
        <h1 class="display-5 fw-bold">Welcome to Women in FinTech</h1>
        <p class="lead fs-5">Empowering women in financial technology through community and collaboration.</p>
        <hr class="my-4">
        <p>Join our community of professional women in FinTech.</p>
        <a class="btn btn-primary btn-lg rounded-pill" href="{{ route('members.create') }}" role="button">Join Now</a>
    </div>
</div>
@endsection
