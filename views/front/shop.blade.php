
@extends('layouts.shop.main')

@section('content')
    <div class="container">
        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

     <!-- Page Preloder Begin -->
     @include('layouts.shop.partials.preloader')
     <!-- Page Preloder End -->
     
    <!-- Navbar Section Begin -->
    @include('layouts.shop.partials.navbar')
    <!-- Navbar Section End -->

    <!-- Hero Section Begin -->
    @include('layouts.shop.partials.shop-hero')
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    @include('layouts.shop.partials.banner-products-categories')
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    @include('layouts.shop.partials.products-section')
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    @include('layouts.shop.partials.banner')
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    @include('layouts.shop.partials.latest-products')
    <!-- Latest Product Section End -->


    <!-- Footer Section Begin -->
    @include('layouts.shop.partials.footer')
    <!-- Footer Section End -->


@endsection