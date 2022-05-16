@include('layouts.frontend.header')   

   <!-- Banner Start -->
   <div class="video-container iq-main-slider">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/rCdhdAdd5P0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
   </div>
   <!-- Banner End -->
   <!-- MainContent -->
   <div class="main-content">
      <section class="movie-detail container-fluid">
         <div class="row">
            <div class="col-lg-12">
               <div class="trending-info season-info g-border">
                  <h1 class="trending-text big-title text-uppercase mt-0 mb-1">{{ $teatro->titulo }}</h1>
                     
                     <div class="text-white px-3 mb-2">
                        <div class="row mb-2">
                           <span>Data de Lançamento: {{ $teatro->dataLanc }}</span>
                        </div>
                        <div class="row">
                           <span>Duração: {{ $teatro->durac }}</span>
                        </div>
                     </div>

                     <div class="d-flex align-items-center text-white text-detail episode-name mb-2">
                        <h6 class="text-uppercase text-muted">{{ $teatro->categoria->designac }}</h6>
                        <span class="trending-year">
                           @if ($teatro->restricao->sigla == "R")
                              <span class="badge bg-danger">{{ $teatro->restricao->sigla }}</span>
                           @else
                              <span class="badge bg-success">{{ $teatro->restricao->sigla }}</span>
                           @endif
                        </span>
                     </div>
                     
                  <p class="my-0 py-0 text-muted">Descrição:</p>
                  <p class="trending-dec w-100 mb-0">{{ $teatro->descrica }}</p>
                  <ul class="list-inline p-0 mt-4 share-icons music-play-lists">
                     <li><span><i class="ri-add-line"></i></span></li>
                     <li><span><i class="ri-heart-fill"></i></span></li>
                  </ul>
               </div>
            </div>
         </div>
      </section>
      <section id="iq-favorites">
         <div class="container-fluid">
            <div class="block-space">
               <div class="row">
                  <div class="col-sm-12 overflow-hidden">
                     <div class="iq-main-header d-flex align-items-center justify-content-between">
                        <h4 class="main-title">Imagens</h4>
                     </div>
                  </div>
               </div>
               <div class="row">

                  <div class="col-1-5 col-md-6 iq-mb-30">

                     <div class="epi-box">
                        <div class="epi-img position-relative">
                           <img src="{{ asset('uploads/teatro/'.$teatro->imgThumb) }}" class="thumb img-zoom">
                        </div>
                     </div>

                  </div>

                  @foreach ($teatro->imagens as $imagem)
                     <div class="col-1-5 col-md-6 iq-mb-30">

                        <div class="epi-box">
                           <div class="epi-img position-relative">
                              <img src="{{ asset('uploads/teatro/'.$imagem->src) }}" class="thumb img-zoom">
                           </div>
                        </div>

                     </div>
                  @endforeach

               </div>
            </div>
         </div>
      </section>
   </div>

@include('layouts.frontend.footer')   