@include('layouts.frontend.header')   

    <!-- Banner -->
    <div class="iq-breadcrumb-one  iq-bg-over iq-over-dark-50" style="background-image: url({{ asset('assets/frontend/images/about-us/01.jpg') }});background-position: top; ">  
        <div class="container-fluid">  
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <nav aria-label="breadcrumb" class="text-center iq-breadcrumb-two">
                    </nav>
                </div>
            </div> 
        </div>
    </div>

    <!-- Main container -->  
    <main id="main">

      <div class="container-fluid py-5">
         <div class="row">
            <div class="col-sm-12 overflow-hidden">
               <div class="iq-main-header d-flex align-items-center justify-content-between">
                  
                  <div class="widget-container">
                     <p class="heading-title size-default">TEATRO</p>		
                  </div>


               </div>
               <div class="favorites-contens">
                  <ul class="favorites-slider list-inline  row p-0 mb-0 iq-rtl-direction">

                     @foreach (App\Models\Teatro::all() as $teatro)
                        <li class="slide-item">
                           <div class="block-images position-relative">
                              <div class="img-box">
                                 <img class="thumb" src="{{ asset('uploads/teatro/'.$teatro->imgThumb) }}"/>
                              </div>
                              <div class="block-description">
                                 <h4 class="iq-title"><a href="show-details.html">{{ $teatro->titulo }}</a></h4>
                                 <div class="movie-time d-flex align-items-center my-2">
                                    
                                       @if ( $teatro->restricao->sigla == "R")
                                       <div  class="badge badge-danger p-1 mr-2">
                                       @else
                                       <div  class="badge badge-info p-1 mr-2">
                                       @endif
                                       {{ $teatro->restricao->sigla }}
                                    </div>
                                    <span class="text-white">{{ $teatro->durac }}</span>
                                 </div>
                                 <div class="hover-buttons mb-1">
                                    <a href="/watch/{{ $teatro->id }}" role="button" class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                       Assistir
                                    </a>
                                 </div>
                                    <a href="url(www.google.com)" role="button" class="text-danger text-sm" aria-hidden="true">
                                       Ver Trailer
                                    </a>
                              </div>
                           </div>
                        </li>
                     @endforeach
                     
                  </ul>
               </div>
            </div>
         </div>
      </div>

     <div class="container-fluid pt-5 pb-1" style="background-color: #1d1d1e;">
      <div class="row">
         <div class="col-sm-12 overflow-hidden">
            <div class="iq-main-header d-flex align-items-center justify-content-between">
               
               <div class="widget-container">
                  <p class="heading-title size-default">FILME</p>		
               </div>


            </div>
            <div class="favorites-contens">
               <ul class="favorites-slider list-inline  row p-0 mb-0 iq-rtl-direction">
                  <li class="slide-item">
                        <div class="block-images position-relative">
                           <div class="img-box">
                              <img src="{{ asset('assets/frontend/images/upcoming/01.jpg') }}" class="img-fluid" alt="">
                           </div>
                           <div class="block-description">
                              <h6 class="iq-title"><a href="show-details.html">The Last Breath</a></h6>
                              <div class="movie-time d-flex align-items-center my-2">
                                 <div class="badge badge-secondary p-1 mr-2">5+</div>
                                 <span class="text-white">2h 30m</span>
                              </div>
                              <div class="hover-buttons">
                                 <a href="show-details.html" role="button" class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                    Play Now
                                 </a>
                              </div>
                           </div>
                        </div>
                  </li>
               </ul>
            </div>
         </div>
      </div>
     </div>

     <div class="container-fluid py-5">
      <div class="row">
         <div class="col-sm-12 overflow-hidden">
            <div class="iq-main-header d-flex align-items-center justify-content-between">
               
               <div class="widget-container">
                  <p class="heading-title size-default">OUTROS</p>		
               </div>

            </div>
            <div class="favorites-contens">
               <ul class="favorites-slider list-inline  row p-0 mb-0 iq-rtl-direction">
                  <li class="slide-item">
                        <div class="block-images position-relative">
                           <div class="img-box">
                              <img src="{{ asset('assets/frontend/images/upcoming/01.jpg') }}" class="img-fluid" alt="">
                           </div>
                           <div class="block-description">
                              <h6 class="iq-title"><a href="show-details.html">The Last Breath</a></h6>
                              <div class="movie-time d-flex align-items-center my-2">
                                 <div class="badge badge-secondary p-1 mr-2">5+</div>
                                 <span class="text-white">2h 30m</span>
                              </div>
                              <div class="hover-buttons">
                                 <a href="show-details.html" role="button" class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                    Play Now
                                 </a>
                              </div>
                           </div>
                        </div>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>

  </main>

@include('layouts.frontend.footer')   