<div>
@include('livewire.navbar')
@include('livewire.berita')
<div class="banner-carousel banner-carousel-1 mb-0">
  @foreach ($programs as $program)
  <div class="banner-carousel-item" style="background-image:url({{ asset('template/images/slider-main/'.$program->image)}}">
    <div class="slider-content">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12 text-center">
                <h2 class="slide-sub-title" data-animation-in="slideInRight">{{ $program->judul_program}}</h2>
               
              </div>
          </div>
        </div>
    </div>
  </div>
  @endforeach
</div>
   

<section class="call-to-action-box no-padding">
  <div class="container">
    <div class="action-style-box">
        <div class="row align-items-center">
          <div class="col-md-8 text-center text-md-left">
              <div class="call-to-action-text">
                <h3 class="action-title">Bantuan Mu Sangat Dibutuhkan Oleh Mereka</h3>
              </div>
          </div><!-- Col end -->
          <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
              <div class="call-to-action-btn">
                <a class="btn btn-dark" href="#">Donasi</a>
              </div>
          </div><!-- col end -->
        </div><!-- row end -->
    </div><!-- Action style box -->
  </div><!-- Container end -->
</section><!-- Action end -->
<section id="ts-service-area" class="ts-service-area pb-0">
  <div class="container">
    <div class="row text-center">
        <div class="col-12">
          <h2 class="section-title">Kami Juga Memiliki Layanan</h2>
          <h3 class="section-sub-title">Coba Layanan Kami</h3>
        </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
        <div class="col-lg-4">
          @for ($lay = 0; $lay < 2; $lay++)
          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="{{ asset('template/images/icon-image/'.$layanans[$lay]->logo)}}" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="">{{ $layanans[$lay]->judul_layanan }}</a></h3>
                <p>{{ $layanans[$lay]->deskripsi }}</p>
              </div>
          </div><!-- Service 1 end -->
          @endfor

        </div><!-- Col end -->

        <div class="col-lg-4 text-center">
          <img loading="lazy" class="img-fluid" src="{{ asset('template/images/services/consult.png')}}" alt="service-avater-image">
        </div><!-- Col end -->

        <div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">
          @for ($lay2 = 2; $lay2 < 4; $lay2++)
          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="{{ asset('template/images/icon-image/'.$layanans[$lay2]->logo)}}" alt="service-icon">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="/{{ $layanans[$lay2]->link }}">{{$layanans[$lay2]->judul_layanan}}</a></h3>
                <p>{{ $layanans[$lay2]->deskripsi }}</p>
              </div>
          </div><!-- Service 4 end -->
          @endfor
        </div><!-- Col end -->
    </div><!-- Content row end -->

  </div>
  <!--/ Container end -->
</section><!-- Service end -->

<section id="project-area" class="project-area solid-bg">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-12">
        <h2 class="section-title">Galeri</h2>
        <h3 class="section-sub-title">Yayasan Peduli</h3>
      </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
      <div class="col-12">
        <div class="shuffle-btn-group">
          <label class="active" for="all">
            <input type="radio" name="shuffle-filter" id="all" value="all" checked="checked">Semua Galeri
          </label>
          <label for="commercial">
            <input type="radio" name="shuffle-filter" id="commercial" value="yatim&dhuafa">Yatim & Dhuafa
          </label>
          <label for="education">
            <input type="radio" name="shuffle-filter" id="education" value="pendidikan">Pendidikan 
          </label>
          <label for="government">
            <input type="radio" name="shuffle-filter" id="government" value="kesehatan">Kesehatan
          </label>
          <label for="infrastructure">
            <input type="radio" name="shuffle-filter" id="infrastructure" value="ekonomi">Ekonomi
          </label>
          <label for="residential">
            <input type="radio" name="shuffle-filter" id="residential" value="dakwah">Dakwah
          </label>
          <label for="healthcare">
            <input type="radio" name="shuffle-filter" id="healthcare" value="kemanusiaan">Kemanusiaan
          </label>
        </div><!-- project filter end -->

     
        <div class="row shuffle-wrapper">
          @for ($gal = 0; $gal < 6; $gal++)
          <div class="col-1 shuffle-sizer"></div>
          <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;{{ $galleries[$gal]->kategori }}&quot;]">
            <div class="project-img-container"> 
              <a class="gallery-popup" href="{{ asset('template/images/projects/'.$galleries[$gal]->image)}}" aria-label="project-img" width="750" height="600">
                <img class="img-fluid" src="{{ asset('template/images/projects/'.$galleries[$gal]->image)}}" alt="project-img" width="750" height="1000">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                      <a href="projects-single.html">{{ $galleries[$gal]->judul_gallery }}</a>
                  </h3>
                  <p class="project-cat">{{$galleries[$gal]->kategori}}</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 1 end -->
          @endfor
        </div><!-- shuffle end -->
    
      </div>

      <div class="col-12">
        <div class="general-btn text-center">
          <a class="btn btn-primary" href="projects.html">Lihat Semua Galeri</a>
        </div>
      </div>

    </div><!-- Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Project area end -->

<section class="subscribe no-padding">
  <div class="container">
    <div class="row">
        <div class="col-md-4">
          <div class="subscribe-call-to-acton">
              <h3>Pusat Bantuan</h3>
              <h4>(+62) 85363723827</h4>
          </div>
        </div><!-- Col end -->

        <div class="col-md-8">
          <div class="ts-newsletter row align-items-center">
              <div class="col-md-5 newsletter-introtext">
                <h4 class="text-white mb-0">Kami Juga Melayani Lewat email</h4>
                <p class="text-white mb-6">peduliyayasan@gmail.com.com</p>
              </div>
          </div><!-- Newsletter end -->
        </div><!-- Col end -->

    </div><!-- Content row end -->
  </div>
  <!--/ Container end -->
</section>
<!--/ subscribe end -->

<section id="news" class="news">
  <div class="container">
    <div class="row text-center">
        <div class="col-12">
          <h2 class="section-title">Berita dan Artikel</h2>
          <h3 class="section-sub-title">Yayasan Peduli</h3>
        </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
      @for ($i = 0; $i < 3; $i++)  
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="latest-post">
              <div class="latest-post-media">
                <a href="news-single.html" class="latest-post-img">
                    <img loading="lazy" class="img-fluid" src="{{ asset('storage/'.$beritas[$i]->image)}}" alt="img">
                </a> 
              </div>
              <div class="post-body">
                <h4 class="post-title">
                    <a  data-toggle="modal" data-target="#tampilBerita" wire:click.prevent="tampilBerita({{ $beritas[$i]->id }})" href="#" class="d-inline-block">{{ $beritas[$i]->judul_berita }}</a>
                    {{-- /berita/{{ $beritas[$i]->id }}" --}}
                </h4>
                <div class="latest-post-meta">
                    <span class="post-item-date">
                      <i class="fa fa-clock-o"></i> July 20, 2017
                    </span>
                </div>
              </div>
          </div><!-- Latest post end -->
        </div><!-- 1st post col end -->
      @endfor
    </div>
    <!--/ Content row end -->

    <div class="general-btn text-center mt-4">
        <a class="btn btn-primary" href="news-left-sidebar.html">Lihat Semua Berita</a>
    </div>

  </div>
  <!--/ Container end -->
</section>
<!--/ News end -->

@include('livewire.footer')


