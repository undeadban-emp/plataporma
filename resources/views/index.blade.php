
@extends('layouts.app')
@section('title', 'Employee')
@prepend('page-css')
{{-- CSS HERE --}}
@endprepend

@section('content')


<div class="candidates" id="kilalanin">
    <div class="row">
    <div class="col-12">
    <div class="candidate w-270 clg-hidden"><a href=""><img src="{{ asset('assets/images/ayek.png') }}" class="lg-hidden" alt="Hon. Alexander Pimentel" title="Hon. Alexander Pimentel"></a></div>
    <div class="candidate w-325 cxs-hidden"><a href=""><img src="{{ asset('assets/images/ayek.png') }}" alt="Hon. Alexander Pimentel" title="Hon. Alexander Pimentel"></a></div>
    <div class="clear"></div>
    </div>
    </div>
    <div class="clear"></div>
    <div class="candidate w-224 m-negmargin-5"><a href=""><img src="{{ asset('assets/images/momo.png') }}" alt="Hon.Romeo S. Momo" title="Hon.Romeo S. Momo"></a></div>
    <div class="candidate w-224 "><a href=""><img src="{{ asset('assets/images/johny.png') }}" alt="Hon. Johnny T. Pimentel" title="Hon. Johnny T. Pimentel"></a></div>
    <div class="clear"></div>
    </div>


<div class="section makinig ">
	<div class="diagonal-divider-top">
	</div>
</div>


<div class="section white footer-kumilos">
	<div class="" id="">
            <div class="desc">
            </div>
            <div class="clear"></div>
	</div>
	<div class="diagonal-divider-bottom">
		<img src="assets/images/divider_white_blue.png" >
	</div>
</div>

@push('page-scripts')
{{-- JS SCRIPTS HERE --}}
@endpush
@endsection
