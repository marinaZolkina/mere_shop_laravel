@extends('frontend.'.config('template').'.layouts.app')

@section('title', 'Order Success')

@section('content')

<div class="alert alert-success">
    <h1>Thanks for order!</h1>
    {{ link_to_route('home', '<< Back to home') }}
</div>
@endsection