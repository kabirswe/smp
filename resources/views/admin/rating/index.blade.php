@extends('admin.layouts.app')

@push('custom-style')
    <!-- <link rel="stylesheet" href="{{ asset('vendor/datatable/datatables.min.css') }}"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.semanticui.min.css">
@endpush

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-block dashboard">
    <section class="main-content">
        <div class="title-section d-flex justify-content-between align-items-center">
            <div class="text-block">
                <h1 class="title">Rating List</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Rating</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                </nav>
            </div>
            <!-- <div class="btn-block">
                <a class="btn" href="{{ route('product_type.create') }}">
                <ion-icon name="add-outline"></ion-icon>
                    <span>Create Product Type</span>
                </a>
            </div> -->
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row w-100">
            <table id="data-table" class="ui celled table responsive w-100">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Product ID</th>
                        <th>Text Box</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </section>
</main>
@endsection    

@push('custom-scripts')
    <!-- Scripts -->
    <script src="{{ asset('vendor/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Common Scripts -->
    <script>
        var SITEURL = '{{ URL::to('') }}';
        var ASSET_URL = "{{ config('app.asset_url') }}/";
        $( document ).ready( function () {
        $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
            });
        });
        var no_data_found = 'No data found';
    </script>
    <script src="{{ asset('js/admin/main.js') }}"></script>

    <script src="{{ asset('vendor/datatable/datatables.min.js') }}" defer></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.semanticui.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js" defer></script>

    <script type="text/javascript">
        var listUrl = SITEURL + '/rating';

        $(document).ready( function () {
            var table = $('#data-table').DataTable({
                processing: true,
                responsive: true,
                serverSide: true,
                fixedHeader: true,
                "pageLength": 20,
                "lengthMenu": [ 20, 50, 100, 500 ],
                ajax: {
                    url: listUrl,
                    type: 'GET'
                },
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: true },
                    { data: 'product_id', name: 'product_id', orderable: true },
                    { data: 'name', name: 'name', orderable: true },
                    { data: 'email', name: 'email', orderable: true },
                    { data: 'text_box', name: 'text_box', orderable: true },
                    {
                        data: 'action-btn',
                        orderable: false,
                        render: function (data) {
                            var btn = '';
                            btn += '<a href="javascript:void(0)" id="deleteData" data-toggle="tooltip" data-id="' + data + '" data-original-title="Delete" class="btn btn-dt-delete">Delete</a>';
                            return btn;
                        }
                    }
                ],
                order: [[0, 'desc']]
            });

            $('body').on('click', '#deleteData', function () {
            var dataId = $(this).data("id");
            var isDelete = confirm("Are you sure want to delete!");

                if(isDelete) {
                    $.ajax({
                        type: "DELETE",
                        url: SITEURL + '/rating/' + dataId,
                        success: function (data) {
                            var oTable = $('#data-table').dataTable();
                            oTable.fnDraw(false);
                        },
                        error: function (data) {
                            console.log('Error:', data);
                        }
                    });
                }
            });
        });
    </script>
@endpush
