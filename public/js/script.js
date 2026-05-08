/* =========================
   JALANKAN SAAT HALAMAN SIAP
========================= */
document.addEventListener("DOMContentLoaded", function () {

    /* =========================
       1. NAVBAR SCROLL EFFECT
    ========================= */
    // Mengubah warna navbar saat di-scroll
    window.addEventListener("scroll", function(){
        const navbar = document.querySelector(".navbar-custom");

        if(window.scrollY > 90){
            navbar.classList.add("navbar-scrolled"); // tambah class
        } else {
            navbar.classList.remove("navbar-scrolled"); // hapus class
        }
    });


    /* =========================
       2. MENU ACTIVE + AUTO SCROLL
    ========================= */
    const navLinks = document.querySelectorAll(".nav-link");

    navLinks.forEach(link => {

        link.addEventListener("click", function(e){

            // ambil href
            const href = this.getAttribute("href");

            // HANYA smooth scroll kalau anchor section
            if(href.startsWith("#")){

                e.preventDefault();

                // hapus active
                navLinks.forEach(l => l.classList.remove("active"));

                // active baru
                this.classList.add("active");

                // target
                const target = document.querySelector(href);

                // scroll
                if(target){

                    target.scrollIntoView({
                        behavior: "smooth"
                    });

                }

            }

        });

});


    /* =========================
       3. FILTER GALLERY
    ========================= */
    const tombolFilter = document.querySelectorAll(".filter-btn");
    const gambarGaleri = document.querySelectorAll(".masonry-item");

    tombolFilter.forEach(tombol => {
        tombol.addEventListener("click", () => {

            // Reset active button
            tombolFilter.forEach(t => t.classList.remove("active"));
            tombol.classList.add("active");

            // Ambil kategori
            const kategori = tombol.dataset.filter;

            gambarGaleri.forEach(gambar => {

                if (kategori === "all" || gambar.dataset.category === kategori) {
                    // Tampilkan gambar
                    gambar.style.display = "block";
                    gambar.style.opacity = 1;
                    gambar.style.transform = "scale(1)";
                } else {
                    // Sembunyikan gambar
                    gambar.style.opacity = 0;
                    gambar.style.transform = "scale(0.9)";

                    setTimeout(() => {
                        gambar.style.display = "none";
                    }, 300);
                }

            });
        });
    });

    function loadGallery(){
    fetch("load_gallery.php")
    .then(res => res.text())
    .then(data => {
        document.querySelector(".masonry-grid").innerHTML = data;
    });
}


    /* =========================
       4. LIGHTBOX (KLIK GAMBAR)
    ========================= */
    const lightbox = document.getElementById("lightbox");
    const lightboxImg = document.getElementById("lightbox-img");

    gambarGaleri.forEach(img => {
        img.addEventListener("click", function(){
            lightbox.style.display = "flex";
            lightboxImg.src = this.src;
        });
    });

    // Klik di luar gambar untuk menutup
    lightbox.addEventListener("click", function(){
        lightbox.style.display = "none";
    });


    /* =========================
       5. PREVIEW
    ========================= */
    /*
    document.getElementById("uploadInput").addEventListener("change", function(e){

    const file = e.target.files[0];

    if(file){
        const reader = new FileReader();

        reader.onload = function(event){

            const img = document.createElement("img");
            img.src = event.target.result;

            document.getElementById("previewContainer").appendChild(img);
        };

        reader.readAsDataURL(file);
    }

});  */


    /* =========================
       6. CHART.JS (GRAFIK)
    ========================= */
    const ctx = document.getElementById("myChart");

    // Cek dulu apakah canvas ada
    if (ctx) {
        new Chart(ctx, {
            type: "pie", // jenis grafik

            data: {
                labels: ["Alam", "Budaya", "Flora & Fauna", "People"],

                datasets: [{
                    label: "Jumlah Foto",
                    data: [2, 2, 5, 10], // data statis

                    backgroundColor: [
                        '#111111',
                        '#444444',
                        '#777777',
                        '#AAAAAA',
                        '#D6D6D6'
                            ]
                }]
            },

            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    }

    /* =========================
       7. upload
    ========================= */
        document.querySelector("form").addEventListener("submit", function(e){
        e.preventDefault();

        let formData = new FormData(this);

        fetch("upload.php", {
            method: "POST",
            body: formData
        })
        .then(res => res.text())
        .then(data => {
            document.getElementById("uploadStatus").innerHTML = data;
        });
    });

    /* =========================
        8. carousel
        ========================= */
    document.addEventListener("DOMContentLoaded", function () {

    const slider = document.getElementById("slider");
    if (!slider) return;

    const items = Array.from(slider.children);
    const gap = 20;

    const cardWidth = items[0].offsetWidth + gap;

    const clonesBefore = items.map(item => item.cloneNode(true));
    const clonesAfter  = items.map(item => item.cloneNode(true));

    clonesBefore.forEach(clone => slider.appendChild(clone));
    clonesAfter.reverse().forEach(clone => slider.insertBefore(clone, slider.firstChild));

    const totalOriginal = items.length;

    slider.scrollLeft = cardWidth * totalOriginal;

    window.slideRight = function () {
        slider.scrollBy({ left: cardWidth, behavior: "smooth" });
    };

    window.slideLeft = function () {
        slider.scrollBy({ left: -cardWidth, behavior: "smooth" });
    };

    slider.addEventListener("scroll", () => {

        const maxScroll = cardWidth * (slider.children.length - totalOriginal);

        if (slider.scrollLeft >= maxScroll) {
            slider.style.scrollBehavior = "auto";
            slider.scrollLeft = cardWidth * totalOriginal;
            slider.style.scrollBehavior = "smooth";
        }

        if (slider.scrollLeft <= 0) {
            slider.style.scrollBehavior = "auto";
            slider.scrollLeft = cardWidth * totalOriginal;
            slider.style.scrollBehavior = "smooth";
        }

    });

});

    

});