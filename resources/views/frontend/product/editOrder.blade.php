@extends('frontend.layout.front.main')
@section('content')
<div class="container">
    <div class="row" style="margin: 20px; height: auto;">
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">ُEdit Order</h4>
            <form method="POST" action="{{route('store_order')}}">
                @csrf
                @php
                $size = explode('-', $data->size);
                $color = explode('-', $data->color);
                @endphp
                <div class="mb-3">
                    <label for="name">User Name</label>
                    <input type="text" class="form-control" value="{{$edit->username}}" id="name" placeholder="Inter Your Name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="name">Phone</label>
                    <input type="text" class="form-control" id="name" value="{{$edit->phone}}" placeholder="Inter Your Name" name="phone" required>
                </div>
                <div class="mb-3">
                    <label for="email">Email <span class="text-muted">(Optional)</span></label>
                    <input type="email" class="form-control" id="email" placeholder="you@example.com" value="{{$edit->email}}" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="" name="address" value="{{$edit->address}}">
                </div>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" style="width: 200px" name="size" required="">
                    <option disabled value="" selected>Select Size</option>
                    @for($i = 0; $i < count($size); $i++)
                    <option value="{{$size[$i]}}">{{$size[$i]}}</option>
                    @endfor
                </select>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="state">State</label>
                        <select class="custom-select d-block w-100" id="state" required="" name="state" value="{{$edit->state}}">
                            <option value="">Choose...</option>
                            <option>female</option>
                            <option>male</option>
                        </select>
                    </div>
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit" onclick="clickCounter()">Continue to checkout</button>
            </form>
        </div>
    </div>
</div>
@endsection
