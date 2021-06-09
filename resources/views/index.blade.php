
@extends('layouts.app')
@section('title', 'Employee')
@prepend('page-css')
{{-- CSS HERE --}}
@endprepend

@section('content')


<div class="candidates" id="kilalanin">


<div class="candidate w-270 clg-hidden"><a href=""><img src="" class="lg-hidden" alt="" title=""></a></div>
<div class="candidate w-224 cxs-hidden"><a href=""><img src="" alt="" title=""></a></div>
<div class="candidate w-224"><a href=""><img src="" alt="" title=""></a></div>
<div class="candidate w-224 m-negmargin-5"><a href=""><img src="" alt="" title=""></a></div>
<div class="candidate w-224 m-negmargin-5"><a href=""><img src="" alt="" title=""></a></div>
<div class="candidate w-224 m-negmargin-5"><a href=""><img src="assets/images/ayek.png" alt="" title=""></a></div>
<div class="clear"></div>
<div class="clear"></div>
<div class="candidate w-270 clg-hidden"><a href=""><img src="" class="lg-hidden" alt="" title=""></a></div>
<div class="candidate w-224 cxs-hidden"><a href=""><img src="" alt="" title=""></a></div>
<div class="candidate w-224"><a href=""><img src="assets/images/johny.png" alt="" title=""></a></div>
<div class="candidate w-224 m-negmargin-5"><a href=""><img src="assets/images/johny.png" alt="" title=""></a></div>
<div class="candidate w-224 m-negmargin-5"><a href=""><img src="" alt="" title=""></a></div>
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
