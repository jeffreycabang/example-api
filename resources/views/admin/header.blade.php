@extends('welcome')

@section('title', $title)

@section('style')
    <style type="text/css">
        body{
            margin: 2em;
        }
    </style>
@endsection

@section('content')

    <h1>Test</h1>


    <table border=1>
        <thead>
            <tr>
                <th>id</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            @foreach($test as $result)
            <tr>
                <td>{{$result->id}}</td>
                <td>{{$result->category}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection

@section('page-script')
    <!-- <script type="text/javascript">
        alert('Message');
    </script> -->
@endsection
