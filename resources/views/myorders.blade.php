@extends('master')
@section('content')
<div class="container">
    <h3 style="text-align:center;color:purple;">Myorders product</h3>
     <div class="row">
        @foreach($orders as $item)
            <div class="search-item mt-2 cart-list-devider">
                <a href="detail/{{$item->id}}"></a> 
                    <img src="{{asset('assets/'.$item->file)}}">
                    <h5>Product Name :{{$item->name}}</h5>
                    <h5>Delivery status : {{$item->status}}</h5>
                    <h5>Address : {{$item->address}}</h5>
                    <h5>Payment status {{$item->payment_status}}</h5>
                    <h5>Payment method {{$item->payment_method}}</h5>
                    <h5>{{$item->name}}</h5>   
            </div>
        @endforeach
     </div> <br>
   
</div>
@endsection           