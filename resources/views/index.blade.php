
@extends('layouts.app')
@section('title', 'Hugpong Surigao')
@prepend('page-css')
{{-- CSS HERE --}}
@endprepend

@section('content')
    <div class="candidates pt-5" id="kilalanin">
        <div class="candidate w-224 clg-hidden"><a href="{{ url('alexander-t-pimentel') }}"><img src="{{ asset('assets/images/candidates/pimentel.png') }}" class="lg-hidden" alt="" title=""></a></div>
        <div class="candidate w-224  m-negmargin-5 cxs-hidden"><a href="{{ url('alexander-t-pimentel') }}"><img src="{{ asset('assets/images/candidates/pimentel.png') }}" alt="" title=""></a></div>
        <div class="candidate w-224"><a href="#"><img src="{{ asset('assets/images/candidates/alameda.png') }}" alt="" title=""></a></div>
        <div class="clear"></div>
    </div>

    <div class="pt-5 pb-3">
        <h1 class="fgrey">1st District</h1>
    </div>

    <div class="candidates2" id="kilalanin">
        <div class="candidate w-224 clg-hidden"><a href="#"><img src="{{ asset('assets/images/candidates/rmomo.png') }}" class="lg-hidden" alt="" title=""></a></div>
        <div class="candidate w-224  m-negmargin-5 cxs-hidden"><a href="#"><img src="{{ asset('assets/images/candidates/rmomo.png') }}" alt="" title=""></a></div>
        <div class="candidate w-224"><a href="#"><img src="{{ asset('assets/images/candidates/first/azarcon.png') }}" alt="" title=""></a></div>
        <div class="candidate w-224 m-negmargin-5"><a href="#"><img src="{{ asset('assets/images/candidates/first/dumagan.png') }}" alt="" title=""></a></div>
        <div class="candidate w-224 m-negmargin-5"><a href="#"><img src="{{ asset('assets/images/candidates/first/layno.png') }}" alt="" title=""></a></div>
        <div class="candidate w-224 m-negmargin-5"><a href="#"><img src="{{ asset('assets/images/candidates/first/momo.png') }}" alt="" title=""></a></div>
        <div class="candidate w-224  m-negmargin-5"><a href="#"><img src="{{ asset('assets/images/candidates/first/montesclaros.png') }}" alt="" title=""></a></div>
        <div class="clear"></div>
    </div>

    <div class="pt-5 pb-3">
        <h1 class="fgrey">2nd District</h1>
    </div>

    <div class="candidates2" id="kilalanin">
        <div class="candidate w-224 clg-hidden"><a href="#"><img src="{{ asset('assets/images/candidates/jpimentel.png') }}" class="lg-hidden" alt="" title=""></a></div>
        <div class="candidate w-224  m-negmargin-5 cxs-hidden"><a href="#"><img src="{{ asset('assets/images/candidates/jpimentel.png') }}" alt="" title=""></a></div>
        <div class="candidate w-224"><a href="#"><img src="{{ asset('assets/images/candidates/second/canedo.png') }}" alt="" title=""></a></div>
        <div class="candidate w-224  m-negmargin-5"><a href="#"><img src="{{ asset('assets/images/candidates/second/cejoco.png') }}" alt="" title=""></a></div>
        <div class="candidate w-224 m-negmargin-5"><a href="#"><img src="{{ asset('assets/images/candidates/second/garay.png') }}" alt="" title=""></a></div>
        <div class="candidate w-224 m-negmargin-5"><a href="#"><img src="{{ asset('assets/images/candidates/second/salazar.png') }}" alt="" title=""></a></div>
        <div class="candidate w-224 m-negmargin-5"><a href="#"><img src="{{ asset('assets/images/candidates/second/sayawan.png') }}" alt="" title=""></a></div>
        <div class="clear"></div>
    </div>

<br><br>
<div class="section makinig">
    <div class="diagonal-divider-top">
        <div class="big-btn-rev"><a href="{{ url('/plataporma') }}">Hugpong Plataporma</a></div>
    </div>
</div>
<br><br><br>

@push('page-scripts')
{{-- JS SCRIPTS HERE --}}
@endpush
@endsection
