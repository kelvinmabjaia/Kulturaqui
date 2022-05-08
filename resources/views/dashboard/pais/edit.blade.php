@include('layouts.dashboard.header')
@include('layouts.dashboard.sidebar')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Editar País</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Editar País</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">

                <h5 class="card-title">Adicionar País</h5>

                <!-- Form Elements -->
                <form method="POST" action="/pais/{{ $pais->id }}">

                  @csrf

                  <div class="row mb-3">

                    {{-- Sigla --}}
                    <div class="col-3">
                      <label class="form-label">Sigla</label>
                      <input type="text" class="form-control" name="sigla" value="{{ $pais->sigla }}">
                    </div>

                    {{-- Genero --}}
                    <div class="col-9">
                        <label class="form-label">País</label>
                        <input type="text" class="form-control" name="pais" value="{{ $pais->designac }}">
                    </div>

                  </div>

                  <div class="col-sm-6">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <a href="{{route('pais.index')}}" class="btn btn-secondary">Voltar</a>
                  </div>

                </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

@include('layouts.dashboard.footer')