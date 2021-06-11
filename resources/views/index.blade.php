
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
    <div class="clear"></div>
    <div class="candidate w-225 m-negmargin-5"><a href="{{ url('/romeo-s-momo') }}"><img src="{{ asset('/public/assets/images/momo.png') }}" alt="Romeo S. Momo" title="Romeo S. Momo"></a></div>
    <div class="candidate w-224 m-negmargin-5"><a href="{{ url('/johnny-t-pimentel') }}"><img src="{{ asset('/public/assets/images/johnny.png') }}" alt="Johnny T. Pimentel" title="Johnny T. Pimentel"></a></div>

    <div class="clear"></div>
    <div class="candidate w-224 negmargin-5"><a href="{{ url('/vj-pimentel') }}"><img src="{{ asset('/public/assets/images/vjpimentel.png') }}" alt="Vj Pimentel" title="Vj Pimentel"></a></div>
    <div class="candidate w-224 negmargin-5"><a href="{{ url('/philip-pichay') }}"><img src="{{ asset('/public/assets/images/philippichay.png') }}" alt="Philip Pichay" title="Philip Pichay"></a></div>
    <div class="candidate w-224 negmargin-5"><a href="{{ url('/mary-grace-kimura') }}"><img src="{{ asset('/public/assets/images/marygracekimura.png') }}" alt="Mary Grace S. Kimura" title="Mary Grace S. Kimura"></a></div>

    <div class="clear"></div>
    <div class="candidate w-224 negmargin-5"><a href="{{ url('/jane-plaza') }}"><img src="{{ asset('/public/assets/images/janeplaza.png') }}" alt="Jane V. Plaza" title="Jane V. Plaza"></a></div>
    <div class="candidate w-224 negmargin-5"><a href="{{ url('/marvin-azarcon') }}"><img src="{{ asset('/public/assets/images/marvinazarcon.png') }}" alt="Marvin T. Azarcon" title="Marvin T. Azarcon"></a></div>
    <div class="candidate w-224 negmargin-5"><a href="{{ url('/dennis-yu') }}"><img src="{{ asset('/public/assets/images/dennisyu.png') }}" alt="Dennis Yu" title="Dennis Yu"></a></div>
    <div class="candidate w-224 negmargin-5"><a href="{{ url('/roxanne-pimentel') }}"><img src="{{ asset('/public/assets/images/roxannepimentel.png') }}" alt="Roxanne Pimentel" title="Roxanne Pimentel"></a></div>

    <div class="clear"></div>
    <div class="candidate w-224 negmargin-5"><a href="{{ url('/henrich-pimentel') }}"><img src="{{ asset('/public/assets/images/henrichpimentel.png') }}" alt="Henrich Pimentel" title="Henrich Pimentel"></a></div>
    <div class="candidate w-224 negmargin-5"><a href="{{ url('/poly-lozada') }}"><img src="{{ asset('/public/assets/images/polylozada.png') }}" alt="Poly Lozada" title="Poly Lozada"></a></div>
    <div class="candidate w-224 negmargin-5"><a href="{{ url('/glenn-batiansila') }}"><img src="{{ asset('/public/assets/images/glennbatiansila.png') }}" alt="Glenn Batiansila" title="Glenn Batiansila"></a></div>
    <div class="candidate w-224 negmargin-5"><a href="{{ url('/dodoy-fazon') }}"><img src="{{ asset('/public/assets/images/dodoyfazon.png') }}" alt="Dodoy Fazon" title="Dodoy Fazon"></a></div>

    <div class="clear"></div>
    <div class="candidate w-224 negmargin-5"><a href="{{ url('/nicolas-alameda') }}"><img src="{{ asset('/public/assets/images/nicolasalameda.png') }}" alt="Nicolas Alameda" title="Nicolas Alameda"></a></div>
    <div class="candidate w-224 negmargin-5"><a href="{{ url('/kid-pedrozo') }}"><img src="{{ asset('/public/assets/images/kidpedrozo.png') }}" alt="Kid Pedrozo" title="Kid Pedrozo"></a></div>
    <div class="candidate w-224 negmargin-5"><a href="{{ url('/joey-pama') }}"><img src="{{ asset('/public/assets/images/joeypama.png') }}" alt="Joey Pama" title="Joey Pama"></a></div>
    <div class="candidate w-224 negmargin-5"><a href="{{ url('/shem-gray') }}"><img src="{{ asset('/public/assets/images/shemgaray.png') }}" alt="Shem Garay" title="Shem Garay"></a></div>

    <div class="clear"></div>
    <div class="candidate w-224 negmargin-5"><a href="{{ url('/enchiong-garay') }}"><img src="{{ asset('/public/assets/images/enchionggaray.png') }}" alt="Enciong Garay" title="Enciong Garay"></a></div>
    <div class="candidate w-224 negmargin-5"><a href="{{ url('/boyet-evangelio') }}"><img src="{{ asset('/public/assets/images/boyetevangelio.png') }}" alt="Boyet Evangelio" title="Boyet Evangelio"></a></div>
    <div class="candidate w-224 negmargin-5"><a href="{{ url('/michael-corilla') }}"><img src="{{ asset('/public/assets/images/michaelcorilla.png') }}" alt="Michael T. Corilla" title="Michael T. Corilla"></a></div>
    <div class="candidate w-224 negmargin-5"><a href="{{ url('/evelyn-naraiso') }}"><img src="{{ asset('/public/assets/images/evelynnaraiso.png') }}" alt="Evelyn Naraiso" title="Evelyn Naraiso"></a></div>
    <div class="clear"></div>
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
