@extends('website.layouts.main')
@section('title',' Cashier - Contact Us ')
@section('content')
    <div class="content">
        <div class="TopBradCumb pt-4 pb-4 text-center CairoSemiBold text-white">
            <div class="container">
                <h3 class="mb-3">
                    @lang('website.FAQs')
                </h3>
                <div class="LinkNav">
                    <a href="{{route('index')}}" class="text-decoration-none text-white">
                        @lang('website.Home')
                    </a>
                    /
                    <span>
                            @lang('website.FAQs')
                        </span>

                </div>
            </div>
        </div>
        <div class="Questions pt-5 pb-5">
            <div class="container">
                <div class="accordion CairoSemiBold" id="accordion1">
                    <div class="accordion-item border-0 mb-3 Questions-item ">
                        <h2 class="accordion-header" id="heading1">
                            <button class="accordion-button delShadow collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse1"
                                    aria-expanded="false" aria-controls="collapse1">
                                How much does it cost to subscribe to the Cashierk system ?
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse"
                             aria-labelledby="heading1" data-bs-parent="#accordion1">
                            <div class="accordion-body">
                                What does the subscription fee include ?
                                <br>
                                <br>
                                Sales software
                                <br>
                                Installation and setup upon request
                                <br>
                                Automatically update the system
                                <br>
                                Special training for employees
                                <br>
                                Continuous technical support
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 mb-3 Questions-item ">
                        <h2 class="accordion-header" id="heading2">
                            <button class="accordion-button delShadow collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse2"
                                    aria-expanded="false" aria-controls="collapse2">
                                How much does it cost to subscribe to the Cashierk system ?
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse"
                             aria-labelledby="heading2" data-bs-parent="#accordion1">
                            <div class="accordion-body">
                                What does the subscription fee include ?
                                <br>
                                <br>
                                Sales software
                                <br>
                                Installation and setup upon request
                                <br>
                                Automatically update the system
                                <br>
                                Special training for employees
                                <br>
                                Continuous technical support
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 mb-3 Questions-item ">
                        <h2 class="accordion-header" id="heading3">
                            <button class="accordion-button delShadow collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse3"
                                    aria-expanded="false" aria-controls="collapse3">
                                Is it possible to subscribe monthly to the cashier program instead of annually ?
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse"
                             aria-labelledby="heading3" data-bs-parent="#accordion1">
                            <div class="accordion-body">
                                What does the subscription fee include ?
                                <br>
                                <br>
                                Sales software
                                <br>
                                Installation and setup upon request
                                <br>
                                Automatically update the system
                                <br>
                                Special training for employees
                                <br>
                                Continuous technical support
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 mb-3 Questions-item ">
                        <h2 class="accordion-header" id="heading4">
                            <button class="accordion-button delShadow collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse4"
                                    aria-expanded="false" aria-controls="collapse4">
                                Does the system work without an Internet connection ?
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse"
                             aria-labelledby="heading4" data-bs-parent="#accordion1">
                            <div class="accordion-body">
                                What does the subscription fee include ?
                                <br>
                                <br>
                                Sales software
                                <br>
                                Installation and setup upon request
                                <br>
                                Automatically update the system
                                <br>
                                Special training for employees
                                <br>
                                Continuous technical support
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 mb-3 Questions-item ">
                        <h2 class="accordion-header" id="heading5">
                            <button class="accordion-button delShadow collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse5"
                                    aria-expanded="false" aria-controls="collapse5">
                                Does it provide hardware and barcode readers ?
                            </button>
                        </h2>
                        <div id="collapse5" class="accordion-collapse collapse"
                             aria-labelledby="heading5" data-bs-parent="#accordion1">
                            <div class="accordion-body">
                                What does the subscription fee include ?
                                <br>
                                <br>
                                Sales software
                                <br>
                                Installation and setup upon request
                                <br>
                                Automatically update the system
                                <br>
                                Special training for employees
                                <br>
                                Continuous technical support
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')

@endpush
