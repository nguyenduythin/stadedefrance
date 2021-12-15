
@extends('client.layouts.main')
@section('title', 'Pages Not found !')
@section('content')
 <!-- content  -->	
<div id="wrapper">
    <!-- content  -->	
    <div class="content full-height">
        <div class="body-bg">
            <div class="bg"  data-bg="{{ asset('client/images/bg/1.jpg') }}"></div>
            <div class="overlay"></div>
        </div>
        <!--error-wrap-->
        <div class="error-wrap fl-wrap">
            <div class="container">
                <h2>404</h2>
                <p>We're sorry, but the Page you were looking for, couldn't be found.</p>
                <div class="clearfix"></div>
                <div class="dots-separator fl-wrap"><span></span></div>
                <a href="{{ route('home') }}" class="btn">Back to Home Page <i class="fal fa-long-arrow-right"></i></a>
                <div class="section-dec sec-dec_top"></div>
                <div class="section-dec sec-dec_bottom"></div>
            </div>
        </div>
        <!--error-wrap end-->                                    
    </div>
    <!-- content end  -->
</div>
<!-- content end  -->
@endsection