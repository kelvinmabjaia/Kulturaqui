@include('layouts.dashboard.header')
@include('layouts.dashboard.sidebar')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Teatro</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
          <li class="breadcrumb-item active">Teatro</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
            
            @if(session()->has('teatro.create')) 
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                    {{session()->get('teatro.create')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            @endif

            @if(session()->has('teatro.update')) 
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                    {{session()->get('teatro.update')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            @endif

            @if(session()->has('teatro.delete')) 
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                    {{session()->get('teatro.delete')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div> 
            @endif

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Lista das Peças Teatrais</h5>
             
              <!-- Table with stripped rows -->
              <table class="table datatable table-img">
                <thead>
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
                              <img src="{{ asset('uploads/capa/'.$teatro->imgThumb) }}" style="object-fit: cover;" width="60px" height="60px"/>
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
              <!-- End Table with stripped rows -->

              @if (Auth::user()->role == 3)
                <a href="{{ route('teatro.create') }}" type="button" class="btn btn-outline-primary"><i class="bi bi-plus me-1"></i> Adicionar</a>
              @endif

            </div>
          </div>

        </div>
      </div>
    </section>

</main><!-- End #main -->


@include('layouts.dashboard.footer')