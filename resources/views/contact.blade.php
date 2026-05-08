@extends('layout.app')

@section('content')

<!-- ================= CONTACT ================= -->
<section id="contact" class="contact-section">

    <div class="contact-container">

        <!-- TITLE -->
        <div class="contact-title">

            <span>RuangPandang</span>

            <h2>
                Mari berbincang <br>
                bersama kami
            </h2>

        </div>

        <!-- FORM -->
        <form class="contact-form">

            <!-- ROW -->
            <div class="contact-row">

                <input type="text"
                       placeholder="Nama kamu">

                <input type="email"
                       placeholder="Email">

            </div>

            <!-- ROW -->
            <div class="contact-row">

                <input type="text"
                       placeholder="Subjek">

                <input type="text"
                       placeholder="Nomor Telepon">

            </div>

            <!-- MESSAGE -->
            <textarea placeholder="Tulis pesanmu di sini"></textarea>

            <!-- BUTTON -->
            <button type="submit">

                Kirim Pesan

            </button>

        </form>

    </div>

</section>

@endsection