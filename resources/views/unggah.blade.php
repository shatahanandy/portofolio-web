@extends('layout.app')

@section('content')

<!-- ================= UPLOAD FOTO ================= -->
<section class="upload-section">

    <div class="upload-container">

        <form class="upload-form">

            <!-- KIRI -->
            <div class="left-upload">

                <label class="upload-box">

                    <input type="file"
                           name="foto"
                           id="fotoInput"
                           hidden>

                    <div class="upload-content">

                        <i class="bi bi-cloud-arrow-up"></i>

                        <h5>Pilih file atau seret ke sini</h5>

                        <p>
                            Gunakan file JPG / PNG berkualitas tinggi
                        </p>

                    </div>

                </label>

                <button type="button" class="url-btn">
                    Simpan dari URL
                </button>

            </div>

            <!-- KANAN -->
            <div class="right-form">

                <!-- JUDUL -->
                <div class="form-group-custom">

                    <label>Judul</label>

                    <input type="text"
                           class="custom-input"
                           placeholder="Tambahkan judul">

                </div>

                <!-- KATEGORI -->
                <div class="form-group-custom">

                    <label>Kategori</label>

                    <select class="custom-input">

                        <option>Alam</option>
                        <option>Budaya</option>
                        <option>Flora & Fauna</option>
                        <option>People</option>

                    </select>

                </div>

                <!-- BUTTON -->
                <button type="submit"
                        class="upload-btn">

                    Upload Foto

                </button>

            </div>

        </form>

    </div>

</section>

<!-- ================= SCRIPT ================= -->
<script>

const fileInput = document.querySelector('#fotoInput');

const uploadText = document.querySelector('.upload-box p');

fileInput.addEventListener("change", function () {

    if(this.files.length > 0){

        uploadText.textContent = this.files[0].name;

    }

});

</script>

@endsection