@extends('layouts.mainlayout')
@push('after-style')
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<style>
.table {
    color: #0c0b0b;
}
</style>
@endpush
@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Laravel Yajra Datatables </h2>
    <table class="table table-bordered yajra-datatable">
        <thead>
            <tr>
                <th>Id</th>
                <th>First_Name</th>
                <th>Last_Name</th>
                <th>Age</th>
                <th>Subject</th>
                <th>Uploadfile</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>


</div>
@endsection
@push('after-script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>



<script type="text/javascript">
    $(function() {

        var table = $('.yajra-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('home') }}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'First_name',
                    name: 'First_name'
                },
                {
                    data: 'Last_name',
                    name: 'Last_name'
                },
                {
                    data: 'Age',
                    name: 'Age'
                },
                {
                    data: 'Subject',
                    name: 'Subject'
                },
                {
                    data:'Uploadfile',
                    name:'Uploadfile',
                
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: true,
                    searchable: true
                },
            ]
        });

    });
</script>
@endpush