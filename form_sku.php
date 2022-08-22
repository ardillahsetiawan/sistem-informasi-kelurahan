    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>SKU</title>
    </head>

    <body>


        <?php include 'bootstrap/css.php' ?>
        <?php include 'bootstrap/navbar.php' ?>
        <?php include 'form/header.php' ?>


        <div class="row">
            <div style="background: black">
                <br>
                <br>
                <br>
                <br>
            </div>
        </div>




        <div class="bg-contact2" style="background-image: url('./assets/form/images/bg.png');">
            <div class="container-contact2"><br>
                <div class="wrap-contact2">
                    <form class="">
                        <span class="contact2-form-title">
                            Silahkan Isi Formulir
                        </span>
                        <h3>ISI FORM</h3><br>

                        <div class="wrap-input2 validate-input" data-validate="Name is required">
                            <input class="input2" type="text" name="name">
                            <span class="focus-input2" data-placeholder="*NAMA LENGKAP"></span>
                        </div>

                        <div class="wrap-input2 validate-input" data-validate="Name is required">
                            <span class="focus-input2" data-placeholder="*TANGGAL SKU"></span><br>
                            <input type="Date" name="" value="" class="form-control" placeholder="Tempat Lahir">
                        </div>

                        <div class="wrap-input2 validate-input" data-validate="Name is required">
                            <input class="input2" type="text" name="name">
                            <span class="focus-input2" data-placeholder="*JENIS USAHA"></span>
                        </div>

                        <div class="wrap-input2 validate-input" data-validate="Name is required">
                            <input class="input2" type="text" name="name">
                            <span class="focus-input2" data-placeholder="*LUAS TEMPAT"></span>
                        </div>

                        <div class="wrap-input2 validate-input" data-validate="Name is required">
                            <input class="input2" type="text" name="name">
                            <span class="focus-input2" data-placeholder="*STATUS TEMPAT"></span>
                        </div>

                        <div class="wrap-input2 validate-input" data-validate="Message is required">
                            <textarea class="input2" name="message" cols="4" rows="1"></textarea>
                            <span class="focus-input2" data-placeholder="*ALAMAT USAHA"></span>
                        </div>

                        <div class="wrap-input2 validate-input" data-validate="Name is required">
                            <input class="input2" type="text" name="name">
                            <span class="focus-input2" data-placeholder="*KEPERLUAN SURAT USAHA"></span>
                        </div>


                        <h3>UPLOAD PERSYARATAN</h3><br>

                        <div class="wrap-input2 validate-input" data-validate="Name is required">
                            <span class="focus-input2" data-placeholder="*UPLOAD SURAT PENGANTAR RT"></span><br>
                            <input type="file">
                        </div>

                        <div class="wrap-input2 validate-input" data-validate="Name is required">
                            <span class="focus-input2" data-placeholder="*UPLOAD FOTOCOPY KTP"></span><br>
                            <input type="file" value="Pilih Gambar / File">
                        </div>

                        <div class="wrap-input2 validate-input" data-validate="Name is required">
                            <span class="focus-input2" data-placeholder="*UPLOAD FOTOCOPY KARTU KELUARGA"></span><br>
                            <input type="file" value="Pilih Gambar / File">
                        </div>

                        <div class="wrap-input2 validate-input" data-validate="Name is required">
                            <span class="focus-input2" data-placeholder="*UPLOAD TANDA LUNAS PBB TAHUN IZIN BERJALAN"></span><br>
                            <input type="file" value="Pilih Gambar / File">
                        </div>

                        <div class="wrap-input2 validate-input" data-validate="Name is required">
                            <span class="focus-input2" data-placeholder="*SURAT PERJANJIAN SEWA/KONTRAK/PINJAM DENGAN PEMILIK TANAH"></span><br>
                            <input type="file" value="Pilih Gambar / File">
                        </div>



                        <div class="container-contact2-form-btn">
                            <div class="form-group"><br>
                                <button class="btn btn-info">Simpan</button>
                                <button class="btn btn-warning" type="reset">Bersihkan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>








        <?php include 'form/js.php' ?>
        <?php include 'bootstrap/js.php' ?>

    </body>

    </html>