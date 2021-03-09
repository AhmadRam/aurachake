@extends('layouts.app')
@section('content')
<div class="container-fluid">
  <div class="col-md-12">
    <ul class="breadcrumb">
      <li><a href="{{ url(app()->getLocale(),'') }}">{{ __('Homepage')}}</a></li>
      <li class="active">{{ __('Contact')}}</li>
    </ul>
  </div>
</div>

<div class="container">


  <div class="col-md-12 mt-30 text-center">
    <h1 class="baslik mb-20 no-margin-top text-center urunDetayBaslik">{{ __('Address')}}</h1>
    <p class="urunDetayAciklama display-block mb-10 full-width ">
      MCA Kozmetik
    </p>
    <p class="urunDetayAciklama display-block mb-10 full-width ">
      Etiler mah. Bıyıklı Mehmet Paşa sok. No:20 D:12 34337 Beşiktaş / İstanbul
    </p>

  </div>

  <div class="col-md-12 mt-30 text-center">
    <h1 class="text-center urunDetayBaslik mb-20 no-margin-top ">{{ __('Contact Form')}}</h1>
    <p class="text-center urunDetayAciklama full-width mb-20">{{ __('You can contact us by filling out the form below.')}}</p>

  </div>


  <div class="col-md-4 col-md-offset-4 mb-30">
    <form method="POST" action="https://www.aurachake.com.tr/iForm.php" accept-charset="UTF-8" id="regForm">

      <div class="form-group">
        <input type="text" name="isimSoyisim" value="" placeholder="{{__('Name')}} {{__('Surname')}}" id="isimSoyisim" class="form-control input-lg formIletisim" />
      </div>
      <div class="form-group">
        <input type="email" name="email" value="" placeholder="{{__('E-Mail')}}" id="email" class="form-control input-lg formIletisim" />
      </div>
      <div class="form-group">

        <input id="phoneNumber" type="text" name="phoneNumber" value="" placeholder="{{(__('Phone'))}}" class="form-control input-lg formIletisim" />
      </div>

      <div class="form-group">
        <textarea class="form-control input-lg formIletisim" rows="5" name="kullaniciNot" id="kullaniciNot" placeholder="{{(__('Message'))}}"></textarea>
      </div>
      <div class="display-block text-center">
        <input type="submit" class="btn btn-success" value="{{__('Send')}}" />
      </div>

    </form>
  </div>



</div>
@endsection