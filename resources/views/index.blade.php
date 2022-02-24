
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
.{
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
    line-height: 2;
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
    transition: 0.2s;
}
</style>
@endprepend

@section('content')
    <div class="candidates pt-5" id="kilalanin">
        <div class="candidate w-224 clg-hidden"><a href="{{ url('alexander-imentel') }}"><img src="{{ asset('assets/images/candidates/pimentel.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
        <div class="candidate w-224  m-negmargin-5 cxs-hidden"><a href="{{ url('alexander-imentel') }}"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/pimentel.png') }}" alt="" title=""></a></div>
        <div class="candidate w-224"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/alameda.png') }}" alt="" title=""></a></div>
        <div class="clear"></div>
    </div>

<div class="container-fluid">
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
                    <div class="item-header" id="headingTandag">
                       <h2 class="mb-0">
                          <button style="font-family: 'gotham'; padding-left:40px;" class="btn btn-link shadow" type="button" data-toggle="collapse"
                             data-target="#tandag" aria-expanded="true"
                             aria-controls="tandag">
                          TANDAG CITY
                          <i class="fa fa-angle-down"></i>
                          </button>
                       </h2>
                    </div>
                    <div id="tandag" class="collapse show" aria-labelledby="headingTandag"
                       data-parent="#municipalityFirstDistrict">
                       <div class="">
                        <div class="candidates pt-2" id="kilalanin">
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/tandag/rpimentel.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/tandag/rpimentel.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href="#"><img src="{{ asset('assets/images/candidates/first/tandag/nmomo.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/tandag/nmomo.png') }}" alt="" title=""></a></div>
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




              <div class="item">
                 <div class="item-header" id="headingCarrascal">
                    <h2 class="mb-0">
                       <button style="font-family: 'gotham'; padding-left:40px;" class="btn btn-link shadow collapsed" type="button" data-toggle="collapse"
                          data-target="#carrascal" aria-expanded="false" aria-controls="carrascal">
                                     CARRASCAL
                       <i class="fa fa-angle-down"></i>
                       </button>
                    </h2>
                 </div>
                 <div id="carrascal" class="collapse" aria-labelledby="headingCarrascal"
                    data-parent="#municipalityFirstDistrict">
                    <div class="">
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

              <div class="item">
                 <div class="item-header" id="headingCantilan">
                    <h2 class="mb-0">
                       <button style="font-family: 'gotham'; padding-left:40px;" class="btn btn-link shadow collapsed" type="button" data-toggle="collapse"
                          data-target="#cantilan" aria-expanded="false" aria-controls="cantilan">
                       CANTILAN
                       <i class="fa fa-angle-down"></i>
                       </button>
                    </h2>
                 </div>
                 <div id="cantilan" class="collapse" aria-labelledby="headingCantilan"
                    data-parent="#municipalityFirstDistrict">
                    <div class="">
                        <div class="candidates pt-2" id="kilalanin">
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/cantilan/pichay.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/cantilan/pichay.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/cantilan/vega.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/cantilan/vega.png') }}" alt="" title=""></a></div>
                            <div class="clear"></div>
                        </div>
                        <div class="pt-0 pb-0">
                            <h1 class="fgrey">SB Members</h1>
                        </div>
                        <div class="candidates" id="kilalanin">
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/cantilan/arreza.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/cantilan/arreza.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/cantilan/cale.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/cantilan/cale.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/cantilan/creman.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/cantilan/creman.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/cantilan/cuaton.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/cantilan/cuaton.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/cantilan/espura.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/cantilan/espura.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/cantilan/flores.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/cantilan/flores.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/cantilan/iriberri.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/cantilan/iriberri.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/cantilan/viloria.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/cantilan/viloria.png') }}" alt="" title=""></a></div>
                            <div class="clear"></div>
                        </div>
                    </div>
                 </div>
              </div>

              <div class="item">
                 <div class="item-header" id="headingMadrid">
                    <h2 class="mb-0">
                       <button style="font-family: 'gotham'; padding-left:40px;" class="btn btn-link shadow collapsed" type="button" data-toggle="collapse"
                          data-target="#madrid" aria-expanded="false"
                          aria-controls="madrid">
                       MADRID
                       <i class="fa fa-angle-down"></i>
                       </button>
                    </h2>
                 </div>
                 <div id="madrid" class="collapse" aria-labelledby="headingMadrid"
                    data-parent="#municipalityFirstDistrict">
                    <div class="">
                        <div class="candidates pt-2" id="kilalanin">
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/madrid/kimura.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/madrid/kimura.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/madrid/griar.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/madrid/griar.png') }}" alt="" title=""></a></div>
                            <div class="clear"></div>
                        </div>
                        <div class="pt-0 pb-0">
                            <h1 class="fgrey">SB Members</h1>
                        </div>
                        <div class="candidates" id="kilalanin">
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/madrid/arcero.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/madrid/arcero.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/madrid/badiang.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/madrid/badiang.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/madrid/doliente.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/madrid/doliente.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/madrid/estrada.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/madrid/estrada.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/madrid/gutang.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/madrid/gutang.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/madrid/montes.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/madrid/montes.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/madrid/portillano.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/madrid/portillano.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/madrid/sual.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/madrid/sual.png') }}" alt="" title=""></a></div>
                            <div class="clear"></div>
                        </div>
                    </div>
                 </div>
              </div>

              <div class="item">
                 <div class="item-header" id="headingCarmen">
                    <h2 class="mb-0">
                       <button style="font-family: 'gotham'; padding-left:40px;" class="btn btn-link shadow collapsed" type="button" data-toggle="collapse"
                          data-target="#carmen" aria-expanded="false"
                          aria-controls="carmen">
                       CARMEN
                       <i class="fa fa-angle-down"></i>
                       </button>
                    </h2>
                 </div>
                 <div id="carmen" class="collapse" aria-labelledby="headingCarmen"
                    data-parent="#municipalityFirstDistrict">
                    <div class="">
                        <div class="candidates pt-2" id="kilalanin">
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/carmen/plaza.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/carmen/plaza.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/carmen/manawatao.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/carmen/manawatao.png') }}" alt="" title=""></a></div>
                            <div class="clear"></div>
                        </div>
                        <div class="pt-0 pb-0">
                            <h1 class="fgrey">SB Members</h1>
                        </div>
                        <div class="candidates" id="kilalanin">
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/carmen/aguillon.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/carmen/aguillon.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/carmen/bigno.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/carmen/bigno.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/carmen/calanas.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/carmen/calanas.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/carmen/escuyos.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/carmen/escuyos.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/carmen/estrada.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/carmen/estrada.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/carmen/ohao.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/carmen/ohao.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/carmen/evaleroso.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/carmen/evaleroso.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/carmen/nvaleroso.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/carmen/nvaleroso.png') }}" alt="" title=""></a></div>
                            <div class="clear"></div>
                        </div>
                    </div>
                 </div>
              </div>

              <div class="item">
                <div class="item-header" id="headingLanuza">
                   <h2 class="mb-0">
                      <button style="font-family: 'gotham'; padding-left:40px;" class="btn btn-link shadow collapsed" type="button" data-toggle="collapse"
                         data-target="#lanuza" aria-expanded="false"
                         aria-controls="lanuza">
                      LANUZA
                      <i class="fa fa-angle-down"></i>
                      </button>
                   </h2>
                </div>
                <div id="lanuza" class="collapse" aria-labelledby="headingLanuza"
                   data-parent="#municipalityFirstDistrict">
                   <div class="">
                    <div class="candidates pt-2" id="kilalanin">
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/lanuza/azarcon.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/lanuza/azarcon.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/lanuza/maquiling.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/lanuza/maquiling.png') }}" alt="" title=""></a></div>
                        <div class="clear"></div>
                    </div>
                    <div class="pt-0 pb-0">
                        <h1 class="fgrey">SB Members</h1>
                    </div>
                    <div class="candidates" id="kilalanin">
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/lanuza/aparejo.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/lanuza/aparejo.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/lanuza/eisen.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/lanuza/eisen.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/lanuza/estal.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/lanuza/estal.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/lanuza/jovita.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/lanuza/jovita.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/lanuza/miranda.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/lanuza/miranda.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/lanuza/oriel.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/lanuza/oriel.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/lanuza/sumbilla.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/lanuza/sumbilla.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/lanuza/viola.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/lanuza/viola.png') }}" alt="" title=""></a></div>
                        <div class="clear"></div>
                    </div>
                   </div>
                </div>
             </div>

             <div class="item">
                <div class="item-header" id="headingCortes">
                   <h2 class="mb-0">
                      <button style="font-family: 'gotham'; padding-left:40px;" class="btn btn-link shadow collapsed" type="button" data-toggle="collapse"
                         data-target="#cortes" aria-expanded="false"
                         aria-controls="cortes">
                      CORTES
                      <i class="fa fa-angle-down"></i>
                      </button>
                   </h2>
                </div>
                <div id="cortes" class="collapse" aria-labelledby="headingCortes"
                   data-parent="#municipalityFirstDistrict">
                   <div class="">
                    <div class="candidates pt-2" id="kilalanin">
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/cortes/yu.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/cortes/yu.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/cortes/daraman.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/cortes/daraman.png') }}" alt="" title=""></a></div>
                        <div class="clear"></div>
                    </div>
                    <div class="pt-0 pb-0">
                        <h1 class="fgrey">SB Members</h1>
                    </div>
                    <div class="candidates" id="kilalanin">
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/cortes/bagnol.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/cortes/bagnol.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/cortes/cagalawan.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/cortes/cagalawan.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/cortes/calamba.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/cortes/calamba.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/cortes/cuartero.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/cortes/cuartero.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/cortes/lagura.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/cortes/lagura.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/cortes/melo.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/cortes/melo.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/cortes/rivera.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/cortes/rivera.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/cortes/tubo.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/cortes/tubo.png') }}" alt="" title=""></a></div>
                        <div class="clear"></div>
                    </div>
                   </div>
                </div>
             </div>



             <div class="item">
                <div class="item-header" id="headingTago">
                   <h2 class="mb-0">
                      <button style="font-family: 'gotham'; padding-left:40px;" class="btn btn-link shadow collapsed" type="button" data-toggle="collapse"
                         data-target="#tago" aria-expanded="false"
                         aria-controls="cortes">
                      TAGO
                      <i class="fa fa-angle-down"></i>
                      </button>
                   </h2>
                </div>
                <div id="tago" class="collapse" aria-labelledby="headingTago"
                   data-parent="#municipalityFirstDistrict">
                   <div class="">
                    <div class="candidates pt-2" id="kilalanin">
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/tago/laurente.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/tago/laurente.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/tago/pimentel.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/tago/pimentel.png') }}" alt="" title=""></a></div>
                        <div class="clear"></div>
                    </div>
                    <div class="pt-0 pb-0">
                        <h1 class="fgrey">SB Members</h1>
                    </div>
                    <div class="candidates" id="kilalanin">
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/tago/baldemor.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/tago/baldemor.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/tago/elizalde.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/tago/elizalde.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/tago/gasulas.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/tago/gasulas.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/tago/jpimentel.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/tago/jpimentel.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/tago/kpimentel.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/tago/kpimentel.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/tago/milloren.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/tago/milloren.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/tago/montero.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/tago/montero.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/tago/serrano.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/tago/serrano.png') }}" alt="" title=""></a></div>
                        <div class="clear"></div>
                    </div>
                   </div>
                </div>
             </div>

             <div class="item">
                <div class="item-header" id="headingSanMiguel">
                   <h2 class="mb-0">
                      <button style="font-family: 'gotham'; padding-left:40px;" class="btn btn-link shadow collapsed" type="button" data-toggle="collapse"
                         data-target="#sanmiguel" aria-expanded="false"
                         aria-controls="cortes">
                      SAN MIGUEL
                      <i class="fa fa-angle-down"></i>
                      </button>
                   </h2>
                </div>
                <div id="sanmiguel" class="collapse" aria-labelledby="headingSanMiguel"
                   data-parent="#municipalityFirstDistrict">
                   <div class="">
                    <div class="candidates pt-2" id="kilalanin">
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/san miguel/corilla.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/san miguel/corilla.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href="#"><img src="{{ asset('assets/images/candidates/first/san miguel/demoto.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/san miguel/demoto.png') }}" alt="" title=""></a></div>
                        <div class="clear"></div>
                    </div>
                    <div class="pt-0 pb-0">
                        <h1 class="fgrey">SB Members</h1>
                    </div>
                    <div class="candidates" id="kilalanin">
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/san miguel/egnora.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/san miguel/egnora.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/san miguel/gascon.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/san miguel/gascon.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/san miguel/guinsod.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/san miguel/guinsod.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/san miguel/montenegro.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/san miguel/montenegro.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/san miguel/murillo.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/san miguel/murillo.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/san miguel/nazi.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/san miguel/nazi.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/san miguel/tabaranza.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/san miguel/tabaranza.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/san miguel/torrefranca.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/san miguel/torrefranca.png') }}" alt="" title=""></a></div>
                        <div class="clear"></div>
                    </div>
                   </div>
                </div>
             </div>

             <div class="item">
                <div class="item-header" id="headingBayabas">
                   <h2 class="mb-0">
                      <button style="font-family: 'gotham'; padding-left:40px;" class="btn btn-link shadow collapsed" type="button" data-toggle="collapse"
                         data-target="#bayabas" aria-expanded="false"
                         aria-controls="cortes">
                      BAYABAS
                      <i class="fa fa-angle-down"></i>
                      </button>
                   </h2>
                </div>
                <div id="bayabas" class="collapse" aria-labelledby="headingBayabas"
                   data-parent="#municipalityFirstDistrict">
                   <div class="">
                    <div class="candidates pt-2" id="kilalanin">
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/bayabas/plozada.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/bayabas/plozada.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href="#"><img src="{{ asset('assets/images/candidates/first/bayabas/garcia.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/bayabas/garcia.png') }}" alt="" title=""></a></div>
                        <div class="clear"></div>
                    </div>
                    <div class="pt-0 pb-0">
                        <h1 class="fgrey">SB Members</h1>
                    </div>
                    <div class="candidates" id="kilalanin">
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/bayabas/butad.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/bayabas/butad.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/bayabas/comboy.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/bayabas/comboy.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/bayabas/hinampas.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/bayabas/hinampas.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/bayabas/alozada.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/bayabas/alozada.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/bayabas/klozada.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/bayabas/klozada.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/bayabas/maglangit.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/bayabas/maglangit.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/bayabas/ordona.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/bayabas/ordona.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/bayabas/quijada.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/bayabas/quijada.png') }}" alt="" title=""></a></div>
                        <div class="clear"></div>
                    </div>
                   </div>
                </div>
             </div>

             <div class="item">
                <div class="item-header" id="headingCagwait">
                   <h2 class="mb-0">
                      <button style="font-family: 'gotham'; padding-left:40px;" class="btn btn-link shadow collapsed" type="button" data-toggle="collapse"
                         data-target="#cagwait" aria-expanded="false"
                         aria-controls="cortes">
                      CAGWAIT
                      <i class="fa fa-angle-down"></i>
                      </button>
                   </h2>
                </div>
                <div id="cagwait" class="collapse" aria-labelledby="headingCagwait"
                   data-parent="#municipalityFirstDistrict">
                   <div class="">
                    <div class="candidates pt-2" id="kilalanin">
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/cagwait/batiancila.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/cagwait/batiancila.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href="#"><img src="{{ asset('assets/images/candidates/first/cagwait/tuscano.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/cagwait/tuscano.png') }}" alt="" title=""></a></div>
                        <div class="clear"></div>
                    </div>
                    <div class="pt-0 pb-0">
                        <h1 class="fgrey">SB Members</h1>
                    </div>
                    <div class="candidates" id="kilalanin">
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/cagwait/adaya.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/cagwait/adaya.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/cagwait/espinoza.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/cagwait/espinoza.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/cagwait/lozada.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/cagwait/lozada.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/cagwait/prado.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/cagwait/prado.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/cagwait/quezada.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/cagwait/quezada.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/cagwait/reyes.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/cagwait/reyes.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/cagwait/tabugon.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/cagwait/tabugon.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/cagwait/vasquez.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/cagwait/vasquez.png') }}" alt="" title=""></a></div>
                        <div class="clear"></div>
                    </div>
                   </div>
                </div>
             </div>

             <div class="item">
                <div class="item-header" id="headingMarihatag">
                   <h2 class="mb-0">
                      <button style="font-family: 'gotham'; padding-left:40px;" class="btn btn-link shadow collapsed" type="button" data-toggle="collapse"
                         data-target="#marihatag" aria-expanded="false"
                         aria-controls="cortes">
                      MARIHATAG
                      <i class="fa fa-angle-down"></i>
                      </button>
                   </h2>
                </div>
                <div id="marihatag" class="collapse" aria-labelledby="headingMarihatag"
                   data-parent="#municipalityFirstDistrict">
                   <div class="">
                    <div class="candidates pt-2" id="kilalanin">
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/marihatag/fazon.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/marihatag/fazon.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href="#"><img src="{{ asset('assets/images/candidates/first/marihatag/polinar.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/marihatag/polinar.png') }}" alt="" title=""></a></div>
                        <div class="clear"></div>
                    </div>
                    <div class="pt-0 pb-0">
                        <h1 class="fgrey">SB Members</h1>
                    </div>
                    <div class="candidates" id="kilalanin">
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/marihatag/campos.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/marihatag/campos.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/marihatag/gomez.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/marihatag/gomez.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/marihatag/lerog.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/marihatag/lerog.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/marihatag/lozada.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/marihatag/lozada.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/marihatag/octobre.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/marihatag/octobre.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/marihatag/pascual.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/marihatag/pascual.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/marihatag/sampiano.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/marihatag/sampiano.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/marihatag/yu.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/marihatag/yu.png') }}" alt="" title=""></a></div>
                        <div class="clear"></div>
                    </div>
                   </div>
                </div>
             </div>

             <div class="item">
                <div class="item-header" id="headingSanAgustin">
                   <h2 class="mb-0">
                      <button style="font-family: 'gotham'; padding-left:40px;" class="btn btn-link shadow collapsed" type="button" data-toggle="collapse"
                         data-target="#sanagustin" aria-expanded="false"
                         aria-controls="sanagustin">
                      SAN AGUSTIN
                      <i class="fa fa-angle-down"></i>
                      </button>
                   </h2>
                </div>
                <div id="sanagustin" class="collapse" aria-labelledby="headingSanAgustin"
                   data-parent="#municipalityFirstDistrict">
                   <div class="">
                    <div class="candidates pt-2" id="kilalanin">
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/san agustin/alameda.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/san agustin/alameda.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href="#"><img src="{{ asset('assets/images/candidates/first/san agustin/de guzman.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/san agustin/de guzman.png') }}" alt="" title=""></a></div>
                        <div class="clear"></div>
                    </div>
                    <div class="pt-0 pb-0">
                        <h1 class="fgrey">SB Members</h1>
                    </div>
                    <div class="candidates" id="kilalanin">
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/san agustin/bcampos.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/san agustin/bcampos.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/san agustin/rcampos.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/san agustin/rcampos.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/san agustin/climaco.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/san agustin/climaco.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/san agustin/lamela.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/san agustin/lamela.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/san agustin/layson.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/san agustin/layson.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/san agustin/martinez.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/san agustin/martinez.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/san agustin/osorio.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/san agustin/osorio.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/san agustin/simplicio.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/san agustin/simplicio.png') }}" alt="" title=""></a></div>
                        <div class="clear"></div>
                    </div>
                   </div>
                </div>
             </div>

             <div class="item">
                <div class="item-header" id="headingLianga">
                   <h2 class="mb-0">
                      <button style="font-family: 'gotham'; padding-left:40px;" class="btn btn-link shadow collapsed" type="button" data-toggle="collapse"
                         data-target="#lianga" aria-expanded="false"
                         aria-controls="lianga">
                      LIANGA
                      <i class="fa fa-angle-down"></i>
                      </button>
                   </h2>
                </div>
                <div id="lianga" class="collapse" aria-labelledby="headingLianga"
                   data-parent="#municipalityFirstDistrict">
                   <div class="">
                    <div class="candidates pt-2" id="kilalanin">
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/lianga/pedrozo.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/lianga/pedrozo.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href="#"><img src="{{ asset('assets/images/candidates/first/lianga/layno.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/lianga/layno.png') }}" alt="" title=""></a></div>
                        <div class="clear"></div>
                    </div>
                    <div class="pt-0 pb-0">
                        <h1 class="fgrey">SB Members</h1>
                    </div>
                    <div class="candidates" id="kilalanin">
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/lianga/balaan.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/lianga/balaan.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/lianga/dollano.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/lianga/dollano.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/lianga/dominguito.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/lianga/dominguito.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/lianga/lala.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/lianga/lala.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/lianga/mesagrande.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/lianga/mesagrande.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/lianga/quezada.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/lianga/quezada.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/lianga/quico.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/lianga/quico.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/first/lianga/samarah.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/first/lianga/samarah.png') }}" alt="" title=""></a></div>
                        <div class="clear"></div>
                    </div>
                   </div>
                </div>
             </div>

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

                <div class="item">
                    <div class="item-header" id="headingBislig">
                       <h2 class="mb-0">
                          <button style="font-family: 'gotham'; padding-left:40px;" class="btn btn-link shadow" type="button" data-toggle="collapse"
                             data-target="#bislig" aria-expanded="false"
                             aria-controls="bislig">
                          BISLIG CITY
                          <i class="fa fa-angle-down"></i>
                          </button>
                       </h2>
                    </div>
                    <div id="bislig" class="collapse show" aria-labelledby="headingBislig"
                       data-parent="#municipalitySecondDistrict">
                       <div class="">
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



              <div class="item">
                 <div class="item-header" id="headingBarobo">
                    <h2 class="mb-0">
                       <button style="font-family: 'gotham'; padding-left:40px;" class="btn btn-link shadow collapsed" type="button" data-toggle="collapse"
                          data-target="#barobo" aria-expanded="true" aria-controls="barobo">
                            BAROBO
                       <i class="fa fa-angle-down"></i>
                       </button>
                    </h2>
                 </div>
                 <div id="barobo" class="collapse" aria-labelledby="heading"
                    data-parent="#municipalitySecondDistrict">
                    <div class="">
                        <div class="candidates pt-2" id="kilalanin">
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/barobo/pama.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates//second/barobo/pama.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224  clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates//second/barobo/bernal.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates//second/barobo/bernal.png') }}" alt="" title=""></a></div>
                            <div class="clear"></div>
                        </div>
                        <div class="pt-0 pb-0">
                            <h1 class="fgrey">SB Members</h1>
                        </div>
                        <div class="candidates" id="kilalanin">
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/barobo/avila.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/barobo/avila.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/barobo/bacolod.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/barobo/bacolod.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/barobo/nbalahay.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/barobo/nbalahay.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/barobo/rbalahay.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/barobo/rbalahay.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/barobo/caybot.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/barobo/caybot.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/barobo/lumampas.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/barobo/lumampas.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/barobo/mosquera.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/barobo/mosquera.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/barobo/ronquillo.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/barobo/ronquillo.png') }}" alt="" title=""></a></div>
                            <div class="clear"></div>
                        </div>
                    </div>
                 </div>
              </div>

               <div class="item">
                 <div class="item-header" id="headingTagbina">
                    <h2 class="mb-0">
                       <button style="font-family: 'gotham'; padding-left:40px;" class="btn btn-link shadow collapsed" type="button" data-toggle="collapse"
                          data-target="#tagbina" aria-expanded="false" aria-controls="tagbina">
                       TAGBINA
                       <i class="fa fa-angle-down"></i>
                       </button>
                    </h2>
                 </div>
                 <div id="tagbina" class="collapse" aria-labelledby="headingTangbina"
                    data-parent="#municipalitySecondDistrict">
                    <div class="">
                        <div class="candidates pt-2" id="kilalanin">
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/tagbina/enaraiso.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates//second/tagbina/enaraiso.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224  clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates//second/tagbina/gnaraiso.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates//second/tagbina/gnaraiso.png') }}" alt="" title=""></a></div>
                            <div class="clear"></div>
                        </div>
                        <div class="pt-0 pb-0">
                            <h1 class="fgrey">SB Members</h1>
                        </div>
                        <div class="candidates" id="kilalanin">
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/tagbina/balili.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/tagbina/balili.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/tagbina/dalacan.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/tagbina/dalacan.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/tagbina/estavillo.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/tagbina/estavillo.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/tagbina/luchavez.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/tagbina/luchavez.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/tagbina/pabelonia.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/tagbina/pabelonia.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/tagbina/polizon.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/tagbina/polizon.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/tagbina/ramas.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/tagbina/ramas.png') }}" alt="" title=""></a></div>
                            <div class="clear"></div>
                        </div>
                    </div>
                 </div>
              </div>

              <div class="item">
                 <div class="item-header" id="headingHinatuan">
                    <h2 class="mb-0">
                       <button style="font-family: 'gotham'; padding-left:40px;" class="btn btn-link shadow collapsed" type="button" data-toggle="collapse"
                          data-target="#hinatuan" aria-expanded="false"
                          aria-controls="hinatuan">
                       HINATUAN
                       <i class="fa fa-angle-down"></i>
                       </button>
                    </h2>
                 </div>
                 <div id="hinatuan" class="collapse" aria-labelledby="headingHinatuan"
                    data-parent="#municipalitySecondDistrict">
                    <div class="">
                        <div class="candidates pt-2" id="kilalanin">
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/hinatuan/tgaray.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates//second/hinatuan/tgaray.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224  clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates//second/hinatuan/canedo.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates//second/hinatuan/canedo.png') }}" alt="" title=""></a></div>
                            <div class="clear"></div>
                        </div>
                        <div class="pt-0 pb-0">
                            <h1 class="fgrey">SB Members</h1>
                        </div>
                        <div class="candidates" id="kilalanin">
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/hinatuan/basigsig.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/hinatuan/basigsig.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/hinatuan/cacho.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/hinatuan/cacho.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/hinatuan/su.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/hinatuan/su.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/hinatuan/dinagay.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/hinatuan/dinagay.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/hinatuan/fullo.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/hinatuan/fullo.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/hinatuan/garay.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/hinatuan/garay.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/hinatuan/ortiz.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/hinatuan/ortiz.png') }}" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/hinatuan/villaluz.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/hinatuan/villaluz.png') }}" alt="" title=""></a></div>
                            <div class="clear"></div>
                        </div>
                    </div>
                 </div>
              </div>

              <div class="item">
                <div class="item-header" id="headingLiangig">
                   <h2 class="mb-0">
                      <button style="font-family: 'gotham'; padding-left:40px;" class="btn btn-link shadow collapsed" type="button" data-toggle="collapse"
                         data-target="#lingig" aria-expanded="false"
                         aria-controls="lingig">
                      LINGIG
                      <i class="fa fa-angle-down"></i>
                      </button>
                   </h2>
                </div>
                <div id="lingig" class="collapse" aria-labelledby="headingLingig"
                   data-parent="#municipalitySecondDistrict">
                   <div class="">
                    <div class="candidates pt-2" id="kilalanin">
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/lingig/evangelio.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates//second/lingig/evangelio.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224  clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates//second/lingig/acdog.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates//second/lingig/acdog.png') }}" alt="" title=""></a></div>
                        <div class="clear"></div>
                    </div>
                    <div class="pt-0 pb-0">
                        <h1 class="fgrey">SB Members</h1>
                    </div>
                    <div class="candidates" id="kilalanin">
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/lingig/canoy.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/lingig/canoy.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/lingig/deloso.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/lingig/deloso.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/lingig/nonong.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/lingig/nonong.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/lingig/onsing.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/lingig/onsing.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/lingig/orillo.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/lingig/orillo.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/lingig/paler.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/lingig/paler.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/lingig/plaza.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/lingig/plaza.png') }}" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="{{ asset('assets/images/candidates/second/lingig/restificar.png') }}" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="{{ asset('assets/images/candidates/second/lingig/restificar.png') }}" alt="" title=""></a></div>
                        <div class="clear"></div>
                    </div>
                   </div>
                </div>
             </div>

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
