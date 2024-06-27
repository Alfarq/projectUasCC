@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}

<!-- Main content goes here -->

{{-- <section id="posts" class="posts">
    <div class="card">
        <div class="card-header">{{ __('Dashboard') }}</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            {{ __('You are logged in!') }}
        </div>
    </div>
</section> --}}

<section id="hero-slider" class="hero-slider mt-4">
    <div class="container-md mt-4" data-aos="fade-in">
        <div class="row">
        <div class="col-12">
            
            <div class="swiper sliderFeaturedPosts">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('img/sync.jpg');">
                    <div class="img-bg-inner">
                    <h2>The Best Homemade Masks for Face (keep the Pimples Away)</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                    </div>
                </a>
                </div>

                <div class="swiper-slide">
                <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('img/post-slide-2.jpg');">
                    <div class="img-bg-inner">
                    <h2>17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                    </div>
                </a>
                </div>

                <div class="swiper-slide">
                <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('img/post-slide-3.jpg');">
                    <div class="img-bg-inner">
                    <h2>13 Amazing Poems from Shel Silverstein with Valuable Life Lessons</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                    </div>
                </a>
                </div>

                <div class="swiper-slide">
                <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('img/post-slide-4.jpg');">
                    <div class="img-bg-inner">
                    <h2>9 Half-up/half-down Hairstyles for Long and Medium Hair</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                    </div>
                </a>
                </div>
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


        {{-- <div class="col-lg-4">
          <div class="post-entry-1 lg">
            <a href="single-post.html"><img src="img/post-landscape-1.jpg" alt="" class="img-fluid"></a>
            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
            <h2><a href="single-post.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
            <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero temporibus repudiandae, inventore pariatur numquam cumque possimus exercitationem? Nihil tempore odit ab minus eveniet praesentium, similique blanditiis molestiae ut saepe perspiciatis officia nemo, eos quae cumque. Accusamus fugiat architecto rerum animi atque eveniet, quo, praesentium dignissimos</p>
          </div>
        </div> --}}

        {{-- <div class="col-lg-8">
          <div class="row g-5">
            <div class="col-lg-4 border-start custom-border">
              <div class="post-entry-1">
                <a href="single-post.html"><img src="img/post-landscape-2.jpg" alt="" class="img-fluid"></a>
                <div class="post-meta"><span class="date">Sport</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                <h2><a href="single-post.html">Let’s Get Back to Work, New York</a></h2>
              </div>
              <div class="post-entry-1">
                <a href="single-post.html"><img src="img/post-landscape-5.jpg" alt="" class="img-fluid"></a>
                <div class="post-meta"><span class="date">Food</span> <span class="mx-1">&bullet;</span> <span>Jul 17th '22</span></div>
                <h2><a href="single-post.html">How to Avoid Distraction and Stay Focused During Video Calls?</a></h2>
              </div>
              <div class="post-entry-1">
                <a href="single-post.html"><img src="img/post-landscape-7.jpg" alt="" class="img-fluid"></a>
                <div class="post-meta"><span class="date">Design</span> <span class="mx-1">&bullet;</span> <span>Mar 15th '22</span></div>
                <h2><a href="single-post.html">Why Craigslist Tampa Is One of The Most Interesting Places On the Web?</a></h2>
              </div>
            </div>
            <div class="col-lg-4 border-start custom-border">
              <div class="post-entry-1">
                <a href="single-post.html"><img src="img/post-landscape-3.jpg" alt="" class="img-fluid"></a>
                <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                <h2><a href="single-post.html">6 Easy Steps To Create Your Own Cute Merch For Instagram</a></h2>
              </div>
              <div class="post-entry-1">
                <a href="single-post.html"><img src="img/post-landscape-6.jpg" alt="" class="img-fluid"></a>
                <div class="post-meta"><span class="date">Tech</span> <span class="mx-1">&bullet;</span> <span>Mar 1st '22</span></div>
                <h2><a href="single-post.html">10 Life-Changing Hacks Every Working Mom Should Know</a></h2>
              </div>
              <div class="post-entry-1">
                <a href="single-post.html"><img src="img/post-landscape-8.jpg" alt="" class="img-fluid"></a>
                <div class="post-meta"><span class="date">Travel</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                <h2><a href="single-post.html">5 Great Startup Tips for Female Founders</a></h2>
              </div>
            </div>

            <!-- Trending Section -->
            <div class="col-lg-4">

              <div class="trending">
                <h3>Trending</h3>
                <ul class="trending-post">
                  <li>
                    <a href="single-post.html">
                      <span class="number">1</span>
                      <h3>The Best Homemade Masks for Face (keep the Pimples Away)</h3>
                      <span class="author">Jane Cooper</span>
                    </a>
                  </li>
                  <li>
                    <a href="single-post.html">
                      <span class="number">2</span>
                      <h3>17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</h3>
                      <span class="author">Wade Warren</span>
                    </a>
                  </li>
                  <li>
                    <a href="single-post.html">
                      <span class="number">3</span>
                      <h3>13 Amazing Poems from Shel Silverstein with Valuable Life Lessons</h3>
                      <span class="author">Esther Howard</span>
                    </a>
                  </li>
                  <li>
                    <a href="single-post.html">
                      <span class="number">4</span>
                      <h3>9 Half-up/half-down Hairstyles for Long and Medium Hair</h3>
                      <span class="author">Cameron Williamson</span>
                    </a>
                  </li>
                  <li>
                    <a href="single-post.html">
                      <span class="number">5</span>
                      <h3>Life Insurance And Pregnancy: A Working Moms Guide</h3>
                      <span class="author">Jenny Wilson</span>
                    </a>
                  </li>
                </ul>
              </div>

            </div> <!-- End Trending Section -->
          </div>
        </div> --}}

      </div> <!-- End .row -->
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
