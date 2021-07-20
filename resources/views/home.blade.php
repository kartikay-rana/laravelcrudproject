@extends('layouts.mainlayout')
@section('content')
<div class="center">
    <div class="col-12 tm-block-col">
        <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
            <h2 class="tm-block-title">Student List</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">FIRST-NAME</th>
                        <th scope="col">LAST-NAME</th>
                        <th scope="col">AGE</th>
                        <th scope="col">SUBJECT</th>
                        <th scope="col">Uploadfile</th>
                        <th scope="col">ACTION</th>
                    </tr>
                </thead>
                <!-- adding for each loop to table  -->
                @foreach($Students as $student)
                <tr>
                    <td>{{$student['id']}}</td>
                    <td>{{$student['First_name']}}</td>
                    <td>{{$student['Last_name']}}</td>
                    <td>{{$student['Age']}}</td>
                    <td>{{$student['Subject']}}</td>
                    <td>{{$student['Uploadfile']}}</td>
                    <td>
                        <a class="color" href="{{url('edit-post/'.$student->id)}}">EDIT</a>
                        <a class="color" href="{{url('delete-post/'.$student->id)}}">DELETE</a>
                    </td>
                </tr>
                <!-- ending the loop -->
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection
@push('after-style')
<style>
    .center {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 50px;
    }
    .color{
        color:rgb(255, 102, 163)!important;
    }
</style>
@endpush