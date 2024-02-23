@extends('master')
@section('content')
 
<div class="container-fluid custom-product">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            @foreach($data as $item)
            <div class="carousel-item {{$item['id']==12?'active':''}}">
                <a href="detail/{{$item['id']}}">
                    <img src="{{ asset('assets/'.$item->file)}}" class="slider-img" >
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative first slide.</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> 
</div>  
<div class="row">
    <center><h2>Our trending product</h2></center>
    <div class="container">
        <div class="col-sm-12 ">
            <div class="row">
                @foreach($data as $item)
                    <div class="col-m-2 trending-item" >
                        <a href="detail/{{$item['id']}}">
                            <img src="{{asset('assets/'.$item->file)}}" class="trending-image" alt="">
                        </a>
                    </div>
                @endforeach
                @foreach($data as $item)
                    <div class="col-m-2 trending-item" >
                        <a href="detail/{{$item['id']}}">
                            <img src="{{asset('assets/'.$item->file)}}" class="trending-image" alt="">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection





           