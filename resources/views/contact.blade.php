@extends('layouts/layout')

@section('content')

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Contact</h2>
        <ol>
          <li><a href="/index">Accueil</a></li>
          <li>Contact</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col col-lg-5">
          <h3>Informations</h3><br>
          <p><strong>ABS COMPETENCES</strong> est un cabinet de conseil et de formation spécialisé en Management - Finance - Organisation et Qualité...<br />Nous conseillons et accompagnons nos clients dans la mise en oeuvre de bonnes pratiques et les assistons dans la réalisation de leurs projets.</p><br />
        </div>
        <div class="col-md-auto vr">
        </div>
        <div class="col col-lg-5">
          <h3>Heures d'ouverture</h3><br>
          <ul>
            <li class="tt">Lundi - Vendredi&nbsp; :&nbsp;&nbsp;8h-12h / 14h-18h </li>
            <li class="uls">Samedi&nbsp; :&nbsp;&nbsp;8h-12h</li>
            <li class="tt">Dimanche &nbsp;:&nbsp;&nbsp;Repos</li>
          </ul>
        </div>
      </div>


      <div class="row mt-5">

        <div class="col-lg-4">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Renseignements Généraux:</h4>
              <p>Adresse : 39, rue de Lille -N°4 Emile Zola Belvédère 20300 Casablanca Maroc</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>contact@abscompetences.com</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Numéro de Téléphone &amp; Fax:</h4><br>
              <p>Tél1 : +212 522 30 52 36</p> <br>
              <p>Tél2 : +212 522 31 14 42</p><br>
              <p>Fax : +212 522 30 22 13</p><br>

            </div>

          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">


          <!-- Success Description -->
          @if(Session::has('success'))
          <div class="alert alert-success">
            {{Session::get('success')}}
          </div>
          @endif

          <form action="" method="post" action="{{ route('contact.store') }}">

            @csrf
            <div class="row">
              <div class="col-md-6 form-group">
                <label>Nom complet</label>
                <input type="text" class="form-control {{ $errors->has('nom_complet') ? 'error' : '' }}" name="nom_complet" id="nom_complet">

                <!-- Error -->
                @if ($errors->has('nom_complet'))
                <div class="error">
                  {{ $errors->first('nom_complet') }}
                </div>
                @endif
              </div>

              <div class="col-md-6 form-group mt-3 mt-md-0">
                <label>Email</label>
                <input type="Email" class="form-control {{ $errors->has('Email') ? 'error' : '' }}" name="Email" id="Email">

                @if ($errors->has('Email'))
                <div class="error">
                  {{ $errors->first('Email') }}
                </div>
                @endif
              </div>
            </div>
            <div class="form-group mt-3">
              <label>Tel</label>
              <input type="text" class="form-control {{ $errors->has('Tel') ? 'error' : '' }}" name="Tel" id="Tel">

              @if ($errors->has('Tel'))
              <div class="error">
                {{ $errors->first('Tel') }}
              </div>
              @endif
            </div>

            <div class="form-group mt-3">
              <p>Type de candidature:</p>
              <input class=" {{ $errors->has('Type_candidature') ? 'error' : '' }}" value="Particulier" type="radio" name="Type_candidature" id="Particulier">
              <label for="Particulier">Particulier</label>

              <input style="margin-left: 10%;" class=" {{ $errors->has('Type_candidature') ? 'error' : '' }}" value="Professionnel" type="radio" name="Type_candidature" id="Professionnel">
              <label for="Professionnel">Professionnel</label>

              @if ($errors->has('Type'))
              <div class="error">
                {{ $errors->first('Type') }}
              </div>
              @endif

              <div class="form-group">
                <label>Description</label>
                <textarea class="form-control {{ $errors->has('Description') ? 'error' : '' }}" name="Description" id="Description" rows="4"></textarea>

                @if ($errors->has('Description'))
                <div class="error">
                  {{ $errors->first('Description') }}
                </div>
                @endif
              </div>
              <br>
              <input type="submit" name="send" value="Submit" class="btn btn-danger btn-block"> <br><br>
          </form>

        </div>


      </div>
      <div>
        <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3323.5534017079112!2d-7.601058999999999!3d33.590942999999996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzPCsDM1JzI3LjQiTiA3wrAzNicwMy44Ilc!5e0!3m2!1sfr!2sfr!4v1418313631610" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->


@endsection