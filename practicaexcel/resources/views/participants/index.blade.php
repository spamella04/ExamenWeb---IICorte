@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Participants</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Cif/th>
                <th>First Name</th>
                <th>Email</th>
                <th>Degree</th>
            </tr>
        </thead>
        <tbody>
            @foreach($participants as $participant)
            <tr>
                <td>{{ $participant->cif }}</td>
                <td>{{ $participant->first_name }}</td>
                <td>{{ $participant->email }}</td>
                <td>{{ $participant->degree }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection