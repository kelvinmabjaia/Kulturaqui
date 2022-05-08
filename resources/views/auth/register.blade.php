<!doctype html>
<html lang="pt">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Kulturaqui</title>

   <!-- Icon File -->
  <link href="{{ asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="{{ asset('assets/backend/css/bootstrap.min.css')}}">
   <!-- Typography CSS -->
   <link rel="stylesheet" href="{{ asset('assets/backend/css/typography.css')}}">
   <!-- Style CSS -->
   <link rel="stylesheet" href="{{ asset('assets/backend/css/style.css')}}">
</head>
<body>
   
   <section class="sign-in-page">

      <!-- Page Content  -->
      <div class="container pt-3">
         <div class="container-fluid pt-3">
            <div class="row">
               <div class="col-sm-12 col-lg-12">
                  <div class="iq-card sign-user_card">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h3 class="card-title text-capitalize"><img class="img-fluid logo" src="{{ asset('assets/logo.png') }}"/></h3>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <form method="POST" action="{{ route('user.register') }}" id="form-wizard1" class="text-center mt-4">

                           @csrf

                           <ul id="top-tab-list" class="p-0">
                              <li class="active" id="account">
                                 <a href="javascript:void();">
                                    <i class="fa fa-address-book"></i><span>Conta</span>
                                 </a>
                              </li>
                              <li id="personal">
                                 <a href="javascript:void();">
                                    <i class="fa fa-user"></i><span>Pessoal</span>
                                 </a>
                              </li>
                              <li id="payment">
                                 <a href="javascript:void();">
                                    <i class="fa fa-ticket"></i><span>Plano</span>
                                 </a>
                              </li>
                              <li id="confirm">
                                 <a href="javascript:void();">
                                    <i class="fa fa-credit-card"></i><span>Pagamento</span>
                                 </a>
                              </li>
                           </ul>
                           <!-- fieldsets -->
                           <fieldset>
                              <div class="form-card text-left">
                                 <div class="row">
                                    <div class="col-7">
                                       <h3 class="mb-4 text-capitalize">Informação da conta:</h3>
                                    </div>
                                    <div class="col-5">
                                       <h2 class="steps">Pág. 1 - 4</h2>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label>Email: *</label>
                                          <input type="email" class="form-control" name="email" placeholder="Email" />
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label>Senha: *</label>
                                          <input type="password" class="form-control" name="pwd" placeholder="Senha" />
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label>Confirmar Senha: *</label>
                                          <input type="password" class="form-control" name="cpwd" placeholder="Confirmar Senha" />
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <button type="button" name="next" class="btn btn-primary next action-button float-right" value="Next" >Próximo</button>
                           </fieldset>
                           <fieldset>
                              <div class="form-card text-left">
                                 <div class="row">
                                    <div class="col-7">
                                       <h3 class="mb-4 text-capitalize">Informação pessoal:</h3>
                                    </div>
                                    <div class="col-5">
                                       <h2 class="steps">Pág. 2 - 4</h2>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label>Nome Completo: *</label>
                                          <input type="text" class="form-control" name="name" placeholder="Nome Completo" />
                                       </div>
                                    </div>
                                    <div class="col-md-3">
                                       <div class="form-group">
                                          <label>Data Nascimento: *</label>
                                          <input type="date" class="form-control" name="dataNascimento"/>
                                       </div>
                                    </div>
                                    <div class="col-md-3">
                                       <div class="form-group">
                                          <label>Genero: *</label>
                                          <select class="form-control" id="genero" name="genero">
                                             <option disabled selected>Escolha...</option>
                                             <option value="M">Masculino</option>
                                             <option value="F">Feminino</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label>País de origem: *</label>
                                          <select class="form-control" id="pais" name="pais">

                                             <option disabled selected>Escolha...</option>

                                             {{-- Todos Países --}}
                                             {{ $paises = \App\Models\Pais::all() }}

                                             @foreach ($paises as $pais)
                                                <option value={{$pais->id}}>{{$pais->designac}}</option>
                                             @endforeach

                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label>Nr. Telefone: *</label>
                                          <input type="text" class="form-control" name="phno" placeholder="(+258) 8X XXX XXXX" />
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <button type="button" name="next" class="btn btn-primary next action-button float-right" value="Next" >Próximo</button>
                              <button type="button" name="previous" class="btn btn-dark previous action-button-previous float-right mr-3" value="Previous" >Anterior</button>
                           </fieldset>
                           <fieldset>
                              <div class="form-card text-left">

                                 <div class="row">
                                    <div class="col-7">
                                       <h3 class="mb-4">Plano de assinatura:</h3>
                                    </div>
                                    <div class="col-5">
                                       <h2 class="steps">Pág. 3 - 4</h2>
                                    </div>
                                 </div>

                                 <div class="form-group">
                                    <label>Pacote:</label>
                                    <select class="form-control" id="plano" name="plano">
                                       <option disabled selected>Escolha...</option>

                                       {{ $planos = App\Models\Plano::all(); }}

                                       @foreach ($planos as $plano)
                                          <option value={{$plano->id}}>{{$plano->designac}}</option>
                                       @endforeach
               
                                    </select>
                                    <div class="pt-3">
                                       <b><label id="detail_title"></label></b>
                                       <p id="detail_text"></p>
                                       <h3 class="text-right py-3" id="detail_price"></h3>
                                    </div>
                                 </div>

                              </div>
                              <button type="button" name="next" class="btn btn-primary next action-button float-right" value="Next" >Próximo</button>
                              <button type="button" name="previous" class="btn btn-dark previous action-button-previous float-right mr-3" value="Previous" >Anterior</button>
                           </fieldset>

                           <fieldset>
                              <div class="form-card text-left">

                                 <div class="row">
                                    <div class="col-7">
                                       <h3 class="mb-4">Método de Pagamento:</h3>
                                    </div>
                                    <div class="col-5">
                                       <h2 class="steps">Pág. 4 - 4</h2>
                                    </div>
                                 </div>

                                 <div class="form-group">
                                    <label>Selecione um método:</label>
                                    <div class="form-group">
                                       <div class="custom-control custom-radio custom-control-inline">
                                          <input type="radio" id="customRadio6" name="payMethod" value="M" class="custom-control-input">
                                          <label class="custom-control-label" for="customRadio6"> Mpesa</label>
                                       </div>
                                       <div class="custom-control custom-radio custom-control-inline">
                                          <input type="radio" id="customRadio7" name="payMethod" value="C" class="custom-control-input">
                                          <label class="custom-control-label" for="customRadio7"> Conta Movel</label>
                                       </div>
                                    </div>

                                    <div class="col-md-12">
                                       <div class="form-group">
                                          <label>Número da conta: *</label>
                                          <input type="text" class="form-control" name="nrConta" placeholder="Número da conta" />
                                       </div>
                                    </div>

                                    <div class="pt-3">
                                       <h3 class="text-right py-3" id="detail_priceX"></h3>
                                    </div>

                                 </div>


                              </div>
                              <button type="submit" name="next" class="btn btn-primary next action-button float-right" value="Submit" >Criar</button>
                              <button type="button" name="previous" class="btn btn-dark previous action-button-previous float-right mr-3" value="Previous" >Anterior</button>
                           </fieldset>
                           
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

   </section>
   
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset('assets/backend/js/jquery.min.js')}}"></script>
<script src="{{ asset('assets/backend/js/popper.min.js')}}"></script>
<script src="{{ asset('assets/backend/js/bootstrap.min.js')}}"></script>
<!-- Appear JavaScript -->
<script src="{{ asset('assets/backend/js/jquery.appear.js')}}"></script>
<!-- Countdown JavaScript -->
<script src="{{ asset('assets/backend/js/countdown.min.js')}}"></script>
<!-- Counterup JavaScript -->
<script src="{{ asset('assets/backend/js/waypoints.min.js')}}"></script>
<script src="{{ asset('assets/backend/js/jquery.counterup.min.js')}}"></script>
<!-- Wow JavaScript -->
<script src="{{ asset('assets/backend/js/wow.min.js')}}"></script>
<!-- Slick JavaScript -->
<script src="{{ asset('assets/backend/js/slick.min.js')}}"></script>
<!-- Owl Carousel JavaScript -->
<script src="{{ asset('assets/backend/js/owl.carousel.min.js')}}"></script>
<!-- Magnific Popup JavaScript -->
<script src="{{ asset('assets/backend/js/jquery.magnific-popup.min.js')}}"></script>
<!-- Smooth Scrollbar JavaScript -->
<script src="{{ asset('assets/backend/js/smooth-scrollbar.js')}}"></script>
<!-- Chart Custom JavaScript -->
<script src="{{ asset('assets/backend/js/chart-custom.js')}}"></script>
<!-- Custom JavaScript -->
<script src="{{ asset('assets/backend/js/custom.js')}}"></script>

{{-- Plano --}}
<script>
   $(document).ready(function(){
 
     $(document).on('change', '#plano', function(){
         var id=$(this).val();

         var title = document.getElementById('detail_title');
         var price = document.getElementById('detail_price');
         var priceX = document.getElementById('detail_priceX');
         var text = document.getElementById('detail_text');

         if(id == 1){
            title.textContent = 'Detalhes do Plano Básico:';
            priceX.textContent = price.textContent = 'Preço: 300MT';
            text.textContent = "Maecenas nunc lectus, laoreet in molestie eget, mollis nec nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. " +
               "Nam eget tincidunt lectus, in volutpat urna. Quisque orci lacus, sagittis id nisl dictum, pharetra congue metus.";
         } else if (id == 2) {
            title.textContent = 'Detalhes do Plano Familiar:';
            priceX.textContent = price.textContent = 'Preço: 900MT';
            text.textContent = "Nam eget tincidunt lectus, in volutpat urna. Quisque orci lacus, sagittis id nisl dictum, pharetra congue metus. " +
               "Pellentesque ut aliquam augue, vel volutpat leo. Donec molestie faucibus consectetur. Maecenas nunc lectus, laoreet in molestie eget, mollis nec nunc.";
         } else if (id == 3) {
            title.textContent = 'Detalhes do Plano Familiar x3:';
            priceX.textContent = price.textContent = 'Preço: 2500MT';
            text.textContent = "Donec mollis sapien vel scelerisque molestie. Duis sem lectus, laoreet in tristique id, auctor in ligula. Sed hendrerit porta eleifend. " +
               "Proin luctus ante eu est rutrum aliquam. Quisque diam nibh, faucibus sed orci a, imperdiet pharetra arcu." +
               "Sed vitae lorem augue. Maecenas quis dignissim velit. Nunc nunc lacus, interdum in quam vel, suscipit posuere odio.";
         }
     });
 
   });
</script>

</body>

</html>