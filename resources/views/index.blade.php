
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
        <div class="candidate w-224 clg-hidden"><a href="{{ url('alexander-t-pimentel') }}"><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380169/images/candidates/pimentel_zu4puv.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
        <div class="candidate w-224  m-negmargin-5 cxs-hidden"><a href="{{ url('alexander-t-pimentel') }}"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380169/images/candidates/pimentel_zu4puv.webp" alt="" title=""></a></div>
        <div class="candidate w-224"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380168/images/candidates/alameda_mfdohc.webp" alt="" title=""></a></div>
        <div class="clear"></div>
    </div>

<div class="container-fluid">
<div class="row">
    <div class="col-lg-6 col-sm-12">
        <div class="pt-1 pb-1">
            <h1 class="fgrey">1st District</h1>
        </div>
        <div class="candidates" id="kilalanin">
            <div class="candidate w-224 clg-hidden"><a href="#"><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380166/images/candidates/rmomo_tjdm5v.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380166/images/candidates/rmomo_tjdm5v.webp" alt="" title=""></a></div>
        </div>
        <div class="pt-1 pb-1">
            <h1 class="fgrey">Board Members</h1>
        </div>
        <div class="candidates" id="kilalanin">
            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380209/images/candidates/first/azarcon_rlfzkt.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380209/images/candidates/first/azarcon_rlfzkt.webp" alt="" title=""></a></div>
            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380209/images/candidates/first/dumagan_eyerqi.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380209/images/candidates/first/dumagan_eyerqi.webp" alt="" title=""></a></div>
            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380209/images/candidates/first/layno_lw7v1t.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380209/images/candidates/first/layno_lw7v1t.webp" alt="" title=""></a></div>
            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380209/images/candidates/first/momo_tbzoch.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380209/images/candidates/first/momo_tbzoch.webp" alt="" title=""></a></div>
            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380209/images/candidates/first/montesclaros_bjh8ab.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380209/images/candidates/first/montesclaros_bjh8ab.webp" alt="" title=""></a></div>
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
                       <div class="p-t">
                        <div class="candidates pt-2" id="kilalanin">
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380791/images/candidates/first/tandag/rpimentel_u0jgnp.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380791/images/candidates/first/tandag/rpimentel_u0jgnp.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href="#"><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380791/images/candidates/first/tandag/nmomo_vrtxub.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380791/images/candidates/first/tandag/nmomo_vrtxub.webp" alt="" title=""></a></div>
                            <div class="clear"></div>
                        </div>
                        <div class="pt-0 pb-0">
                            <h1 class="fgrey">SB Members</h1>
                        </div>
                        <div class="candidates" id="kilalanin">
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380791/images/candidates/first/tandag/andresan_qkxlgj.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380791/images/candidates/first/tandag/andresan_qkxlgj.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380791/images/candidates/first/tandag/avila_xkjrvx.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380791/images/candidates/first/tandag/avila_xkjrvx.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380791/images/candidates/first/tandag/azarcon_uuqq8w.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380791/images/candidates/first/tandag/azarcon_uuqq8w.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380791/images/candidates/first/tandag/dumagan_gv50td.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380791/images/candidates/first/tandag/dumagan_gv50td.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380791/images/candidates/first/tandag/geli_v3614k.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380791/images/candidates/first/tandag/geli_v3614k.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380791/images/candidates/first/tandag/kmomo_bq0hmd.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380791/images/candidates/first/tandag/kmomo_bq0hmd.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380792/images/candidates/first/tandag/perez_g07kaq.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380792/images/candidates/first/tandag/perez_g07kaq.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380791/images/candidates/first/tandag/jppimentel_mhb7yn.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380791/images/candidates/first/tandag/jppimentel_mhb7yn.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380791/images/candidates/first/tandag/tan_nzn7p5.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380791/images/candidates/first/tandag/tan_nzn7p5.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380791/images/candidates/first/tandag/ty_m0l70r.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380791/images/candidates/first/tandag/ty_m0l70r.webp" alt="" title=""></a></div>
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
                    <div class="p-t">
                        <div class="candidates pt-2" id="kilalanin">
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380484/images/candidates/first/carrascal/pimentel_lx5wxo.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380484/images/candidates/first/carrascal/pimentel_lx5wxo.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380484/images/candidates/first/carrascal/valle_cl8yxy.webp" alt="" title=""></a></div>
                            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380484/images/candidates/first/carrascal/valle_cl8yxy.webp" alt="" title=""></a></div>
                            <div class="clear"></div>
                        </div>
                        <div class="pt-0 pb-0">
                            <h1 class="fgrey">SB Members</h1>
                        </div>
                        <div class="candidates" id="kilalanin">
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380484/images/candidates/first/carrascal/ague_lelvcj.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380484/images/candidates/first/carrascal/ague_lelvcj.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380485/images/candidates/first/carrascal/azarcon_bouzzf.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380485/images/candidates/first/carrascal/azarcon_bouzzf.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380485/images/candidates/first/carrascal/constantino_vout1u.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380485/images/candidates/first/carrascal/constantino_vout1u.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380485/images/candidates/first/carrascal/cuajao_knxfom.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380485/images/candidates/first/carrascal/cuajao_knxfom.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380485/images/candidates/first/carrascal/eliot_ivpwb4.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380485/images/candidates/first/carrascal/eliot_ivpwb4.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380484/images/candidates/first/carrascal/hotchkiss_qn7cwp.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380484/images/candidates/first/carrascal/hotchkiss_qn7cwp.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380484/images/candidates/first/carrascal/intano_tgxxkk.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380484/images/candidates/first/carrascal/intano_tgxxkk.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380484/images/candidates/first/carrascal/sugian_yf3rau.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380484/images/candidates/first/carrascal/sugian_yf3rau.webp" alt="" title=""></a></div>
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
                    <div class="p-t">
                        <div class="candidates pt-2" id="kilalanin">
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380428/images/candidates/first/cantilan/pichay_vqmztm.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380428/images/candidates/first/cantilan/pichay_vqmztm.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380427/images/candidates/first/cantilan/vega_nigaia.webp" alt="" title=""></a></div>
                            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380427/images/candidates/first/cantilan/vega_nigaia.webp" alt="" title=""></a></div>
                            <div class="clear"></div>
                        </div>
                        <div class="pt-0 pb-0">
                            <h1 class="fgrey">SB Members</h1>
                        </div>
                        <div class="candidates" id="kilalanin">
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380427/images/candidates/first/cantilan/arreza_esngtn.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380427/images/candidates/first/cantilan/arreza_esngtn.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380427/images/candidates/first/cantilan/cale_g2hclp.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380427/images/candidates/first/cantilan/cale_g2hclp.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380427/images/candidates/first/cantilan/creman_nocs3x.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380427/images/candidates/first/cantilan/creman_nocs3x.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380427/images/candidates/first/cantilan/cuaton_rpnptq.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380427/images/candidates/first/cantilan/cuaton_rpnptq.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380428/images/candidates/first/cantilan/espura_aw8d9x.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380428/images/candidates/first/cantilan/espura_aw8d9x.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380428/images/candidates/first/cantilan/flores_jzkcjm.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380428/images/candidates/first/cantilan/flores_jzkcjm.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380428/images/candidates/first/cantilan/iriberri_qtwoly.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380428/images/candidates/first/cantilan/iriberri_qtwoly.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380427/images/candidates/first/cantilan/viloria_sgt24k.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380427/images/candidates/first/cantilan/viloria_sgt24k.webp" alt="" title=""></a></div>
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
                    <div class="p-t">
                        <div class="candidates pt-2" id="kilalanin">
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380657/images/candidates/first/madrid/kimura_mjv1sv.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380657/images/candidates/first/madrid/kimura_mjv1sv.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380657/images/candidates/first/madrid/griar_qbdqtq.webp" alt="" title=""></a></div>
                            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380657/images/candidates/first/madrid/griar_qbdqtq.webp" alt="" title=""></a></div>
                            <div class="clear"></div>
                        </div>
                        <div class="pt-0 pb-0">
                            <h1 class="fgrey">SB Members</h1>
                        </div>
                        <div class="candidates" id="kilalanin">
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380657/images/candidates/first/madrid/arcero_foyxsx.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380657/images/candidates/first/madrid/arcero_foyxsx.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380657/images/candidates/first/madrid/badiang_rlci91.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380657/images/candidates/first/madrid/badiang_rlci91.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380657/images/candidates/first/madrid/doliente_p1f4vp.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380657/images/candidates/first/madrid/doliente_p1f4vp.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380657/images/candidates/first/madrid/estrada_uohjte.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380657/images/candidates/first/madrid/estrada_uohjte.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380657/images/candidates/first/madrid/gutang_wfw39g.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380657/images/candidates/first/madrid/gutang_wfw39g.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380657/images/candidates/first/madrid/montes_g11dbj.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380657/images/candidates/first/madrid/montes_g11dbj.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380657/images/candidates/first/madrid/portillano_bxwsrc.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380657/images/candidates/first/madrid/portillano_bxwsrc.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380657/images/candidates/first/madrid/sual_du2bkf.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380657/images/candidates/first/madrid/sual_du2bkf.webp" alt="" title=""></a></div>
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
                    <div class="p-t">
                        <div class="candidates pt-2" id="kilalanin">
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380458/images/candidates/first/carmen/plaza_sq0jwx.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380458/images/candidates/first/carmen/plaza_sq0jwx.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380459/images/candidates/first/carmen/manawatao_nj6gs8.webp" alt="" title=""></a></div>
                            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380459/images/candidates/first/carmen/manawatao_nj6gs8.webp" alt="" title=""></a></div>
                            <div class="clear"></div>
                        </div>
                        <div class="pt-0 pb-0">
                            <h1 class="fgrey">SB Members</h1>
                        </div>
                        <div class="candidates" id="kilalanin">
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380458/images/candidates/first/carmen/aguillon_stsowq.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380458/images/candidates/first/carmen/aguillon_stsowq.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380458/images/candidates/first/carmen/bigno_r9fsmx.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380458/images/candidates/first/carmen/bigno_r9fsmx.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380458/images/candidates/first/carmen/calanas_elxyhz.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380458/images/candidates/first/carmen/calanas_elxyhz.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380458/images/candidates/first/carmen/escuyos_kzln6c.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380458/images/candidates/first/carmen/escuyos_kzln6c.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380458/images/candidates/first/carmen/estrada_kostvi.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380458/images/candidates/first/carmen/estrada_kostvi.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380459/images/candidates/first/carmen/ohao_mijded.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380459/images/candidates/first/carmen/ohao_mijded.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380459/images/candidates/first/carmen/evaleroso_lzjo8g.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380459/images/candidates/first/carmen/evaleroso_lzjo8g.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380459/images/candidates/first/carmen/nvaleroso_x2mrta.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380459/images/candidates/first/carmen/nvaleroso_x2mrta.webp" alt="" title=""></a></div>
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
                   <div class="p-t">
                    <div class="candidates pt-2" id="kilalanin">
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380598/images/candidates/first/lanuza/azarcon_ofcix5.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380598/images/candidates/first/lanuza/azarcon_ofcix5.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380599/images/candidates/first/lanuza/maquiling_nyotrk.webp" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380599/images/candidates/first/lanuza/maquiling_nyotrk.webp" alt="" title=""></a></div>
                        <div class="clear"></div>
                    </div>
                    <div class="pt-0 pb-0">
                        <h1 class="fgrey">SB Members</h1>
                    </div>
                    <div class="candidates" id="kilalanin">
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380598/images/candidates/first/lanuza/aparejo_ibvwhe.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380598/images/candidates/first/lanuza/aparejo_ibvwhe.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380598/images/candidates/first/lanuza/eisen_lkxwvf.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380598/images/candidates/first/lanuza/eisen_lkxwvf.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380598/images/candidates/first/lanuza/estal_y1jild.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380598/images/candidates/first/lanuza/estal_y1jild.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380598/images/candidates/first/lanuza/jovita_cvdks0.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380598/images/candidates/first/lanuza/jovita_cvdks0.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380599/images/candidates/first/lanuza/miranda_nxqc9p.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380599/images/candidates/first/lanuza/miranda_nxqc9p.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380599/images/candidates/first/lanuza/oriel_sckchk.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380599/images/candidates/first/lanuza/oriel_sckchk.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380599/images/candidates/first/lanuza/sumbilla_etmjmr.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380599/images/candidates/first/lanuza/sumbilla_etmjmr.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380598/images/candidates/first/lanuza/viola_r2jl7b.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380598/images/candidates/first/lanuza/viola_r2jl7b.webp" alt="" title=""></a></div>
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
                   <div class="p-t">
                    <div class="candidates pt-2" id="kilalanin">
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380574/images/candidates/first/cortes/yu_vkxzgp.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380574/images/candidates/first/cortes/yu_vkxzgp.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380575/images/candidates/first/cortes/daraman_jp9fag.webp" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380575/images/candidates/first/cortes/daraman_jp9fag.webp" alt="" title=""></a></div>
                        <div class="clear"></div>
                    </div>
                    <div class="pt-0 pb-0">
                        <h1 class="fgrey">SB Members</h1>
                    </div>
                    <div class="candidates" id="kilalanin">
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380574/images/candidates/first/cortes/bagnol_phffqb.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380574/images/candidates/first/cortes/bagnol_phffqb.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380574/images/candidates/first/cortes/cagalawan_vgngfz.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380574/images/candidates/first/cortes/cagalawan_vgngfz.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380574/images/candidates/first/cortes/calamba_nyecuw.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380574/images/candidates/first/cortes/calamba_nyecuw.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380575/images/candidates/first/cortes/cuartero_mpjwmz.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380575/images/candidates/first/cortes/cuartero_mpjwmz.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380575/images/candidates/first/cortes/lagura_ugveqj.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380575/images/candidates/first/cortes/lagura_ugveqj.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380575/images/candidates/first/cortes/melo_g91cmi.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380575/images/candidates/first/cortes/melo_g91cmi.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380574/images/candidates/first/cortes/rivera_n8gjvb.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380574/images/candidates/first/cortes/rivera_n8gjvb.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380574/images/candidates/first/cortes/tubo_fxmrbj.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380574/images/candidates/first/cortes/tubo_fxmrbj.webp" alt="" title=""></a></div>
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
                   <div class="p-t">
                    <div class="candidates pt-2" id="kilalanin">
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380751/images/candidates/first/tago/laurente_fl5mm7.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380751/images/candidates/first/tago/laurente_fl5mm7.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380751/images/candidates/first/tago/pimentel_mioelb.webp" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380751/images/candidates/first/tago/pimentel_mioelb.webp" alt="" title=""></a></div>
                        <div class="clear"></div>
                    </div>
                    <div class="pt-0 pb-0">
                        <h1 class="fgrey">SB Members</h1>
                    </div>
                    <div class="candidates" id="kilalanin">
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380751/images/candidates/first/tago/baldemor_tbvfde.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380751/images/candidates/first/tago/baldemor_tbvfde.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380751/images/candidates/first/tago/elizalde_qohal3.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380751/images/candidates/first/tago/elizalde_qohal3.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380751/images/candidates/first/tago/gasulas_newdky.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380751/images/candidates/first/tago/gasulas_newdky.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380751/images/candidates/first/tago/milloren_htb8ri.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380751/images/candidates/first/tago/milloren_htb8ri.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380751/images/candidates/first/tago/montero_jtiukp.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380751/images/candidates/first/tago/montero_jtiukp.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380751/images/candidates/first/tago/jpimentel_j8afym.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380751/images/candidates/first/tago/jpimentel_j8afym.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380751/images/candidates/first/tago/kpimentel_jytv5z.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380751/images/candidates/first/tago/kpimentel_jytv5z.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380751/images/candidates/first/tago/serrano_xf5jr7.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380751/images/candidates/first/tago/serrano_xf5jr7.webp" alt="" title=""></a></div>
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
                   <div class="p-t">
                    <div class="candidates pt-2" id="kilalanin">
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380731/images/candidates/first/san%20miguel/corilla_xozhse.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380731/images/candidates/first/san%20miguel/corilla_xozhse.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href="#"><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380731/images/candidates/first/san%20miguel/demoto_t4kukw.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380731/images/candidates/first/san%20miguel/demoto_t4kukw.webp" alt="" title=""></a></div>
                        <div class="clear"></div>
                    </div>
                    <div class="pt-0 pb-0">
                        <h1 class="fgrey">SB Members</h1>
                    </div>
                    <div class="candidates" id="kilalanin">
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380731/images/candidates/first/san%20miguel/egnora_eh9cfp.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380731/images/candidates/first/san%20miguel/egnora_eh9cfp.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380731/images/candidates/first/san%20miguel/gascon_isehx9.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380731/images/candidates/first/san%20miguel/gascon_isehx9.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380731/images/candidates/first/san%20miguel/guinsod_i1dmma.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380731/images/candidates/first/san%20miguel/guinsod_i1dmma.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380732/images/candidates/first/san%20miguel/montenegro_h2nbe0.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380732/images/candidates/first/san%20miguel/montenegro_h2nbe0.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380732/images/candidates/first/san%20miguel/murillo_dyi1gl.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380732/images/candidates/first/san%20miguel/murillo_dyi1gl.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380732/images/candidates/first/san%20miguel/nazi_oucyeg.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380732/images/candidates/first/san%20miguel/nazi_oucyeg.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380732/images/candidates/first/san%20miguel/tabaranza_dtxtbt.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380732/images/candidates/first/san%20miguel/tabaranza_dtxtbt.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380731/images/candidates/first/san%20miguel/torrefranca_q1aih2.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380731/images/candidates/first/san%20miguel/torrefranca_q1aih2.webp" alt="" title=""></a></div>
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
                   <div class="p-t">
                    <div class="candidates pt-2" id="kilalanin">
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380239/images/candidates/first/bayabas/plozada_giedhq.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380239/images/candidates/first/bayabas/plozada_giedhq.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href="#"><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380238/images/candidates/first/bayabas/garcia_r44osr.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380238/images/candidates/first/bayabas/garcia_r44osr.webp" alt="" title=""></a></div>
                        <div class="clear"></div>
                    </div>
                    <div class="pt-0 pb-0">
                        <h1 class="fgrey">SB Members</h1>
                    </div>
                    <div class="candidates" id="kilalanin">
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380238/images/candidates/first/bayabas/butad_clvtfy.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380238/images/candidates/first/bayabas/butad_clvtfy.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380238/images/candidates/first/bayabas/comboy_jnl536.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380238/images/candidates/first/bayabas/comboy_jnl536.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380238/images/candidates/first/bayabas/hinampas_de3lf3.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380238/images/candidates/first/bayabas/hinampas_de3lf3.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380238/images/candidates/first/bayabas/alozada_yvcn1n.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380238/images/candidates/first/bayabas/alozada_yvcn1n.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380238/images/candidates/first/bayabas/klozada_xufimq.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380238/images/candidates/first/bayabas/klozada_xufimq.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380238/images/candidates/first/bayabas/maglangit_sgudur.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380238/images/candidates/first/bayabas/maglangit_sgudur.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380238/images/candidates/first/bayabas/ordona_lggcoh.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380238/images/candidates/first/bayabas/ordona_lggcoh.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380239/images/candidates/first/bayabas/quijada_iyv0oq.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380239/images/candidates/first/bayabas/quijada_iyv0oq.webp" alt="" title=""></a></div>
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
                   <div class="p-t">
                    <div class="candidates pt-2" id="kilalanin">
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380375/images/candidates/first/cagwait/batiancila_qnfho7.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380375/images/candidates/first/cagwait/batiancila_qnfho7.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href="#"><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380375/images/candidates/first/cagwait/tuscano_zmmmqp.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380375/images/candidates/first/cagwait/tuscano_zmmmqp.webp" alt="" title=""></a></div>
                        <div class="clear"></div>
                    </div>
                    <div class="pt-0 pb-0">
                        <h1 class="fgrey">SB Members</h1>
                    </div>
                    <div class="candidates" id="kilalanin">
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380375/images/candidates/first/cagwait/adaya_wzbgtt.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380375/images/candidates/first/cagwait/adaya_wzbgtt.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380375/images/candidates/first/cagwait/espinoza_owda8v.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380375/images/candidates/first/cagwait/espinoza_owda8v.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380375/images/candidates/first/cagwait/lozada_ku2hfy.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380375/images/candidates/first/cagwait/lozada_ku2hfy.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380375/images/candidates/first/cagwait/prado_heq4l9.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380375/images/candidates/first/cagwait/prado_heq4l9.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380375/images/candidates/first/cagwait/quezada_gqgun4.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380375/images/candidates/first/cagwait/quezada_gqgun4.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380375/images/candidates/first/cagwait/reyes_eav3wc.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380375/images/candidates/first/cagwait/reyes_eav3wc.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380375/images/candidates/first/cagwait/tabugon_vy8as2.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380375/images/candidates/first/cagwait/tabugon_vy8as2.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380375/images/candidates/first/cagwait/vasquez_pjodfx.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380375/images/candidates/first/cagwait/vasquez_pjodfx.webp" alt="" title=""></a></div>
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
                   <div class="p-t">
                    <div class="candidates pt-2" id="kilalanin">
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380685/images/candidates/first/marihatag/fazon_fs8ghc.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380685/images/candidates/first/marihatag/fazon_fs8ghc.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href="#"><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380686/images/candidates/first/marihatag/polinar_msthht.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380686/images/candidates/first/marihatag/polinar_msthht.webp" alt="" title=""></a></div>
                        <div class="clear"></div>
                    </div>
                    <div class="pt-0 pb-0">
                        <h1 class="fgrey">SB Members</h1>
                    </div>
                    <div class="candidates" id="kilalanin">
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380685/images/candidates/first/marihatag/campos_o8dh3o.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380685/images/candidates/first/marihatag/campos_o8dh3o.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380685/images/candidates/first/marihatag/gomez_mtxbnq.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380685/images/candidates/first/marihatag/gomez_mtxbnq.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380685/images/candidates/first/marihatag/lerog_jvdgfx.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380685/images/candidates/first/marihatag/lerog_jvdgfx.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380685/images/candidates/first/marihatag/lozada_siub92.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380685/images/candidates/first/marihatag/lozada_siub92.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380686/images/candidates/first/marihatag/octobre_guip31.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380686/images/candidates/first/marihatag/octobre_guip31.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380686/images/candidates/first/marihatag/pascual_phlajd.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380686/images/candidates/first/marihatag/pascual_phlajd.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380686/images/candidates/first/marihatag/sampiano_m9kfoh.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380686/images/candidates/first/marihatag/sampiano_m9kfoh.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380685/images/candidates/first/marihatag/yu_oztyrg.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380685/images/candidates/first/marihatag/yu_oztyrg.webp" alt="" title=""></a></div>
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
                   <div class="p-t">
                    <div class="candidates pt-2" id="kilalanin">
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380705/images/candidates/first/san%20agustin/alameda_fxb5go.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380705/images/candidates/first/san%20agustin/alameda_fxb5go.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href="#"><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380705/images/candidates/first/san%20agustin/de_guzman_dmbmki.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380705/images/candidates/first/san%20agustin/de_guzman_dmbmki.webp" alt="" title=""></a></div>
                        <div class="clear"></div>
                    </div>
                    <div class="pt-0 pb-0">
                        <h1 class="fgrey">SB Members</h1>
                    </div>
                    <div class="candidates" id="kilalanin">
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380705/images/candidates/first/san%20agustin/bcampos_g69fx5.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380705/images/candidates/first/san%20agustin/bcampos_g69fx5.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380706/images/candidates/first/san%20agustin/rcampos_ibmfsd.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380706/images/candidates/first/san%20agustin/rcampos_ibmfsd.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380705/images/candidates/first/san%20agustin/climaco_o3jrrt.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380705/images/candidates/first/san%20agustin/climaco_o3jrrt.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380705/images/candidates/first/san%20agustin/lamela_wfnfuq.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380705/images/candidates/first/san%20agustin/lamela_wfnfuq.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380706/images/candidates/first/san%20agustin/layson_rlayaq.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380706/images/candidates/first/san%20agustin/layson_rlayaq.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380706/images/candidates/first/san%20agustin/martinez_amhzxz.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380706/images/candidates/first/san%20agustin/martinez_amhzxz.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380706/images/candidates/first/san%20agustin/osorio_avgpa8.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380706/images/candidates/first/san%20agustin/osorio_avgpa8.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380705/images/candidates/first/san%20agustin/simplicio_rm9ghc.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380705/images/candidates/first/san%20agustin/simplicio_rm9ghc.webp" alt="" title=""></a></div>
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
                   <div class="p-t">
                    <div class="candidates pt-2" id="kilalanin">
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380625/images/candidates/first/lianga/pedrozo_ycc5b3.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380625/images/candidates/first/lianga/pedrozo_ycc5b3.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href="#"><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380625/images/candidates/first/lianga/layno_yq8uwo.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380625/images/candidates/first/lianga/layno_yq8uwo.webp" alt="" title=""></a></div>
                        <div class="clear"></div>
                    </div>
                    <div class="pt-0 pb-0">
                        <h1 class="fgrey">SB Members</h1>
                    </div>
                    <div class="candidates" id="kilalanin">
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380625/images/candidates/first/lianga/balaan_rtxm5k.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380625/images/candidates/first/lianga/balaan_rtxm5k.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380625/images/candidates/first/lianga/dollano_i4vhrg.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380625/images/candidates/first/lianga/dollano_i4vhrg.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380625/images/candidates/first/lianga/dominguito_iwlhcw.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380625/images/candidates/first/lianga/dominguito_iwlhcw.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380625/images/candidates/first/lianga/lala_ylyvx0.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380625/images/candidates/first/lianga/lala_ylyvx0.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380625/images/candidates/first/lianga/mesagrande_yj3wsl.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380625/images/candidates/first/lianga/mesagrande_yj3wsl.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380625/images/candidates/first/lianga/quezada_k7obn9.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380625/images/candidates/first/lianga/quezada_k7obn9.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380625/images/candidates/first/lianga/quico_nonwgl.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380625/images/candidates/first/lianga/quico_nonwgl.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380625/images/candidates/first/lianga/samarah_xs1keo.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380625/images/candidates/first/lianga/samarah_xs1keo.webp" alt="" title=""></a></div>
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
            <div class="candidate w-224 clg-hidden"><a href="#"><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380169/images/candidates/jpimentel_pvziva.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380169/images/candidates/jpimentel_pvziva.webp" alt="" title=""></a></div>
        </div>
        <div class="pt-1 pb-1">
            <h1 class="fgrey">Board Members</h1>
        </div>
        <div class="candidates" id="kilalanin">
            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380836/images/candidates/second/canedo_jcmp4u.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380836/images/candidates/second/canedo_jcmp4u.webp" alt="" title=""></a></div>
            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380836/images/candidates/second/cejoco_zb974z.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380836/images/candidates/second/cejoco_zb974z.webp" alt="" title=""></a></div>
            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380837/images/candidates/second/garay_xf6tik.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380837/images/candidates/second/garay_xf6tik.webp" alt="" title=""></a></div>
            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380837/images/candidates/second/salazar_nb4er0.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380837/images/candidates/second/salazar_nb4er0.webp" alt="" title=""></a></div>
            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380836/images/candidates/second/sayawan_nrzids.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380836/images/candidates/second/sayawan_nrzids.webp" alt="" title=""></a></div>
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
                       <div class="p-t">
                           <div class="candidates pt-2" id="kilalanin">
                               <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380892/images/candidates/second/bislig/garay_x6myau.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                               <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380892/images/candidates/second/bislig/garay_x6myau.webp" alt="" title=""></a></div>
                               <div class="candidate w-224  clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380891/images/candidates/second/bislig/castillo_m1rmn7.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                               <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380891/images/candidates/second/bislig/castillo_m1rmn7.webp" alt="" title=""></a></div>
                               <div class="clear"></div>
                           </div>
                           <div class="pt-0 pb-0">
                               <h1 class="fgrey">SB Members</h1>
                           </div>
                           <div class="candidates" id="kilalanin">
                               <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380891/images/candidates/second/bislig/alvar_xgo8by.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                               <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380891/images/candidates/second/bislig/alvar_xgo8by.webp" alt="" title=""></a></div>
                               <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380891/images/candidates/second/bislig/alvizo_say9xs.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                               <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380891/images/candidates/second/bislig/alvizo_say9xs.webp" alt="" title=""></a></div>
                               <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380891/images/candidates/second/bislig/casas_pabo3u.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                               <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380891/images/candidates/second/bislig/casas_pabo3u.webp" alt="" title=""></a></div>
                               <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380891/images/candidates/second/bislig/chicano_evrbut.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                               <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380891/images/candidates/second/bislig/chicano_evrbut.webp" alt="" title=""></a></div>
                               <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380891/images/candidates/second/bislig/corvera_llrnh5.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                               <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380891/images/candidates/second/bislig/corvera_llrnh5.webp" alt="" title=""></a></div>
                               <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380891/images/candidates/second/bislig/dominguez_fktzrz.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                               <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380891/images/candidates/second/bislig/dominguez_fktzrz.webp" alt="" title=""></a></div>
                               <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380892/images/candidates/second/bislig/manada_ewz5ms.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                               <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380892/images/candidates/second/bislig/manada_ewz5ms.webp" alt="" title=""></a></div>
                               <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380891/images/candidates/second/bislig/sia_uia3d6.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                               <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380891/images/candidates/second/bislig/sia_uia3d6.webp" alt="" title=""></a></div>
                               <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380891/images/candidates/second/bislig/sulapas_mhyuz7.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                               <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380891/images/candidates/second/bislig/sulapas_mhyuz7.webp" alt="" title=""></a></div>
                               <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380891/images/candidates/second/bislig/viduya_vihecp.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                               <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380891/images/candidates/second/bislig/viduya_vihecp.webp" alt="" title=""></a></div>
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
                    <div class="p-t">
                        <div class="candidates pt-2" id="kilalanin">
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380858/images/candidates/second/barobo/pama_oevmnz.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380858/images/candidates/second/barobo/pama_oevmnz.webp" alt="" title=""></a></div>
                            <div class="candidate w-224  clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380857/images/candidates/second/barobo/bernal_zmgdgf.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380857/images/candidates/second/barobo/bernal_zmgdgf.webp" alt="" title=""></a></div>
                            <div class="clear"></div>
                        </div>
                        <div class="pt-0 pb-0">
                            <h1 class="fgrey">SB Members</h1>
                        </div>
                        <div class="candidates" id="kilalanin">
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380857/images/candidates/second/barobo/avila_kn1jjb.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380857/images/candidates/second/barobo/avila_kn1jjb.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380857/images/candidates/second/barobo/bacolod_ahoncm.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380857/images/candidates/second/barobo/bacolod_ahoncm.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380858/images/candidates/second/barobo/nbalahay_dceooe.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380858/images/candidates/second/barobo/nbalahay_dceooe.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380858/images/candidates/second/barobo/rbalahay_v4og0n.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380858/images/candidates/second/barobo/rbalahay_v4og0n.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380858/images/candidates/second/barobo/caybot_caoqiy.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380858/images/candidates/second/barobo/caybot_caoqiy.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380858/images/candidates/second/barobo/lumampas_xza6ao.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380858/images/candidates/second/barobo/lumampas_xza6ao.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380858/images/candidates/second/barobo/mosquera_hdz1is.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380858/images/candidates/second/barobo/mosquera_hdz1is.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380857/images/candidates/second/barobo/ronquillo_pcepyi.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380857/images/candidates/second/barobo/ronquillo_pcepyi.webp" alt="" title=""></a></div>
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
                    <div class="p-t">
                        <div class="candidates pt-2" id="kilalanin">
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380964/images/candidates/second/tagbina/enaraiso_dpcc2r.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380964/images/candidates/second/tagbina/enaraiso_dpcc2r.webp" alt="" title=""></a></div>
                            <div class="candidate w-224  clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380965/images/candidates/second/tagbina/gnaraiso_xxkrdf.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380965/images/candidates/second/tagbina/gnaraiso_xxkrdf.webp" alt="" title=""></a></div>
                            <div class="clear"></div>
                        </div>
                        <div class="pt-0 pb-0">
                            <h1 class="fgrey">SB Members</h1>
                        </div>
                        <div class="candidates" id="kilalanin">
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380964/images/candidates/second/tagbina/balili_klzrza.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380964/images/candidates/second/tagbina/balili_klzrza.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380964/images/candidates/second/tagbina/dalacan_weftyp.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380964/images/candidates/second/tagbina/dalacan_weftyp.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380964/images/candidates/second/tagbina/estavillo_nqdzgg.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380964/images/candidates/second/tagbina/estavillo_nqdzgg.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380965/images/candidates/second/tagbina/luchavez_qvczu9.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380965/images/candidates/second/tagbina/luchavez_qvczu9.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380965/images/candidates/second/tagbina/pabelonia_yo0edu.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380965/images/candidates/second/tagbina/pabelonia_yo0edu.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380965/images/candidates/second/tagbina/polizon_yaslll.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380965/images/candidates/second/tagbina/polizon_yaslll.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380964/images/candidates/second/tagbina/ramas_sianzn.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380964/images/candidates/second/tagbina/ramas_sianzn.webp" alt="" title=""></a></div>
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
                    <div class="p-t">
                        <div class="candidates pt-2" id="kilalanin">
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380914/images/candidates/second/hinatuan/tgaray_mbndi5.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380914/images/candidates/second/hinatuan/tgaray_mbndi5.webp" alt="" title=""></a></div>
                            <div class="candidate w-224  clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380913/images/candidates/second/hinatuan/canedo_larabj.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380913/images/candidates/second/hinatuan/canedo_larabj.webp" alt="" title=""></a></div>
                            <div class="clear"></div>
                        </div>
                        <div class="pt-0 pb-0">
                            <h1 class="fgrey">SB Members</h1>
                        </div>
                        <div class="candidates" id="kilalanin">
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380913/images/candidates/second/hinatuan/basigsig_eiyrbq.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380913/images/candidates/second/hinatuan/basigsig_eiyrbq.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380913/images/candidates/second/hinatuan/cacho_lmy3bl.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380913/images/candidates/second/hinatuan/cacho_lmy3bl.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380914/images/candidates/second/hinatuan/su_hs9gpm.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380914/images/candidates/second/hinatuan/su_hs9gpm.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380914/images/candidates/second/hinatuan/dinagay_vxfuaj.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380914/images/candidates/second/hinatuan/dinagay_vxfuaj.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380914/images/candidates/second/hinatuan/fullo_ogis4z.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380914/images/candidates/second/hinatuan/fullo_ogis4z.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380914/images/candidates/second/hinatuan/garay_v88yj9.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380914/images/candidates/second/hinatuan/garay_v88yj9.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380914/images/candidates/second/hinatuan/ortiz_gqdw23.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380914/images/candidates/second/hinatuan/ortiz_gqdw23.webp" alt="" title=""></a></div>
                            <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380913/images/candidates/second/hinatuan/villaluz_tolwvl.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                            <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380913/images/candidates/second/hinatuan/villaluz_tolwvl.webp" alt="" title=""></a></div>
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
                   <div class="p-t">
                    <div class="candidates pt-2" id="kilalanin">
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380936/images/candidates/second/lingig/evangelio_uepzcb.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380936/images/candidates/second/lingig/evangelio_uepzcb.webp" alt="" title=""></a></div>
                        <div class="candidate w-224  clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380936/images/candidates/second/lingig/acdog_vkuerb.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325  m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380936/images/candidates/second/lingig/acdog_vkuerb.webp" alt="" title=""></a></div>
                        <div class="clear"></div>
                    </div>
                    <div class="pt-0 pb-0">
                        <h1 class="fgrey">SB Members</h1>
                    </div>
                    <div class="candidates" id="kilalanin">
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380936/images/candidates/second/lingig/canoy_er9fpq.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380936/images/candidates/second/lingig/canoy_er9fpq.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380936/images/candidates/second/lingig/deloso_noidjx.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href=""><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380936/images/candidates/second/lingig/deloso_noidjx.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380936/images/candidates/second/lingig/nonong_eitrhz.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380936/images/candidates/second/lingig/nonong_eitrhz.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380936/images/candidates/second/lingig/onsing_cpmugc.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380936/images/candidates/second/lingig/onsing_cpmugc.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380936/images/candidates/second/lingig/orillo_pve4ob.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380936/images/candidates/second/lingig/orillo_pve4ob.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380936/images/candidates/second/lingig/paler_eajkap.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380936/images/candidates/second/lingig/paler_eajkap.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380936/images/candidates/second/lingig/plaza_rd4byr.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380936/images/candidates/second/lingig/plaza_rd4byr.webp" alt="" title=""></a></div>
                        <div class="candidate w-224 clg-hidden"><a href=""><img src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380936/images/candidates/second/lingig/restificar_trjuss.webp" class="lg-hidden img-thumbnail shadow" alt="" title=""></a></div>
                        <div class="candidate w-325 m-negmargin-5 cxs-hidden"><a href="#"><img class="img-thumbnail shadow" src="https://res.cloudinary.com/djqqh07cr/image/upload/v1646380936/images/candidates/second/lingig/restificar_trjuss.webp" alt="" title=""></a></div>
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
