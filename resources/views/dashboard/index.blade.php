@include('layouts.dashboard.header')
@include('layouts.dashboard.sidebar')

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-8">
        <div class="row">

          <!-- ADMIN -->
          @if (Auth::user()->role==4)
              <!-- Sales Card -->
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">

                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li class="dropdown-header text-start">
                        <h6>Filtro</h6>
                      </li>

                      <li><a class="dropdown-item" href="#">Diário</a></li>
                      <li><a class="dropdown-item" href="#">Mensal</a></li>
                      <li><a class="dropdown-item" href="#">Anual</a></li>
                    </ul>
                  </div>

                  <div class="card-body">
                    <h5 class="card-title">Assinantes <span>| Mensal</span></h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people"></i>
                      </div>
                      <div class="ps-3">
                        <h6>145</h6>
                        <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                      </div>
                    </div>
                  </div>

                </div>
              </div><!-- End Sales Card -->

              <!-- Revenue Card -->
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card revenue-card">

                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li class="dropdown-header text-start">
                        <h6>Filtro</h6>
                      </li>

                      <li><a class="dropdown-item" href="#">Diário</a></li>
                      <li><a class="dropdown-item" href="#">Mensal</a></li>
                      <li><a class="dropdown-item" href="#">Anual</a></li>
                    </ul>
                  </div>

                  <div class="card-body">
                    <h5 class="card-title">Colaboradores <span>| Mensal</span></h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people"></i>
                      </div>
                      <div class="ps-3">
                        <h6>264</h6>
                        <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                      </div>
                    </div>
                  </div>

                </div>
              </div><!-- End Revenue Card -->

              <!-- Customers Card -->
              <div class="col-xxl-4 col-xl-12">

                <div class="card info-card customers-card">

                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li class="dropdown-header text-start">
                        <h6>Filtro</h6>
                      </li>

                      <li><a class="dropdown-item" href="#">Diário</a></li>
                      <li><a class="dropdown-item" href="#">Mensal</a></li>
                      <li><a class="dropdown-item" href="#">Anual</a></li>
                    </ul>
                  </div>

                  <div class="card-body">
                    <h5 class="card-title">Anunciantes <span>| Mensal</span></h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people"></i>
                      </div>
                      <div class="ps-3">
                        <h6>44</h6>
                        <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                      </div>
                    </div>

                  </div>
                </div>

              </div><!-- End Customers Card -->

              <!-- Recent Sales -->
              <div class="col-12">
                <div class="card recent-sales overflow-auto">

                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                      </li>

                      <li><a class="dropdown-item" href="#">Diário</a></li>
                      <li><a class="dropdown-item" href="#">Mensal</a></li>
                      <li><a class="dropdown-item" href="#">Anual</a></li>
                    </ul>
                  </div>

                  <div class="card-body">
                    <h5 class="card-title">Peças Teatrais com mais visualizações <span>| Hoje</span></h5>

                    <table class="table table-borderless datatable">
                      <thead>
                        <tr>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Capa</th>
                            <th scope="col">Título</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Data de Lançamento</th>
                            <th scope="col">Duração</th>
                            <th scope="col">Restrição</th>
                            <th scope="col">Estado</th>
                          </tr>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach (App\Models\Teatro::orderBy('created_at', 'desc')->get() as $teatro)
                            <tr>
                                <th scope="row">

                                    <div class="dropdown">
                                        <a class="btn btn-secondary btn-sm" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                          <i class="bi bi-three-dots text-white"></i>
                                        </a>
                                      
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                          <li><a class="dropdown-item" href="/teatro/{{$teatro->id}}/view"> <i class="bi bi-eye-fill"></i> Consultar</a></li> 
                                          <li><a class="dropdown-item" href="/teatro/{{$teatro->id}}/edit"> <i class="bi bi-pencil-fill"></i> Editar</a></li>
                                          <!-- 
                                            <form method="POST" action="/teatro/{{-- $teatro->id --}}/destroy">
                                              {{--@csrf--}}
                                              <li><button type="submit" class="dropdown-item"> <i class="bi bi-backspace-fill"></i> Eliminar</button></li>
                                            </form> 
                                          -->
                                        </ul> 
                                    </div>
                                </th>
                                <td> 
                                  <img src="{{ asset('uploads/teatro/'.$teatro->imgThumb) }}" style="object-fit: cover;" width="60px" height="60px"/>
                                </td>
                                <td> {{ $teatro->titulo }} </td>
                                <td> {{ $teatro->categoria->designac }} </td>
                                <td> {{ $teatro->dataLanc }} </td>
                                <td> {{ $teatro->durac }} </td>
                                <td> {{ $teatro->restricao->designac }} </td>
                                <td>
                                  
                                  @if ($teatro->estado->id == 1)
                                    <span class="badge bg-success">
                                  @elseif ($teatro->estado->id == 2)
                                    <span class="badge bg-warning">
                                  @elseif ($teatro->estado->id == 3)
                                    <span class="badge bg-danger">
                                  @endif

                                  {{ $teatro->estado->designac }}</span>
                                  
                                </td>
                                
                            </tr>
                        @endforeach

                    </tbody>
                    </table>

                  </div>

                </div>
              </div><!-- End Recent Sales -->
          @endif

          <!-- COLAB -->
          @if (Auth::user()->role == 3)
          @endif

        </div>
      </div><!-- End Left side columns -->

      <!-- Right side columns -->
      <div class="col-lg-4">


        <!-- ADMIN -->
        @if (Auth::user()->role == 4)
            <!-- Website Traffic -->
            <div class="card">
              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Diário</a></li>
                  <li><a class="dropdown-item" href="#">Mensal</a></li>
                  <li><a class="dropdown-item" href="#">Anual</a></li>
                </ul>
              </div>

              <div class="card-body pb-0">
                <h5 class="card-title">Assinantes <span>| Mensal</span></h5>

                <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

                <script>
                  document.addEventListener("DOMContentLoaded", () => {
                    echarts.init(document.querySelector("#trafficChart")).setOption({
                      tooltip: {
                        trigger: 'item'
                      },
                      legend: {
                        top: '5%',
                        left: 'center'
                      },
                      series: [{
                        name: 'Access From',
                        type: 'pie',
                        radius: ['40%', '70%'],
                        avoidLabelOverlap: true,
                        label: {
                          show: false,
                          position: 'end'
                        },
                        emphasis: {
                          label: {
                            show: true,
                            fontSize: '18',
                            fontWeight: 'bold'
                          }
                        },
                        labelLine: {
                          show: true
                        },
                        data: [{
                            value: 1048,
                            name: 'Pacote Básico'
                          },
                          {
                            value: 735,
                            name: 'Pacote Familiar'
                          },
                          {
                            value: 580,
                            name: 'Pacote Familiar (x3)'
                          },
                        ]
                      }]
                    });
                  });
                </script>

              </div>
            </div><!-- End Website Traffic -->
        @endif

        <!-- COLAB -->
        @if (Auth::user()->role == 3)
            
        @endif

      </div><!-- End Right side columns -->

    </div>
  </section>

</main><!-- End #main -->

@include('layouts.dashboard.footer')