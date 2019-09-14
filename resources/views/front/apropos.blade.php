@extends('front.layouts.app')

@section('content')
    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner_content">
                <h3>A Propos</h3>
            </div>
        </div>
    </section>
    <div class="banner_link">
        <div class="container">
            <div class="abnner_link_inner">
                <a class="active" href="{{ url('/') }}">Accueil</a>
                <a href="#">A Propos</a>
            </div>
        </div>
    </div>
        
    <!--================Our About Area =================-->
    <section class="our_about_area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="our_about_left_content">
                        <div class="section_title">
                            <h2>About our firm </h2>
                        </div>
                        <p>La Banque de détail en France propose une large gamme de produits et services adaptés aux besoins d’une clientèle diversifiée de clients particuliers et de professionnels, entreprises, associations et collectivités. S’appuyant sur le savoir-faire d’une équipe de près de 36 000 collaborateurs, un dispositif multicanal performant, dont près de 2 740 agences, la mutualisation des bonnes pratiques, l’optimisation et la digitalisation des processus, la Banque de détail en France combine la force de trois enseignes complémentaires : Société Générale, banque nationale de référence ; Crédit du Nord, groupe de banques régionales ; Boursorama Banque, acteur incontournable de la banque en ligne et de microcrédit en ligne. </p>

                        <p>Société Générale est l’un des tout premiers groupes européens de services financiers. S’appuyant sur un modèle diversifié et intégré, le Groupe allie solidité financière, dynamique d’innovation et stratégie de croissance durable afin d’être le partenaire de confiance de ses clients, engagé dans les transformations positives du monde.
                        Acteur important de l’économie depuis plus de 150 ans avec un ancrage solide en Europe et connecté au reste du monde, Société Générale emploie plus de 149 000 collaborateurs(1) dans 67 pays et accompagne au quotidien 31 millions de clients particuliers, entreprises et investisseurs institutionnels(2) à travers le monde, en offrant une large palette de conseils et de solutions financières sur mesure afin de sécuriser leurs échanges, protéger et gérer leur épargne, les aider à financer leurs projets, les protéger dans leur vie et leurs activités, leur offrir des solutions et des services innovants. La mission du Groupe est de donner à tous les moyens d’avoir un impact positif sur l’avenir.</p>

                        <p>Notre mission est de donner à tous les moyens d’avoir un impact positif sur l’avenir. Chacun peut agir, avec de l’énergie positive, pour faire avancer le monde.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="our_about_image">
                        <img src="{{ asset('assets/front/img/about-right-1.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--================Manager Area =================-->
    <section class="manager_area">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="manager_image">
                        <img src="{{ asset('assets/front/img/manager-image.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="our_about_left_content">
                        <div class="section_title">
                            <h2>Un mot du Directeur Général</h2>
                        </div>
                        <h3>Vous êtes entrepreneur, retrouvez ici du contenu utile pour gérer, développer et pérenniser votre activité en France et à l’international. Financer votre développement, booster votre business grâce au e-commerce, vous lancer à l’international, protéger vos salariés et votre entreprise, vous développer par croissance externe, passer le relais, motiver vos équipes, … autant de sujets qui vous concernent pour faire grandir votre entreprise. Témoignages, solutions, articles, actualités, événements, … l’essentiel pour entreprendre. <br>
                        Société Générale a été créée pour financer le développement des entreprises. Il me semble essentiel de cultiver l’esprit pionnier que nous partageons depuis toujours avec nos clients entrepreneurs et particuliers pour leur divees problèmes..</p>
                        <h3 style="margin-bottom: 50px"><strong>Frédéric Oudéa <br>
                        Directeur général</strong></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--================Testimonials Area =================-->
    <section class="testimonials_area" style="margin-bottom: 50px">
        <div class="container">
            <div class="testimonials_slider owl-carousel">
                <div class="item">
                    <div class="media">
                        <div class="media-left">
                            <img src="{{ asset('assets/front/img/testimonials/testimonials-1.png') }}" alt="">
                            <i>“</i>
                        </div>
                        <div class="media-body">
                            <p>Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit ametion consectetur elit. Vesti bulum nec odio ipsum. Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus suada faci lisis.</p>
                            <h4>- Michale John</h4>
                            <h5>Ceo of Minda</h5>
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
                            <p>Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit ametion consectetur elit. Vesti bulum nec odio ipsum. Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus suada faci lisis.</p>
                            <h4>- Michale John</h4>
                            <h5>Ceo of Minda</h5>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="media">
                        <div class="media-left">
                            <img src="img/testimonials/testimonials-1.png" alt="">
                            <i>“</i>
                        </div>
                        <div class="media-body">
                            <p>Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit ametion consectetur elit. Vesti bulum nec odio ipsum. Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus suada faci lisis.</p>
                            <h4>- Michale John</h4>
                            <h5>Ceo of Minda</h5>
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
                            <p>Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit ametion consectetur elit. Vesti bulum nec odio ipsum. Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus suada faci lisis.</p>
                            <h4>- Michale John</h4>
                            <h5>Ceo of Minda</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
