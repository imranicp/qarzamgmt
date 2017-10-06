@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <table class="table table-stripped">
            <thead>
            <th>Name</th>
            <th>Buisness Name</th>
            <th>Address</th>
            <th>Contact</th>
            <th>Picture</th>

            </thead>
            <tbody>
            @foreach($agents as $agent)
                <tr>
                    <td>{{$agent->agent_name}}</td>
                    <td>{{$agent->buisness_name}}</td>
                    <td>{{$agent->buisness_address}}</td>
                    <td>{{$agent->contact}}</td>
                    <td>dalta Pic Day</td>
            </tr>
                @endforeach
            </tbody>

        </table>
    </div>







@endsection