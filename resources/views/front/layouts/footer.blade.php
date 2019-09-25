<footer class="footer_area">
            <div class="footer_widget">
                <div class="container">
                    <div class="row" style="margin-bottom: 35px">
                        <center >
                            <a href="javascript:void()"  onclick="window.location.hash='#googtrans(en)';location.reload();"><img src="{{ asset('assets/front/img/lang/en.png') }}" align="center"> </a>&nbsp;
                            <a href="javascript:void()"  onclick="window.location.hash='#googtrans(de)';location.reload();"><img src="{{ asset('assets/front/img/lang/de.png') }}" align="center"> </a>&nbsp;
                            <a href="javascript:void()"  onclick="window.location.hash='#googtrans(es)';location.reload();"><img src="{{ asset('assets/front/img/lang/es.png') }}" align="center">  </a>&nbsp;
                            <a href="javascript:void()"  onclick="window.location.hash='#googtrans(fr)';location.reload();"><img src="{{ asset('assets/front/img/lang/fr.png') }}" align="center">  </a>&nbsp;
                            <a href="javascript:void()"  onclick="window.location.hash='#googtrans(nl)';location.reload();"><img src="{{ asset('assets/front/img/lang/nl.png') }}" align="center">  </a>&nbsp;
                            <a href="javascript:void()"  onclick="window.location.hash='#googtrans(lv)';location.reload();"><img src="{{ asset('assets/front/img/lang/lv.png') }} " align="center"> </a>&nbsp;
                            <a href="javascript:void()"  onclick="window.location.hash='#googtrans(sk)';location.reload();"><img src="{{ asset('assets/front/img/lang/sk.png') }} " align="center"> </a>&nbsp;
                            <a href="javascript:void()"  onclick="window.location.hash='#googtrans(sl)';location.reload();"><img src="{{ asset('assets/front/img/lang/sl.png') }} " align="center"> </a>&nbsp;
                            <a href="javascript:void()"  onclick="window.location.hash='#googtrans(mt)';location.reload();"><img src="{{ asset('assets/front/img/lang/mt.png') }} " align="center"> </a>&nbsp;

                            <!-- Code provided by Google -->
                            <div style="display:none">
                                <div id="google_translate_element"></div>
                                <script type="text/javascript">
                                    function googleTranslateElementInit() {
                                        new google.translate.TranslateElement({pageLanguage: 'fr', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                                        }
                                </script>
                                <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                            </div>

                            <!-- Flag click handler -->
                            <!-- Flag click handler -->
                            <script type="text/javascript">
                                $('.translation-links a').click(function() {
                                  var lang = $(this).data('lang');
                                  var $frame = $('.goog-te-menu-frame:first');
                                  if (!$frame.size()) {
                                    alert("Error: Could not find Google translate frame.");
                                    return false;
                                  }
                                  $frame.contents().find('.goog-te-menu2-item span.text:contains('+lang+')').get(0).click();
                                  return false;
                                });
                            </script>
                        </center>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-xs-6">
                            <aside class="f_widget about_widget">
                                <!-- <img src="{{ asset('assets/front/img/logo.png') }}" alt=""> -->
                            </aside>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <aside class="f_widget link_widget">
                                <div class="f_title">
                                    <h3>Menus</h3>
                                </div>
                                <ul>
                                    <li><a href="{{ url('/') }}">-  Accueil</a></li>
                                    <li><a href="{{ route('front.prestations') }}">-  Prestations</a></li>
                                    <li><a href="{{ route('front.evenement.list') }}">-  Evènements</a></li>
                                    <li><a href="{{ route('front.register') }}">-  Créer un compte</a></li>
                                    <li><a href="{{ route('front.operation') }}">-  Demander un prêt</a></li>
                                    <li><a href="{{ route('front.virement') }}">-  Faire un virement</a></li>
                                    <li><a href="{{ route('front.simulationCompte') }}">-  Simulation de crédit</a></li>
                                    <li><a href="{{ route('front.register') }}">-  S'inscrire</a></li>
                                    <li><a href="{{ route('front.login') }}">-  Se Connecter</a></li>
                                    <li><a href="{{ route('front.apropos') }}">-  A Propos</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <aside class="f_widget link_widget">
                                <div class="f_title">
                                    <h3>Nos Prestations</h3>
                                </div>
                                <ul>
                                    <li><a href="{{ url('prestations').'#service1' }}">-  Assurance Auto et Scolaire</a></li>
                                    <li><a href="{{ url('prestations').'#service2' }}">-  Assurance Habitation Etudiant et Immobilier</a></li>
                                    <li><a href="{{ url('prestations').'#service3' }}">-  Dettes de consolidations et Hypothèque</a></li>
                                    <li><a href="{{ url('prestations').'#service4' }}">-  Prêts entre particulers et divers</a></li>
                                    <li><a href="{{ url('prestations').'#service5' }}">-  Sauvetage de crédit</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <aside class="f_widget contact_widget">
                                <div class="f_title">
                                    <h3>Nos Informations</h3>
                                </div>
                                <div class="contact_inner">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        </div>
                                        <div class="media-body">
                                            <h4>APBL</h4>
                                            <p>54B, Tailstoi Town 5238 MT, La city, IA 522364</p>
                                        </div>
                                    </div>
                                    {{-- <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                        </div>
                                        <div class="media-body">
                                            <a href="#">+ 01865 524 8503 </a>
                                        </div>
                                    </div> --}}
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        </div>
                                        <div class="media-body">
                                            <a href="#" title="contact@apbl-info.com">contact@apbl-info.com</a>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </div>
                                        <div class="media-body">
                                            <a href="https://m.facebook.com/Our-General-Society-110593493662269/?_rdr" target="_blank">APBL</a>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_copyright">
                <div class="container">
                    <div class="footer_copyright_inner">
                        <div class="pull-left">
                            <p>Copyright © APBL <script>document.write(new Date().getFullYear());</script>. All rights reserved. </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
