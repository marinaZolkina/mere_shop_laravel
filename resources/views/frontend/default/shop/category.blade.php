@extends('frontend.'.config('template').'.layouts.app')

@section('title', $categories->title)
@section('meta_desc', $categories->meta_desc)
@section('meta_key', $categories->meta_key)

@section('content')

    @if( $category_menu )
    <div class="row">
        <div class="col-md-9">
            <h3>{{ $categories->title }}</h3>
            <div class="row">
                @foreach ($products as $product)
                    @include('frontend.'.config('template').'.partials.short_products')
                @endforeach
            </div>
        </div>
    </div>
    @else
        <h3>{{ $categories->title }}</h3>
        <div class="row">
        @foreach ($products as $product)
            @include('frontend.'.config('template').'.partials.short_products')
        @endforeach
        </div>
    @endif

    <div class="text-center">
        {{ $products->links() }}
    </div>

    @if ( ! isset ($_GET['page']) )
    <br/>

    @endif
@endsection