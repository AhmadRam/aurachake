@extends('layouts.app')
@section('content')


<div class="container-fluid">
    <div class="col-md-12">
        <ul class="breadcrumb">
            <li><a href="{{ url(app()->getLocale(),'') }}">{{ __('Homepage')}}</a></li>
            <li class="active">{{ __('Register')}}</li>
        </ul>
    </div>
</div>

<div class="container mb-30">
    <div id='kayitHata' class='text-danger'>

    </div>

    <div class="col-md-offset-3 col-md-6">
        <div class="display-block text-center">
            <h1 class="urunDetayBaslik">{{ __('Registration Form')}}</h1>
        </div>



            <x-jet-validation-errors class="mb-4" />
            <form class="pt-10 pb-10" id="kayitForm" method="POST" action="{{ route('register',app()->getLocale()) }}">
                @csrf
                <fieldset>
                    <div class="form-group">
                        <div class="">
                            <div class="col-md-6 mt-10">
                                <input type="text" name="name" id="name" class="form-control input-lg formIletisim" placeholder="{{ __('Name')}}" autocomplete="off" />
                            </div>
                            <div class="col-md-6 mt-10">
                                <input type="text" name="surname" id="surname" class="form-control input-lg formIletisim" placeholder="{{ __('Surname')}}" autocomplete="off" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="">
                            <div class="col-md-12 mt-20">
                                <input type="email" name="email" id="email" class="form-control input-lg formIletisim" placeholder="{{ __('E-Mail')}}" autocomplete="off" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="">
                            <div class="col-md-12 mt-20">
                                <input id="phoneNumber" type="text" name="phone" value="" placeholder="{{ __('Phone')}}" class="form-control input-lg formIletisim" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="">
                            <div class="col-md-12 mt-20">
                                <input type="password" name="password" id="password" class="form-control input-lg formIletisim" placeholder="{{ __('Password')}}" />
                            </div>
                            <div class="col-md-12 mt-20">
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg formIletisim" placeholder="{{ __('Password')}}" />
                            </div>
                        </div>
                    </div>


                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-jet-label for="terms">
                            <div class="flex items-center">
                                <x-jet-checkbox name="terms" id="terms" />

                                <div class="ml-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-jet-label>
                    </div>
                    @endif

                    <div class="form-group">
                        <div class="">
                            <div class="col-md-12 mt-20">
                                <div class="checkbox helvetica" style="line-height: 22px;">
                                    <label>
                                        <input type="checkbox" name="sozlesme" id="sozlesme" value="1" required  />{{ __('I have read and accept the User Agreement.')}}</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="">
                            <div class="col-md-12">
                                <div class="checkbox helvetica" style="line-height: 22px;">
                                    <label>
                                        <input type="checkbox" name="bulten" id="bulten" value="1" required  />{{ __('I would like to be informed by Aura Chaké about promotions')}}</label>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="col-md-offset-4 col-md-4 mt-10">
                        <button type="submit" class="btn btn-success full-width">{{ __('Register')}}</button>
                    </div>

                </fieldset>

            </form>

            <div class="col-md-12 text-center mt-20">

            {{ __('Are you a member')}}? <a href="{{ route('login',app()->getLocale()) }}" title='Register'>{{ __('Login')}}</a>

            </div>

    </div>
</div>

@endsection