
@extends('layouts.app')
@section('title', 'Plataporma')
@prepend('page-css')
{{-- CSS HERE --}}
@endprepend

@section('content')

<div class="subheader">
	<div class="plataporma_header">
		<div class="xs-hidden">
			<!-- <img src="assets/images/headshots_small.jpg" alt="otso diretso"> -->
			<a href="macalintal.html"><img src="assets/images/s-macalintal.jpg"></a><!--
		--><a href="alejano.html"><img src="assets/images/s-alejano.jpg"></a><!--
		--><a href="tanada.html"><img src="assets/images/s-tanada.jpg"></a><!--
		--><a href="hilbay.html"><img src="assets/images/s-hilbay.jpg"></a><!--
		--><a href="gutoc.html"><img src="assets/images/s-gutoc.jpg"></a><!--
		--><a href="roxas.html"><img src="assets/images/s-roxas.jpg"></a><!--
		--><a href="aquino.html"><img src="assets/images/s-aquino.jpg"></a><!--
		--><a href="diokno.html"><img src="assets/images/s-diokno.jpg"></a>
		</div>
		<div class="lg-hidden">
			<!-- <img src="assets/images/headshots.jpg" alt="otso diretso"> -->
			<div class="candidate w-325"><a href="macalintal.html"><img src="assets/images/c-romy-macalintal.png" alt="Romy Macalintal" title="Romy Macalintal"></a></div><!--
			--><div class="candidate w-224"><a href="alejano.html"><img src="assets/images/c-gary-alejano.png" alt="Gary Alejano" title="Gary Alejano"></a></div><!--
			--><div class="candidate w-224 m-negmargin-5"><a href="tanada.html"><img src="assets/images/c-erin-tanada.png" alt="Erin Tañada" title="Erin Tañada"></a></div><!--
			--><div class="candidate w-224 m-negmargin-5"><a href="hilbay.html"><img src="assets/images/c-pilo-hilbay.png" alt="Pilo Hilbay" title="Pilo Hilbay"></a></div><!--
			--><div class="clear"></div><!--
			--><div class="candidate w-224 negmargin-5"><a href="gutoc.html"><img src="assets/images/c-samira-gutoc.png" alt="Samira Gutoc" title="Samira Gutoc"></a></div><!--
			--><div class="candidate w-224 negmargin-5"><a href="roxas.html"><img src="assets/images/c-mar-roxas.png" alt="Mar Roxas" title="Mar Roxas"></a></div><!--
			--><div class="candidate w-224 negmargin-5"><a href="aquino.html"><img src="assets/images/c-bam-aquino.png" alt="Bam Aquino" title="Bam Aquino"></a></div><!--
			--><div class="candidate w-325 negmargin-5"><a href="diokno.html"><img src="assets/images/c-chel-diokno.png" alt="Chel Diokno" title="Chel Diokno"></a></div><!--
			--><div class="clear"></div>
		</div>
	</div>
	<h1 class="fgrey">BUONG PLATAPORMA</h1>
	<div class="bot-pad">&nbsp;</div>
	<div class="bot-pad">&nbsp;</div>
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
