@extends('layout.app')

@section('content')

<!-- HERO -->
<section id="hero">

    <div class="hero-content">

        <h1 class="display-4 font-weight-bold">
            A Visual Journey Across the Archipelago
        </h1>

        <p class="lead mb-4">
            Mengabadikan alam, budaya, dan momen tak terlupakan dari seluruh Indonesia.
        </p>

    </div>

</section>

<!-- HIGHLIGHTS -->
<section id="highlights" class="gallery-section py-5 bg-light">

    <div class="container text-center">

        <div style="margin-top:20px;"></div>

        <h2 class="font-weight-bold">Highlights</h2>

        <div style="margin-top:20px;"></div>

        <div class="row justify-content-center">

            <!-- CARD 1 -->
            <div class="col-5-custom">

                <div class="polaroid">

                    <img src="https://picsum.photos/300/200?5"
                        class="polaroid-img">

                    <div class="caption">
                        Alam
                    </div>

                </div>

            </div>

            <!-- CARD 2 -->
            <div class="col-5-custom">

                <div class="polaroid">

                    <img src="https://picsum.photos/300/200?6"
                        class="polaroid-img">

                    <div class="caption">
                        Budaya
                    </div>

                </div>

            </div>

            <!-- CARD 3 -->
            <div class="col-5-custom">

                <div class="polaroid">

                    <img src="https://picsum.photos/300/200?7"
                        class="polaroid-img">

                    <div class="caption">
                        Flora & Fauna
                    </div>

                </div>

            </div>

            <!-- CARD 4 -->
            <div class="col-5-custom">

                <div class="polaroid">

                    <img src="https://picsum.photos/300/200?8"
                        class="polaroid-img">

                    <div class="caption">
                        People
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- EKSPLORASI -->
<section id="eksplorasi" class="py-5">

    <div class="container text-center">

        <h2 class="font-weight-bold mb-4">
            Eksplorasi & Kreasi
        </h2>

        <div class="slider-wrapper">

            <!-- BUTTON LEFT -->
            <button class="nav left" onclick="slideLeft()">❮</button>

            <!-- SLIDER -->
            <div class="slider-container">

                <div class="card-slider" id="slider">

                    <!-- CARD 1 -->
                    <div class="card-item">

                        <img src="https://picsum.photos/300/200?1">

                        <h5>Upload Foto</h5>

                        <a href="/unggah" class="btn">
                            Masuk
                        </a>

                    </div>

                    <!-- CARD 2 -->
                    <div class="card-item">

                        <img src="https://picsum.photos/300/200?2">

                        <h5>Gallery</h5>

                        <a href="/gallery" class="btn">
                            Lihat
                        </a>

                    </div>

                    <!-- CARD 3 -->
                    <div class="card-item">

                        <img src="https://picsum.photos/300/200?3">

                        <h5>Statistik</h5>

                        <a href="/statistik" class="btn">
                            Buka
                        </a>

                    </div>

                    <!-- CARD 4 -->
                    <div class="card-item">

                        <img src="https://picsum.photos/300/200?4">

                        <h5>Contact</h5>

                        <a href="/contact" class="btn">
                            Kirim
                        </a>

                    </div>

                </div>

            </div>

            <!-- BUTTON RIGHT -->
            <button class="nav right" onclick="slideRight()">❯</button>

        </div>

    </div>

</section>

<!-- ABOUT -->
<section id="about" class="py-5 bg-light">

    <div class="container">

        <h2 class="text-center font-weight-bold mb-5">
            Tentang RuangPandang
        </h2>

        <div class="row align-items-center">

            <div class="col-md-6">

                <h4 class="font-weight-bold mb-3">
                    Apa itu RuangPandang?
                </h4>

                <p>
                    RuangPandang adalah platform galeri visual yang menampilkan
                    keindahan alam, budaya, dan kehidupan masyarakat Indonesia.
                </p>

            </div>

            <div class="col-md-6 text-center">

                <img src="{{ asset('img/rp1.png') }}"
                    class="img-fluid">

            </div>

        </div>

    </div>

</section>

<!-- SCRIPT CAROUSEL -->
<script>

document.addEventListener("DOMContentLoaded", function () {

    const slider = document.getElementById("slider");

    // cek slider ada atau tidak
    if (!slider) {

        console.log("slider tidak ditemukan");

        return;
    }

    // tombol kiri
    window.slideLeft = function () {

        slider.scrollBy({

            left: -300,

            behavior: "smooth"

        });

    }

    // tombol kanan
    window.slideRight = function () {

        slider.scrollBy({

            left: 300,

            behavior: "smooth"

        });

    }

});

</script>

@endsection