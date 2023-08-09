@extends('frontend.layout.front.main')
@section('content')

    <!-- Start Section Hunstler -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" style="">
        <div class="carousel-inner" data-interval="2000" style="height: 800px">
          <div class="carousel-item active">
            <img src="{{asset('frontend/images/3.png')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('frontend/images/2022_11_14_01_35_IMG_1862-f090f9d0-1920w.png')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{asset('frontend/images/1.png')}}" class="d-block w-100" alt="...">
          </div>
          <section>
          <div class="main" >
                <div class="text" style="position: relative">
                    <h2>Summer '23 collection<br><span>Upgrade your casual game</span></h2>
                    <h3>Shop the latest streetwear trends</h3>
                    <a href="#projects" class="main-btn">SHOP NOW</a>
                </div>
           </div>
        </section>
        </div>
    </div>
    <!-- End Section Hunstler -->
    <!-- Start Section T_shirt -->
    <section class="cards" id="services">
        <h2 class="title">FEATURED PRODUCTS</h2>
        <div class="content">
            @foreach($data as $da)
            <div class="card">
                <div class="icon">
                    <a href="{{url('product/order/'.$da->id)}}"><img src="{{asset('frontend/images/product/'.$da->image)}}" alt=""></a>
                </div>
                <div class="info">
                    <h2>{{$da->name}}</h2>
                </div>
            </div>
            @endforeach
        </div>
        <a style="color: black; text-decoration: none" href="{{route('product')}}"><h3 style="text-align: center">Show more</h3></a>
    </section>

    <!-- End Section T_shirt -->
@endsection
