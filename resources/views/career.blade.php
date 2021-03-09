@extends('layouts.app')
@section('content')

<div class="container-fluid">
  <div class="col-md-12">
    <ul class="breadcrumb">
      <li><a href="{{ url(app()->getLocale(),'') }}">{{ __('Homepage')}}</a></li>
      <li class="active">{{ __('Career')}}</li>
    </ul>
  </div>
</div>

<div class="container">


  <div class="col-md-12 mt-30 text-left">
    <h1 class="text-center urunDetayBaslik mb-20 no-margin-top ">AÇIK POZİSYONLAR</h1>
    <div class="row">
      <div class="col-md-12 mb-20">
        <div style="border: 1px solid #2a2a2a; padding:20px;">
          <div class="row">
            <div class="col-md-8">
              <span style="color:#2a2a2a; font-size:16px;">Genel Başvuru</span>
              <br />
              <span class="text-muted">Tam Zamanlı / Part Time</span>
              <br />
              Türkiye Geneli
            </div>
            <div class="col-md-4 text-right">
              <a class="btn btn-success btn-xs mt-20" href="basvuru/1/genel-basvuru.html">
                Detay & Başvuru Formu </a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

</div>
@endsection