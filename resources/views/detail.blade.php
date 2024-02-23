@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">  
            <img src="{{asset('assets/'.$product->file)}}" alt="">           
        </div>
        <div class="col-sm-6">  
            <h2 style="margin-left:200px;">LG TV</h2>
            <h2>price : {{$product['name']}}</h2>
            <h2>Details : {{$product['description']}}</h2>
            <h2> Category: {{$product['file']}}</h2><br><br>
            <form action="/add_to_card">
                @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                <button class="btn btn-primary">Add to Cart</button>
            </form><br>
            <a class="btn btn-success" href="ordernow">Order now</a> <br><br>
            <button><a href="/product">Go back</a></button><br>          
            <br>           
        </div>
    </div>
</div>
@endsection