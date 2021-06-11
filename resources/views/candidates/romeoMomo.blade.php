@extends('layouts.app')
@section('title', 'Romeo S. Momo Sr.')
@prepend('page-css')
{{-- CSS HERE --}}
@endprepend
@section('content')
<div class="section candidate-holder">
	<div class="candidate">
		<img src="{{ asset('/public/assets/images/momo-plataporma-solo.png') }}" alt="" title="">
	</div>
</div>

<div class="section white candidate-description">
	<div class="desc">
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, quas blanditiis velit molestias eius eveniet doloribus enim voluptate libero ut officiis voluptatum exercitationem accusantium animi quo delectus, non, quibusdam ullam?</p>
	</div>
</div>

<!--Platform -->
<div class="section yellow candidate-platform">
	<div class="diagonal-divider-top">
		<img src="assets/images/divider-white-0.png" >
	</div>
	<div class="top-pad">&nbsp;</div>
	<div class="platform">
		<h1 class="fgrey">PLATAPORMA</h1>
		<div class="ico">
			<p><img src="{{ asset('/public/assets/images/favicon.png') }}"></p>
		</div>
		<div class="desc">
			<h1 class="fgrey">Lorem ipsum dolor sit amet </h1>
			<ul>
				<li><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum quis fugiat ad accusantium porro, vel similique nam et voluptatem eaque distinctio explicabo veniam. Illo corrupti temporibus ab porro. Fuga, provident?</p></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
</div>
<!-- Divider -->
<div class="section white">
	<div class="diagonal-divider-top">
		<img src="{{ asset('/public/assets/images/divider-yellow-0.png') }}" >
	</div>
	<div class="diagonal-divider-bottom inner-cand">
		<img src="{{ asset('public/assets/images/divider-0-grey.png') }}" >
	</div>
	<div class="carousel slide" data-ride="carousel" id="group1">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="{{ asset('/public/assets/images/ayek-plataporma.jpg') }}">
			</div>
			<div class="carousel-item">
				<img src="{{ asset('/public/assets/images/ayek-plataporma2.jpg') }}">
			</div>
			<div class="carousel-item">
				<img src="{{ asset('/public/assets/images/ayek-plataporma3.jpg') }}">
			</div>
		</div>
	</div>
</div>

<div class="section grey candidate-description">
	<div class="resume">
		<div class="cv">
			<h1>SERBISYO</h1>
			<ul>
				<li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, sunt fugit beatae vitae in atque laudantium neque? Perferendis </p>
				<ul>
					<li><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus animi vero itaque, numquam minima autem accusantium illo ullam facilis. Ipsam quo accusantium fugit sed. Delectus voluptatum quae pariatur consequuntur adipisci?</p></li>
				</ul>
			</ul>
		</div>
		<div class="cv">
			<h1>KEY ACHIEVEMENTS</h1>
			<ul>
				<li><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque iste ipsum ut ipsa, provident consectetur porro quaerat esse enim libero, voluptates laborum. Unde assumenda eius minus sit deserunt expedita quasi.</p></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
</div>

<div class="section white">
	<div class="diagonal-divider-top">
		<img src="{{ asset('/public/assets/images/divider-grey-0.png') }}" >
	</div>
	<div class="top-pad">&nbsp;</div>
</div>


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
