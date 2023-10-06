<div class="RegisterNow">
    <div class="container">
        <div class="row w-100 m-auto">
            <div class="col-lg-6 col-12 item-1 mb-lg-0 mb-4
                        d-flex flex-column justify-content-center align-items-center">
                <div class="text-center">
                    <h3 class="CariaBold m-0 mb-2">
                        @lang('website.Register now')
                    </h3>
                    <p class=" CairoSemiBold">
                        @lang('website.Have-distinctive')
                    </p>
                </div>
                <div class="text-center zkahLogo">
                    <img src="{{asset('website/assets/img/Public/fatorah.png')}}">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="forRegister">
                    <form action="" method="post">
                        <p class="CariaBold">
                            @lang('website.Please-provide')
                        </p>
                        <div class="row ">
                            <div class="col-md-6 col-12 CairoSemiBold">
                                <input class="form-control"
                                       name="name" placeholder="@lang('website.First-name')">
                            </div>
                            <div class="col-md-6 col-12 CairoSemiBold">
                                <input class="form-control"
                                       name="name" placeholder="@lang('website.Last-name')">
                            </div>
                            <div class="col-12 CairoSemiBold">
                                <div class="input-group">
                                    <select class="">
                                        <option>966</option>
                                        <option>963</option>
                                        <option>964</option>
                                        <option>965</option>
                                    </select>
                                    <input type="text" class="form-control border-start" aria-label="Text input with dropdown button">
                                </div>
                            </div>
                            <div class="col-12 CairoSemiBold">
                                <input class="form-control"
                                       name="name" placeholder="@lang('website.email')">
                            </div>
                            <div class="col-12 CairoSemiBold">
                                <input class="form-control"
                                       name="name" placeholder="@lang('website.address')">
                            </div>
                            <div class="col-12 CairoSemiBold">
                                <input class="form-control"
                                       name="name" placeholder="@lang('website.business-activity')">
                            </div>
                            <button class="btn CariaBold" type="submit">
                                @lang('website.Order now')
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
