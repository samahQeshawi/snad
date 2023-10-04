@extends('dashboard.layout.main')
@push('vendor-css')
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/app-assets/vendors/css/editors/quill/katex.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/app-assets/vendors/css/editors/quill/monokai-sublime.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/app-assets/vendors/css/editors/quill/quill.snow.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/app-assets/vendors/css/editors/quill/quill.bubble.css')}}">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Inconsolata&amp;family=Roboto+Slab&amp;family=Slabo+27px&amp;family=Sofia&amp;family=Ubuntu+Mono&amp;display=swap">
    <!-- END: Vendor CSS-->
@endpush
@push('css')
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/app-assets/css-rtl/plugins/forms/form-quill-editor.css')}}">
@endpush
@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Quill Editor</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Form Elements</a>
                            </li>
                            <li class="breadcrumb-item active">Quill Editor
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <div class="form-group breadcrumb-right">
                <div class="dropdown">
                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="app-todo.html"><i class="mr-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="mr-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="mr-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="mr-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <!-- Snow Editor start -->
        <section class="snow-editor">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Snow Editor</h4>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Snow is a clean, flat toolbar theme.</p>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div id="snow-wrapper">
                                        <div id="snow-container">
                                            <div class="quill-toolbar">
                                                        <span class="ql-formats">
                                                            <select class="ql-header">
                                                                <option value="1">Heading</option>
                                                                <option value="2">Subheading</option>
                                                                <option selected>Normal</option>
                                                            </select>
                                                            <select class="ql-font">
                                                                <option selected>Sailec Light</option>
                                                                <option value="sofia">Sofia Pro</option>
                                                                <option value="slabo">Slabo 27px</option>
                                                                <option value="roboto">Roboto Slab</option>
                                                                <option value="inconsolata">Inconsolata</option>
                                                                <option value="ubuntu">Ubuntu Mono</option>
                                                            </select>
                                                        </span>
                                                <span class="ql-formats">
                                                            <button class="ql-bold"></button>
                                                            <button class="ql-italic"></button>
                                                            <button class="ql-underline"></button>
                                                        </span>
                                                <span class="ql-formats">
                                                            <button class="ql-list" value="ordered"></button>
                                                            <button class="ql-list" value="bullet"></button>
                                                        </span>
                                                <span class="ql-formats">
                                                            <button class="ql-link"></button>
                                                            <button class="ql-image"></button>
                                                            <button class="ql-video"></button>
                                                        </span>
                                                <span class="ql-formats">
                                                            <button class="ql-formula"></button>
                                                            <button class="ql-code-block"></button>
                                                        </span>
                                                <span class="ql-formats">
                                                            <button class="ql-clean"></button>
                                                        </span>
                                            </div>
                                            <div class="editor">
                                                <h1 class="ql-align-center">Quill Rich Text Editor</h1>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Snow Editor end -->
    </div>
@endsection
@push('vendor-js')
    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('dashboard/app-assets/vendors/js/editors/quill/katex.min.js')}}"></script>
    <script src="{{asset('dashboard/app-assets/vendors/js/editors/quill/highlight.min.js')}}"></script>
    <script src="{{asset('dashboard/app-assets/vendors/js/editors/quill/quill.min.js')}}"></script>

    <!-- END: Page Vendor JS-->
@endpush
@push('js')
    <script src="{{asset('dashboard/app-assets/js/scripts/forms/form-quill-editor.js')}}"></script>
@endpush
