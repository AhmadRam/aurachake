@extends('admin_panel.adminLayout') @section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('Products Table')}} <a class="btn btn-lg btn-success" style="float:right;color:white" href="{{route('admin.products.create')}}">+ {{ __('Add Product')}}</a></h4>
                    <br><br>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>
                                    {{ __('Images')}}
                                    </th>
                                    <th>
                                    {{ __('Name')}}
                                    </th>
                                  
                                    <th>
                                    {{ __('Price')}}
                                    </th>
                                    <th>
                                    {{ __('Quantity')}}
                                    </th>
                                    <th>
                                    {{ __('Description')}}
                                    </th>
                                    <th>
                                    {{ __('Category')}}
                                    </th>

                                    <th>
                                    {{ __('Action')}}
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($prdlist as $prd)
                                <tr>
                                    <td>
                                        <img src="../uploads/products/{{$prd->id}}/{{$prd->image_name}}" style="width:100px;height:100px;border-radius:10%;" alt="">
                                    </td>
                                    <td>
                                        <a href="{{route('admin.products.edit', ['id' => $prd->id])}}" class="btn btn-warning">{{$prd->name}}</a>
                                    </td>
            
                                    <td>
                                        {{$prd->price}}
                                    </td>
                                    <td>
                                        {{$prd->quantity}}
                                    </td>
                                    <td>
                                        {{$prd->description}}
                                    </td>
                                    <td>
                                        {{$prd->category->name}}
                                    </td>

                                    <td>
                                    <a href="{{route('admin.products.delete', ['id' => $prd->id])}}" class="btn btn-danger">{{ __('Delete')}}</a><br><br>
                                    <a href="{{route('admin.products.edit', ['id' => $prd->id])}}" class="btn btn-warning">{{ __('Edit')}}</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection