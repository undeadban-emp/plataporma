
@extends('layouts.app')
@section('title', 'Plataporma')
@prepend('page-css')
{{-- CSS HERE --}}
@endprepend

@section('content')

<div class="subheader">
	<h1 class="fgrey">BUONG PLATAPORMA</h1>
	<div class="bot-pad">&nbsp;</div>
	<div class="bot-pad">&nbsp;</div>
</div>

<div class="section white">
	<div class="diagonal-divider-bottom">
		<img src="{{ asset('/assets/images/divider-0-grey.png') }}" >
	</div>
</div>

<!--Platform 1 -->
<div class="section grey">
	<div class="platform">
		<h1 class="fgrey">sample plataporma</h1>
		<p class="ico"><img src="{{ asset('assets/images/favicon.png') }}"></p>
		<ul>
			<li><p>&bull;Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi, quam dolore labore similique animi eum pariatur adipisci architecto eius sapiente quia sint modi dicta cumque mollitia facilis ex distinctio exercitationem?</p></li>
			<li><p>&bull; Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium sunt nobis culpa nisi, quisquam ratione enim minima repellendus asperiores unde blanditiis necessitatibus odio quibusdam cupiditate perspiciatis! Corrupti vel labore illum.</p></li>
			<li><p>&bull; Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi iusto veniam error labore doloribus magni, tempore natus? Itaque accusantium adipisci modi incidunt dolores, nulla eligendi autem, quasi, maiores fugit quos!</p></li>
		</ul>
	</div>
</div>
<div class="section grey">
	<div class="diagonal-divider-top">
		<img src="{{ asset('/assets/images/divider-grey-0.png') }}" >
	</div>
</div>

<!--Platform 2 -->
<div class="section blue">
	<div class="platform">
		<div class="top-pad">&nbsp;</div>
		<h1 class="fwhite">sample plataporma</h1>
		<p class="ico"><img src="{{ asset('/assets/images/favicon.png') }}"></p>
		<ul>
			<li><p style="color:white;">&bull; Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis placeat asperiores nihil aliquid temporibus totam suscipit aperiam repudiandae fugit pariatur, fugiat natus aut repellendus perspiciatis illo eius sint doloremque dolorum!</p></li>
			<li><p style="color:white;">&bull; Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, dolorum alias. Nostrum expedita perspiciatis eaque eos aut ducimus ad qui excepturi voluptates iusto labore reiciendis architecto, recusandae ipsum iste quidem!</p></li>
		</ul>
		<div class="bot-pad">&nbsp;</div>
	</div>
</div>
<div class="section white">
	<div class="diagonal-divider-bottom">
		<img src="assets/images/divider-0-white.png" >
	</div>
</div>





<br><br><br><br>
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
