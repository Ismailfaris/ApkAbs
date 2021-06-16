@extends('layouts/layout')

@section('content')
<main id="main">
  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h4>Compétences</h4>
        <ol>
          <li><a href="/index">Accueil</a></li>
          <li>Compétences</li>
        </ol>
      </div>
    </div>
  </section>
  <!-- End Breadcrumbs -->

  <!-- ======= container Section ======= -->

  <div class="container">
    <div style="padding-bottom:10%; padding-top:5%" class="service-nav-fix">
      <div class="row">
        <div class="col-6 col-md-4">
          <div class="list-group" id="list-tab" role="tablist">
            <a style="padding:4% 4% 4% 4%" class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#Stratégie" role="tab" aria-controls="home">Stratégie</a>
            <a style="padding:4% 4% 4% 4%" class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#Finance" role="tab" aria-controls="profile">Finance</a>
            <a style="padding:4% 4% 4% 4%" class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#Qualité" role="tab" aria-controls="messages">Qualité</a>
            <a style="padding:4% 4% 4% 4%" class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#Commercial" role="tab" aria-controls="settings">Commercial</a>
            <a style="padding:4% 4% 4% 4%" class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#Marketing" role="tab" aria-controls="settings">Marketing</a>
            <a style="padding:4% 4% 4% 4%" class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#Ressources-Humaines" role="tab" aria-controls="settings">Ressources Humaines</a>
            <a style="padding:4% 4% 4% 4%" class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#Achat-Approvisionnement" role="tab" aria-controls="settings">Achat & Approvisionnement</a>
            <a style="padding:4% 4% 4% 4%" class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#Logistique" role="tab" aria-controls="settings">Logistique</a>
            <a style="padding:4% 4% 4% 4%" class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#Production" role="tab" aria-controls="settings">Production</a>
          </div>
        </div>
        <div class="col-md-8">
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="Stratégie" role="tabpanel" aria-labelledby="list-home-list">
              <div class="coool">
                <h3 class="margin-reset">Stratégie</h3>
                <br />
                <p>
                  La stratégie a pour vocation de créer ou re-créer du potentiel
                  pour vos activités. Elle engage l'entreprise sur le moyen et
                  le long terme.
                </p>
                <p>
                  Notre expertise concernant « l'approche stratégique » est donc
                  développée dans les domaines suivants :
                </p>
                <br />
                <ul style="text-align: left; margin-left: 10%">
                  <li type="square">Projet de développement stratégique.</li>
                  <li type="square">
                    Diagnostic stratégique et plan de progrès.
                  </li>

                  <li type="square">Coaching.</li>
                  <li type="square">Leadership.</li>

                  <li type="square">Management.</li>
                </ul>
              </div>
              <img src="assets/img/compétences/strategie.jpg" class="rounded float-right" style="width: 450px; height: 170px" alt="" />
            </div>
            <div class="tab-pane fade" id="Finance" role="tabpanel" aria-labelledby="list-profile-list">
              <div class="coool">
                <h3 class="margin-reset">Finance</h3>
                <p>
                  La fonction finance est une activité clé de l'entreprise qui
                  vient irriguer les autres fonctions en leur fournissant les
                  ressources nécessaires à leur développement.
                </p>

                <p>
                  Pour vous permettre de concrétiser vos enjeux ; ABS
                  COMPETENCES accompagne tous vos projets dans ces Compétences :
                </p>
                <br />
                <ul style="text-align: left; margin-left: 10%">
                  <li type="square">Audit financier.</li>
                  <li type="square">Contrôle de gestion.</li>

                  <li type="square">Comptabilité générale et analytique.</li>
                  <li type="square">Gestion de trésorerie.</li>

                  <li type="square">Business plan.</li>

                  <li type="square">Normes IFRS</li>
                </ul>
              </div>
              <img src="assets/img/compétences/finance.jpg" class="rounded float-right" style="width: 450px; height: 170px" alt="" />

            </div>
            <div class="tab-pane fade" id="Qualité" role="tabpanel" aria-labelledby="list-messages-list">
              <div class="coool">
                <h3 class="margin-reset">Organisation et Qualité</h3>
                <br />
                <p>
                  <strong>« On se souvient de la qualité bien plus longtemps que du
                    prix. » Gucci</strong>
                </p>
                <p>
                  Dans le cadre de la mise en place de plusieurs
                  normes/référentiels, ABS COMPETENCES mérite votre entière
                  confiance, à citer :
                </p>
                <br />
                <ul style="text-align: left; margin-left: 10%">
                  <li type="square">Progrès et pilotage de performance.</li>
                  <li type="square">ISO 9001 V 4008.</li>

                  <li type="square">ISO 4000 V 4005.</li>
                  <li type="square">ISO 14001 V 4004.</li>
                  <li type="square">OHSAS 18001 V 4007.</li>

                  <li type="square">ISO 17045 V 4005.</li>
                  <li type="square">Les Normes Marocaines (NM).</li>
                </ul>
              </div>
              <img src="assets/img/compétences/qualite.jpg" class="rounded float-right" style="width: 450px; height: 170px" alt="" />

            </div>
            <div class="tab-pane fade" id="Commercial" role="tabpanel" aria-labelledby="list-settings-list">
              <div class="coool">
                <h3 class="margin-reset">Commercial</h3>
                <p>
                  La fonction commerciale est le pilier du développement
                  économique des sociétés. Qu'elles soient grandes, moyennes ou
                  petites, elles sont dans l'obligation de savoir vendre pour se
                  développer, un point fondamental, l'essence même des affaires.
                </p>

                <p>
                  C'est dans ce sens-là que ABS COMPETENCES déploie toutes ses
                  ressources pour vous assister à bien mener vos projets en se
                  basant sur les axes suivants :
                </p>
                <br />
                <ul style="text-align: left; margin-left: 10%">
                  <li type="square">
                    Développement des outils de vente et de pilotage commercial.
                  </li>
                  <li type="square">
                    Perfectionnement aux métiers de la vente.
                  </li>

                  <li type="square">Négociation commerciale.</li>
                  <li type="square">
                    Accompagnement de la force de vente sur le terrain.
                  </li>
                </ul>
              </div>
              <img src="assets/img/compétences/commercial.jpg" class="rounded float-right" style="width: 450px; height: 170px" alt="" />

            </div>
            <div class="tab-pane fade" id="Marketing" role="tabpanel" aria-labelledby="list-settings-list">
              <div class="coool">
                <h3 class="margin-reset">Marketing</h3>
                <br />
                <p>
                  <strong>« Le marketing est si fondamental qu'on ne saurait le
                    regarder comme ne fonction séparée. Le marketing est partout
                    dans l'entreprise considérée du point de vue final,
                    c'est-à-dire du point de vue du client ». Peter F.
                    Drucker</strong>
                </p>

                <p>
                  Pour vous permettre de concrétiser vos enjeux ; ABS
                  COMPETENCES accompagne tous vos projets dans ces Compétences :
                </p>
                <br />
                <ul style="text-align: left; margin-left: 10%">
                  <li type="square">Plans de développement marketing.</li>
                  <li type="square">
                    Etudes de marché, de faisabilité et de positionnement.
                  </li>

                  <li type="square">
                    Assistance à la définition de politique d'offre et de prix.
                  </li>
                  <li type="square">
                    Communication institutionnelle et événementielle (projet
                    d'entreprise, convention…).
                  </li>
                </ul>
              </div>
              <img src="assets/img/compétences/marketing.png" class="rounded float-right" style="width: 450px; height: 170px" alt="" />

            </div>
            <div class="tab-pane fade" id="Ressources-Humaines" role="tabpanel" aria-labelledby="list-settings-list">
              <div class="coool">
                <h3 class="margin-reset">Ressources humaines</h3>
                <br />
                <p>
                  La gestion des ressources humaines est une fonction clé au
                  cœur de l'organisation de l'entreprise.
                </p>
                Attachée et limitée auparavant à la gestion du personnel dans le
                sens administratif du terme, ce métier est en situation
                aujourd'hui d'apporter toute la valeur ajoutée qu'il est capable
                de générer et pour ce faire, <b>ABS COMPETENCES</b> vous suggère
                ces Compétencess :
                <p>
                  <br />
                </p>

                <ul style="text-align: left; margin-left: 10%">
                  <li type="square">
                    Réalisation des ingénieries de formation (annuelles,
                    pluriannuelles).
                  </li>
                  <li type="square">
                    Restructuration et gestion des ressources humaines.
                  </li>

                  <li type="square">Mise en place de systèmes d'évaluation.</li>
                  <li type="square">
                    Accompagnement dans la conduite de changement.
                  </li>
                </ul>
              </div>
              <img src="assets/img/compétences/production.jpg" class="rounded float-right" style="width: 450px; height: 170px" alt="" />

            </div>
            <div class="tab-pane fade" id="Achat-Approvisionnement" role="tabpanel" aria-labelledby="list-settings-list">
              <div class="coool">
                <h3 class="margin-reset">Achat & Approvisionnement</h3>
                <p>
                  Réduire les frais généraux et implémenter une politique
                  d'achats raisonnée, devraient être un objectif premier pour
                  tout bon chef d'entreprise qui se respecte.
                </p>
                <p>
                  Pour une excellente façon d'agir sur les coûts de votre
                  entreprise, <strong>ABS COMPETENCES</strong> met à votre
                  disposition les outils nécessaires à développer vos capacités
                  en :
                </p>
                <br />
                <ul style="text-align: left; margin-left: 10%">
                  <li type="square">
                    Management des achats, outils d'analyse des besoins et
                    réduction des coûts.
                  </li>
                  <li type="square">Perfectionnement de négociation.</li>

                  <li type="square">
                    Contrats d'achats et risques juridiques « Privée & Public ».
                  </li>
                  <li type="square">Achats internationaux.</li>
                </ul>
              </div>
              <img src="assets/img/compétences/achat.jpg" class="rounded float-right" style="width: 450px; height: 170px" alt="" />
            </div>
            <div class="tab-pane fade" id="Logistique" role="tabpanel" aria-labelledby="list-settings-list">
              <div class="coool">
                <h3 class="margin-reset">Logistique</h3>
                <br />
                <p>
                  La logistique est une phase clé dans l'excellence
                  opérationnelle, située en amont des processus principaux des
                  entreprises de production ou de distribution à travers
                  certaines activités d'approvisionnement et surtout en aval
                  pour la livraison des clients.
                </p>
                <p>
                  ABS COMPETENCES saura compléter vos équipes avec de véritables
                  talents en proposant des formations sur :
                </p>
                <br />
                <ul style="text-align: left; margin-left: 10%">
                  <li type="square">Supply chain.</li>
                  <li type="square">Diagnostic logistique.</li>

                  <li type="square">Livrer: Transports – Douanes.</li>
                  <li type="square">Gestion de stock.</li>
                  <li type="square">Gestion d'entrepôt.</li>
                </ul>
              </div>
              <img src="assets/img/compétences/logistique.jpg" class="rounded float-right" style="width: 450px; height: 170px" alt="" />
              
            </div>
            <div class="tab-pane fade" id="Production" role="tabpanel" aria-labelledby="list-settings-list">
              <div class="coool">
                <h3 class="margin-reset">Production</h3>
                <br />
                <p>
                  <strong>« La réussite d'une production repose sur l'attention
                    prêtée aux détails. » David O. Selznick</strong>
                </p>
                <p>
                  ABS COMPETENCES, ayant le souci du détail, intervient pour
                  vous offrir un service minutieux sur :
                </p>
                <br />
                <ul style="text-align: left; margin-left: 10%">
                  <li type="square">Mise en place d'un projet LEAN.</li>
                  <li type="square">
                    Gestion de la productivité en temps réel.
                  </li>

                  <li type="square">
                    Diagnostic industriel et feuille de route.
                  </li>
                  <li type="square">Gestion de la production.</li>
                  <li type="square">Techniques en conduite de projets.</li>
                </ul>
              </div>
              <img src="assets/img/compétences/production.jpg" class="rounded float-right" style="width: 450px; height: 170px" alt="" />

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  @endsection