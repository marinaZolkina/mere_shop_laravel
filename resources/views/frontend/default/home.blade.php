@extends('frontend.'.config('template').'.layouts.app')

@section('content')

    <h3>Our popular pizza!</h3>

    <div class="row">
    @foreach ($products as $product)
        @include('frontend.'.config('template').'.partials.short_products')
    @endforeach
    </div>
    <br/>

@endsection