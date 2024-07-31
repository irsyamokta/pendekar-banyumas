@extends('client.index')
@section('content')
    {{-- @include('client.partials.preloader') --}}
    @include('client.page.screening.components.sdq-question')
@endsection