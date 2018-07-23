@extends('layouts.default')

@section('content')

    <h1>Main page</h1>
    <br>
    @if(count($data))
        <div class="form-group">
            <input type="text" class="form-control pull-right" id="search" placeholder="Search ...">
        </div>
        <br>
        <table id="myTable" class="tablesorter searchTable table table-bordered">
            <thead>
            <tr>
                <th></th>
                <th>UA</th>
                <th>IP</th>
                <th>REF</th>
                <th>Val1</th>
                <th>Val2</th>
                <th>ERROR</th>
                <th>BAD</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->ua }}</td>
                    <td>{{ $item->ip }}</td>
                    <td>{{ $item->ref }}</td>
                    <td>{{ $item->param1 }}</td>
                    <td>{{ $item->param2 }}</td>
                    <td>{{ $item->error }}</td>
                    <td>{{ $item->bad_domain }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <h2>List empty</h2>
    @endif
@endsection