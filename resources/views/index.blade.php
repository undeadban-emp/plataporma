
@extends('layouts.app')
@section('title', 'Surigao Para sa Surigaonon!')
@prepend('page-css')
{{-- CSS HERE --}}
@endprepend

@section('content')


<div class="candidates" id="kilalanin">
    <div class="row">
    <div class="col-12">
    <div class="candidate w-325 clg-hidden"><a href="{{ url('/alexander-t-pimentel') }}"><img src="{{ asset('assets/images/ayek.png') }}" class="lg-hidden" alt="Alexander Pimentel" title="Alexander Pimentel"></a></div>
    <div class="candidate w-325 cxs-hidden"><a href="{{ url('/alexander-t-pimentel') }}"><img src="{{ asset('assets/images/ayek.png') }}" alt="Alexander Pimentel" title="Alexander Pimentel"></a></div>
    <div class="clear"></div>
    </div>
    </div>
    <div class="clear"></div>
    <div class="candidate w-225 m-negmargin-5"><a href="{{ url('/romeo-s-momo') }}"><img src="{{ asset('assets/images/momo.png') }}" alt="Romeo S. Momo" title="Romeo S. Momo"></a></div>
    <div class="candidate w-225 "><a href="{{ url('/johnny-t-pimentel') }}"><img src="{{ asset('assets/images/johnny.png') }}" alt="Johnny T. Pimentel" title="Johnny T. Pimentel"></a></div>

    <div class="clear"></div>
    </div>


    <div class="section makinig ">
        <div class="diagonal-divider-top">
        </div>
    </div>


@push('page-scripts')
{{-- JS SCRIPTS HERE --}}
@endpush
@endsection
