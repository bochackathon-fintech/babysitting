@extends('layouts.client')

@section('content')

    <div class="container">
        <div class="row">
            <div class="well">
                {!!  json_encode($results, JSON_PRETTY_PRINT) !!}
            </div>
        </div>
    </div>


@endsection