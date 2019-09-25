@extends('front.layouts.app')

@section('content')
    <!--================Slider Area =================-->
    <section class="main_slider_area">
        <div id="main_slider" class="rev_slider" data-version="5.3.1.6">
            <ul>
                <li data-index="rs-1587" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="{{ asset('assets/front/img/home-slider/slider-8.jpg') }}"  data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{ asset('assets/front/img/home-slider/slider-8.jpg') }}"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>

                    <!-- LAYER NR. 1 -->
                    <div class="slider_text_box">
                        <div class="tp-caption tp-resizeme first_text"
                        id="slide-1586-layer-1"
                        data-x="['left','left','left','15','0']" data-hoffset="['0','0','0','0']"
                        data-y="['top','top','top','top']" data-voffset="['290','290','290','220','130']"
                        data-fontsize="['55','55','55','40','30']"
                        data-lineheight="['59','59','59','50','40']"
                        data-width="['550','550','550','400']"
                        data-height="none"
                        data-whitespace="normal"
                        data-type="text"
                        data-responsive_offset="on"
                        data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                        data-textAlign="['left','left','left','left']">Bienvenue à <br class="slider_br1" /> APBL</div>

                        <div class="tp-caption tp-resizeme secand_text"
                            id="slide-1587-layer-2"
                            data-x="['left','left','left','15','0']" data-hoffset="['0','0','0','0']"
                            data-y="['top','top','top','top']" data-voffset="['435','435','435','340','225']"
                            data-fontsize="['18','18','18','18','16']"
                            data-lineheight="['26','26','26','26']"
                            data-width="['550','550','550','550','300']"
                            data-height="none"
                            data-whitespace="normal"
                            data-type="text"
                            data-responsive_offset="on"
                            data-transform_idle="o:1;"
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">
                        </div>

                        <div class="tp-caption tp-resizeme slider_button"
                            id="slide-1587-layer-3"
                            data-x="['left','left','left','15','0']" data-hoffset="['0','0','0','0']"
                            data-y="['top','top','top','top']" data-voffset="['525','525','525','425','330']"
                            data-fontsize="['14','14','14','14']"
                            data-lineheight="['46','46','46','46']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-type="text"
                            data-responsive_offset="on"
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">
                            <a class="main_btn" href="#services">Découvrir</a>
                            <a class="main_b_btn" href="{{ route('front.operation') }}">Démarrer un prêt</a>
                        </div>
                    </div>
                </li>
                <li data-index="rs-1588" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="{{ asset('assets/front/img/home-slider/slider-2.jpg') }}"  data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{ asset('assets/front/img/home-slider/slider-2.jpg') }}"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="slider_text_box">
                        <div class="tp-caption tp-resizeme first_text"
                        id="slide-1586-layer-1"
                        data-x="['left','left','left','15','0']" data-hoffset="['0','0','0','0']"
                        data-y="['top','top','top','top']" data-voffset="['290','290','290','220','130']"
                        data-fontsize="['55','55','55','40','30']"
                        data-lineheight="['59','59','59','50','40']"
                        data-width="['550','550','550','400']"
                        data-height="none"
                        data-whitespace="normal"
                        data-type="text"
                        data-responsive_offset="on"
                        data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                        data-textAlign="['left','left','left','left']">Bienvenue à <br class="slider_br1" /> APBL</div>

                        <div class="tp-caption tp-resizeme secand_text"
                            id="slide-1587-layer-2"
                            data-x="['left','left','left','15','0']" data-hoffset="['0','0','0','0']"
                            data-y="['top','top','top','top']" data-voffset="['435','435','435','340','225']"
                            data-fontsize="['18','18','18','18','16']"
                            data-lineheight="['26','26','26','26']"
                            data-width="['550','550','550','550','300']"
                            data-height="none"
                            data-whitespace="normal"
                            data-type="text"
                            data-responsive_offset="on"
                            data-transform_idle="o:1;"
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">
                        </div>

                        <div class="tp-caption tp-resizeme slider_button"
                            id="slide-1587-layer-3"
                            data-x="['left','left','left','15','0']" data-hoffset="['0','0','0','0']"
                            data-y="['top','top','top','top']" data-voffset="['525','525','525','425','330']"
                            data-fontsize="['14','14','14','14']"
                            data-lineheight="['46','46','46','46']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-type="text"
                            data-responsive_offset="on"
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">
                            <a class="main_btn" href="#services">Découvrir</a>
                            <a class="main_b_btn" href="{{ route('front.operation') }}">Démarrer un prêt</a>
                        </div>
                    </div>
                </li>
                <li data-index="rs-1589" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="{{ asset('assets/front/img/home-slider/slider-1.jpg') }}"  data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                <!-- MAIN IMAGE -->
                <img src="{{ asset('assets/front/img/home-slider/slider-1.jpg') }}"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                    <!-- LAYER NR. 1 -->
                    <div class="slider_text_box">
                        <div class="tp-caption tp-resizeme first_text"
                        id="slide-1586-layer-1"
                        data-x="['left','left','left','15','0']" data-hoffset="['0','0','0','0']"
                        data-y="['top','top','top','top']" data-voffset="['290','290','290','220','130']"
                        data-fontsize="['55','55','55','40','30']"
                        data-lineheight="['59','59','59','50','40']"
                        data-width="['550','550','550','400']"
                        data-height="none"
                        data-whitespace="normal"
                        data-type="text"
                        data-responsive_offset="on"
                        data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                        data-textAlign="['left','left','left','left']">Bienvenue à <br class="slider_br1" /> APBL</div>

                        <div class="tp-caption tp-resizeme secand_text"
                            id="slide-1587-layer-2"
                            data-x="['left','left','left','15','0']" data-hoffset="['0','0','0','0']"
                            data-y="['top','top','top','top']" data-voffset="['435','435','435','340','225']"
                            data-fontsize="['18','18','18','18','16']"
                            data-lineheight="['26','26','26','26']"
                            data-width="['550','550','550','550','300']"
                            data-height="none"
                            data-whitespace="normal"
                            data-type="text"
                            data-responsive_offset="on"
                            data-transform_idle="o:1;"
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">
                        </div>

                        <div class="tp-caption tp-resizeme slider_button"
                            id="slide-1587-layer-3"
                            data-x="['left','left','left','15','0']" data-hoffset="['0','0','0','0']"
                            data-y="['top','top','top','top']" data-voffset="['525','525','525','425','330']"
                            data-fontsize="['14','14','14','14']"
                            data-lineheight="['46','46','46','46']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-type="text"
                            data-responsive_offset="on"
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">
                            <a class="main_btn" href="#services">Découvrir</a>
                            <a class="main_b_btn" href="{{ route('front.operation') }}">Démarrer un prêt</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!--================Business Box Area =================-->
    <section class="business_box_area">
        <div class="container">
            <div class="sec_middle_title" id="news">
                <h2><span>APBL</span> à votre disposition 24H/24 </h2>
                <p>APBL est la meilleur banque pour résoudre vos problèmes financiers,
                immobiliers, agricoles, etc en toute sécurité.</p>
            </div>
            <div class="row">
                @foreach ($news as $new)
                <div class="col-sm-4">
                    <div class="business_box_item">
                        <div class="business_image">
                            <img src="{{ asset('assets/front/img/business/business-1.jpg') }}" alt="">
                        </div>
                        {{-- @dd($new->photo) --}}
                        <div class="business_text">
                            <a href="{{ route('front.evenement', $new->id) }}"><h4>{{ $new->titre }}</h4></a>
                            <h5>{{ $new->contenue }}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!--================Our Service Area =================-->
    <section class="our_service_area" id="services">
        <div class="container">
            <div class="section_title">
                <h2>Nos services</h2>
            </div>
            <div class="row service_inner">
                <div class="col-md-4 col-sm-6">
                    <div class="service_item">
                        <div class="media">
                            <div class="media-left">
                                <img src="{{ asset('assets/front/img/icon/service-icon1.png') }}" alt="">
                                <img src="{{ asset('assets/front/img/icon/service-icon1-h.png') }}" alt="">
                            </div>
                            <div class="media-body">
                                <a href="{{ url('prestations').'#service1' }}"><h4>Assurance Auto et Scolaire</h4></a>
                                <p>Pourquoi souscrire une assurance scolaire ?
                                La protection de l’enfant est la principale raison ...</p>
                                <a class="more_link" href="{{ url('prestations').'#service1' }}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service_item">
                        <div class="media">
                            <div class="media-left">
                                <img src="{{ asset('assets/front/img/icon/service-icon2.png') }}" alt="">
                                <img src="{{ asset('assets/front/img/icon/service-icon2-h.png') }}" alt="">
                            </div>
                            <div class="media-body">
                                <a href="{{ url('prestations').'#service2' }}"><h4>Assurance Habitation Etudiant et Immobilier</h4></a>
                                <p>Les garanties d’une assurance multirisques habitation étudiant La plupart des compagnies ...</p>
                                <a class="more_link" href="{{ url('prestations').'#service2' }}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service_item">
                        <div class="media">
                            <div class="media-left">
                                <img src="{{ asset('assets/front/img/icon/service-icon4.png') }}" alt="">
                                <img src="{{ asset('assets/front/img/icon/service-icon4-h.png') }}" alt="">
                            </div>
                            <div class="media-body">
                                <a href="{{ url('prestations').'#service3' }}"><h4>Dettes de consolidations et Hypothèques</h4></a>
                                <p>La consolidation de dettes Vous tirez le diable par la queue chaque fin de ...</p>
                                <a class="more_link" href="{{ url('prestations').'#service3' }}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service_item">
                        <div class="media">
                            <div class="media-left">
                                <img src="{{ asset('assets/front/img/icon/service-icon4.png') }}" alt="">
                                <img src="{{ asset('assets/front/img/icon/service-icon4-h.png') }}" alt="">
                            </div>
                            <div class="media-body">
                                <a href="{{ url('prestations').'#service4' }}"><h4>Prêts entre particulers et divers</h4></a>
                                <p>Le but de ce système est de réduire fortement les  ...</p>
                                <a class="more_link" href="{{ url('prestations').'#service4' }}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service_item">
                        <div class="media">
                            <div class="media-left">
                                <img src="{{ asset('assets/front/img/icon/service-icon6.png') }}" alt="">
                                <img src="{{ asset('assets/front/img/icon/service-icon6-h.png') }}" alt="">
                            </div>
                            <div class="media-body">
                                <a href="{{ url('prestations').'#service5' }}"><h4>Sauvetage de crédit</h4></a>
                                <p>Regroupement de crédits: la bouée de sauvetage ? 09:06 09 novembre dans Regroupement de crédits ...</p>
                                <a class="more_link" href="{{ url('prestations').'#service5' }}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="service_item">
                        <div class="media">
                            <div class="media-left">
                                <img src="{{ asset('assets/front/img/icon/service-icon6.png') }}" alt="">
                                <img src="{{ asset('assets/front/img/icon/service-icon6-h.png') }}" alt="">
                            </div>
                            <div class="media-body">
                                <a href="{{ url('prestations') }}"><h4>Prêts divers</h4></a>
                                <p>La somme empruntée vous est versée par virement sur votre compte de ...</p>
                                <a class="more_link" href="{{ url('prestations').'#service5' }}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--================Helpline Area =================-->
    {{-- <section class="helpline_area">
        <div class="container">
            <div class="helpline_inner">
                <div class="media">
                    <div class="media-left">
                        <img src="{{ asset('assets/front/img/help-icon.png') }}" alt="">
                    </div>
                    <div class="media-body">
                        <h6>Need consultation</h6>
                        <h4>start improving your business today</h4>
                        <p>Contact our customer support team if you have any further questions. We are heare to help you out</p>
                        <div class="contact_d">
                            <a href="#">9985 547 9687</a>
                            <a href="#">contact@consultplus.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!--================Our Practice Area =================-->
    <section class="practice_area">
        <div class="container">
            <div class="section_title">
                <h2>Nos Projets Recents</h2>
            </div>
            <div class="row practice_inner">
                <div class="col-md-3 col-sm-6">
                    <div class="practice_item">
                        <div class="practice_image">
                            <img src="{{ asset('assets/front/img/practice/practice-1.jpg') }}" alt="">
                            <a href="#"><h4>Read More</h4></a>
                        </div>
                        <h5>Assurance immobilier</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="practice_item">
                        <div class="practice_image">
                            <img src="{{ asset('assets/front/img/practice/practice-2.jpg') }}" alt="">
                            <a href="#"><h4>Read More</h4></a>
                        </div>
                        <h5>Assurance éducatif</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="practice_item">
                        <div class="practice_image">
                            <img src="{{ asset('assets/front/img/practice/practice-3.jpg') }}" alt="">
                            <a href="#"><h4>Read More</h4></a>
                        </div>
                        <h5>Prêts entre particuliers</h5>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="practice_item">
                        <div class="practice_image">
                            <img src="{{ asset('assets/front/img/practice/practice-4.jpg') }}" alt="">
                            <a href="#"><h4>Read More</h4></a>
                        </div>
                        <h5>Crédit agricole</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--================Testimonials Area =================-->
    <section class="testimonials_area" id="testimonial">
        <div class="container">
            <div class="testimonials_slider owl-carousel">
                <div class="item">
                    <div class="media">
                        <div class="media-left">
                            <img src="{{ asset('assets/front/img/testimonials/testimonials-3.png') }}" alt="">
                            <i>“</i>
                        </div>
                        <div class="media-body" id="partner">
                            <p>Bonjour, Incroyable , mais VRAI ,j'ai connu ce site par un ami formidable J'ai bénéficié d'un prêt de 55.000€ que je dois rembourser sur 15ans avec un très faible
                            interêt de 3% sur toute ma durée de prêt et là le lendemain matin j'ai reçu l'argent sans protocole.</p>
                            <h4>- Michale John -</h4>
                            {{-- <h5>Ceo of Minda</h5> --}}
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="media">
                        <div class="media-left">
                            <img src="{{ asset('assets/front/img/testimonials/testimonials-4.png') }}" alt="">
                            <i>“</i>
                        </div>
                        <div class="media-body">
                            <p>Bonsoir, je suis Mme Eline, je suis à la recherche de prêt d’argent depuis plusieurs mois j’ai été 4 fois victimes d’escroquerie. J’avais des dettes et des factures à payer . Je croyais que c’était fini pour moi,qu’il n’y avait plus d’issue… Mais heureusement j’ai vu des témoignages faites par beaucoup des personnes sur APBL ,c’est ainsi que j’ai obtenu mon 1er prêt pour régler mes dettes et réaliser mon projet en toute sécurité.</p>
                            <h4>- Eline Marie -</h4>
                            {{-- <h5>Ceo of Minda</h5> --}}
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="media">
                        <div class="media-left">
                            <img src="{{ asset('assets/front/img/testimonials/testimonials-1.png') }}" alt="">
                            <i>“</i>
                        </div>
                        <div class="media-body">
                            <p>Si vous avez besoin de financement de prêt d’argent ou de n’importe qu’elle projet a réaliser, seul cette banque peut vous aider à le réaliser et vous soutenir financièrement…</p>
                            <h4>- Marc -</h4>
                            {{-- <h5>Ceo of Minda</h5> --}}
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="media">
                        <div class="media-left">
                            <img src="{{ asset('assets/front/img/testimonials/testimonials-5.png') }}" alt="">
                            <i>“</i>
                        </div>
                        <div class="media-body">
                            <p>Bonsoir je m’appelle David et Je suis commerçant de produits pharmaceutiques et je note qu’en ce moment je suis comme le plus heureux de ce monde. Je viens en témoignage d’un prêt entre particulier que je viens de recevoir. J’ai reçu mon prêt grâce au service de cette banque.Je conseille vivement à tous mes proches et amis dans le besoin de contacter cette banque et vous serai satisfait pour votre demande.</p>
                            <h4>- David Leo -</h4>
                            {{-- <h5>Ceo of Minda</h5> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--================Contact Area =================-->
    <section class="contact_area" id="contact">
        <div class="contact_left_side">
            <div class="contact_inner">
                <div class="section_w_title">
                    @if (Session::has('success'))
                            <h4 style="color: white">Votre message a été bien enoyé<h4/>
                        @endif
                    <h2>Nous contactez</h2>
                </div>
                <div class="row">

                    <form class="request_contact" action="#" method="post">
                        @csrf

                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="name" name="nom" placeholder="Nom">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group col-md-12">
                            <textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <button type="submit" value="submit" class="btn submit_btn form-control">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="contact_right_side">
            <div class="contact_r_image">
                <img src="{{ asset('assets/front/img/contact-right.jpg') }}" alt="">
            </div>
        </div>
    </section>
@endsection
