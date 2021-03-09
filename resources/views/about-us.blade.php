@extends('layouts.app')
@section('content')
</div>
<div class="container-fluid">
  <div class="col-md-12">
    <ul class="breadcrumb">
      <li><a href="{{ url(app()->getLocale(),'') }}">{{ __('Homepage')}}</a></li>
      <li class="active">{{ __('About Us')}}</li>
    </ul>
  </div>
</div>

<div class="container text-justify mb-30">
  <div class="col-md-12">
    <p class="urunDetayBaslik"></p>
    <img src="../fotograf/1514183599_about-us.jpg" class="img-responsive full-width" />

  </div>

</div>
<div class="container text-justify mb-30">
  <div class="col-md-12">


    <h2 class="urunDetayBaslik">{{ __('Beauty Expert')}}</h2>
    <div class='urunDetayAciklama'>
      <p><strong>{{ __('Creative vision, groundbreaking aesthetic expertise​')}}</strong></p>
      <p>{{ __('​Gis&le Zemmour founded AURA CHAKE in the 80s, her experience in the world of beauty allowed the gifted creator to develop her unparalleled knowledge of the skin, its mechanisms and its specific needs.')}}</p>
      <p>​{{ __('Her expert and insightful diagnosis methods gave rise to a belief: youthful skin is primarily skin that is regenerated from within. Her priority became the discovery of a solution to skin ageing.')}}</p>
      <p>{{ __('As a premium, innovative beauty and wellness dermo-cosmetics brand, Aura Chake brings together cutting-edge technology and creativity to fight the ravages of time and restore the skin&s original radiance.')}}</p>
    </div>


  </div>

</div>

@endsection