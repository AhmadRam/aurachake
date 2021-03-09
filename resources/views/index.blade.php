@extends('layouts.app')
@section('content')
<div class="container">
<div class="container text-justify mb-30">
  <div class="col-md-12">
    <p class="urunDetayBaslik"></p>
    <img src="../fotograf/1514183599_about-us.jpg" class="img-responsive full-width" />

  </div>

</div>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6  col-md-push-6">
                <img src="fotograf/1514183421_aurachake-arindirici-urunler.jpg" class="img-responsive full-width" />
            </div>
            <div class="col-md-6  col-md-pull-6">
                <div class="display-block pt-150">
                    <span class="anasayfaKategoriBaslik ft-12">{{ __('Purifying')}}</span>
                    <span class="anasayfaKategoriIcerik ft-16">
                        <p>{{ __('Cleansing&nbsp;and peeling series for deeply cleansed and purified skin')}}</p>
                    </span>
                    <a class="btn btn-primary" href="{{ url(app()->getLocale(),'categories/2')}}">
                        {{__('Explore')}} </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6 ">
                <img src="fotograf/1514183306_aurachake-nemlendirici-urunler.jpg" class="img-responsive full-width" />
            </div>
            <div class="col-md-6 ">
                <div class="display-block pt-150">
                    <span class="anasayfaKategoriBaslik ft-12">{{ __('Moisturizing and Brightness Cares')}}</span>
                    <span class="anasayfaKategoriIcerik ft-16">
                        <p>{{ __('Rich formulas for moisturized skin')}}</p>
                    </span>
                    <a class="btn btn-primary" href="{{ url(app()->getLocale(),'categories/3')}}">
                    {{ __('Explore')}} </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6  col-md-push-6">
                <img src="fotograf/1514183168_aurachake-yaslanma-karsiti-urunler.jpg" class="img-responsive full-width" />
            </div>
            <div class="col-md-6  col-md-pull-6">
                <div class="display-block pt-150">
                    <span class="anasayfaKategoriBaslik ft-12">{{ __('Anti Aging Cares')}}</span>
                    <span class="anasayfaKategoriIcerik ft-16">
                        <p>{{ __('Anti-aging products enriched with special formulas for visible results')}}</p>
                    </span>
                    <a class="btn btn-primary" href="{{ url(app()->getLocale(),'categories/4')}}">
                    {{ __('Explore')}} </a>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="container">
    <div class="col-md-12 mt-30">
        <ul class="nav nav-pills mb-30">

            <li class="active"><a data-toggle="pill">{{ __('Featured')}}</a></li>
            <li><a data-toggle="pill">{{ __('Best Seller')}}</a></li>
        </ul>

        <div class="tab-content">

            <div id="menu1" class="tab-pane fade in active">
                <div class="owl-carousel owl-theme">
                    @foreach($products as $product)
                    <div class="item">
                        <div class="urunGenel">
                            <div class="pb-30 text-center">
                                <a href="{{ url(app()->getLocale(),'product') }}/{{$product->id}}">
                                    <div class="position-relative listeUrunFotograf">
                                        <img src="/uploads/products/{{$product->id}}/{{$product->image_name}}" class="position-relative display-block" />

                                    </div>
                                </a>
                                <div class="position-relative listeUrunYazi">
                                    <h3>
                                        <a href="{{ url(app()->getLocale(),'product') }}/{{$product->id}}" class="urunBaslik">{{$product->name}} </a>
                                    </h3>

                                    <div class="display-block urunFiyat">
                                        {{$product->price}} TL
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>

</div>
@endsection