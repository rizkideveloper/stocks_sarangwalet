@extends('dashboard.layouts.main')

@section('container')
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <h1 class="app-page-title">Stokcs</h1>

            <div class="row mb-4">
                <div class="col">
                    <div class="app-card">
                        <div class="app-card-body p-3 p-lg-4">

                            <a href="dashboard/stock/create" class="btn btn-primary mb-3">Add New Stock</a>
                            <table id="stockTable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>

                        </div><!--//app-card-body-->
                    </div><!--//app-card-->
                </div><!--//col-->

            </div><!--//row-->

        </div><!--//container-fluid-->
    </div><!--//app-content-->

    <script>
        $(document).ready(function() {
            $('#stockTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ url()->current() }}',
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false,
                        width: '5%'
                    },
                    {
                        data: 'type_bird',
                        name: 'type_bird',
                        orderable: true,
                        searchable: true,
                        width: '25%'
                    },
                    {
                        data: 'category_id',
                        name: 'category_id',
                        orderable: true,
                        searchable: true,
                        width: '25%'
                    },
                    {
                        data: 'amount',
                        name: 'amount',
                        orderable: true,
                        searchable: true,
                        width: '25%'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false,
                        width: '10%'
                    }
                ]
            });
        });
    </script>
@endsection
