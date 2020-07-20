<div class="col-xs-3 col-md-4 col-md-4 col-sm-6">
    <div class="card" style="background: #fff;">
        <a href="/{{ $product->id }}-{{ $product->slug }}" title="{{ $product->title }}">
            @if ( !empty($product->photo) )
                {{ Html::image('/uploads/products/medium/'.str_replace('images/', '', str_replace('.jpg', '', $product->photo)), $product->title, ['class'=>'img-responsive', 'style'=>'width:100%;']) }}
            @else
                {{ Html::image('https://dummyimage.com/762x428/000/fff.jpg&text=No+image', $product->title, ['class'=>'img-responsive', 'style'=>'width:100%;']) }}
            @endif
        </a>
        <div class="card-body">
            <b>
                {!! link_to_route('products.show', $product->title, [$product->id, $product->slug]) !!}
            </b>
            <p>Price: <b>{{ $product->cost*config('rate') }}</b> $</p>
            <div class="text-right" >
                <input type="text" size=10 min=1 value=1 class="qwt">
                <button class="btn btn-primary btn-block incart" id={{$product->id}}>In Cart</button>
            </div>
        </div>
    </div>
</div>

