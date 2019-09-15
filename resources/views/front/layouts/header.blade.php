<header class="main_header_area">
    <div class="header_top">
        <div class="container">
            <div class="header_top_inner">
                <div class="pull-left" style="margin: 15px">
                    <a href="#"><i class="fa fa-envelope-o"></i>info@consultplus.com</a>
                    <a href="https://m.facebook.com/Our-General-Society-110593493662269/?_rdr"><i class="fa fa-facebook"></i></a>
                </div>
                <div style="margin-top: 25px">
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
                </div>

                <div class="pull-right" style="margin: -30px">
                    <a class="main_btn" href="{{ route('front.operation') }}">Démarrer une opération </a>
                </div>
            </div>
        </div>
    </div>
    <div class="header_menu">
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="{{ asset('assets/front/img/logo.png') }}" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="submenu dropdown">
                            <a href="{{ route('front.home') }}">Accueil</a>
                            <ul class="dropdown-menu">
                                {{-- <li><a href="{{ url('/').'#news' }}">Evènements</a></li> --}}
                            </ul>
                        </li>
                        <li class="submenu dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Société Générale</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('front.apropos') }}">A Propos</a></li>
                                <li><a href="{{ url('/').'#contact' }}">Contact</a></li>
                            </ul>
                        </li>
                        <li class="submenu dropdown">
                            {{-- <a href="{{ route('front.prestations') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Prestations</a> --}}
                            <a href="{{ route('front.prestations') }}">Prestations</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('prestations').'#service1' }}">Assurance Auto et Scolaire</a></li>
                                <li><a href="{{ url('prestations').'#service2' }}">Assurance Habitation Etudiant et Immobilier</a></li>
                                <li><a href="{{ url('prestations').'#service3' }}">Dettes de consolidations et Hypothèque</a></li>
                                <li><a href="{{ url('prestations').'#service4' }}">Prêts entre particulers et divers</a></li>
                                <li><a href="{{ url('prestations').'#service5' }}">Sauvetage de crédit</a></li>
                            </ul>
                        </li>
                        <li class="submenu dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Opérations rapides</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('front.register') }}">Créer un compte</a></li>
                                {{-- <li><a href="{{ route('front.compte') }}">Gérer son compte</a></li> --}}
                                <li><a href="{{ route('front.operation') }}">Formulaire de prêt</a></li>
                                {{-- <li><a href="#">Epargner</a></li> --}}
                                <li><a href="{{ route('front.virement') }}">Faire un virement</a></li>
                                <li><a href="{{ route('front.simulationCompte') }}">Simulation de crédit</a></li>
                            </ul>
                        </li>
                        <li class="submenu dropdown">
                            <a href="{{ route('front.evenement.list') }}">Evènements</a>
                        </li>    


                        @if(auth()->guest())
                            <li class="submenu dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Utilisateur</a>
                                <ul class="search">
                                    <li><a href="{{ route('front.register') }}">S'inscrire</a></li>
                                    <li><a href="{{ route('front.login') }}">Se Connecter</a></li>
                                </ul>
                            </li>
                        @else
                            <li class="submenu dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->nom[0] }}. {{ auth()->user()->prenom }}</a>
                                <ul class="search">
                                    <li><a href="{{ route('front.compte') }}">Mon Compte</a></li>
                                    <li><a href="{{ route('front.logout') }}">Se Déconnecter</a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>
</header>