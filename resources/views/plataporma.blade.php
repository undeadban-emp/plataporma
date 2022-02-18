
@extends('layouts.app')
@section('title', 'Hugpong Surigao - Plataporma')
@prepend('page-css')
{{-- CSS HERE --}}
@endprepend

@section('content')
    <div class="plataporma_header">
		<div class="xs-hidden">
            <div class="carousel slide" data-ride="carousel" id="group2">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                            <img style="height: 550px;" src="{{ asset('assets/images/plataporma2.jpg') }}"></p>
                    </div>
                </div>
            </div>
		</div>
		<div class="lg-hidden">
            <div class="carousel slide" data-ride="carousel" id="group2">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                            <p class="ico"><img style="height: 50%;" src="{{ asset('assets/images/plataporma2.jpg') }}"></p>
                    </div>
                </div>
            </div>
		</div>
	</div>


    <div class="section white">
        <div class="platform">
            <p class="ico"><img src="{{ asset('assets/images/surigao/S.png') }}"></p>
            <ul>
                <li><p> Suportaran ang mga komprehensibong balaod proteksyon sa kinaiyahan</p></li>
                <li><p> Undangon ang pagpagawas sa aplikasyon sa mina</p></li>
                <li><p> Palig-onon ang Multi-Partite Monitoring Team (MMT)</p></li>
                <li><p> Padayon nga pagpalapad sa mga programa ug proyektong panginabuhian</p></li>
            </ul>
        </div>
    </div>
<!--Platform 1 -->
<div class="section grey">
	<div class="diagonal-divider-top">
		<img src="{{ asset('assets/images/divider-white-0.png') }}" >
	</div>
</div>
<div class="section grey">
	<div class="platform">
        <div class="top-pad">&nbsp;</div>
		<p class="ico"><img src="{{ asset('assets/images/surigao/U.png') }}"></p>
		<ul>
			<li><p> Mentinahon ang Kahapsay ug Kalinaw</p></li>
			<li><p> Ipadayon ang kagawasan sa droga pinaagi sa pakiglambigit sa BADAC ug CADAC ug MADAC</p></li>
			<li><p> Ipadayon ang pagpugan sa tanan matang sa kriminalidad sa probinsya</p></li>
			<li><p> Pakiglambigit sa mga kabarangayan sa implementasyon sa ELCAC</p></li>
		</ul>
	</div>
</div>
<div class="section grey">
	<div class="diagonal-divider-top">
		<img src="{{ asset('/assets/images/divider-grey-0.png') }}" >
	</div>
</div>



<div class="section white">
	<div class="platform">
		<div class="top-pad">&nbsp;</div>
		<p class="ico"><img src="{{ asset('assets/images/surigao/R.png') }}"></p>
        <ul>
			<li><p> Pakusgan ang katakos sa pagpangandam, pagresponde ug pagbangon gikan sa kadaut epekto sa kalamidad</p></li>
		</ul>
        <h3 class="fgrey font-weight-bold text-center font-italic">PAGPANGANDAM SA KALAMIDAD</h3>
		<ul>
			<li><p> Pagtukod ug mga istrukturang pangontra sa katalagman ug puy-anan sa mga panginabuhian nga mananap</p></li>
			<li><p> Pagtukod ug mga “Balay Dalangpanan” sa tanan lungsod sa probinsya</p></li>
		</ul>
        <h3 class="fgrey font-weight-bold text-center font-italic">PANAHON SA KALAMIDAD</h3>
            <ul>
                <li><p> Hugot pakusgan ang mga pamaagi sa pagresponde sa mga kabarangayan</p></li>
                <li><p> Paspas nga paghatod sa serbisyong hinabang</p></li>
                <li><p> Palabihon ug hatod sa serbisyong hinabang ang mga katigulangan, kabataan, kababayen-an, adunay sakit ug walay nag-atiman</p></li>
            </ul>
            <h3 class="fgrey font-weight-bold text-center font-italic">PAGBANGON GIKAN SA KALAMIDAD</h3>
                <ul>
                    <li><p> Pakiglambigit sa relihiyosong grupo ug komunidad aron mabatonan ang paspas nga pagbangon sa mga <b>SURIGAONON</b> </p></li>
                </ul>
		<div class="bot-pad">&nbsp;</div>
	</div>
</div>
<div class="section white">
	<div class="diagonal-divider-bottom">
		<img src="{{ asset('assets/images/divider-0-grey.png') }}" >
	</div>
</div>



<div class="section grey">
	<div class="platform">
		<p class="ico"><img src="{{ asset('assets/images/surigao/I.png') }}"></p>
		<ul>
			<li><p> Tarong nga Kadalanan para sa mga <b>SURIGAONON</b></p></li>
			<li><p> Tarong nga mga Tulay para sa mga <b>SURIGAONON</b></p></li>
			<li><p> Balay Dalangpanan para sa mga <b>SURIGAONON</b> (Evacuation Centers, Isolation Centers, Halfway Houses)</p></li>
		</ul>
	</div>
</div>
<div class="section grey">
	<div class="diagonal-divider-top">
		<img src="{{ asset('/assets/images/divider-grey-0.png') }}" >
	</div>
</div>


<div class="section white">
	<div class="platform">
		<div class="top-pad">&nbsp;</div>
		<p class="ico"><img src="{{ asset('assets/images/surigao/G.png') }}"></p>
		<ul>
			<li><p> Klaro, Han-ay,Tinud-anay ug Diosnon nga Gobyernong <b>SURIGAONON</b></p></li>
			<li><p> May Kahadlok ug Tulubagon sa <b>SURIGAONON</b></p></li>
			<li><p> Paspas ug Abtik nga Serbisyong <b>SURIGAONON</b></p></li>
			<li><p> Pakiglambigit sa Nagkadaiyang Institusyon sa Katawhang <b>SURIGAONON</b></p></li>
			<li><p> Pagtukod sa “Internal Audit System” para sa Gobyernong <b>SURIGAONON</b></p></li>
		</ul>
		<div class="bot-pad">&nbsp;</div>
	</div>
</div>
<div class="section white">
	<div class="diagonal-divider-bottom">
		<img src="{{ asset('assets/images/divider-0-grey.png') }}" >
	</div>
</div>



<div class="section grey">
	<div class="platform">
		<p class="ico"><img src="{{ asset('assets/images/surigao/A.png') }}"></p>
		<ul>
			<li><p> Padayon sa Pagtukod ug mga Inprastrakturang pang Agrikultura</p></li>
			<li><p> Padayon sa Panghatag ug mga Agrikulturang Kagamitan</p></li>
			<li><p> Pagpalig-on sa Ani sa Produktong Agrikultura pinaagi sa Padayon ug Saktong Edukasyon pang Agrikultura</p></li>
			<li><p> Pagpalig-on sa Hinabang Pinansyal pinaagi sa Paspas nga Koordinasyon sa mga Ahensya sa Gobyerno ug Pribadong Sektor</p></li>
			<li><p> Pagpalig-on sa Presyong Agrikultura pinaagi sa Direktang Komunikasyon sa Mag-uuma ug Merkado</p></li>
			<li><p> Lig-on nga Pagpatuman sa mga Balaod Proteksyon sa Kinaiyahan para sa Sustinableng Pagkaon</p></li>
		</ul>
	</div>
</div>
<div class="section grey">
	<div class="diagonal-divider-top">
		<img src="{{ asset('/assets/images/divider-grey-0.png') }}" >
	</div>
</div>

<div class="section white">
	<div class="platform">
        <div class="top-pad">&nbsp;</div>
		<p class="ico"><img src="{{ asset('assets/images/surigao/O.png') }}"></p>
		<ul>
			<li><p> Sakto nga Serbisyo sa Panglawas, Nutrisyon, Ngipon, Sosyal ug Edukasyon </p></li>
			<li><p> Programang matagaan ug saktong oportunidad ang mga Kabataan nga Molambo</p></li>
			<li><p> Hugot nga Suporta sa Pagpalambo sa Industriya sa Turismo</p></li>
		</ul>
		<div class="bot-pad">&nbsp;</div>
	</div>
</div>
<div class="section white">
	<div class="diagonal-divider-bottom">
		<img src="{{ asset('assets/images/divider-0-grey.png') }}" >
	</div>
</div>



<div class="section white">
	<div class="diagonal-divider-bottom">
		<img src="{{ asset('assets/images/divider-0-white.png') }}" >
	</div>
</div>






<div class="section makinig">
    <div class="diagonal-divider-top">
        <h1 class="">"Padayon Paglambo SURIGAO"</h1>
    </div>
    <div class="bot-pad">&nbsp;</div>
</div>
<br><br>



@push('page-scripts')
{{-- JS SCRIPTS HERE --}}
@endpush
@endsection
