@extends('layout.app')

@section('content')

@php

$photos = [

    ['file' => '1.jpg', 'kategori' => 1],
    ['file' => '2.jpg', 'kategori' => 4],
    ['file' => '4.jpg', 'kategori' => 1],

];

@endphp

<!-- ================= GALERI ================= -->
<section class="gallery-layout">

    <!-- SIDEBAR -->
    <div class="gallery-sidebar">

        <h1 class="gallery-title">
            Album
        </h1>

        <p class="gallery-subtitle">
            Jelajahi koleksi visual terbaik dari RuangPandang.
        </p>

        <!-- FILTER -->
        <div class="filter-buttons">

            <button class="filter-btn active" data-filter="all">
                All
            </button>

            <button class="filter-btn" data-filter="1">
                Alam
            </button>

            <button class="filter-btn" data-filter="2">
                Budaya
            </button>

            <button class="filter-btn" data-filter="3">
                Flora & Fauna
            </button>

            <button class="filter-btn" data-filter="4">
                People
            </button>

        </div>

    </div>

    <!-- GALLERY -->
    <div class="gallery-content">

        <div class="masonry-grid">

            @foreach($photos as $foto)

            <img src="{{ asset('uploads/' . $foto['file']) }}"
                class="masonry-item"
                data-category="{{ $foto['kategori'] }}">

            @endforeach

        </div>

    </div>

</section>

<!-- ================= FILTER SCRIPT ================= -->
<script>

const buttons = document.querySelectorAll(".filter-btn");
const items = document.querySelectorAll(".masonry-item");

buttons.forEach(btn => {

    btn.addEventListener("click", () => {

        buttons.forEach(b => b.classList.remove("active"));

        btn.classList.add("active");

        let filter = btn.getAttribute("data-filter");

        items.forEach(img => {

            if(filter === "all"){

                img.style.display = "block";

            } else {

                if(img.dataset.category == filter){

                    img.style.display = "block";

                } else {

                    img.style.display = "none";

                }

            }

        });

    });

});

</script>

@endsection