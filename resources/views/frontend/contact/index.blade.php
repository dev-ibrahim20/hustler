@extends('frontend.layout.front.main')
@section('content')
       <!-- Start Section Hunstler -->
        <section class="main" style="background: url({{asset('frontend/images/3.png')}}) no-repeat;">
            <div>
                <h2>We are here to help<br><span>We'd love to hear from you!</span></h2>
            </div>
        </section>

    <!-- End Section Hunstler -->


    <!-- Start Form Contact Us Body -->
        <div class="container" style="margin-bottom: 200px; margin-top: 50px">
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            @endif
            <div class="text">You can also contact us by filling out the form below</div>
            <form method="post" action="{{route('store_contact')}}" style="margin-bottom: 50px">
                @csrf
            <div class="form-row">
                <div class="input-data">
                    <input type="text" required name="name">
                    <div class="underline"></div>
                    <label for="">First Name</label>
                </div>
                <div class="input-data">
                    <input type="text" required name="last">
                    <div class="underline"></div>
                    <label for="">Last Name</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data">
                    <input type="text" required name="email">
                    <div class="underline"></div>
                    <label for="">Email Address</label>
                </div>
                <div class="input-data">
                    <input type="text" required name="web">
                    <div class="underline"></div>
                    <label for="">Website Name</label>
                </div>
            </div>
            <div class="form-row">
                <div class="input-data textarea">
                    <textarea rows="8" cols="80" required name="area"></textarea>
                    <br />
                    <div class="underline"></div>
                    <label for="">Write your message</label>
                    <br />
                    <div class="form-row submit-btn">
                        <div class="input-data">
                        <div class="inner"></div>
                        <input type="submit" value="submit">
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    <!-- End Form Contact Us Body -->

@endsection
