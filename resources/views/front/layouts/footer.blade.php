<footer class="footer_area">
            <div class="footer_widget">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-xs-6">
                            <aside class="f_widget about_widget">
                                <img src="{{ asset('assets/front/img/logo.png') }}" alt="">
                                {{-- <p>Lorem ipsum dolor sit amet, consec-tet ur adipiscing elit, sed do iusmod tempor incididunt ut labore et.</p> --}}
                                {{-- <a class="f_r_link" href="#">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a> --}}
                                {{-- <ul class="f_social">
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
                                </ul> --}}
                            </aside>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <aside class="f_widget link_widget">
                                <div class="f_title">
                                    <h3>Menus</h3>
                                </div>
                                <ul>
                                    <li><a href="#">-  Accueil</a></li>
                                    <li><a href="#">-  Evènements</a></li>
                                    <li><a href="#">-  Créer un compte</a></li>
                                    <li><a href="#">-  Demander un prêt</a></li>
                                    <li><a href="#">-  Devenir client fidèle</a></li>
                                    <li><a href="#">-  Gérer ses comptes</a></li>
                                    <li><a href="#">-  Epargner</a></li>
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
                                            <h4>Société Générale</h4>
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
                                            <a href="#">info@consultplus.com</a>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </div>
                                        <div class="media-body">
                                            <a href="#">Société Générale</a>
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
                            <p>Copyright © consultpro <script>document.write(new Date().getFullYear());</script>. All rights reserved. </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>