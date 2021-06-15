
@extends('layouts.app')
@section('title', 'Surigao Para sa Surigaonon!')
@prepend('page-css')
{{-- CSS HERE --}}
@endprepend

@section('content')


<div class="candidates" id="kilalanin">
    <div class="row">
    <div class="col-12">
    <div class="candidate w-325 m-negmargin-5"><a href="{{ url('/alexander-t-pimentel') }}"><img src="{{ asset('/public/assets/images/ayek.png') }}" alt="Alexander Pimentel" title="Alexander Pimentel"></a></div>
    <div class="clear"></div>
    </div>
    </div>

    <div class="row">
        <div class="col-4">
            <h1  style="padding-top:30px;" class="fgrey">1st District</h1>
            <div class="candidate w-custom-size "><a href="{{ url('/romeo-s-momo') }}"><img src="{{ asset('/public/assets/images/momo.png') }}" alt="Romeo Momo" title="Romeo Momo"></a></div>
            <div class="candidate w-custom-size1 "><a href="{{ url('/') }}"><img src="{{ asset('/public/assets/images/custome-image.png') }}" alt="" title=""></a></div>
            <div class="candidate w-custom-size1 "><a href="{{ url('/') }}"><img src="{{ asset('/public/assets/images/custome-image.png') }}" alt="" title=""></a></div>
            <div class="candidate w-custom-size1 "><a href="{{ url('/') }}"><img src="{{ asset('/public/assets/images/custome-image.png') }}" alt="" title=""></a></div>
            <div class="candidate w-custom-size1 "><a href="{{ url('/') }}"><img src="{{ asset('/public/assets/images/custome-image.png') }}" alt="" title=""></a></div>
            <div class="candidate w-custom-size1 "><a href="{{ url('/') }}"><img src="{{ asset('/public/assets/images/custome-image.png') }}" alt="" title=""></a></div>
            <div class="candidate w-custom-size1 "><a href="{{ url('/') }}"><img src="{{ asset('/public/assets/images/custome-image.png') }}" alt="" title=""></a></div>
            <div class="candidate w-custom-size1 "><a href="{{ url('/') }}"><img src="{{ asset('/public/assets/images/custome-image.png') }}" alt="" title=""></a></div>
            <div class="candidate w-custom-size1 "><a href="{{ url('/') }}"><img src="{{ asset('/public/assets/images/custome-image.png') }}" alt="" title=""></a></div>
            <div class="candidate w-custom-size1 "><a href="{{ url('/') }}"><img src="{{ asset('/public/assets/images/custome-image.png') }}" alt="" title=""></a></div>
            <div class="candidate w-custom-size1 "><a href="{{ url('/') }}"><img src="{{ asset('/public/assets/images/custome-image.png') }}" alt="" title=""></a></div>
            <div class="candidate w-custom-size1 "><a href="{{ url('/') }}"><img src="{{ asset('/public/assets/images/custome-image.png') }}" alt="" title=""></a></div>
            <div class="candidate w-custom-size1 "><a href="{{ url('/') }}"><img src="{{ asset('/public/assets/images/custome-image.png') }}" alt="" title=""></a></div>
            <div class="candidate w-custom-size1 "><a href="{{ url('/') }}"><img src="{{ asset('/public/assets/images/custome-image.png') }}" alt="" title=""></a></div>
            <div class="candidate w-custom-size1 "><a href="{{ url('/') }}"><img src="{{ asset('/public/assets/images/custome-image.png') }}" alt="" title=""></a></div>
            <div class="clear"></div>
        </div>
        <div class="col-4">
            <div style="padding-top:50px;" class="candidate-desc">
                <h1 class="fgrey">Mission</h1>
                <p class="text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi harum laboriosam vitae necessitatibus temporibus magni blanditiis, voluptate, quisquam error recusandae ab obcaecati placeat. Quas rerum iure ad enim recusandae nesciunt.</p>
            </div>
            <div class="candidate-desc">
                <h1 class="fgrey">Vision</h1>
                <p class="text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi harum laboriosam vitae necessitatibus temporibus magni blanditiis, voluptate, quisquam error recusandae ab obcaecati placeat. Quas rerum iure ad enim recusandae nesciunt.</p>
            </div>
            <div class="candidate-desc">
                <h1 class="fgrey">Platform</h1>
                <p class="text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi harum laboriosam vitae necessitatibus temporibus magni blanditiis, voluptate, quisquam error recusandae ab obcaecati placeat. Quas rerum iure ad enim recusandae nesciunt.</p>
            </div>
            </div>
            <div class="col-4">
                <h1 style="padding-top:30px;" class="fgrey">2nd District</h1>
                <div class="candidate w-custom-size2"><a href="{{ url('/johnny-t-pimentel') }}"><img src="{{ asset('/public/assets/images/johnny.png') }}" alt="Johnny Pimentel" title="Johnny Pimentel"></a></div>
                <div class="candidate w-custom-size1 "><a href="{{ url('/') }}"><img src="{{ asset('/public/assets/images/custome-image.png') }}" alt="" title=""></a></div>
                <div class="candidate w-custom-size1 "><a href="{{ url('/') }}"><img src="{{ asset('/public/assets/images/custome-image.png') }}" alt="" title=""></a></div>
                <div class="candidate w-custom-size1 "><a href="{{ url('/') }}"><img src="{{ asset('/public/assets/images/custome-image.png') }}" alt="" title=""></a></div>
                <div class="candidate w-custom-size1 "><a href="{{ url('/') }}"><img src="{{ asset('/public/assets/images/custome-image.png') }}" alt="" title=""></a></div>
                <div class="candidate w-custom-size1 "><a href="{{ url('/') }}"><img src="{{ asset('/public/assets/images/custome-image.png') }}" alt="" title=""></a></div>
                <div class="clear"></div>
                </div>
        </div>

    </div>

    <!-- Highlight -->
<div class="section highlight">
	<div class="diagonal-divider-top">
		<img src="{{ asset('/public/assets/images/divider-white-0.png') }}" >
	</div>
	<div class="carousel slide" data-ride="carousel" id="group1">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="{{ asset('/public/assets/images/slide2.jpg') }}">
			</div>
			<div class="carousel-item">
				<img src="{{ asset('/public/assets/images/slide4.jpg') }}">
			</div>
		</div>
	</div>
	<div class="diagonal-divider-bottom" id="matuto">
		<img src="{{ asset('/public/assets/images/divider-0-grey.png') }}" >
	</div>
</div>

<!--Platform 1 -->
<div class="section grey" id="makinig">
	<div class="candidate-desc">
		<h1 class="fgrey">Lorem ipsum dolor  </h1>
		<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi harum laboriosam vitae necessitatibus temporibus magni blanditiis, voluptate, quisquam error recusandae ab obcaecati placeat. Quas rerum iure ad enim recusandae nesciunt.</p>
	</div>
	<div class="big-btn-rev"><a href="makinig.html">lorem</a></div>
	<div class="bot-pad5">&nbsp;</div>
</div>


<!-- Kumilos -->
<div class="section white footer-kumilos">
	<div class="diagonal-divider-top">
		<img src="{{ asset('/public/assets/images/divider-grey-0.png') }}" >
	</div>
</div>
<br><br><br><br><br><br><br>
<div class="section makinig">
    <div class="diagonal-divider-top">
        <h1 class="">Surigao Para sa Surigaonon!</h1>
        <h1 class="">Surigaonon Para sa Surigao!</h1>
    </div>
</div>
<br><br><br>

@push('page-scripts')
{{-- JS SCRIPTS HERE --}}
@endpush
@endsection
