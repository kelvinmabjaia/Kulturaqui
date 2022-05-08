@include('layouts.dashboard.header')
@include('layouts.dashboard.sidebar')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Estado do Utilizador</h1>
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

                <h5 class="card-title">Alterar Estado do Utilizador</h5>

                <!-- Form Elements -->
                <form method="POST" action="/user/{{ $user->id }}/status">

                    @csrf

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Estado</label>
                        <div class="col-sm-4">
                            <select class="form-select" aria-label="Default select example" name="user_estado">

                                {{ $estado = App\Models\Estado::where('id', $user->kultestad_id)->first() }}

                                <option selected value="{{$estado->id}}">{{$estado->designac}}</option>

                                @foreach (App\Models\Estado::all() as $estado)
                                    <option value="{{$estado->id}}">{{$estado->designac}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </div>

                    </div>

                </form><!-- End General Form Elements -->

                <hr>

                <div class="row mb-3">

                    {{-- Nome --}}
                    <div class="col-6">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control" value="{{ $user->name }}" disabled>
                    </div>

                    {{-- Genero --}}
                    <div class="col-6">
                        <label class="form-label">Genero</label>
                        <input type="text" class="form-control" 
                            @if ($user->gender == 'M')
                                value="Masculino" 
                            @else 
                                value="Feminino" 
                            @endif
                        disabled>
                    </div>

                </div>

                <div class="row mb-3">

                    {{-- Email --}}
                    <div class="col-6">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" value="{{ $user->email }}" disabled>
                    </div>
    
                    {{-- Phone --}}
                    <div class="col-6">
                        <label class="form-label">Telefone</label>
                        <input type="text" class="form-control" value="{{ $user->phone }}" disabled>
                    </div>

                </div>

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

@include('layouts.dashboard.footer')