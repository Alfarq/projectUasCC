@extends('layouts.app')

@section('content')

<section class="mt-4">
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-8">
        <div class="" data-aos="fade-up">
          <!-- ======= Single Post Content ======= -->
          <div class="single-post">
            <div class="my-4">
              <img src="{{ asset($concert->image) }}" class="card img-fluid mb-4 border-0" style="height: 370px; width:100%: object-fit: cover; " alt="{{ $concert->name }}">
              <div class="row">
                <div class="col-6 text-center">
                  <h5 class="judul-link mb-4" data-index="0">Deskripsi</h5>
                </div>
                <div class="col-6 text-center">
                  <h5 class="judul-link mb-4" data-index="1">Our Guestar</h5>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-12 konten" data-content-index="0" style="display: none;">
                  <p>{{ $concert->description }}.</p>
                </div>
                <div class="col-12 konten" data-content-index="1" style="display: none;">
                  <p>{{ $concert->guest_star }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 mt-4">
        <div class="card custom-shadow border-0" style="border-radius: 15px;">
          <div class="card-body">
            <h3 class="card-title">{{ $concert->name }}</h3>
            <div class="d-flex align-items-center">
              <i class="bi bi-calendar-fill text-primary"></i>
              <p class="card-text mb-0 ms-2">{{ \Carbon\Carbon::parse($concert->concert_date)->format('d M Y') }}</p>
            </div>
            <div class="d-flex align-items-center mt-2">
              <i class="bi bi-geo-alt-fill text-danger"></i>
              <p class="card-text mb-0 ms-2">Kampus B</p>
            </div>
            <br>
            <hr class="my-3">
            <span style="color: grey;">Diselenggarakan oleh</span>
            <br>
            <span><b>{{ $concert->organizer }}</b></span>
          </div>
        </div>
          <!-- <div class="single-post">
            <div class="my-4">
              <img src="{{ asset($concert->image) }}" class="card img-fluid mb-4 border-0"
                style="height: 370px; width:100%" alt="{{ $concert->name }}">
              <div class="row">
                <div class="col-6 text-center">
                  <h5 class="judul-link mb-4" data-index="0">Deskripsi</h5>
                </div>
                <div class="col-6 text-center">
                  <h5 class="judul-link mb-4" data-index="1">Our Guest Star</h5>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-12 konten" data-content-index="0" style="display: none;">
                  <p>{{ $concert->description }}</p>
                </div>
                <div class="col-12 konten" data-content-index="1" style="display: none;">
                  <p>{{ $concert->guest_star }}</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 mt-4">
            <div class="card custom-shadow border-0" style="border-radius: 15px;">
              <div class="card-body">
                <h3 class="card-title">{{ $concert->name }}</h3>
                <div class="d-flex align-items-center">
                  <i class="bi bi-calendar-fill text-primary"></i>
                  <p class="card-text mb-0 ms-2">{{ \Carbon\Carbon::parse($concert->concert_date)->format('d M Y') }}
                  </p>
                </div>
                <div class="d-flex align-items-center mt-2">
                  <i class="bi bi-geo-alt-fill text-danger"></i>
                  <p class="card-text mb-0 ms-2"></p>
                </div>
                <br>
                <hr class="my-3">
                <span style="color: grey;">Diselenggarakan oleh</span>
                <br>
                <span><b>{{ $concert->organizer }}</b></span>
              </div>
            </div>
          </div> -->

          <br>
          <div class="card custom-shadow border-0" style="border-radius: 15px;">
            <div class="card-body text-center">
              <h4 class="card-title">Tiket</h4>
              <a href="#" class="btn btn-dark w-100">Beli disini</a>
            </div>
          </div>
        </div>

      </div>
    </div>
</section>

@endsection