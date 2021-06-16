@extends('layouts/layout')

@section('content')


<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Single-Blog</h2>
                <ol>
                    <li><a href="#">Accueil</a></li>
                    <li>Single-Blog</li>
                </ol>
            </div>
        </div>

    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-12 entries">

                    <article class="entry entry-single">

                        <div class="entry-img">
                            <img src="{{ asset('storage/'.$actualite->image) }}" alt="" class="img-fluid">
                        </div>

                        <h2 class="entry-title">
                            <a href="#" onclick="window.location.reload(true);">{{ $actualite['titre'] }}</a>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{ $actualite['created_at'] }}</time></a></li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            <p>
                                {{ $actualite['description'] }}
                            </p>



                        </div>
                    </article><!-- End blog entry -->



                </div><!-- End blog entries list -->



            </div>

        </div>
    </section><!-- End Blog Single Section -->

</main><!-- End #main -->

@endsection