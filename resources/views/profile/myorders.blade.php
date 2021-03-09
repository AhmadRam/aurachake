@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="col-md-12">
        <ul class="breadcrumb">
            <li><a href="{{ url(app()->getLocale(),'') }}">{{ __('Homepage')}}</a></li>
            <li><a href="{{url(app()->getLocale(),'profile/profile')}}/{{Auth::user()->address_id}}">{{ __('Profile')}}</a></li>
            <li class="active">{{ __('My Oreders')}}</li>
        </ul>
    </div>
</div>
<div class="container mb-30">

    <div class="col-md-12">
        <h4 class="urunDetayBaslik"></h4>
        <table class="table table-striped urunDetayAciklama">
            <thead>
                <th>{{ __('Date')}} </th>
                <th>{{ __('Order Id')}}</th>
                <th>{{ __('Name')}}</th>
                <th>{{ __('Quantity')}}</th>
                <th>{{ __('Status')}}</th>
                <th>{{ __('Total')}} </th>
            </thead>
            <tbody>
                @foreach($sale as $s)
                @foreach($all as $c)
                @if($c[0]==$s->id)
                @foreach($products as $p)
                @if(Auth::user()->id == $s->user_id)
                @if($c[1]==$p->id)
                <tr>
                    <td>{{$s->created_at}}</td>
                    <td>{{$s->id}}</td>
                    <td>{{$p->name}}</td>
                    <td>{{$c[2]}}</td>
                    
                    <td>{{__($s->order_status)}}</td>
                    <td>{{$s->price}}</td>
                </tr>

                @break
                @endif
                @endif
                @endforeach
                @endif
                @endforeach
                @endforeach
            </tbody>

        </table>
    </div>

</div>

@endsection