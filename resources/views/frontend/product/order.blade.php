@extends('frontend.layout.front.main')

@section('content')
<section>
    <div class="small-container single-product">
        <div class="child">
            <div class="halfchild">
                <img src="{{asset('frontend/images/product/'.$data->image)}}" width="550px" height="500px" id="prodImg"><br><br>
                @foreach($order as $photo)
                    <div class="small-img-child">
                        <div class="small-img-col">
                            <img src="{{asset('frontend/images/product/'. $photo->image)}}" width="100%" class="small-img">
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="halfchild">
                <p><a href="{{route('home_store')}}" style="color: black; text-decoration: none">Home </a>/ <a href="{{route('product')}}" style="color: black; text-decoration: none">Products</a></p>
                <h1>{{$data->name}}</h1>
                <h4>${{$data->price}}</h4>
                <form action="{{route('checkout')}}" method="POST">
                    @csrf
                    @php
                        $size = explode('-', $data->size);
                        $color = explode('-', $data->color);
                    @endphp
                    <input type="hidden" value="{{$data->name}}" name="_name">
                    <input type="hidden" value="{{$data->image}}" name="_image">
                    <input type="hidden" value="{{$data->price}}" name="_price">
                    <input type="hidden" value="{{$data->drive_cost}}" name="_cost">
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" style="width: 200px" name="size" required="">
                        <option disabled value="" selected>Select Size</option>
                        @for($i = 0; $i < count($size); $i++)
                        <option value="{{$size[$i]}}">{{$size[$i]}}</option>
                        @endfor
                    </select>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" style="width: 200px" name="color" required="">
                        <option disabled value="" selected>Select color</option>
                        @for($i = 0; $i < count($color); $i++)
                        <option value="{{$color[$i]}}">{{$color[$i]}}</option>
                        @endfor
                    </select>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" style="width: 200px" name="count" required="">
                        <option selected value="">0</option>
                        @for($i = 1; $i <=20; $i++)
                        <option value="{{$i}}">{{$i}}</option>
                        @endfor
                      </select>
                    <input type="submit"  class="btn btn-success" value="Add To Cart" onclick="handleIncrement(this)" style="width: 200px">
                </form>
                <h3>Product Details <i class="fa fa-indent"></i></h3>
                <br>
                <p>
                   {{$data->disc}}. Try our slim fit wear
                    starting at only ${{$data->price}}*
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
