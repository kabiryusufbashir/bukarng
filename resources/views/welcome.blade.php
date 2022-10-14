@extends('layouts.app')

@section('page-title')
    Home - Bukar Nig. Ltd
@endsection

@section('body-content')
    <!-- Banner -->
    <div>
        <img class="object-cover w-full" src="{{ asset('images/bg-2.jpg') }}" alt="Background 1">
    </div>
    <!-- Body contents  -->
    <div class="lg:px-24 px-8 pt-8 pb-5">
        <!-- logo  -->
        <div>
            <img class="w-48 mx-auto" src="{{ asset('images/bukarng.png') }}" alt="Bukar Ng Logo">
        </div>
        <!-- About Us  -->
        <div class="text-center lg:w-2/3 mx-auto">
            <p>
                M Bukar Nig Ltd is a General merchandize company with vast knowledge in Information Technology, Contracts, Import and Export, AgricBusiness, etc
            </p>
            <p>
                Our team of professionals will handle all the necessary documentation, delivery requirements, and compliance checks for your shipments. Whether it's air or ocean freight forwarding, Tech Port Trading has all the resources needed to make imports and exports seem easy 
            </p>
            <p>
                M Bukar Nig Ltd tends to build a very trust with our esteemed customers. 
            </p>
        </div>
    </div>
@endsection