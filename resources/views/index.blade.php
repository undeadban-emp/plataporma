
@extends('layouts.app')
@section('title', 'Hugpong Surigao')
@prepend('page-css')
<style>
.accordion{
  margin: 10px 0;
}
/* .accordion .item {
    border: none;
    margin-bottom: 50px;
    background: none;
} */
.t-p{
  color: rgb(193 206 216);
  padding: 0px 10px 0px 10px;
}
.accordion .item .item-header h2 button.btn.btn-link {
    background: #336633;
    color: white;
    border-radius: 0px;
    font-family: 'Poppins';
    font-size: 16px;
    font-weight: 400;
    line-height: 2.5;
    text-decoration: none;
}
.accordion .item .item-header {
    border-bottom: none;
    background: transparent;
    padding: 0px;
    margin: 2px;
}

.accordion .item .item-header h2 button {
    color: white;
    font-size: 20px;
    padding: 5px;
    display: block;
    width: 100%;
    text-align: center;
}

.accordion .item .item-header h2 i {
    float: right;
    font-size: 30px;
    color: white;
    width: 50px;
    height: 30px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50px;
}

button.btn.btn-link.collapsed i {
    transform: rotate(0deg);
}

button.btn.btn-link i {
    transform: rotate(180deg);
    transition: 0.5s;
}
</style>
@endprepend

@section('content')
    <div class="candidates pt-5" id="kilalanin">
        <div class="candidate w-224 clg-hidden"><a href="{{ url('alexander-t-pimentel') }}"><img src="{{ asset('assets/images/candidates/pimentel.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
        <div class="candidate w-224  m-negmargin-5 cxs-hidden"><a href="{{ url('alexander-t-pimentel') }}"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/pimentel.png') }}" alt="" title=""></a></div>
        <div class="candidate w-224"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/alameda.png') }}" alt="" title=""></a></div>
        <div class="clear"></div>
    </div>

<div class="container">
<div class="row">
    <div class="col-lg-6 col-sm-12">
        <div class="pt-1 pb-1">
            <h1 class="fgrey">1st District</h1>
        </div>
        <div class="candidates" id="kilalanin">
            <div class="candidate w-224 clg-hidden"><a href="#"><img src="{{ asset('assets/images/candidates/rmomo.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/rmomo.png') }}" alt="" title=""></a></div>
        </div>
        <div class="pt-1 pb-1">
            <h1 class="fgrey">Board Members</h1>
        </div>
        <div class="candidates" id="kilalanin">
            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/azarcon.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/azarcon.png') }}" alt="" title=""></a></div>
            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/dumagan.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/dumagan.png') }}" alt="" title=""></a></div>
            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/layno.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/layno.png') }}" alt="" title=""></a></div>
            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/momo.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/momo.png') }}" alt="" title=""></a></div>
            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/montesclaros.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/montesclaros.png') }}" alt="" title=""></a></div>
            <div class="clear"></div>
        </div>
        {{-- municipalities --}}
        <div class="container">
            <div class="accordion" id="municipalityFirstDistrict">

              <div class="item">
                 <div class="item-header" id="headingCarrascal">
                    <h2 class="mb-0">
                       <button style="font-family: 'gotham';" class="btn btn-link" type="button" data-toggle="collapse"
                          data-target="#carrascal" aria-expanded="true" aria-controls="carrascal">
                            CARRASCAL
                       <i class="fa fa-angle-down"></i>
                       </button>
                    </h2>
                 </div>
                 <div id="carrascal" class="collapse show" aria-labelledby="headingCarrascal"
                    data-parent="#municipalityFirstDistrict">
                    <div class="t-p">
                        <div class="candidates pt-2" id="kilalanin">
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/carrascal/pimentel.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/carrascal/pimentel.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/carrascal/valle.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/carrascal/valle.png') }}" alt="" title=""></a></div>
                            <div class="clear"></div>
                        </div>
                        <div class="pt-0 pb-0">
                            <h1 class="fgrey">SB Members</h1>
                        </div>
                        <div class="candidates" id="kilalanin">


                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/carrascal/ague.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/carrascal/ague.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/carrascal/azarcon.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/carrascal/azarcon.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/carrascal/constantino.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/carrascal/constantino.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/carrascal/cuajao.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/carrascal/cuajao.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/carrascal/eliot.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/carrascal/eliot.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/carrascal/hotchkiss.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/carrascal/hotchkiss.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/carrascal/intano.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/carrascal/intano.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/carrascal/sugian.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/carrascal/sugian.png') }}" alt="" title=""></a></div>
                            <div class="clear"></div>
                        </div>
                    </div>
                 </div>
              </div>

              {{-- <div class="item">
                 <div class="item-header" id="headingCantilan">
                    <h2 class="mb-0">
                       <button style="font-family: 'gotham';" class="btn btn-link collapsed" type="button" data-toggle="collapse"
                          data-target="#cantilan" aria-expanded="false" aria-controls="cantilan">
                       CANTILAN
                       <i class="fa fa-angle-down"></i>
                       </button>
                    </h2>
                 </div>
                 <div id="cantilan" class="collapse" aria-labelledby="headingCantilan"
                    data-parent="#municipalityFirstDistrict">
                    <div class="t-p">
            It is a
                    </div>
                 </div>
              </div>

              <div class="item">
                 <div class="item-header" id="headingMadrid">
                    <h2 class="mb-0">
                       <button style="font-family: 'gotham';" class="btn btn-link collapsed" type="button" data-toggle="collapse"
                          data-target="#madrid" aria-expanded="false"
                          aria-controls="madrid">
                       MADRID
                       <i class="fa fa-angle-down"></i>
                       </button>
                    </h2>
                 </div>
                 <div id="madrid" class="collapse" aria-labelledby="headingMadrid"
                    data-parent="#municipalityFirstDistrict">
                    <div class="t-p">
            It is a long
                    </div>
                 </div>
              </div>

              <div class="item">
                 <div class="item-header" id="headingCarmen">
                    <h2 class="mb-0">
                       <button style="font-family: 'gotham';" class="btn btn-link collapsed" type="button" data-toggle="collapse"
                          data-target="#carmen" aria-expanded="false"
                          aria-controls="carmen">
                       CARMEN
                       <i class="fa fa-angle-down"></i>
                       </button>
                    </h2>
                 </div>
                 <div id="carmen" class="collapse" aria-labelledby="headingCarmen"
                    data-parent="#municipalityFirstDistrict">
                    <div class="t-p">
                       It is a
                    </div>
                 </div>
              </div>

              <div class="item">
                <div class="item-header" id="headingLanuza">
                   <h2 class="mb-0">
                      <button style="font-family: 'gotham';" class="btn btn-link collapsed" type="button" data-toggle="collapse"
                         data-target="#lanuza" aria-expanded="false"
                         aria-controls="lanuza">
                      LANUZA
                      <i class="fa fa-angle-down"></i>
                      </button>
                   </h2>
                </div>
                <div id="lanuza" class="collapse" aria-labelledby="headingLanuza"
                   data-parent="#municipalityFirstDistrict">
                   <div class="t-p">
                      It is a
                   </div>
                </div>
             </div>

             <div class="item">
                <div class="item-header" id="headingCortes">
                   <h2 class="mb-0">
                      <button style="font-family: 'gotham';" class="btn btn-link collapsed" type="button" data-toggle="collapse"
                         data-target="#cortes" aria-expanded="false"
                         aria-controls="cortes">
                      CORTES
                      <i class="fa fa-angle-down"></i>
                      </button>
                   </h2>
                </div>
                <div id="cortes" class="collapse" aria-labelledby="headingCortes"
                   data-parent="#municipalityFirstDistrict">
                   <div class="t-p">
                      It is a
                   </div>
                </div>
             </div> --}}

             <div class="item">
                <div class="item-header" id="headingTandag">
                   <h2 class="mb-0">
                      <button style="font-family: 'gotham';" class="btn btn-link collapsed" type="button" data-toggle="collapse"
                         data-target="#tandag" aria-expanded="false"
                         aria-controls="cortes">
                      TANDAG CITY
                      <i class="fa fa-angle-down"></i>
                      </button>
                   </h2>
                </div>
                <div id="tandag" class="collapse" aria-labelledby="headingTandag"
                   data-parent="#municipalityFirstDistrict">
                   <div class="t-p">
                    <div class="candidates pt-2" id="kilalanin">
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/tandag/rpimentel.png') }}" class="lg-hidden" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/tandag/rpimentel.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href="#"><img src="{{ asset('assets/images/candidates/first/tandag/nmomo.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/tandag/nmomo.png') }}" alt="" title=""></a></div>
                        <div class="clear"></div>
                    </div>
                    <div class="pt-0 pb-0">
                        <h1 class="fgrey">SB Members</h1>
                    </div>
                    <div class="candidates" id="kilalanin">
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/tandag/andresan.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/tandag/andresan.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/tandag/avila.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/tandag/avila.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/tandag/azarcon.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/tandag/azarcon.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/tandag/dumagan.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/tandag/dumagan.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/tandag/geli.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/tandag/geli.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/tandag/kmomo.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/tandag/kmomo.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/tandag/perez.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/tandag/perez.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/tandag/jppimentel.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/tandag/jppimentel.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/tandag/tan.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/tandag/tan.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/tandag/ty.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/tandag/ty.png') }}" alt="" title=""></a></div>
                        <div class="clear"></div>
                    </div>
                   </div>
                </div>
             </div>

             {{-- <div class="item">
                <div class="item-header" id="headingTago">
                   <h2 class="mb-0">
                      <button style="font-family: 'gotham';" class="btn btn-link collapsed" type="button" data-toggle="collapse"
                         data-target="#tago" aria-expanded="false"
                         aria-controls="cortes">
                      TAGO
                      <i class="fa fa-angle-down"></i>
                      </button>
                   </h2>
                </div>
                <div id="tago" class="collapse" aria-labelledby="headingTago"
                   data-parent="#municipalityFirstDistrict">
                   <div class="t-p">
                      It is a
                   </div>
                </div>
             </div>

             <div class="item">
                <div class="item-header" id="headingSanMiguel">
                   <h2 class="mb-0">
                      <button style="font-family: 'gotham';" class="btn btn-link collapsed" type="button" data-toggle="collapse"
                         data-target="#sanmiguel" aria-expanded="false"
                         aria-controls="cortes">
                      SAN MIGUEL
                      <i class="fa fa-angle-down"></i>
                      </button>
                   </h2>
                </div>
                <div id="sanmiguel" class="collapse" aria-labelledby="headingSanMiguel"
                   data-parent="#municipalityFirstDistrict">
                   <div class="t-p">
                      It is a
                   </div>
                </div>
             </div>

             <div class="item">
                <div class="item-header" id="headingBayabas">
                   <h2 class="mb-0">
                      <button style="font-family: 'gotham';" class="btn btn-link collapsed" type="button" data-toggle="collapse"
                         data-target="#bayabas" aria-expanded="false"
                         aria-controls="cortes">
                      BAYABAS
                      <i class="fa fa-angle-down"></i>
                      </button>
                   </h2>
                </div>
                <div id="bayabas" class="collapse" aria-labelledby="headingBayabas"
                   data-parent="#municipalityFirstDistrict">
                   <div class="t-p">
                      It is a
                   </div>
                </div>
             </div>

             <div class="item">
                <div class="item-header" id="headingCagwait">
                   <h2 class="mb-0">
                      <button style="font-family: 'gotham';" class="btn btn-link collapsed" type="button" data-toggle="collapse"
                         data-target="#cagwait" aria-expanded="false"
                         aria-controls="cortes">
                      CAGWAIT
                      <i class="fa fa-angle-down"></i>
                      </button>
                   </h2>
                </div>
                <div id="cagwait" class="collapse" aria-labelledby="headingCagwait"
                   data-parent="#municipalityFirstDistrict">
                   <div class="t-p">
                      It is a
                   </div>
                </div>
             </div>

             <div class="item">
                <div class="item-header" id="headingMarihatag">
                   <h2 class="mb-0">
                      <button style="font-family: 'gotham';" class="btn btn-link collapsed" type="button" data-toggle="collapse"
                         data-target="#marihatag" aria-expanded="false"
                         aria-controls="cortes">
                      MARIHATAG
                      <i class="fa fa-angle-down"></i>
                      </button>
                   </h2>
                </div>
                <div id="marihatag" class="collapse" aria-labelledby="headingMarihatag"
                   data-parent="#municipalityFirstDistrict">
                   <div class="t-p">
                      It is a
                   </div>
                </div>
             </div>

             <div class="item">
                <div class="item-header" id="headingSanAgustin">
                   <h2 class="mb-0">
                      <button style="font-family: 'gotham';" class="btn btn-link collapsed" type="button" data-toggle="collapse"
                         data-target="#sanagustin" aria-expanded="false"
                         aria-controls="sanagustin">
                      SAN AGUSTIN
                      <i class="fa fa-angle-down"></i>
                      </button>
                   </h2>
                </div>
                <div id="sanagustin" class="collapse" aria-labelledby="headingSanAgustin"
                   data-parent="#municipalityFirstDistrict">
                   <div class="t-p">
                      It is a
                   </div>
                </div>
             </div>

             <div class="item">
                <div class="item-header" id="headingLianga">
                   <h2 class="mb-0">
                      <button style="font-family: 'gotham';" class="btn btn-link collapsed" type="button" data-toggle="collapse"
                         data-target="#lianga" aria-expanded="false"
                         aria-controls="lianga">
                      LIANGA
                      <i class="fa fa-angle-down"></i>
                      </button>
                   </h2>
                </div>
                <div id="lianga" class="collapse" aria-labelledby="headingLianga"
                   data-parent="#municipalityFirstDistrict">
                   <div class="t-p">
                      It is a
                   </div>
                </div>
             </div> --}}

            </div>
            </div>

    </div>


    <div class="col-lg-6 col-sm-12">
        <div class="pt-1 pb-1">
            <h1 class="fgrey">2nd District</h1>
        </div>
        <div class="candidates" id="kilalanin">
            <div class="candidate w-224 clg-hidden"><a href="#"><img src="{{ asset('assets/images/candidates/jpimentel.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/jpimentel.png') }}" alt="" title=""></a></div>
        </div>
        <div class="pt-1 pb-1">
            <h1 class="fgrey">Board Members</h1>
        </div>
        <div class="candidates" id="kilalanin">
            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/canedo.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/canedo.png') }}" alt="" title=""></a></div>
            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/cejoco.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/cejoco.png') }}" alt="" title=""></a></div>
            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/garay.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/garay.png') }}" alt="" title=""></a></div>
            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/salazar.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/salazar.png') }}" alt="" title=""></a></div>
            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/sayawan.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/sayawan.png') }}" alt="" title=""></a></div>
            <div class="clear"></div>
        </div>

        <div class="container">
            <div class="accordion" id="municipalitySecondDistrict">

              {{-- <div class="item">
                 <div class="item-header" id="headingBarobo">
                    <h2 class="mb-0">
                       <button style="font-family: 'gotham';" class="btn btn-link" type="button" data-toggle="collapse"
                          data-target="#barobo" aria-expanded="true" aria-controls="barobo">
                            BAROBO
                       <i class="fa fa-angle-down"></i>
                       </button>
                    </h2>
                 </div>
                 <div id="barobo" class="collapse show" aria-labelledby="heading"
                    data-parent="#municipalitySecondDistrict">
                    <div class="t-p">
                        asdas
                    </div>
                 </div>
              </div>

               <div class="item">
                 <div class="item-header" id="headingTagbina">
                    <h2 class="mb-0">
                       <button style="font-family: 'gotham';" class="btn btn-link collapsed" type="button" data-toggle="collapse"
                          data-target="#tagbina" aria-expanded="false" aria-controls="tagbina">
                       TAGBINA
                       <i class="fa fa-angle-down"></i>
                       </button>
                    </h2>
                 </div>
                 <div id="tagbina" class="collapse" aria-labelledby="headingTangbina"
                    data-parent="#municipalitySecondDistrict">
                    <div class="t-p">
            It is a
                    </div>
                 </div>
              </div>

              <div class="item">
                 <div class="item-header" id="headingHinatuan">
                    <h2 class="mb-0">
                       <button style="font-family: 'gotham';" class="btn btn-link collapsed" type="button" data-toggle="collapse"
                          data-target="#hinatuan" aria-expanded="false"
                          aria-controls="hinatuan">
                       HINATUAN
                       <i class="fa fa-angle-down"></i>
                       </button>
                    </h2>
                 </div>
                 <div id="hinatuan" class="collapse" aria-labelledby="headingHinatuan"
                    data-parent="#municipalitySecondDistrict">
                    <div class="t-p">
            It is a long
                    </div>
                 </div>
              </div> --}}

              <div class="item">
                 <div class="item-header" id="headingBislig">
                    <h2 class="mb-0">
                       <button style="font-family: 'gotham';" class="btn btn-link collapsed" type="button" data-toggle="collapse"
                          data-target="#bislig" aria-expanded="false"
                          aria-controls="bislig">
                       BISLIG
                       <i class="fa fa-angle-down"></i>
                       </button>
                    </h2>
                 </div>
                 <div id="bislig" class="collapse show" aria-labelledby="headingBislig"
                    data-parent="#municipalitySecondDistrict">
                    <div class="t-p">
                        <div class="candidates pt-2" id="kilalanin">
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/bislig/garay.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates//second/bislig/garay.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224  clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates//second/bislig/castillo.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates//second/bislig/castillo.png') }}" alt="" title=""></a></div>
                            <div class="clear"></div>
                        </div>
                        <div class="pt-0 pb-0">
                            <h1 class="fgrey">SB Members</h1>
                        </div>
                        <div class="candidates" id="kilalanin">
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/bislig/alvar.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/bislig/alvar.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/bislig/alvizo.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/bislig/alvizo.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/bislig/casas.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/bislig/casas.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/bislig/chicano.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/bislig/chicano.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/bislig/corvera.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/bislig/corvera.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/bislig/dominguez.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/bislig/dominguez.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/bislig/manada.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/bislig/manada.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/bislig/sia.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/bislig/sia.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/bislig/sulapas.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/bislig/sulapas.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/bislig/viduya.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/bislig/viduya.png') }}" alt="" title=""></a></div>
                            <div class="clear"></div>
                        </div>
                    </div>
                 </div>
              </div>

              {{-- <div class="item">
                <div class="item-header" id="headingLiangig">
                   <h2 class="mb-0">
                      <button style="font-family: 'gotham';" class="btn btn-link collapsed" type="button" data-toggle="collapse"
                         data-target="#lingig" aria-expanded="false"
                         aria-controls="lingig">
                      LINGIG
                      <i class="fa fa-angle-down"></i>
                      </button>
                   </h2>
                </div>
                <div id="lingig" class="collapse" aria-labelledby="headingLingig"
                   data-parent="#municipalitySecondDistrict">
                   <div class="t-p">
                      It is a
                   </div>
                </div>
             </div> --}}

            </div>
            </div>

    </div>
</div>
</div>
<br><br>
<div class="section makinig">
    <div class="diagonal-divider-top">
        <div class="big-btn-rev"><a href="{{ url('/plataporma') }}">Hugpong Plataporma</a></div>
    </div>
</div>
<br><br><br><br><br>
@push('page-scripts')
<script>
    $("#accordion").on("hide.bs.collapse show.bs.collapse", e => {
  $(e.target)
    .prev()
    .find("i:last-child")
    .toggleClass("fa-minus fa-plus");
});

</script>
@endpush
@endsection
