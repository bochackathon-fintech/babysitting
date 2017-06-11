@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col-sm-6">
            @if(isset($result))

                <div class="business-card">
                <div class="media">
                    <div class="media-left">
                        {!! QrCode::size(100)->generate($result['iban']); !!}
                    </div>
                    <div class="media-body">
                        <h2 class="media-heading">{{ $result['user']->name }}</h2>
                        <div class="job"><span class="label label-success">IBAN</span> {{ $result['iban'] }}</div>
                        <div class="job"><span class="label label-success">BIC</span> {{ $result['bic'] }}</div>
                        <div class="mail"><a href="mailto:daniel@bla.ch">{{ $result['user']->email }}</a></div>
                    </div>
                </div>
            </div>

            @endif
        </div>
    </div>

@endsection