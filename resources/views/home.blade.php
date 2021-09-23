@extends('layouts/main')
@section('container')
<!-- Jumbotron -->
<section class="jumbotron text-center text-white">
  <div class="container">
    <div class="row">
      <div class="col-md-6 pt-3">
        <h1 class="display-4 mb-3">Kami Membawa Bisnis Anda ke Tingkat Selanjutnya</h1>
        <p class="lead">Pastikan perusahaan Anda bisa di akses secara online sehingga meningkatkan <strong>Brand image</strong>
        perusahaan yang akhirnya <strong>Meningkatkan omset usaha.</strong></p>
        <a href="#pricing" class="btn btn-warning text-white text-bold" tabindex="-1" role="button" aria-disabled="true"><strong>MULAI SEKARANG</strong></a>
      </div>
      <div class="col-md-6 px-4">
        <img src="img/img1.png" alt="project" width="400" class="img-thambnail" />
      </div>
    </div>
  </div>
</section>
<!-- Akhir Jumbotron -->

{{-- Features --}}
<div class="container px-4 pt-5" id="featured-3">
    <h2 class="py-2 mb-5 border-bottom text-primary text-center">Our Features</h2>
    <div class="row g-4 row-cols-1 row-cols-lg-3">
      <div class="feature col">
        <div class="feature-icon bg-primary bg-gradient">
          <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-phone-fill" viewBox="0 0 16 16">
            <path d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0z"/>
          </svg>
        </div>
        <h2>Mobile Friendly</h2>
        <p>Website yang kami buat sudah mobile friendly dan responsive. Sehingga tampilan website Anda akan menyesuaikan layar dari perangkat yang digunakan.</p>
      </div>
      <div class="feature col">
        <div class="feature-icon bg-primary bg-gradient">
          <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
          </svg>
        </div>
        <h2>SEO Friendly</h2>
        <p>Semua website yang kami buat, sudah mengikuti kaidah SEO (Search Engine Optimization), sehingga bisnis Anda dapat lebih mudah ditemukan di mesin pencari.</p>
      </div>
      <div class="feature col">
        <div class="feature-icon bg-primary bg-gradient">
          <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
            <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"/>
          </svg>
        </div>
        <h2>Free Hosting & Domain</h2>
        <p>Selain Website Landing Page Semua jasa layanan Pembuatan Website kami sudah free Hosting dan Domain.</p>
      </div>
      <div class="feature col">
        <div class="feature-icon bg-primary bg-gradient">
          <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-shield-lock" viewBox="0 0 16 16">
            <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
            <path d="M9.5 6.5a1.5 1.5 0 0 1-1 1.415l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99a1.5 1.5 0 1 1 2-1.415z"/>
          </svg>
        </div>
        <h2>Free SSL</h2>
        <p>Anda akan mendapatkan gratis SSL dalam paket jasa pembuatan website kami. Website anda dapat diakses pada protokol https. Dengan SSL, membuat website anda SEO friendly, dan meningkatkan kepercayaan pengunjung.</p>
      </div>
      <div class="feature col">
        <div class="feature-icon bg-primary bg-gradient">
          <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-envelope-open" viewBox="0 0 16 16">
            <path d="M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.818l5.724 3.465L8 8.917l1.276.766L15 6.218V5.4a1 1 0 0 0-.53-.882l-6-3.2zM15 7.388l-4.754 2.877L15 13.117v-5.73zm-.035 6.874L8 10.083l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738zM1 13.117l4.754-2.852L1 7.387v5.73zM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2z"/>
          </svg>
        </div>
        <h2>Email Bisnis</h2>
        <p>Dengan menggunakan jasa pembuatan website di GudangIT.net, anda akan mendapatkan email bisnis dengan nama domain pilihan anda. Email bisnis dengan domain sendiri akan meningkatkan.</p>
      </div>
      <div class="feature col">
        <div class="feature-icon bg-primary bg-gradient">
          <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-hdd-fill" viewBox="0 0 16 16">
            <path d="M0 10a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-1zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2 0a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zM.91 7.204A2.993 2.993 0 0 1 2 7h12c.384 0 .752.072 1.09.204l-1.867-3.422A1.5 1.5 0 0 0 11.906 3H4.094a1.5 1.5 0 0 0-1.317.782L.91 7.204z"/>
          </svg>
        </div>
        <h2>Server Terbaik</h2>
        <p>Tak perlu khawatir website Anda tidak bisa diakses!. Dukungan server Terbaik dan tim teknis Niagahoster yang handal untuk menjaga server website Anda supaya tetap online tanpa hambatan.</p>
      </div>
    </div>
  </div>
{{-- Akhir Features --}}

<!-- About -->
<section id="about">
  <div class="container">
    <div class="row">
      <div class="col text-center mb-3 text-primary border-bottom">
        <h2>About Me</h2>
      </div>
      <div class="row justify-content-center fs-5">
        <div class="col-md-4">
          <img src="img/project/project.jpg" class="text-center" alt="img" width="250px">
        </div>
        <div class="col-md-8 pt-5">
          <h3>GudangIT.net</h3>
          <p>Sahabat terbaik untuk kemajuan bisnis Anda, kami menyediakan layanan pembuatan website berkuwalitas dengan harga terjangkau, beserta pemeliharaannya yang ditangani langsung oleh staff IT berpengalaman | melayani jasa pengembangan Aplikasi Android & IOS beserta perawatannya.</p>
        </div>
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2edff" fill-opacity="0.99" d="M0,288L80,277.3C160,267,320,245,480,240C640,235,800,245,960,240C1120,235,1280,213,1360,202.7L1440,192L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
</section>
<!-- Akhir About -->

<!-- Project -->
<section id="project">
  <div class="container">
    <div class="row text-center text-primary mb-4">
      <div class="col">
        <h2>My Project</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="img/project/project.jpg" class="card-img-top p-2" alt="Project1" />
          <div class="card-body">
            <h4>Website Marketplace</h4>
            <h5>Rp. 3.500.000</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Order</a> <a href="#" class="btn btn-info text-white">Detil Produk</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="img/project/project.jpg" class="card-img-top p-2" alt="Project2" />
          <div class="card-body">
            <h4>Website OlShop</h4>
            <h5>Rp. 3.000.000</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Order</a> <a href="#" class="btn btn-info text-white">Detil Produk</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="img/project/project.jpg" class="card-img-top p-2" alt="Project3" />
          <div class="card-body">
            <h4>Website Dealer</h4>
            <h5>Rp. 3.000.000</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Order</a> <a href="#" class="btn btn-info text-white">Detil Produk</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="img/project/project.jpg" class="card-img-top p-2" alt="Project4" />
          <div class="card-body">
            <h4>Website Koprasi</h4>
            <h5>Rp. 2.000.000</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Order</a> <a href="#" class="btn btn-info text-white">Detil Produk</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="img/project/project.jpg" class="card-img-top p-2" alt="Project4" />
          <div class="card-body">
            <h4>Company Profile</h4>
            <h5>Rp. 1.500.000</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Order</a> <a href="#" class="btn btn-info text-white">Detil Produk</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <div class="card">
          <img src="img/project/project.jpg" class="card-img-top p-2" alt="Project4" />
          <div class="card-body">
            <h4>Management Sekolah</h4>
            <h5>Rp. 2.000.000</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Order</a> <a href="#" class="btn btn-info text-white">Detil Produk</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path
      fill="#ffffff"
      fill-opacity="1"
      d="M0,96L48,112C96,128,192,160,288,170.7C384,181,480,171,576,160C672,149,768,139,864,128C960,117,1056,107,1152,117.3C1248,128,1344,160,1392,176L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
    ></path>
  </svg>
</section>
<!-- Akhir Project -->

{{-- Pricing --}}
<div class="pricing-header p-3 pb-md-4 mx-auto text-center" id="pricing">
  <h1 class="display-4 fw-normal">Pricing</h1>
  <p class="fs-5 text-muted">Silahkan memesan paket pembuatan website yang sesuai dengan kebutuhan bisnis anda. Jika anda tidak tahu paket mana yang sesuai, silahkan konsultasikan kepada kami kebutuhan website anda. Kami akan memilihkan paket yang tepat untuk anda.</p>
</div>

  <main>
    <div class="row row-cols-1 px-4 row-cols-md-3 mb-3">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3 text-center">
            <h4 class="my-0 fw-normal">Landing Page</h4>
          </div>
          <div class="card-body">
            <h3 class="card-title pricing-card-title text-center">Mulai Dari</h3>
            <h1 class="card-title pricing-card-title text-center">Rp. 300rb<small class="text-muted fw-light">/thn</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li><i class="bi bi-check-circle"></i> 1 Halaman Awal</li>
              <li><i class="bi bi-check-circle"></i> 1x Revisi Desain</li>
              <li><i class="bi bi-check-circle"></i> 100+ Tema Pilihan</li>
              <li><i class="bi bi-check-circle"></i> Gratis 1 Template Premium</li>
              <li><i class="bi bi-check-circle"></i> Hosting dan domain (opsional)</li>
              <li><i class="bi bi-check-circle"></i> Gratis setup ke Hosting</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Get Started</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal text-center">Company Profile</h4>
          </div>
          <div class="card-body">
            <h3 class="card-title pricing-card-title text-center">Mulai Dari</h3>
            <h1 class="card-title pricing-card-title text-center">Rp. 1,5jt<small class="text-muted fw-light">/thn</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li><i class="bi bi-check-circle"></i> 3 Halaman Awal</li>
              <li><i class="bi bi-check-circle"></i> 1x Revisi Desain</li>
              <li><i class="bi bi-check-circle"></i> 500+ Tema Pilihan</li>
              <li><i class="bi bi-check-circle"></i> Gratis Setup 5 Konten/Artikel</li>
              <li><i class="bi bi-check-circle"></i> Shared Hosting GudangIT.net</li>
              <li><i class="bi bi-check-circle"></i> Free Maintenance Setiap Bulan</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-white bg-primary border-primary">
            <h4 class="my-0 fw-normal text-center">Online Shop</h4>
          </div>
          <div class="card-body">
            <h3 class="card-title pricing-card-title text-center">Mulai Dari</h3>
            <h1 class="card-title pricing-card-title text-center">Rp. 2,5jt<small class="text-muted fw-light">/thn</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li><i class="bi bi-check-circle"></i> 5 Halaman Awal</li>
              <li><i class="bi bi-check-circle"></i> 1x Revisi Desain</li>
              <li><i class="bi bi-check-circle"></i> 500+ Tema Pilihan</li>
              <li><i class="bi bi-check-circle"></i> Gratis Setup 5 Produk Unggulan</li>
              <li><i class="bi bi-check-circle"></i> Gratis 3 Email Professional</li>
              <li><i class="bi bi-check-circle"></i> Integrasi Marketplace</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Get Started</button>
          </div>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2edff" fill-opacity="0.99" d="M0,288L80,277.3C160,267,320,245,480,240C640,235,800,245,960,240C1120,235,1280,213,1360,202.7L1440,192L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
  </main>
{{-- Akhir Pricing --}}

<!-- Contact -->
<section id="contact" class="pb-5">
  <div class="container">
    <div class="row text-center text-primary mb-5">
      <div class="col">
        <h2>Visit Us</h2>
      </div>
      <hr />
    </div>
    <div class="row">
      <div class="col-md-6">
        <h4 class="pb-3">Visit Our Office</h4>
        <p><i class="bi bi-geo-alt-fill"></i>  Jl. Durian 9, Jatimulyo, Kec. Jati Agung, Lampung Selatan,Lampung, Indonesia 35136</p>
        <p><i class="bi bi-envelope-fill"></i>  admin@gudangit.net</p>
        <p><i class="bi bi-envelope-fill"></i>  cs@gudangit.net</p>
        <p><i class="bi bi-telephone-fill"></i>  0821 2514 1605</p>
      </div>
      <div class="col-md-6">
        <form>
          <h4 class="pb-3">Contact Me</h4>
          <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="name" aria-describedby="name" />
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="email" />
          </div>
          <div class="mb-3">
            <label for="pesan" class="form-label">Pesan</label>
            <textarea class="form-control" id="pesan" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- Akhir Contact -->

{{-- call --}}
<section id="call" class="py-4">
  <div class="container-md-12 text-white text-center">
    <div class="row">
      <div class="col-md-8">
        <h1>Konsultasikan kepada kami</h1>
        <p>Jika masih bingung dalam menentukan paket website yang sesuai dengan kebutuhan Anda, silahkan kunsultasikan kepada kami, dengan senang hati kami siap membantu.</p>
      </div>
      <div class="col-md-2 px-0 pt-5">
        <a href="#" class="btn btn-warning text-center text-white" style="background-color: "><strong>Whatsapp</strong></a>
      </div>
    </div>
  </div>
</section>
@endsection
