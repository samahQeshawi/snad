@extends('website.layouts.main')
@section('title',' Cashier - Contact Us ')
@section('content')
    <div class="content">
        <div class="TopBradCumb pt-4 pb-4 text-center CairoSemiBold text-white">
            <div class="container">
                <h3 class="mb-3">
                    @lang('website.Contact us')
                </h3>
                <div class="LinkNav">
                    <a href="{{route('index')}}" class="text-decoration-none text-white">
                        @lang('website.Home')
                    </a>
                    /
                    <span>
                            @lang('website.Contact us')
                    </span>
                </div>
            </div>
        </div>
        @include('website.layouts.contactUs')
        @include('website.layouts.address')
    </div>
@endsection

@push('js')

@endpush
