@include('layouts.dashboard.header')
@include('layouts.dashboard.sidebar')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Usuários</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
          <li class="breadcrumb-item active">Utilizadores</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          @if(session()->has('user.status.update')) 
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <i class="bi bi-check-circle me-1"></i>
                {{session()->get('user.status.update')}}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> 
          @endif

          @if(session()->has('user.create')) 
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <i class="bi bi-check-circle me-1"></i>
                {{session()->get('user.create')}}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> 
          @endif

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Lista dos Utilizadores</h5>
             
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Genero</th>
                    <th scope="col">País</th>
                    <th scope="col">Nível</th>
                    <th scope="col">Estado</th>
                  </tr>
                </thead>
                <tbody>

                    @foreach (App\Models\User::all() as $user)
                        <tr>
                            <th scope="row">
                                <a href="/user/{{$user->id}}/edit/status">
                                    <button type="button" class="btn btn-sm btn-secondary"><i class="bi bi-pencil"></i></button>
                                </a>
                            </th>
                            <td> {{ $user->name }} </td>
                            <td> {{ $user->email }} </td>
                            <td> {{ Carbon\Carbon::parse($user->birthday)->diff(Carbon\Carbon::now())->y }} </td>
                            <td>
                                @if ($user->gender == 'M')
                                    Masculino
                                @else
                                    Feminino
                                @endif
                            </td>
                            <td> {{ $user->pais->designac }} </td>
                            <td> {{ $user->roles->designac }} </td>
                            <td>
                                
                                @if ($user->kultestad_id == 1)
                                    <span class="badge bg-success">
                                @elseif ($user->kultestad_id == 2)
                                    <span class="badge bg-warning">
                                @elseif ($user->kultestad_id == 3)
                                    <span class="badge bg-danger">
                                @else
                                    <span class="badge bg-secondary">
                                @endif 

                                {{ $user->estado->designac }}</span>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

</main><!-- End #main -->


@include('layouts.dashboard.footer')