@extends('layouts/main')
@section('container')
{{-- JumboTron --}}
<section class="jumbotron text-white">
  <div class="row">
    <div class="col-md-12 pt-lg-3 text-center">
        <img src="img/logo2.png" alt="logo" width="200px">
        <h1 class="display-4 mb-3"><strong>About</strong></h1>
    </div>
  </div>
</section>
{{-- Akhir JumboTron --}}

{{-- About --}}
<div class="container my-5">
        <h1 class="text-center">About Me</h1>
        <div class="row">
                <div class="col-md-4 my-5">
                        <img src="img/logo2.png" alt="project" width="250px">
                </div>
                <div class="col-md-8 my-5">
                        <h4>GudangIT.net</h4>
                        <p>Sahabat terbaik untuk kemajuan bisnis Anda, kami menyediakan layanan pembuatan website berkuwalitas dengan harga terjangkau, beserta pemeliharaannya yang ditangani langsung oleh staff IT berpengalaman | melayani jasa pengembangan Aplikasi Android & IOS beserta perawatannya.</p>
                        <h4>Visi</h4>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi ipsum veritatis delectus itaque asperiores voluptatibus tempora sed similique eaque veniam?</p>
                        <h4>Misi</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus natus nesciunt dignissimos, ratione repellat sunt eius quam. Cumque voluptate veritatis voluptates molestiae non nisi, quidem explicabo quae quis impedit et? Aliquam nulla, vitae quam sit mollitia quis. Assumenda porro laudantium amet ipsa, dolor deleniti minus, ratione natus neque illum qui.</p>
                </div>
        </div>
</div>
{{-- Akhir About --}}

{{-- FaQ --}}
<section id="faq" class="pb-5">
  <div class="container">
          <h1 class="text-center">Frequently Asked Questions</h1>
    <div class="row py-5 justify-content-center">
      <div class="col-md-10">
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Apa itu website?
                        </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Website merupakan himpunan halaman yang membantu Anda untuk promosi secara online. Dapat membantu Anda untuk memasarkan produk, jasa ataupun brand Anda dengan lebih mudah.</div>
                </div>
          </div>
          <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Mengapa harus memiliki website?
                        </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Anda harus memiliki website agar calon pelanggan Anda dapat mengakses informasi berupa produk dan layanan yang Anda pasarkan setiap saat. Selama website anda sudah tayang calon pelanggan Anda dapat mengakses website Anda selama 24 jam dapat di akses dari mana saja.</div>
                </div>
          </div>
                <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Jenis website apa saja yang GudangIT.net kerjakan?
                        </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Kami GudangIT.net melayani jasa pembuatan website perusahaan /company profile, website toko online / online shop, dan landingpage. Bila Anda sedang membutuhkan untuk jasa pembuatan website jenis lainnya, Anda bisa konsultasi terlebih dahulu dengan Kami. Tim kami dengan senang hati akan membantu Anda.</div>
                </div>
                </div>
          <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                        Berapa biaya pembuatan website di GudangIT.net?
                        </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                                <ul>
                                        <li>Biaya pembuatan landingpage mulai dari Rp. 760.000</li>
                                        <li>Biaya pembuatan website perusahaan / company profile mulai dari Rp 1.500.000.</li>
                                        <li>Biaya pembuatan website toko online / online shop mulai dari Rp 2.500.000.</li>
                                        <li>Apabila Anda membutuhkan plugin tambahan bisa dikenakan biaya tambahan tentunya Anda dapat konsultasi terlebih dahulu dengan tim Kami</li>
                                </ul>
                        </div>
                </div>
          </div>
          <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                        Apa saja yang harus disiapkan jika saya ingin memesan jasa pembuatan website?
                        </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                                <p>Dalam layanan jasa pembuatan website ini, kami sudah menyediakan template yang siap dipakai. Yang perlu Anda siapkan di antaranya adalah:</p>
                                <ul>
                                        <li>Nama domain website</li>
                                        <li>Konten atau artikel yang akan di publish di website</li>
                                        <li>Gambar-gambar yang akan di publish</li>
                                </ul>
                        </div>
                </div>
          </div>
          <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                        Apakah biaya jasa desain website sudah termasuk Domain dan Hosting?
                        </button>
                </h2>
                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                                <p>Untuk paket jasa website company profile dan online shop sudah termasuk domain dan hosting untuk satu tahun pertama. Untuk ketentuan lebih lanjut Anda bisa konsultasi terlebih dahulu dengan kami.</p>
                        </div>
                </div>
          </div>
          <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                        Saya sudah punya hosting dan domain selain dari GudangIT.net. Apakah GudangIT.net tetap bisa membuatkan website untuk saya ?
                        </button>
                </h2>
                <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                                <p>Bisa! Kami bisa bantu membuatkan website meskipun Anda sudah memiliki hosting dan domain di layanan selain GudangIT.net. Hanya saja, jika Anda ingin kami bantu kelola website Anda pada tahun berikutnya, maka Anda harus tetap melakukan request pengelolaan website secara terpisah di layanan kami.</p>
                        </div>
                </div>
          </div>
          <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingEight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                        Bagaimana jika saya kesulitan mengelola website?
                        </button>
                </h2>
                <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                                <p>Setelah website Anda jadi, kami akan berikan akses websitenya secara penuh kepada Anda! Jika Anda sudah mempunyai akses namun masih bingung cara mengelolanya, kami akan senantiasa membantu Anda dalam mengelola website Anda.</p>
                        </div>
                </div>
          </div>
         </div>
      </div>
    </div>
  </div>
</section>
{{-- Akhir FaQ --}}

@endsection
