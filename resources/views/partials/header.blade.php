<header id="header" class="header d-flex align-items-center fixed-top">
<style>
        /* .custom-shadow {
            box-shadow: 5px 5px 10px rgba(0,0,0,0.1);
        } */
        .custom-shadow {
    box-shadow: 2px 2px  10px rgba(0, 0, 0, 0.2); /* Bayangan di semua sisi */
}

.judul-link {
    position: relative;
    display: inline-block;
    color: #000;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .judul-link::after {
    content: '';
    position: absolute;
    bottom: -3px;
    left: 0;
    width: 100%;
    height: 2px;
    background-color: #000;
    transition: all 0.3s ease;
    transform: scaleX(0); /* Mulai dengan lebar 0 */
    transform-origin: bottom right;
  }

  .judul-link:hover::after {
    transform: scaleX(1); /* Tampilkan garis bawah saat hover */
    transform-origin: bottom left;
  }

    </style>
  <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{ route('concerts.index') }}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>MusikFest</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ route('concerts.index') }}">Home</a></li>
          <li class="dropdown"><a href="category.html"><span>Info Konser</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Juli</a></li></li>
              <li><a href="#">Agustus</a></li>
              <li><a href="#">September</a></li>
              <li><a href="#">Oktober</a></li>
            </ul>
          </li>
          <li><a href="{{ route('concerts.index') }}">Articles</a></li>       
          <li><a href="{{ route('concerts.index') }}">Release</a></li>
          <li><a href="{{ route('concerts.index') }}">Media Partnership</a></li>
        </ul>
      </nav><!-- .navbar -->

      <div class="position-relative">
        <!-- Search Button -->
        <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>

        <!-- Login and Register Buttons -->
        @guest
          <a href="{{ route('login') }}" class="btn btn-primary mx-2">Login</a>
          <a href="{{ route('register') }}" class="btn btn-secondary mx-2">Register</a>
        @else
          <a href="{{ route('logout') }}" class="btn btn-primary mx-2"
             onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
            Logout
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        @endguest

        <i class="bi bi-list mobile-nav-toggle"></i>

        <!-- ======= Search Form ======= -->
        <div class="search-form-wrap js-search-form-wrap">
          <form action="search-result.html" class="search-form">
            <span class="icon bi-search"></span>
            <input type="text" placeholder="Search" class="form-control">
            <button class="btn js-search-close"><span class="bi-x"></span></button>
          </form>
        </div><!-- End Search Form -->

      </div>

  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    // Menampilkan konten dari judul pertama secara default
    $('.konten[data-content-index="0"]').show();
    
    // Sembunyikan konten dari judul kedua secara default
    $('.konten[data-content-index="1"]').hide();

    // Mengatur fungsi saat judul diklik
    $('.judul-link').click(function() {
      // Sembunyikan semua konten yang ditampilkan
      $('.konten').hide();
      // Ambil indeks judul yang diklik
      var index = $(this).data('index');
      // Tampilkan konten yang sesuai berdasarkan indeks
      $('.konten[data-content-index="' + index + '"]').show();
    });
  });
</script>

</header>
