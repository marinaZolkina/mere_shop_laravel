
<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top" style="background: #2d3246;">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}"> Home </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent"  kol={{ $cart_qty }}>
            {!! $top_menu->asUl(array('class' => 'navbar-nav mr-auto')) !!}
            <a href="/cart" class="btn btn-success basker_kol"  style="margin-right:15px" id="cart">
                Cart ({{ $cart_qty }})
            </a>

        </div>
    </div>
</nav>
