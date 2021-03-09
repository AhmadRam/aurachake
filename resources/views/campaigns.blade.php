@extends('layouts.app')
@section('content')

<div class="container-fluid">
  <div class="col-md-12">
    <ul class="breadcrumb">
      <li><a href="{{ url(app()->getLocale(),'') }}">{{ __('Homepage')}}</a></li>
      <li class="active">{{ __('campaigns')}}</li>
    </ul>
  </div>
</div>

<div class="container">


  <div class="col-md-12 mt-30 text-center">
    <h1 class="baslik mb-20 no-margin-top text-center urunDetayBaslik">{{ __('Campaigns')}}</h1>
   

  </div>

</div>

@endsection