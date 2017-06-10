@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Your Banks</div>

                    @if($published_ibans->count() === 0)
                        <div class="panel-body">
                            You dont have any published ibans
                        </div>
                    @else
                        <div class="panel-body">
                            You Dont Seem to have any Banks Connected to your account. <br>

                            <a href="/banks/create" class="btn btn-success">Create Bank</a>
                        </div>
                    @endif

                    {{--@if($unpublished_ibans)--}}

                </div>
            </div>
        </div>
    </div>
@endsection