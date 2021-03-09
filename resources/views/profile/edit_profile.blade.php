@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="col-md-12">
        <ul class="breadcrumb">
            <li><a href="{{ url(app()->getLocale(),'') }}">{{ __('Homepage')}}</a></li>
            <li><a href="{{url(app()->getLocale(),'profile/profile')}}/{{Auth::user()->address_id}}">{{ __('Profile')}}</a></li>
            <li class="active">{{ __('Edit Profile')}}</li>
        </ul>
    </div>
</div>
<div class="container mb-50">
    <div class="col-md-12">
        <form method="POST" action="{{ url(app()->getLocale(),'profile/edit_profile') }}/{{Auth::user()->id}}">
            {{csrf_field()}}
            <div class="row">
                <div class="form-group">
                    <div class="">
                        <div class="col-md-6 mt-10">
                            <input type="text" name="identityNumber" id="identityNumber" class="form-control input-lg formIletisim" value="{{$user->identityNumber}}" autocomplete="off" value="" />
                        </div>

                    </div>
                </div>
                <div class="clear clearfix"></div>

                <div class="form-group">
                    <div class="">
                        <div class="col-md-6 mt-20">
                            <input type="text" name="name" id="name" class="form-control input-lg formIletisim" value="{{$user->name}}" autocomplete="off" />
                        </div>
                        <div class="col-md-6 mt-20">
                            <input type="text" name="surname" id="surname" class="form-control input-lg formIletisim" value="{{$user->surname}}" autocomplete="off" />
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="">
                        <div class="col-md-6 mt-20">
                            <input type="email" name="email" id="email" class="form-control input-lg formIletisim" value="{{$user->email}}" autocomplete="off" />
                        </div>
                        <div class="col-md-6 mt-20">
                            <input id="phoneNumber" type="text" name="phone" value="{{$user->phone}}" class="form-control input-lg formIletisim" />
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="">
                        <div class="col-md-6 mt-20">
                            <input data-provide="datepicker" type="text" name="birthday" id="birthday" class="form-control input-lg tarihSec formIletisim" value="{{$user->birthday}}" autocomplete="off" />
                        </div>
                        <div class="col-md-6 mt-20">

                            <select name="gender" id="gender" class="form-control input-lg formIletisim">
                                <option value="">{{ __('Gender')}}</option>
                                <option value="Male" @if($user->gender == 'Male') selected @endif>{{ __('Male')}}</option>
                                <option value="Female" @if($user->gender == 'Female') selected @endif>{{ __('Female')}}</option>
                            </select>

                        </div>
                    </div>
                </div>



                <div class="col-md-12">
                    <button class="btn btn-primary mt-20" type="submit">{{ __('Save')}}</button>
                </div>
                <div class="col-md-12 text-center text-danger">
                </div>
            </div>
        </form>
        <br>
        @if(session('success'))

        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        <br>
        @endif
        @if($errors->any())


        <ul>
            @foreach($errors->all() as $err)
            <tr>
                <td>
                    <li>{{$err}}</li>
                </td>
            </tr>
            @endforeach
        </ul>
        @endif
    </div>
</div>


@endsection