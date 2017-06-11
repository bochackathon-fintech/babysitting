@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="well">
                <pre>
                    {!!  json_encode($results, JSON_PRETTY_PRINT) !!}

                </pre>


            </div>
        </div>
    </div>


@endsection