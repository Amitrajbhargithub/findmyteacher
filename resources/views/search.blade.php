@extends('master')
@section('content')
<div class="container">
    <h3 style="text-align:center;color:purple;">Result for product</h3>
     <div class="row">
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
                                <form action="/add_to_card">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{$item['id']}}">
                                    <button class="btn btn-primary">Add to Cart</button><br><br>
                                    <a class="btn btn-success" href="ordernow">Order now</a> <br><br>
                                </form><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
     </div>
</div>
@endsection           
