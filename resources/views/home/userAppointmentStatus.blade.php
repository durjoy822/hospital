@extends('home.layouts.master')
@section('content')
    <table class="table container">
        <thead>
            <tr>
                <th scope="col">Patient</th>
                <th scope="col">Doctor</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($appointments as $appointment)
            <tr>
                @php $patient = \App\Models\Patient::find($appointment->patientId); @endphp
                <td>{{$patient->patient_name}}</td>
                @php $doctor = \App\Models\Doctor::find($appointment->doctor); @endphp
                <td>{{$doctor->name}}</td>
                <td>{{$appointment->date}}</td>
                <td>{{$appointment->time}}</td>
                <td>{{$appointment->status}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
