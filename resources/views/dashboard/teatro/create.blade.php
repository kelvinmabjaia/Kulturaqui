@include('layouts.dashboard.header')
@include('layouts.dashboard.sidebar')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Adicionar Uma Peça Teatral</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Adicionar Teatro</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">

                <h5 class="card-title">Adicionar Teatro</h5>

                <!-- Form Elements -->
                <form method="POST" action="{{route('teatro.store')}}">

                  @csrf

                  <div class="row mb-3">

                    {{-- Outros Campos --}}
                    <div class="col-8">

                        {{-- Título, Categoria --}}
                        <div class="row mb-3">

                            {{-- Título --}}
                            <div class="col-7">
                                <label class="form-label">Título</label>
                                <input type="text" class="form-control" name="titulo">
                            </div>
    
                            {{-- Categoria --}}
                            <div class="col-5">
                                <label class="form-label">Categoria</label>
                                <select class="form-select" name="categoria" name="categ">
                                    <option selected disabled>Escolha...</option>
    
                                    @foreach (App\Models\Categoria::all() as $categ)
                                        <option value={{ $categ->id }}>{{ $categ->designac }}</option>
                                    @endforeach
                                    
                                </select>
                            </div>

                        </div>

                        {{-- Datas, Rate --}}
                        <div class="row mb-3">

                            {{-- Data Lançamento --}}
                            <div class="col-4">
                                <label class="form-label">Data de Lançamento</label>
                                <input type="date" class="form-control" name="dataLanc">
                            </div>

                            {{-- Duração da Peça --}}
                            <div class="col-4">
                                <label class="form-label">Duração da Peça</label>
                                <input type="text" class="form-control" name="durac">
                            </div>

                            {{-- Data Lançamento --}}
                            <div class="col-4">
                                <label class="form-label">Restrição de Idade</label>
                                <select class="form-control" name="restri">
                                    @foreach (App\Models\Restricao::all() as $restri)
                                        <option value={{ $restri->id }}>{{ $restri->designac }} ({{ $restri->sigla }})</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>

                        {{-- Links --}}
                        <div class="row mb-3">

                            {{-- Link Teatro --}}
                            <div class="col-6">
                                <label class="form-label">Link da Peça</label>
                                <input type="text" class="form-control" name="link">
                            </div>

                            {{-- Link Teatro --}}
                            <div class="col-6">
                                <label class="form-label">Link do trailer</label>
                                <input type="text" class="form-control" name="link_alt">
                            </div>

                        </div>

                    </div>

                    {{-- Descrição --}}
                    <div class="col-4">
                        <label class="form-label">Descrição</label>
                        <textarea class="form-control" name="descri" cols="30" rows="8"></textarea>
                    </div>

                  </div>

                  <hr>

                  <div class="row mb-3">
                    
                    <div class="row">
                        <div class="col-12 mb-3">
                            <div class="row">
                                <label for="inputNumber" class="col-sm-1 col-form-label">Capa</label>
                                <div class="col-sm-11">
                                    <input class="form-control" type="file" name="thumb">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">

                        <div class="col-6">
                            <div class="row">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Imagem 1</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" name="img[]">
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="row">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Imagem 2</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" name="img[]">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row mb-3">

                        <div class="col-6">
                            <div class="row">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Imagem 3</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" name="img[]">
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="row">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Imagem 4</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" name="img[]">
                                </div>
                            </div>
                        </div>

                    </div>

                  </div>

                  <div class="col-sm-6">
                    <button type="submit" class="btn btn-primary">Adicionar</button>
                    <a href="{{route('teatro.index')}}" class="btn btn-secondary">Voltar</a>
                  </div>

                </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

@include('layouts.dashboard.footer')