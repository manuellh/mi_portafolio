@extends('layouts.template')
<!-------------------------------------------------------->
<!--Seccion Perfil-->
<!-------------------------------------------------------->
@section('foto')
    @foreach ($misdatos as $midato)
        <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="{{ $midato->img }}" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">{{ $midato->nombre }}</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">{{ $midato->estudios }}</p>
        </div>

    @endforeach
@endsection

<!-------------------------------------------------------->
<!--Seccion de about-->
<!-------------------------------------------------------->
@section('about')
        @foreach($misdatos as $midato)
            <div class="col-sm-12 ms-auto"><p class="lead text-secondary" style=”text-align: justify;”>{{ $midato->descripcion }}</p></div>
        @endforeach
@endsection

<!-------------------------------------------------------->
<!--Seccion de CV-->
<!-------------------------------------------------------->
@section('cv')
<button type="button" class="btn btn-xl btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#CVmodal">
  <i class="fas fa-download me-2"></i>
  Descargar CV
</button>

<!-- Portfolio Modal 1-->
<div class="portfolio-modal modal fade" id="CVmodal" tabindex="-1" aria-labelledby="CVmodal" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
            <div class="modal-body text-center pb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Descargar CV</h2>
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <div class="row">
                            <iframe src="https://drive.google.com/file/d/1w2LlS9u0Sl9Nf65zViRD11yucL7A2BQC/preview" width="1000" height="480" allow="autoplay"></iframe>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-------------------------------------------------------->
<!--Seccion de habilidades-->
<!-------------------------------------------------------->
@section('habilidades')
  @foreach($habilidades as $habilidad)
  <div class="col-sm-12 col-md-6 col-lg-4">
    <!--Circle progress bar-->
    <div class="container-progress-bar">
      <div class="box">
        <div class="chart text-white" data-percent="{{ $habilidad->nivel }}" ><i class="{{ $habilidad->imagen }}"></i></div>
        <h2 class="text-white">{{ $habilidad->habilidad}}</h2>
      </div>
    </div>
  </div>
  @endforeach
@endsection

<!-------------------------------------------------------->
<!--Seccion de Experiencia-->
<!-------------------------------------------------------->
@section('time-line')
  @foreach( $experiencia as $experiencia )

    <li>
      <div>
        <time class="fw-bold text-secondary text-uppercase"><h3>{{ $experiencia->fecha }}</h3></time>
        <span class="fw-bold text-secondary text-uppercase"><h5>{{ $experiencia->lugar }}</h5></span>
        <p class="text-secondary text-uppercase">{{ $experiencia->descripcion }}</p>
      </div>
    </li>

  @endforeach
@endsection

<!-------------------------------------------------------->
<!--Seccion de Portafolio-->
<!-------------------------------------------------------->
@section('portafolio')
  @foreach ($proyectos as $proyecto)

  <div class="col-md-6 col-lg-4 mb-5">
      <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1{{ $proyecto->id }}">
          <div class="portfolio-item-caption-ligth d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-secondary"><i class="fas fa-plus fa-3x"></i></div>
          </div>
          <img class="img-fluid" src="{{ $proyecto->imagen }}" alt="..." />
      </div>
  </div>

  <!-- Portfolio Modal 1-->
  <div class="portfolio-modal modal fade" id="portfolioModal1{{ $proyecto->id }}" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
      <div class="modal-dialog modal-xl">
          <div class="modal-content">
              <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
              <div class="modal-body text-center pb-5">
                  <div class="container">
                      <div class="row justify-content-center">
                          <div class="col-lg-8">
                              <!-- Portfolio Modal - Title-->
                              <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">{{ $proyecto->nombre }}</h2>
                              <!-- Icon Divider-->
                              <div class="divider-custom">
                                  <div class="divider-custom-line"></div>
                                  <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                  <div class="divider-custom-line"></div>
                              </div>
                              <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                  <!-- Portfolio Modal - Image-->
                                  <img class="img-fluid rounded mb-5" src="{{ $proyecto->imagen }}" alt="..." />
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6">
                                  <!-- Portfolio Modal - Text-->
                                  <p class="mb-4 text-uppercase text-secondary">{{ $proyecto->descripcion }}</p>
                                  <a href="{{ $proyecto->git }}" class="btn btn-primary text-uppercase">GIT</a>
                                  <a href="{{ $proyecto->url }}" class="btn btn-primary text-uppercase">URL</a>
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  @endforeach
@endsection

<!-------------------------------------------------------->
<!--Seccion de contacto-->
<!-------------------------------------------------------->
@section('contacto')
  @foreach($misdatos as $midato)
    <h2 class="page-section-heading text-center text-lowercase text-secondary mb-0"><i class="far fa-envelope"></i>{{ $midato->email }}</h2>
  @endforeach
@endsection
