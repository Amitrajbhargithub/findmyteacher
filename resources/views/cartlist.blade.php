@extends('master')
@section('content')
<div class="container">
        <h3 style="text-align:center;color:purple;">Your Item in Cart list</h3>
    @isset($product)
        @foreach($product as $item)
            <div class="row">
                <div class="container-fluid">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="search-item mt-2 cart-list-devider">
                                    <a href="detail/{{$item->id}}">
                                        <img src="{{asset('assets/'.$item->file)}}">
                                    </a>
                                    
                                </div>
                            </div>
                            <div class="col-sm-4">  
                                <h5> Product Name : {{$item->name}}</h5>
                                <h5>Description : {{$item->description}}</h5>
                                <h5> Product file :{{$item->file}}</h5>
                                <a class="btn btn-success" href="ordernow">Order now</a> <br><br>
                                <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endisset

    @If(count($product) ==  0)
        <h3>No Item in Cart list</h5>
    @endif
</div>
@endsection                  