
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

<div class="section white">
	<div class="diagonal-divider-bottom">
		<img src="assets/images/divider-0-grey.png" >
	</div>
</div>

<!--Platform 1 -->
<div class="section grey">
	<div class="platform">
		<h1 class="fgrey">sample plataporma</h1>
		<p class="ico"><img src="assets/images/ico_1_house.png"></p>
		<ul>
			<li><p>&bull; Pagsasabatas ng Pantawid Pamilyang Pilipino Program (4Ps)</p></li>
			<li><p>&bull; On-site, in-city na relokasyon at pabahay</p></li>
			<li><p>&bull; Pagtanggal sa pabigat na requirement sa trabaho, gaya ng NBI clearance</p></li>
			<li><p>&bull; Dagdag pondo para sa mga mahihirap na lalawigan, siyudad, at munisipyo</p></li>
			<li><p>&bull; Siguruhing malawak at maayos na pag-enrol sa SSS, PhilHealth, at PAGIBIG</p></li>
		</ul>
	</div>
</div>
<div class="section grey">
	<div class="diagonal-divider-top">
		<img src="assets/images/divider-grey-0.png" >
	</div>
</div>

<!--Platform 2 -->
<div class="section blue">
	<div class="platform">
		<div class="top-pad">&nbsp;</div>
		<h1 class="fwhite">sample plataporma</h1>
		<p class="ico"><img src="assets/images/ico_2_basket.png"></p>
		<ul>
			<li><p style="color:white;">&bull; Pagsulong at pag-unlad ng bansang Pilipinas</p></li>
			<li><p style="color:white;">&bull; Pautang at training sa mga maliliit na negosyong Pilipino</p></li>
			<li><p style="color:white;">&bull; Mabilis, madali, walang kotong sa pagkuha ng mga permit para sa negosyo</p></li>
			<li><p style="color:white;">&bull; Pagtanggal sa dagdag na buwis sa langis</p></li>
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
