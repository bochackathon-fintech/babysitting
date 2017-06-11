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
                        @php
                            $ibans = $published_ibans->keyBy('iban_number')
                        @endphp

                        @foreach($unpublished_ibans as $ib)
                            {{--{{ dd($ibans) }}--}}
                            @if($ibans->has($ib['iban_number']))

                                <div>
                                    <div class="list-group-item"><h3><span
                                                    class="label label-danger">iban</span>{{ $ib['iban_number']  }} </h3>
                                        <span class="pull-right">
                                        <a class="btn btn-sm btn-warning"
                                           href="{{ url('iban/publish/' . $ib['iban_number']) }}"
                                           role="button">un Publish</a>
                                    </span>
                                        <h4><span class="label label-success">label</span>{{ $ib['label'] }}</h4>
                                    </div>

                                </div>
                            @else

                                <div>
                                    <div class="list-group-item"><h3><span
                                                    class="label label-danger">iban</span>{{ $ib['iban_number']  }} </h3>
                                        <span class="pull-right">
                                        <a class="btn btn-sm btn-success"
                                           href="{{ url('iban/publish/' . $ib['iban_number']) }}"
                                           role="button">Publish</a>
                                    </span>
                                        <h4><span class="label label-success">label</span>{{ $ib['label'] }}</h4>
                                    </div>

                                </div>
                            @endif

                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection