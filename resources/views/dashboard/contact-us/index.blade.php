@extends('dashboard.layout.main')
@push('vendor-css')
    @include('dashboard.layout.vendorCss')
@endpush
@push('css')
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/app-assets/css/plugins/forms/pickers/form-flat-pickr.css')}}">
@endpush
@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Contact Us</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Contacts
                            </li>
                            {{--                            <li class="breadcrumb-item active">add user--}}
                            {{--                            </li>--}}
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <!-- Basic table -->
        <section id="ajax-datatable">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h4 class="card-title">Contacts</h4>
                        </div>
                        <div class="card-datatable">
                            <table class="datatables-ajax table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>phone</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ Basic table -->

    </div>
@endsection

@push('vendor-js')
    @include('dashboard.layout.vendorJs')
@endpush
@push('js')
    <script src="{{asset('dashboard/app-assets/js/scripts/tables/table-datatables-advanced.js')}}"></script>
    <script type="text/javascript">
        $(function () {

            var table = $('.datatables-ajax').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.contact.index') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'phone', name: 'phone'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });

        });
    </script>

@endpush
