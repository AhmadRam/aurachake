@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="col-md-12">
        <ul class="breadcrumb">
            <li><a href="{{ url(app()->getLocale(),'') }}">{{ __('Homepage')}}</a></li>
            <li><a href="{{ url(app()->getLocale(),'categories') }}/{{$cat->id}}">{{__($cat->name)}}</a></li>
            <li class="active">{{$product->name}}</li>
        </ul>
    </div>
</div>
<div class="container mt-30" id="urunTotal">
    <div class="col-md-6">
        <div class="flexslider">
            <ul>
                <li>
                    <img src="/uploads/products/{{$product->id}}/{{$product->image_name}}" alt="Exfoliant Cream" />

                </li>
            </ul>
        </div>
    </div>
    <div class="col-md-6">
        <div class="urunDetayKategori"><a href="{{ url(app()->getLocale(),'categories') }}/{{$cat->id}}">{{__($cat->name)}}</a></div>
        <h3 class="urunDetayBaslik">{{$product->name}}</h3>
        <div class="display-block urunFiyat">
            {{$product->price}} TL
        </div>
        <div class="urunDetayAciklama text-justify">
            <p>{{$product->quantity}} ml</p>
            <p>{{$product->description}}</p>
        </div>
        <hr />
        <div class="urunDetayAciklama">
            <i class="fa fa-truck"></i> {{ __('Standard Shipping in 3–5 Business Days')}}
        </div>
        <hr />
        <ul class="list-inline">
            <li>{{ __('Share')}}:</li>
            <li class="social-net__item"><a target="_blank" href="#" class="social-net__link"><i class="icon fa fa-lg fa-facebook"></i></a></li>
            <li class="social-net__item"><a target="_blank" href="#" class="social-net__link"><i class="icon fa-lg fa fa-twitter"></i></a></li>
            <li class="social-net__item"><a target="_blank" href="#" class="social-net__link"><i class="icon fa fa-lg fa-google-plus"></i></a></li>
        </ul>
        <hr />
        <form action="{{ url(app()->getLocale(),'product') }}/{{$product->id}}" method="post">
            {{csrf_field()}}
            @if (Auth::check())
            <div id="field1">{{ __('Quantity')}}
                <button type="button" id="sub" class="sub">-</button>
                <input type="number" id="quantity" name="quantity" value="1" min="1" max="100" />
                <button type="button" id="add" class="add">+</button>
            </div>
            <br>
            <button class="btn btn-primary" data-productid="">
            {{ __('ADD TO BASKET')}} </button>
            @else
            <div class="alert alert-danger">
            {{ __('you did not login')}}
            </div>
            @endif

        </form>

        <br>
        @if(session('success'))

        <div class="alert alert-success">
            {{ session('success') }}
        </div>

        @endif
    </div>
</div>
<div class="container">
    <div class="col-md-12 mt-30">
        <ul class="nav nav-pills mb-30">
            <li class="active"><a data-toggle="pill" href="#menu1">{{ __('RELATED PRODUCTS')}}</a></li>
        </ul>
        <div class="tab-content">
            <div id="menu1" class="tab-pane fade in active">
                <div class="owl-carousel owl-theme">
                    @foreach($products as $product)
                    <div class="item">
                        <div class="urunGenel">
                            <div class="pb-30 text-center">
                                <a href="/product/purifying/purifying-tonic-lotion">
                                    <div class="position-relative listeUrunFotograf">
                                        <img src="/uploads/products/{{$product->id}}/{{$product->image_name}}" class="position-relative display-block" />
                                    </div>
                                </a>
                                <div class="position-relative listeUrunYazi">
                                    <h3>
                                        <a href="{{ url(app()->getLocale(),'product') }}/{{$product->id}}" class="urunBaslik">{{$product->name}}</a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div id="menu2" class="tab-pane fade">
                <div class="urunDetayAciklama display-block mb-30">
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('.add').click(function() {

        $(this).prev().val(+$(this).prev().val() + 1);

    });
    $('.sub').click(function() {
        if ($(this).next().val() > 1) {
            $(this).next().val(+$(this).next().val() - 1);
        }
    });
</script>
@endsection