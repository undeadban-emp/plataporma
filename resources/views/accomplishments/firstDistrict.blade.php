@extends('layouts.app')
@section('title', 'Hugpong Surigao - First District Accomplishent')
@prepend('page-css')
{{-- CSS HERE --}}
@endprepend
@section('content')

<div class="section candidate-holder">
	<div class="candidate">
		<img src="{{ asset('assets/images/pimentel.jpg') }}" alt="" title="">
	</div>
</div>

<div class="section white candidate-description">
	<div class="resume">
        <h1 class="fgrey">BAYABAS</h1>
        <h1 class="fgrey float-left">LIVELIHOOD </h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Barangay</th>
                <th scope="col">Name of Project</th>
                <th scope="col">Amount</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>CABUGO</td>
                <td>CABUGO AYEK LIVELIHOOD ASSOCIATION</td>
                <td>Ᵽ500,000.00</td>
            </tr>
            <tr>
                <td>LAPAZ</td>
                <td>LAPAZ FARMERS AND FISHERFOLKS ASSOCIATION</td>
                <td>Ᵽ500,000.00</td>
            </tr>
            <tr>
                <td></td>
                <td>Total</td>
                <td>Ᵽ1,000,000.00</td>
            </tr>
            </tbody>
        </table>

        <h1 class="fgrey float-left">BARANGAY STREETLIGHT AND WATER SYSTEM PROJECTS </h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Barangay</th>
                <th scope="col">Amount</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>MAGOBAWOK</td>
                <td>Ᵽ100,000.00</td>
            </tr>
            <tr>
                <td>CABUGO</td>
                <td>Ᵽ100,000.00</td>
            </tr>
            <tr>
                <td>CAGBAOTO</td>
                <td>Ᵽ100,000.00</td>
            </tr>
            <tr>
                <td>BALETE</td>
                <td>Ᵽ100,000.00</td>
            </tr>
            <tr>
                <td>LA PAZ</td>
                <td>Ᵽ100,000.00</td>
            </tr>
            <tr>
                <td>PANAOSAWON</td>
                <td>Ᵽ100,000.00</td>
            </tr>
            <tr>
                <td>AMAG</td>
                <td>Ᵽ100,000.00</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>Ᵽ1,000,000.00</td>
            </tr>
            </tbody>
        </table>
	</div>
</div>




<!-- Divider -->
<div class="section white">
	<div class="diagonal-divider-bottom inner-cand">
		<img src="{{ asset('assets/images/divider-0-grey.png') }}" >
	</div>
    <div class="bot-pad">&nbsp;</div>
</div>

<div class="section grey candidate-description">
	<div class="resume">
		<h1 class="fgrey">Personal Information</h1>
		<p class="pb-2">
			<span class="fgrey">Pangalan:</span>
			<span class="fgrey">Alexander T. Pimentel</span>
		</p>
		<p  class="pb-2">
			<span class="fgrey">Asawa:</span>
			<span class="fgrey">Roxanne Cabrera-Pimentel</span>
		</p>
        <p  class="pb-2">
			<span class="fgrey">Mga Anak:</span>
			<span class="fgrey">Charmaine Pimentel-Conido</span>
		</p>
        <p>
			<span class="fgrey"></span>
			<span class="fgrey">Charisse Valentine Pimentel-Pineda</span>
		</p>
        <p  class="pb-2">
			<span class="fgrey"></span>
			<span class="fgrey">Michael Lorence C. Pimentel</span>
		</p>
        <p  class="pb-2">
			<span class="fgrey">Amahan</span>
			<span class="fgrey">Former Cong. Vicente Luna Pimentel Sr.</span>
		</p>
        <p  class="pb-2">
			<span class="fgrey">Inahan</span>
			<span class="fgrey">Former Gov. Felicidad Ty-Pimentel</span>
		</p>
        <p  class="pb-2">
			<span class="fgrey">Puloy-anan</span>
			<span class="fgrey">Bungtod, Tandag City</span>
		</p>
        <p  class="pb-2">
			<span class="fgrey">Relihiyon</span>
			<span class="fgrey">Christian(Roman Catholic)</span>
		</p>
	</div>
</div>


<div class="section white ">
	<div class="diagonal-divider-top">
		<img src="{{ asset('assets/images/divider-grey-0.png') }}" >
	</div>
</div>


<div class="section makinig candidate-description">
    <div class="resume">
		<div class="cv">
            <h1>Mga Gihuptan nga mga Posisyon</h1>
            <p style="font-weight: 800;">2019 - Present</p>
			<ul>
				<ul>
                    <li><p>Provincial Governor, Surigao del Sur</p></li>
				</ul>
			</ul>
            <p style="font-weight: 800;">2016 - 2019</p>
			<ul>
				<ul>
                    <li><p>City Mayor, Tandag</p></li>
				</ul>
			</ul>
            <p style="font-weight: 800;">2013 - 2015</p>
			<ul>
				<ul>
                    <li><p>City Administrator, Tandag</p></li>
				</ul>
			</ul>
            <p style="font-weight: 800;">2012 - 2013</p>
			<ul>
				<ul>
                    <li><p>City Mayor, Tandag City</p></li>
				</ul>
			</ul>
            <p style="font-weight: 800;">2009 - 2011</p>
			<ul>
				<ul>
                    <li><p>Municipal Mayor, Tandag / President League of 16 cities</p></li>
				</ul>
			</ul>
            <p style="font-weight: 800;">2007 - 2009</p>
			<ul>
				<ul>
                    <li><p>City Mayor, Tandag City</p></li>
				</ul>
			</ul>
            <p style="font-weight: 800;">2004 - 2007</p>
			<ul>
				<ul>
                    <li><p>Municipal Mayor, Tandag / President League of 16 cities</p></li>
				</ul>
			</ul>
            <p style="font-weight: 800;">1998 - 2004</p>
			<ul>
				<ul>
                    <li><p>Vice Mayor of Tandag / President, Vice Mayors League of the Philippines</p></li>
				</ul>
			</ul>
            <p style="font-weight: 800;">1997 - 1998</p>
			<ul>
				<ul>
					<li><p>Sangguniang Panlalawigan Member / ABC President</p></li>
				</ul>
			</ul>
            <p style="font-weight: 800;">1994 - 1997</p>
			<ul>
				<ul>
					<li><p>Barangay Captain, Bongtod, Tandag, Surigao del Sur</p></li>
				</ul>
			</ul>
            <p style="font-weight: 800;">1989 - 1994</p>
			<ul>
				<ul>
					<li><p>Joined the Philippine Army</p></li>
				</ul>
			</ul>
            <p style="font-weight: 800;">1988 - 1989</p>
			<ul>
				<ul>
					<li><p>Consultant, Department of National Defense By: Usec Lourdes Quisumbing</p></li>
				</ul>
			</ul>
            <p style="font-weight: 800;">1987 - 1988</p>
			<ul>
				<ul>
					<li><p>Appointed OIC Provincial Governor of Pres. Cory Aquino</p></li>
				</ul>
			</ul>
            <p style="font-weight: 800;">1982 - 1987</p>
			<ul>
				<ul>
					<li><p>Sangguniang Bayan Member / ABC President</p></li>
				</ul>
			</ul>
            <p style="font-weight: 800;">1975 - 1982</p>
			<ul>
				<ul>
					<li><p>FABC President and Sangguniang Panlalawigan Member</p></li>
				</ul>
			</ul>
		</div>
		<div class="cv">
			<h1>Mga Pasidungog nga nadawat ubos sa pagdumala ni Gov. Ayek Pimentel</h1>
			<ul>
				<li><p>3-time National Awardee, SEAL OF GOOD LOCAL GOVERNANCE, 2016 - 2018 (Tandag City)</p></li>
				<li><p>Passer, Child-Friendly Local Governance Audit (Tandag City)</p></li>
				<li><p>Certificate of Drug-Cleared Province(Surigao del Sur)</p></li>
				<li><p>Gawad kalasag 2020 Fully Complaint(Surigao del Sur)</p></li>
			</ul>
                <div class="candidate">
                    <img src="{{ asset('assets/images/sealofgoodgovernance.png') }}" alt="" title="">
                </div>
		</div>
		<div class="clear"></div>
	</div>
</div>
<div class="section makinig">
    <div class="diagonal-divider-top">
        <div class="big-btn-rev"><a href="{{ url('/plataporma') }}">Accomplishments</a></div>
    </div>
</div>
<br><br><br><br><br>

@push('page-scripts')
{{-- JS SCRIPTS HERE --}}
@endpush
@endsection
