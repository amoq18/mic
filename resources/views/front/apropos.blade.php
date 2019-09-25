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
                        <p>La Banque de détail en France propose une large gamme de produits et services adaptés aux besoins d’une clientèle diversifiée de clients particuliers et de professionnels, entreprises, associations et collectivités. S’appuyant sur le savoir-faire d’une équipe de près de 36 000 collaborateurs, un dispositif multicanal performant, dont près de 2 740 agences, la mutualisation des bonnes pratiques, l’optimisation et la digitalisation des processus, la Banque de détail en France combine la force de trois enseignes complémentaires : APBL, banque nationale de référence ; Crédit du Nord, groupe de banques régionales ; Boursorama Banque, acteur incontournable de la banque en ligne et de microcrédit en ligne. </p>

                        <p>APBL est l’un des tout premiers groupes européens de services financiers. S’appuyant sur un modèle diversifié et intégré, le Groupe allie solidité financière, dynamique d’innovation et stratégie de croissance durable afin d’être le partenaire de confiance de ses clients, engagé dans les transformations positives du monde.
                        Acteur important de l’économie depuis plus de 150 ans avec un ancrage solide en Europe et connecté au reste du monde, APBL emploie plus de 149 000 collaborateurs(1) dans 67 pays et accompagne au quotidien 31 millions de clients particuliers, entreprises et investisseurs institutionnels(2) à travers le monde, en offrant une large palette de conseils et de solutions financières sur mesure afin de sécuriser leurs échanges, protéger et gérer leur épargne, les aider à financer leurs projets, les protéger dans leur vie et leurs activités, leur offrir des solutions et des services innovants. La mission du Groupe est de donner à tous les moyens d’avoir un impact positif sur l’avenir.</p>

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
                        APBL a été créée pour financer le développement des entreprises. Il me semble essentiel de cultiver l’esprit pionnier que nous partageons depuis toujours avec nos clients entrepreneurs et particuliers pour leur divees problèmes..</p>
                        <h3 style="margin-bottom: 50px"><strong>Frédéric Oudéa <br>
                        Directeur général</strong></h3>
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
@endsection
