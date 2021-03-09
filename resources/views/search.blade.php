@extends('layouts.app')
@section('content')


<div class="container-fluid">
    <div class="col-md-12">
        <ul class="breadcrumb">
            <li><a href="{{ url(app()->getLocale(),'') }}">{{ __('Homepage')}}</a></li>
            <li class="active">{{ __('Search Results')}}</li>
        </ul>
    </div>
</div>

<div class="container">
    <div class=" col-md-12 mb-20">
        <div>

            <form method="get" action="{{route('user.search',app()->getLocale())}}" id="form">

                <div class="row">
                    <div class="col-md-10 no-padding-right">
                        <input type="text" class="form-control formIletisim" name="n" id="keyword" placeholder="You can search..." value="" />
                    </div>
                    <div class="col-md-2 no-padding-left">
                        <button type="submit" class="btn btn-success full-width"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="col-md-12 text-left">
    {{  count($products) }} {{ __('result found')}} </div>
</div>
<div class="container mt-30">
    @foreach($products as $product)
    <div class="col-md-4 mb-30">

        <div class="pb-30 text-center">
            <div class="urunGenel">

                <a href="{{ url(app()->getLocale(),'product') }}/{{$product->id}}">
                    <div class="position-relative listeUrunFotograf">

                        <img src="/uploads/products/{{$product->id}}/{{$product->image_name}}" class="position-relative display-block img-responsive" />
                    </div>
                </a>
                <div class="position-relative listeUrunYazi">
                    <h3>
                        <a href="{{ url(app()->getLocale(),'product') }}/{{$product->id}}" class="urunBaslik">{{$product->name}}</a>
                    </h3>
                    <div class="display-block mt-10 mb-10 ft-12">
                    {{$product->price}} TL
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>




@endsection