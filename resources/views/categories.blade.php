@extends('layouts.app')
@section('content')

<div class="container-fluid">
  <div class="col-md-12">
    <ul class="breadcrumb">
      <li><a href="{{ url(app()->getLocale(),'') }}">{{ __('Homepage')}}</a></li>
      <li class="active">{{__($cat->name)}}</li>
    </ul>
  </div>
</div>

<div class="container">
  <div class="col-md-12 text-center mb-20">
    <h1 class="urunDetayBaslik">{{__($cat->name)}}</h1>

  </div>

</div>

<div class="container mt-30">
@foreach($products as $product)

  <div class="col-md-4 mb-30">
    <div class="urunGenel">
      <div class="pb-30 text-center">

        <a href="{{ url(app()->getLocale(),'product') }}/{{$product->id}}">
          <div class="position-relative listeUrunFotograf">

            <img src="/uploads/products/{{$product->id}}/{{$product->image_name}}" class="position-relative display-block img-responsive" />
          </div>
        </a>
        <div class="position-relative listeUrunYazi">
          <h3>
            <a href="{{ url(app()->getLocale(),'product') }}/{{$product->id}}" class="urunBaslik">
              {{$product->name}} </a>
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
@endsection