@extends('layouts.template')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Halo, apakabar!!</h3>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            {!! $chart->container() !!}
        </div>
    </div>
@endsection
@push('js')
<script src="{{ $chart->cdn() }}"></script>
{{ $chart->script() }}
@endpush