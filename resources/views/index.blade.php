
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
    <div class="candidate w-224 m-negmargin-5"><a href="{{ url('/romeo-s-momo') }}"><img src="{{ asset('assets/images/momo.png') }}" alt="Romeo S. Momo" title="Romeo S. Momo"></a></div>
    <div class="candidate w-224 m-negmargin-5"><a href="{{ url('/johnny-t-pimentel') }}"><img src="{{ asset('assets/images/johnny.png') }}" alt="Johnny T. Pimentel" title="Johnny T. Pimentel"></a></div>
    <div class="clear"></div>
    <div class="candidate w-224 negmargin-5"><a href="gutoc.html"><img src="assets/images/sample1.png" alt="Samira Gutoc" title="Samira Gutoc"></a></div>
    <div class="candidate w-224 negmargin-5"><a href="roxas.html"><img src="assets/images/sample2.png" alt="Mar Roxas" title="Mar Roxas"></a></div>
    <div class="candidate w-224 negmargin-5"><a href="aquino.html"><img src="assets/images/sample3.png" alt="Bam Aquino" title="Bam Aquino"></a></div>
    <div class="candidate w-224 negmargin-5"><a href="diokno.html"><img src="assets/images/sample4.png" alt="Chel Diokno" title="Chel Diokno"></a></div>
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
