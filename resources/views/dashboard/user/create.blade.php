@include('layouts.dashboard.header')
@include('layouts.dashboard.sidebar')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Adicionar do Utilizador</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
          <li class="breadcrumb-item active">Utilizador</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">

                <h5 class="card-title">Adicionar Utilizador</h5>

                <!-- Form Elements -->
                <form method="POST" action="{{route('user.store')}}">

                  @csrf

                  {{-- Nome, Genero, Data, Pais --}}
                  <div class="row mb-3">

                    {{-- Nome --}}
                    <div class="col-3">
                      <label class="form-label">Nome</label>
                      <input type="text" class="form-control" name="nome">
                    </div>

                    {{-- Genero --}}
                    <div class="col-3">
                        <label class="form-label">Genero</label>
                        <select class="form-select" name="genero">

                          <option selected disabled>Escolha...</option>

                          <option value="M">Masculino</option>
                          <option value="F">Feminino</option>
                      </select>
                    </div>

                    {{-- Data --}}
                    <div class="col-3">
                      <label class="form-label">Data Nascimento</label>
                      <input type="date" class="form-control" name="dataNascimento">
                    </div>

                    {{-- Pais --}}
                    <div class="col-3">
                        <label class="form-label">País</label>
                        <select class="form-select" name="pais">

                          <option selected disabled>Escolha...</option>

                          @foreach (App\Models\Pais::all() as $pais)
                            <option value="{{ $pais->id }}">{{ $pais->designac }}</option>
                          @endforeach
                      </select>
                    </div>

                  </div>

                  {{-- Email, Password, Phone --}}
                  <div class="row mb-3">

                    {{-- Email --}}
                    <div class="col-4">
                      <label class="form-label">Email</label>
                      <input type="email" class="form-control" name="email">
                    </div>

                    {{-- Password --}}
                    <div class="col-4">
                      <label class="form-label">Senha</label>
                      <input type="password" class="form-control" name="psw">
                    </div>

                    {{-- Phone --}}
                    <div class="col-4">
                      <label class="form-label">Telefone</label>
                      <input type="text" class="form-control" name="phno">
                    </div>

                  </div>

                  {{-- Nível, Estado --}}
                  <div class="row mb-3">

                    {{-- Nível --}}
                    <div class="col-6">
                        <label class="form-label">Nível</label>
                        <select class="form-select" name="nivel">

                          <option selected disabled>Escolha...</option>

                          @foreach (App\Models\Role::all() as $role)
                            @if ($role->id > 1)
                              <option value="{{ $role->id }}">{{ $role->designac }}</option>
                            @endif
                          @endforeach
                      </select>
                    </div>

                    {{-- Estado --}}
                    <div class="col-6">
                      <label class="form-label">Estado</label>
                      <select class="form-select" name="estado">

                        <option selected disabled>Escolha...</option>

                        @foreach (App\Models\Estado::all() as $status)
                            <option value="{{ $status->id }}">{{ $status->designac }}</option>
                        @endforeach
                    </select>
                  </div>

                  </div>

                  <div class="col-sm-6">
                    <button type="submit" class="btn btn-primary">Adicionar</button>
                    <a href="{{route('user.index')}}" class="btn btn-secondary">Voltar</a>
                  </div>

                </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

@include('layouts.dashboard.footer')