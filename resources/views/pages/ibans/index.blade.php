@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">


                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading">Bank of Cyprus - IBAN's</div>
                    <div class="panel-body">
                        <p>This is your personal accounts. you can click publish to make the IBAN available publicly</p>
                    </div>

                    <!-- List group -->
                    <ul class="list-group">
                        @foreach($unpublished_ibans as $ib)
                            <div>
                                <div class="list-group-item"><span class="label label-danger">iban</span> {{ $ib['iban_number'] }}
                                    <span class="pull-right">
                                        <a class="btn btn-sm btn-success"
                                           href="{{ url('iban/publish/' . $ib['iban_number']) }}"
                                           role="button">Publish</a>
                                    </span>
                                    <h4><span class="label label-success">label</span>{{ $ib['label'] }}</h4>
                                </div>

                            </div>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection