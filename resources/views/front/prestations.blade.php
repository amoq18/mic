@extends('front.layouts.app')

@section('content')
    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="container">
            <div class="banner_content">
                <h3>Nos Prestations</h3>
            </div>
        </div>
    </section>
    <div class="banner_link">
        <div class="container">
            <div class="abnner_link_inner">
                <a class="active" href="{{ url('/') }}">Accueil</a>
                <a href="#">Nos Prestations</a>
            </div>
        </div>
    </div>
        
        <!--================Our About Area =================-->
        <section class="our_about_area" id="service1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="our_about_left_content">
                            <div class="section_title">
                                <h2>Assurance Auto et Scolaire </h2>
                            </div>
                            <p>Pourquoi souscrire une assurance scolaire ? <br>
La protection de l’enfant est la principale raison qui pousse les parents à souscrire une assurance scolaire. En cas de sinistre ou d’accident, l’élève reçoit une indemnité selon les termes du contrat. Cette assurance est surtout utile lors des sorties organisées par l’école (visite de musée, excursions…).L’assurance scolaire couvre aussi les préjudices qui peuvent être causés par l’élève sur ses camarades ou encore sur le matériel scolaire.

Pour les parents qui ont déjà souscrit une assurance familiale, ce n’est plus nécessaire de souscrire une assurance scolaire, car la première couvre déjà tous les risques scolaires. Mais pour ceux qui voudraient encore plus de sérénité par rapport à la scolarité de leurs enfants, une assurance scolaire spécifique est proposée par les assureurs. Ce sera une clause dans le contrat d’assurance familiale qui assurera à l’enfant une protection 24h/24h et 7j/7j durant toute l’année scolaire.</p>
<p>Par « assurance auto », on entend généralement :

l’assurance obligatoire appelée R.C. Auto (responsabilité civile des véhicules à moteur) ;
les assurances complémentaires non obligatoires comme l’assurance omnium et la mini-omnium, l’assurance conducteur, l’assurance protection juridique, l’assurance-assistance.
Le principe
La R.C. Auto couvre la responsabilité des conducteurs d’un véhicule. Cette assurance est obligatoire pour tous les propriétaires de véhicules dès que le véhicule est mis en circulation sur la voie publique, les terrains ouverts au public et les terrains non publics mais ouverts à un certain nombre de personnes ayant le droit de les fréquenter.

Lorsque vous êtes responsable d'un accident, cette assurance prend en charge les dommages matériels et corporels occasionnés aux victimes mais ne couvre pas vos propres blessures ou les dégâts matériels causés à votre véhicule. Pour cette raison, la R.C. Auto est souvent complétée par d'autres couvertures comme l’omnium et la mini-omnium qui couvrent les dégâts matériels causés au véhicule assuré.</p>
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

        <!--================Our About Area =================-->
        <section class="our_about_area" id="service2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="our_about_left_content">
                            <div class="section_title">
                                <h2>Assurance Habitation Etudiant et Immobilier </h2>
                            </div>
                            <p>Les garanties d’une assurance multirisques habitation étudiant
La plupart des compagnies d’assurance proposent des formules d’assurance logement étudiant. Pour en bénéficier, le souscripteur doit obligatoirement présenter une carte d’étudiant valide ou en attente de validité.

Une assurance habitation étudiant va couvrir la plupart des sinistres les plus courants : incendie, explosion, dégât des eaux, tempête, catastrophe naturelle et technologique… L’ampleur de la couverture peut varier d’une offre à une autre, il est donc indispensable de bien comparer les devis avant de s’engager.

assurance habitation étudiant
Des garanties optionnelles peuvent s’avérer intéressantes pour un étudiant, notamment pour couvrir le bris de vitre, le vol ou le vandalisme mais également les dommages électriques. Ces sinistres peuvent engendrer des frais de réparation ou de remplacement élevés, rendant souvent indispensables ce genre de protection supplémentaires. Être vigilant sur les franchises appliquées à ces garanties permet de ne pas avoir de mauvaise surprise au moment de l’indemnisation.</p>
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

        <!--================Our About Area =================-->
        <section class="our_about_area" id="service3">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="our_about_left_content">
                            <div class="section_title">
                                <h2>Dettes de consolidations et Hypothèque </h2>
                            </div>
                            <p>La consolidation de dettes
Vous tirez le diable par la queue chaque fin de mois? Vous ne voyez plus la lumière au bout du tunnel? Votre courtier Multi-Prêts peut vous présenter plusieurs options pour vous aider, dont la consolidation de dettes.

Trois bonnes raisons de consolider vos dettes
Vous avez de la misère à boucler votre budget chaque mois
Vos revenus ont diminué ou sont moins réguliers
Vos frais d’intérêt sont beaucoup trop élevés à votre goût
Empruntez jusqu’à 80 % de la valeur nette de votre propriété
La valeur nette de votre propriété vous donne les moyens d’emprunter à un très faible taux. Parlez-en à votre courtier Multi-Prêts pour en profiter!

Avantages d’une consolidation de dettes
Diminution des paiements mensuels
Réduction des frais d’intérêt (taux plus faible sur vos dettes)
Gestion simplifiée (une seule dette vs plusieurs)
Assainissement de votre dossier de crédit.</p>
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

        <!--================Our About Area =================-->
        <section class="our_about_area" id="service4">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="our_about_left_content">
                            <div class="section_title">
                                <h2>Prêts entre particulers et divers </h2>
                            </div>
                            <p>Le but de ce système est de réduire fortement les taux d’intérêts pratiqués, en limitant les coûts d’intermédiation bancaire et de refinancement.
							Le deuxième objectif est d'assurer des gains pour les prêteurs largement supérieurs à ceux proposés par des placements bancaires classiques. Par ailleurs, ce système présente un risque assez faible dû à la séparation des crédits en “pool” de prêteurs. De ce fait, la perte due au non-remboursement d’un prêt est répartie sur l’ensemble des créanciers, ce qui permet de réduire fortement la perte finale.
							Le troisième objectif est de mettre l'humain au cœur de la logique du crédit. Les banques proposent des taux efficients en termes de rentabilité. </p>
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

        <!--================Our About Area =================-->
        <section class="our_about_area" id="service5">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="our_about_left_content">
                            <div class="section_title">
                                <h2>Sauvetage de crédit </h2>
                            </div>
                            <p>Regroupement de crédits: la bouée de sauvetage ?
09:06 09 novembre dans Regroupement de crédits par admin4345
Le regroupement de crédit ou restructuration de crédits vous permet de diminuer le montant de vos remboursements mensuels en réunissant l’ensemble de vos crédits et encours divers en un seul prêt, sans changer de banque.

Il permet également à un client qui a déjà un ou plusieurs prêts en cours, de pouvoir financer de nouveaux projets tout en évitant d’alourdir son endettement.

Il est important de préciser que ce financement s’adresse à tout le monde, que vous soyez propriétaires ou locataires.

ENECI FINANCE vous propose d’étudier gratuitement votre dossier afin d’évaluer la faisabilité de votre projet et vous expliquer dans quelles conditions il pourrait être mis en place le cas échéant.</p>
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
@endsection
