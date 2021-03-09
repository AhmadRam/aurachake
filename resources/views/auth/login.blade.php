@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="col-md-12">
        <ul class="breadcrumb">
            <li><a href="">{{ __('Homepage')}}</a></li>
            <li class="active">{{ __('Member Login')}}</li>
        </ul>
    </div>
</div>

<div class="container mb-30">
    <div id='girisHata' class='text-danger display-block text-center'>

    </div>

    <div class="col-md-offset-3 col-md-6">
        <div class="display-block text-center">
            <h1 class="urunDetayBaslik">{{ __('Member Login')}}</h1>
        </div>
        

            <x-jet-validation-errors class="mb-4" />

            @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
            @endif

            <form class="pt-10 pb-10" id="girisForm" method="POST" action="{{ route('login',app()->getLocale()) }}">
                @csrf
                <fieldset>
                    <div class="form-group">
                        <div class="">
                            <div class="col-md-12 mt-10">
                                <input type="email" name="email" id="email" class="form-control input-lg formIletisim" placeholder="{{__('E-Mail')}}" autocomplete="on" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="">
                            <div class="col-md-12 mt-20">
                                <input type="password" name="password" id="password" class="form-control input-lg formIletisim" placeholder="{{(__('Password'))}}" />
                            </div>
                        </div>
                    </div>

                    @if (Route::has('password.request'))
                    <div class="col-md-6 mt-20">
                        <a style="text-decoration: underline; padding-bottom:5px; display:block; line-height: 35px;" href="{{ route('password.request',app()->getLocale()) }}" class="" title="Forget Password">{{__('Forget Password')}}</a>
                    </div>
                    @endif

                    <div class="col-md-6 mt-20">
                        <button type="submit" class="btn btn-success full-width">{{ __('Login')}}</button>
                    </div>

                </fieldset>
            </form>
    </div>

</div>

@endsection

