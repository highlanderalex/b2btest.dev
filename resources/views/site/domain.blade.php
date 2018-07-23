@extends('layouts.default')

@section('content')

    <h1>Bad Domains page</h1>
    <br>
    @if(!empty($domains))
        <table class="table table-bordered">
            <thead><th>#</th><th>Name</th></thead>
        @foreach($domains as $domain)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $domain->name }}</td>
                </tr>
        @endforeach
        </table>
    @else
        <h2>List empty</h2>
    @endif
    <p><strong>Add domain</strong></p>
    <div class="subscribe">
        <form class="subscribe-form" action="" method="get">
            <input name="subscribe" id="bad" type="text" placeholder="Add bad domain ..." class="subscribe-input subscribe">
            <input  type="image" class="subscribe-image subscribe-btn" src="/images/sbcr-btn.jpg">
        </form>
    </div>

@endsection