@extends('layouts.default')

@section('content')

    <h1>Success #{{ $id_click }}</h1>
    @if(!empty($data))
        <table class="table table-bordered">
            <thead>
                <th>UA</th>
                <th>IP</th>
                <th>REF</th>
                <th>Param1</th>
                <th>Param2</th>
            </thead>
                <tr>
                    <td>{{ $data['ua'] }}</td>
                    <td>{{ $data['ip'] }}</td>
                    <td>{{ $data['ref'] }}</td>
                    <td>{{ $data['param1'] }}</td>
                    <td>{{ $data['param2'] }}</td>
                </tr>
        </table>
    @else
        <h2>Data empty</h2>
    @endif

@endsection