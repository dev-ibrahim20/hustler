@extends('frontend.layout.front.main')
@section('content')
<div class="container">
    <div class="row" style="margin: 20px; height: auto;">
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Billing address</h4>
            <form method="POST" action="{{route('store_order')}}">
                @csrf
                <input type="hidden" value="{{$check['_name']}}" name="_name">
                <input type="hidden" value="{{$check['_image']}}" name="_image">
                <input type="hidden" value="{{$check['_size']}}" name="_size">
                <input type="hidden" value="{{$check['_color']}}" name="_color">
                <input type="hidden" value="{{$check['_count']}}" name="_count">
                <input type="hidden" value="{{$check['_total']}}" name="_total">
                <div class="mb-3">
                    <label for="name">User Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Inter Your Name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="name">Phone</label>
                    <input type="text" class="form-control" id="name" placeholder="Inter Your Name" name="phone" required>
                </div>
                <div class="mb-3">
                    <label for="email">Email <span class="text-muted">(Optional)</span></label>
                    <input type="email" class="form-control" id="email" placeholder="you@example.com" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="" name="address">
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="state">State</label>
                        <select class="custom-select d-block w-100" id="state" required="" name="state">
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
