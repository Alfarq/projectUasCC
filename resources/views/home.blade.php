@extends('layouts.app')

@section('content')

<section id="hero-slider" class="hero-slider mt-4 mb-2">
    <div class="container-md mt-4" data-aos="fade-in">
        <div class="row">
            <div class="col-12">
                <div class="swiper sliderFeaturedPosts">
                    <div class="swiper-wrapper">
                        @php
                            $staticImages = [
                                'img/jktfairr.jpg',
                                'img/sync.jpg',
                                'img/tspp.jpg',
                                'img/bb.jpeg',
                                'img/rifestt.jpg',
                                'img/javaa.jpg'
                            ];
                        @endphp
                        @foreach ($concerts as $index => $concert)
                        <div class="swiper-slide">
                            <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('{{ asset($staticImages[$index % count($staticImages)]) }}');">
                                <div class="img-bg-inner">
                                    <h2>{{ $concert->name }}</h2>
                                    <p>{{ $concert->description }}</p>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <div class="custom-swiper-button-next">
                        <span class="bi-chevron-right"></span>
                    </div>
                    <div class="custom-swiper-button-prev">
                        <span class="bi-chevron-left"></span>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="posts" class="posts">
    <div class="container" data-aos="fade-up">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <div class="headline-box p-3 rounded shadow-sm">
                    <h2 class="m-0 text-dark"><i class="bi bi-music-note-beamed"></i> Info Konser</h2>
                </div>
            </div>
        </div>
      <div class="row g-5">
        @foreach ($concerts as $concert)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card shadow h-100">
                <a href="{{ route('concert.show', $concert->id) }}" class="d-block position-relative overflow-hidden hover-zoom">
                    <img src="{{ asset($concert->image) }}" class="card-img-top" style="height: 250px; object-fit: cover;" alt="{{ $concert->name }}">
                </a>
                <div class="card-body">
                    <div class="post-meta mb-2">
                        <span class="badge bg-primary">{{ $concert->organizer }}</span>
                        <span class="text-muted mx-1">&bullet;</span>
                        <span class="text-muted">{{ \Carbon\Carbon::parse($concert->concert_date)->format('d M Y') }}</span>
                    </div>
                    <h5 class="card-title">
                        <a href="{{ route('concert.show', $concert->id) }}" class="text-decoration-none text-dark">{{ $concert->name }}</a>
                    </h5>
                    <p class="card-text">{{ $concert->description }}</p>
                </div>
            </div>
        </div>
        @endforeach
      </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="loginSuccessModal" tabindex="-1" aria-labelledby="loginSuccessModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginSuccessModalLabel">Login Successful</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                You have successfully logged in!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- jQuery for handling modal display -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        @if(session('status'))
            $('#loginSuccessModal').modal('show');
        @endif
    });
</script>
@endsection
