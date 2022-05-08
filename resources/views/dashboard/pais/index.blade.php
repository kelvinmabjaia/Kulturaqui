@include('layouts.dashboard.header')
@include('layouts.dashboard.sidebar')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>País</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
          <li class="breadcrumb-item active">Países</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
            
            @if(session()->has('pais.create')) 
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                    {{session()->get('pais.create')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            @endif

            @if(session()->has('pais.update')) 
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                    {{session()->get('pais.update')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            @endif

            @if(session()->has('pais.delete')) 
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                    {{session()->get('pais.delete')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            @endif

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Lista dos Países</h5>
             
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Sigla</th>
                    <th scope="col">País</th>
                  </tr>
                </thead>
                <tbody>

                    @foreach (App\Models\Pais::all() as $pais)
                        <tr>
                            <th scope="row">

                                <div class="dropdown">
                                    <a class="btn btn-secondary btn-sm" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                      <i class="bi bi-three-dots text-white"></i>
                                    </a>
                                  
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                      <li><a class="dropdown-item" href="/pais/{{ $pais->id }}/view"> <i class="bi bi-eye-fill"></i> Consultar</a></li>
                                      <li><a class="dropdown-item" href="/pais/{{ $pais->id }}/edit"> <i class="bi bi-pencil-fill"></i> Editar</a></li>
        
                                      <form method="POST" action="/pais/{{ $pais->id }}/destroy">
                                        @csrf
                                        <li><button type="submit" class="dropdown-item"> <i class="bi bi-backspace-fill"></i> Eliminar</button></li>
                                      </form>
                                    </ul>
                                </div>
                            </th>
                            <td> {{ $pais->sigla }} </td>
                            <td> {{ $pais->designac }} </td>
                        </tr>
                    @endforeach

                </tbody>
              </table>
              <!-- End Table with stripped rows -->

              <a href="{{ route('pais.create') }}" type="button" class="btn btn-outline-primary"><i class="bi bi-plus me-1"></i> Adicionar</a>

            </div>
          </div>

        </div>
      </div>
    </section>

</main><!-- End #main -->


@include('layouts.dashboard.footer')