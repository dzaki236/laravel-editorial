<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    {{-- @include('css') --}}
    <style>
        .msg {
            display: none;
        }

        body {
            margin: 0;
            padding: 0;
        }

        .flipbook-viewport {
            position: absolute;
            left: -22em;
            width: 100%;
        }

        @media only screen and (max-width: 768px) {
            .flipbook-viewport {
                display: none;
            }

            .msg {
                display: block;
            }

        }

    </style>
    <title>Editorial Text</title>
</head>

<body>
    <p class="msg">For Desktop Only! Or Screen size > 720</p>
    {{-- KOnten Pembuka --}}
    <div class="jumbotron jumbotron-fluid">
        <div class="accordion m-4" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left text-decoration-none" type="button" data-toggle="collapse"
                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Text Editorial </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                    data-parent="#accordionExample">
                    <div class="card-body w-75">
                        <h2>Pengertian Text Editorial</h2>
                        <hr>
                        <p style="text-indent: 1em;"><span class="h2">T</span>eks editorial adalah sebuah
                            artikel yang biasa dimuat di
                            majalah ataupun surat kabar. Isi dari teks ini adalah pandangan atau pendapat yang berasal
                            dari penulis mengenai isu yang terjadi di lingkungan sekitar.Isu ini bisa dari berbagai
                            bidang, mulai dari kesehatan, kecantikan, politik, hingga pendidikan. Teks editorial ini
                            akan terbit setiap hari di koran atau majalah.
                            Pada penulisan teks editorial tidak boleh sembarangan, melainkan harus memenuhi peraturan
                            yang berlaku. Mulai dari struktur penulisan, kaidah, hingga fungsinya.
                        </p>
                        <p style="text-indent: 1em;"><span class="h2">S</span>elain itu dalam penulisan teks
                            editorial, harus dilengkapi dengan argumen yang logis, fakta, dan juga bukti yang nyata.
                            Sehingga dalam penulisan teks ini tergolong nyata adanya, bukan mengada – ada.
                            Teks editorial sangat mudah dikenali ciri dan strukturnya. Dalam teks editorial akan
                            mengulas tentang peristiwa yang sedang terjadi di lingkungan. Artinya adalah isu yang
                            dibahas selalu baru.Kemudian teks editorial ini memiliki sifat yang logis dan sistematis.
                            Artinya pendapat yang dikatakan sesuai dengan fakta yang ada. Sehingga bukanlah isapan
                            jempol belaka.

                            Kemudian teks editorial menggunakan tajuk rencana yang bersifat argumentatif.

                            Sehingga semua isi dari teks tersebut membahas mengenai argumen penulis. Lalu dalam
                            penulisan teks ini menggunakan bahasa baku yang padat, jelas, dan juga singkat.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed text-decoration-none" type="button" data-toggle="collapse"
                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Tajuk Rencana
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                    data-parent="#accordionExample">
                    <div class="card-body w-75">
                        <h2>Apa Itu Tajuk Rencana</h2>
                        <hr>
                        <p style="text-indent: 1em;"><span class="h2">T</span>ajuk rencana adalah ulasan
                            penulis terhadap isu yang sedang hangat di masyarakat secara menyeluruh. Jenis tulisan
                            non-fiktif yang satu ini biasa dijumpai di surat kabar, ditulis oleh pemimpin redaksi
                            ataupun editor media tersebut. Karena umumnya ditulis di surat kabar dan dilakukan oleh sang
                            editor, tajuk rencana dikenal pula dengan sebutan editorial.
                        </p>
                        <p style="text-indent:1em;">
                            <span class="h2">I</span>si dari tajuk rencana merupakan penggabungan dari fakta
                            yang ada di lapangan serta opini
                            dari sang penulis. Tujuan penulisannya adalah untuk menginformasikan, menyimpulkan, dan jika
                            mampu memberikan solusi atas permasalahan yang sedang diperbincangkan.Pengupasan isu secara
                            menyeluruh dimaksudkan juga untuk memengaruhi para pembaca agar ikut berpikir soal topik
                            tersebut. Karena hal itu pula, selalu ditampilkan masalah secara kronologis agar pembaca
                            yang belum mengetahui persoalannya juga dapat mengerti dan terlibat dalam pemikiran yang
                            disampaikan.
                        </p>
                        <hr>
                        <div>
                            <h2>Struktur Tajuk Rencana</h2>
                            <ul>
                                <li>Judul</li>
                                <li>Latar Belakang Masalah</li>
                                <li>Persoalan</li>
                                <li>Opini</li>
                                <li>Saran</li>
                                <li>Kesimpulan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed text-decoration-none" type="button" data-toggle="collapse"
                            data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Opini Berita </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                    data-parent="#accordionExample">
                    <div class="card-body w-75">
                    <h2>Apa Itu Opini Berita</h2>
                    <hr>
                        <p style="text-indent: 1em;"><span class="h2">M</span>enurut Kamus Besar Bahasa Indonesia (KBBI), fakta adalah hal
                            (keadaan, peristiwa) yang merupakan kenyataan. Sesuatu yang benar-benar ada atau terjadi.
                            Sementara opini adalah pendapat, pikiran, atau pendirian.
                            Dikutip situs Kementerian Pendidikan dan Kebudayaan (Kemendikbud), fakta merupakan sesuatu yang benar-benar terjadi dan pernyataan yang tidak terbantah lagi kebenarannya.
                            Kalimat yang berisi fakta merupakan kalimat yang ditulis berdasarkan kenyataan, peristiwa, suasana yang benar-benar terjadi dan obyektif.
                        </p>
                        <br>
                        <div>
                            <h2>Ciri Dan Fakta Opini</h2>
                            <div>
                                <br>
                                <ul><li><h5 style="font-weight: bold;">Memiliki data akurat</h5></li></ul>
                                <p style="text-indent: 1em;"><span class="h4">P</span>ada kalimat fakta data yang terdapat jelas terhadap suatu peristiwa. Tidak hanya akurat tapi juga tepat. Dalam kalimat data tersebut dapat berupa bilangan statistik, tanggal dan waktu kejadian.</p>
                                <br>
                                <ul><li><h5 style="font-weight: bold;">Bersifat obyektif</h5></li></ul>
                                <p style="text-indent:1em;"><span class="h4">D</span>alam kalimat fakta yang tertulis bersifat obyektif. Di mana pernyataan yang ada di dalamnya bersifat umum dan telah diakui kebenarannya oleh banyak pihak.</p>
                                <br>
                                <ul><li><h5 style="font-weight: bold;">Bener-benar terjadi</h5></li></ul>
                                <p style="text-indent:1em;"><span class="h4">D</span>alam kalimat faktar benar-benar terjadi. Jadi memaparkan situasi yang benar-benar terjadi dan nyata. Berikut ciri-ciri kalimat opini:</p>
                                <br>
                                <ul><li><h5 style="font-weight: bold;">Mengandung pendapat pribadi atau orang lain</h5></li></ul>
                                <p style="text-indent:1em;"><span class="h4">D</span>alam kalimat opini berisi tentang pendapat dari diri sendiri atau orang lain. Biasanya itu dalam sebuah berita ditemukan pernyataan orang-orang yang terkenal atau pejabat.</p>
                                <br>
                                <ul><li><h5 style="font-weight: bold;">Bersifat subyektif</h5></li></ul>
                                <p style="text-indent:1em;"><span class="h4">P</span>ada kalimat opini bersifat subyektif. Di mana kalimat yang disampaikan cenderung subyektif, hanya dikemukakan oleh salah satu pihak saja.</p>
                                <br>
                                <ul><li><h5 style="font-weight: bold;">Punya kata yang bersifat relatif</h5></li></ul>
                                <p style="text-indent:1em;"><span class="h4">P</span>ada kalimat opini cenderung akan ditemukan kata yang bersifat relatif. Dalam hal ini relatif diartikan kata atau frasa tersebut cenderung bisa berubah tergantung siapa yang mengucapkannya. Kata-kata relatif seperti, paling, lebih, agak, sangat, tidak mungkin atau biasanya.ada kalimat opini bersifat subyektif. Di mana kalimat yang disampaikan cenderung subyektif, hanya dikemukakan oleh salah satu pihak saja.</p>
                            </div>
                            <hr>
                            <p>Simpulan</p>
                            <p>Teks editorial adalah teks yang berisi pendapat pribadi seseorang terhadap suatu isu/masalah aktual. Isu tersebut meliputi masalah politik, sosial, atau pun masalah ekonomi yang memiliki hubungan secara signifikan dengan politik.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Konten Koran nya! --}}
    <h2 class="text-center h1"> Contoh Text Editorial Interaktif</h2>
    <hr class="m-4">
    <div class="flipbook-viewport m-4" style="font-weight: 10em">
        
        <div class="container">
            <div class="flipbook">

                <div style="background-image: url('https://ebooks.gramedia.com/ebook-covers/1498/image_highres/ID_KOMPAS2020MTH08DT07.jpg'); background-size:100%; background-position-y:-15em; ">
                </div>

                <div class="bg-white p-4">
                    <div class="row mt-2">
                        <div class="col-12 text-center">
                            <h1 style="font-family: 'Times New Roman', Times, serif"><b>Berpulangnya Pahlawan
                                    Kemanusiaan</b></h1>
                            <sub>Radar Harian Covid</sub>
                        </div>
                    </div>
                    <hr>
                    <div class="row"
                        style="font-family: Arial, Helvetica, sans-serif; font-size:14px; color:rgb(34, 17, 0);">
                        <div class="col-4">
                            <p class="m-2"><span class="h2">J</span>umlah tenaga medis yang
                                meninggal selama menangani Covid-19 terus bertambah. Mereka
                                bekerja keras melawan pandemi, mengesampingkan kepentingan pribadi demi kemanusiaan.
                                Kematian tenaga medis tersebut berkaitan dengan kebijakan pemerintah dan kepatuhan
                                masyarakat terhadap protokol kesehatan.
                            </p>
                        </div>
                        <div class="col-4 mt-4">
                            <img src="data:image/jpeg;base64,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"
                                class="img-thumbnail" alt="..." width="300em">

                            <img src="data:image/jpeg;base64,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"
                                class="img-thumbnail" alt="..." width="300em">

                        </div>
                        <div class="col-4">
                            <p class="m-2">Terhitung per Kamis 15 Oktober 2020, Ikatan Dokter Indonesia (IDI)
                                mencatat ada total 136 dokter meninggal akibat <span class="h5">Covid
                                    19</span> Terdiri dari 71 dokter umum, 63
                                dokter spesialis, dan dua dokter residen. Tersebar dari 18 wilayah provinsi dan 66
                                wilayah kota/kabupaten. Padahal tenaga medis yang menangani tidak hanya dokter saja. Ada
                                perawat dan bagian-bagian lain yang menjadi satu kesatuan tim medis. Hingga 10 November
                                2020, tercatat 323 tenaga medis meninggal.
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="row"
                        style="font-family: Arial, Helvetica, sans-serif; font-size:14px; color:rgb(34, 17, 0);">
                        <div class="col m-1">
                            <p class=""><span class=" h2">T</span>enaga medis merupakan aset negara. Bila nyawa tenaga
                                medis terus berkurang, maka penanganan pandemi akan semakin sulit. Terlepas dari
                                angka-angka, setiap nyawa yang hilang tidak dapat tergantikan oleh keluarga yang
                                ditinggalkan.
                            </p>
                        </div>
                        <div class="col m-2">
                            <p><span class="h2">J</span>umlah kematian tenaga medis yang terus meningkat,
                                indikasi bahwa pemerintah dan masyarakat kurang berempati pada perjuangan mereka. Bila
                                kebijakan tidak dibenahi, serta kepatuhan masyarakat terus menurun, berapa banyak lagi
                                tenaga medis yang harus gugur.</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12 m-2">
                            <h1 class="text-center" style="font-family: 'Times New Roman', Times, serif"><b>Huru-hara
                                    Vaksin Covid-19</b></h1>
                            <div
                                style="font-family: Arial, Helvetica, sans-serif; font-size:14px; color:rgb(34, 17, 0);">
                                <p><span class="h2">S</span>atuan Tugas (Satgas) Penanganan Covid-19,
                                    pemerintah, dan peneliti seharusnya berkoordinasi dengan baik dalam menyampaikan
                                    informasi ke publik. Petengahan tahun lalu kita sempat mendengar bahwa pemerintah
                                    menjanjikan vaksin pada November 2020. Sementara penelitian dan percobaan vaksin
                                    masih terus berjalan, dan belum dapat dipastikan pengaplikasiannya ke manusia.
                                    Publik diombang-ambingkan.</p>
                                <p>Organisasi Kesehatan Dunia (WHO) sampai saat ini belum menganjurkan pemberian vaksin
                                    karena memang penelitian terhadap vaksin belum juga usai. Hal tersebut dibenarkan
                                    oleh juru bicara Satuan Tugas Penanganan Covid-19, Iku Adisasmito. Ia meminta
                                    masyarakat untuk sabar menanti vaksin Covid-19.</p>
                                <p>Pemerintah mungkin bermaksud baik, menyampaikan janji soal vaksin agar masyarakat
                                    tidak panik. Namun penyampaian informasi atau janji ke publik tetap harus
                                    berdasarkan fakta di lapangan. Ketidakselarasan antara ujaran pemerintah dengan
                                    satgas dan para peneliti, mengindikasikan kurangnya koordinasi dan komunikasi.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white"><img src="http://www.umm.ac.id/files/image/slip086.jpg" width="800em"
                        alt=""><img src="https://kambinglaut.files.wordpress.com/2008/03/koran.jpg"
                        class="w-50" alt=""></div>
                <div
                    style="background-image: url('https://i.pinimg.com/originals/57/5f/de/575fdea9bc076d42dba5bb074a1bd194.jpg'); background-size:cover;">
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script> --}}
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>

    @include('js')
    <script type="text/javascript">
        function loadApp() {

            // Create the flipbook

            $('.flipbook').turn({
                // Width

                width: 820 * 2,

                // Height

                height: 500 * 2,

                // Elevation

                elevation: 50 * 2,

                // Enable gradients

                gradients: true,

                // Auto center this flipbook

                //         autoCenter: true

            });
            $('.flipbook').turn('zoom');
        }
        yepnope({
            test: Modernizr.csstransforms,
            yep: ["{{ asset('lib/turn.js') }}"],
            nope: ["{{ asset('lib/turn.html4.min.js') }}"],
            complete: loadApp
        });
    </script>
</body>

</html>
