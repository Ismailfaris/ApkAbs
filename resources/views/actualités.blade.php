@extends('layouts/layout')

@section('content')


<main id="main">
  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Actualités</h2>
        <ol>
          <li><a href="/index">Accueil</a></li>
          <li>Actualités</li>
        </ol>
      </div>
    </div>

  </section><!-- End Breadcrumbs -->

  <!-- ======= Blog Section ======= -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row">

        <div class="col-lg-12 entries">

          <article class="entry">
            @foreach($actualites as $actualite)
            <br><br>
            <div class="entry-img">
              <img style="width: -webkit-fill-available;" src="{{ asset('storage/'.$actualite->image) }}" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
              <a href="/blog-single/{{$actualite['id'] }}">{{ $actualite['titre'] }}</a>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="/blog-single"><time datetime="{{2020-01-01}}">{{$actualite['created_at']}}</time></a></li>
              </ul>
            </div>

            <div class="entry-content">
              <p>
              {{ $actualite['description'] }}...
              </p>
              
              <div class="read-more">
                <a href="{{ '/News-details/'.$actualite['id'] }}">Voir plus</a>
              </div>
              <br>
            </div>
            @endforeach
          </article><!-- End blog entry -->
          
          <div class="blog-pagination">
            <ul class="justify-content-center">
              <li class="active"><a href="#">1</a></li>
              <li ><a href="#">2</a></li>
              <li><a href="#">3</a></li>
            </ul>
          </div>

        </div><!-- End blog entries list -->



      </div>

    </div>
  </section><!-- End Blog Section -->

</main><!-- End #main -->

@endsection