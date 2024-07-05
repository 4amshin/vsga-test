@extends('layout.app')

@section('title', 'Produk Kami')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <!--JUDUL-->
                <div class="card-header">
                    <h5 class="card-title">Produk/Jasa Kami</h5>
                </div>

                <!--BODY-->
                <div class="card-body">
                    <!--List Judul Produk-->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">

                        <!--Touring-->
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="touring-tab" data-bs-toggle="tab" href="#touring" role="tab"
                                aria-controls="touring" aria-selected="false" tabindex="-1">Touring</a>
                        </li>

                        <!--Evenet Otomotif-->
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="event-tab" data-bs-toggle="tab" href="#event" role="tab"
                                aria-controls="event" aria-selected="true">Event Otomotif</a>
                        </li>

                        <!--Workshop-->
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="workshop-tab" data-bs-toggle="tab" href="#workshop" role="tab"
                                aria-controls="workshop" aria-selected="false" tabindex="-1">Workshop</a>
                        </li>

                        <!--Sosial & Amal-->
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="sosial-tab" data-bs-toggle="tab" href="#sosial" role="tab"
                                aria-controls="sosial" aria-selected="false" tabindex="-1">Sosial & Amal</a>
                        </li>
                    </ul>

                    <!--List Deskripsi Produk-->
                    <div class="tab-content" id="myTabContent">
                        <!--Touring-->
                        <div class="tab-pane fade" id="touring" role="tabpanel" aria-labelledby="touring-tab">
                            <p class="my-2">
                                Kami mengadakan berbagai kegiatan touring dan perjalanan jarak jauh yang menguji
                                keterampilan berkendara dan mempererat hubungan antar anggota. Rute-rute yang dipilih selalu
                                menarik dan menantang, memberikan pengalaman yang tak terlupakan bagi setiap peserta.
                            </p>
                        </div>

                        <!--Event Otomotif-->
                        <div class="tab-pane fade active show" id="event" role="tabpanel" aria-labelledby="event-tab">
                            Klub kami rutin menyelenggarakan event dan pameran otomotif yang menampilkan motor-motor klasik,
                            modifikasi, dan teknologi terbaru. Event ini menjadi ajang berkumpulnya pecinta motor dan tempat
                            berbagi pengetahuan serta pengalaman.
                        </div>

                        <!--Workshop-->
                        <div class="tab-pane fade" id="workshop" role="tabpanel" aria-labelledby="workshop-tab">
                            <p class="mt-2">
                                Kami menyediakan workshop dan pelatihan mekanik bagi anggota yang ingin meningkatkan
                                keterampilan dan pengetahuan mereka dalam merawat dan memperbaiki motor. Pelatihan ini
                                diberikan
                                oleh instruktur berpengalaman di bidangnya.
                            </p>
                        </div>

                        <!--Sosial & Amal-->
                        <div class="tab-pane fade" id="sosial" role="tabpanel" aria-labelledby="sosial-tab">
                            <p class="mt-2">
                                Sebagai bentuk tanggung jawab sosial, kami aktif dalam berbagai kegiatan sosial dan amal.
                                Melalui aksi nyata seperti bakti sosial dan donasi, kami berusaha memberikan kontribusi
                                positif bagi masyarakat yang membutuhkan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
