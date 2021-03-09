@extends('layouts.app')
@section('content')



<div class="container-fluid">
    <div class="col-md-12">
        <ul class="breadcrumb">
            <li><a href="{{ url(app()->getLocale(),'') }}">{{ __('Homepage')}}</a></li>
            <li class="active">{{ __('Profile')}}</li>
        </ul>
    </div>
</div>
<div class="container mb-30">

    <div class="col-md-6">
        <h4 class="urunDetayBaslik">{{ __('PROFILE INFORMATION')}}</h4>
        <table class="table table-striped urunDetayAciklama">
            <tr>
                <td><a href="">{{ __('Identity Number')}}:</a></td>
                <td>{{Auth::user()->identityNumber}}</td>
            </tr>
            <tr>
                <td><a href="">{{ __('Name')}} {{__('Surname')}}:</a></td>
                <td>{{Auth::user()->name}} {{Auth::user()->surname}}</td>
            </tr>
            <tr>
                <td><a href="">{{ __('E-Mail')}}:</a></td>
                <td>{{Auth::user()->email}}</td>
            </tr>
            <tr>
                <td><a href="">{{ __('Phone')}}:</a></td>
                <td>{{Auth::user()->phone}}</td>
            </tr>
            <tr>
                <td><a href="">{{ __('Gender')}}:</a></td>
                <td>{{__(Auth::user()->gender)}}</td>
            </tr>
            <tr>
                <td><a href="">{{ __('Birthday')}}:</a></td>
                <td>{{Auth::user()->birthday}}</td>
            </tr>
            <tr>
                <td><a href="">{{ __('Subscription')}}:</a></td>
                <td>{{__('Yes')}}</td>
            </tr>
            <tr>
                <td colspan="2">
                    <a href="{{url(app()->getLocale(),'profile/edit_profile')}}/{{Auth::user()->id}}" class="btn btn-primary">{{ __('Edit Profile')}}</a>
                </td>
            </tr>

        </table>
    </div>
    <div class="col-md-6 text-right">
        <h4 class="urunDetayBaslik text-right">
        {{ __('DEFAULT ADDRESS')}} </h4>
        @if(isset($ad))

        <div class="well ">
            <h4 class="urunDetayBaslik">{{$ad->title}}</h4>
            <p>{{$ad->lineOne}}</p>
            <p>{{$ad->postalcode}} {{$ad->township}} / {{$ad->city}}</p>
            <form method="post" action="{{url(app()->getLocale(),'profile/delete_address')}}/{{$ad->id}}">
                {{csrf_field()}}
                <a class="btn btn-info btn-xs" href="{{url(app()->getLocale())}}/profile/edit_address/{{$ad->id}}">{{ __('Edit')}}</a>
                <button class="btn btn-danger btn-xs">{{ __('Delete')}}</button>
            </form>
        </div>
        
        @else

        <p>{{ __('No address information yet')}}</p>
        <p>{{ __('You can add your new address information')}} <a href="{{ url(app()->getLocale(),'profile/add_address/') }}">{{ __('here')}}</a> </p>
        @endif

        @if(session('success'))

        <div class="alert alert-success">
            {{ session('success') }}
        </div>

        @endif

    </div>

</div>
@endsection