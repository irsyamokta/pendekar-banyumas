@extends('client.index')
@section('content')
    @include('client.partials.preloader')
    @if ($umur < 18)
        @include('client.page.screening.components.sdq-question')
    @endif
    @include('client.page.screening.components.srq-question')
@endsection
