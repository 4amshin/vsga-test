@extends('layout.app')

@section('title', 'Klien Kami')

@section('content')
    <div class="row">
        <!--Testi-1-->
        <div class="col-xl-4 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-content">
                    <img src="{{ asset('assets/compiled/jpg/testi-1.jpg') }}" class="card-img-top img-fluid" alt="singleminded">
                    <div class="card-body">
                        <h5 class="card-title">Testimoni 1: Andi, Anggota Aktif PVC</h5>
                        <p class="card-text">
                            "Bergabung dengan PVC adalah keputusan terbaik. Kegiatan touring sangat menyenangkan dan saya
                            belajar banyak tentang Vespa. Kebersamaan antar anggota luar biasa."
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!--Testi-2-->
        <div class="col-xl-4 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-content">
                    <img src="{{ asset('assets/compiled/jpg/testi-2.jpg') }}" class="card-img-top img-fluid" alt="singleminded">
                    <div class="card-body">
                        <h5 class="card-title">Testimoni 2: Budi, Pemilik Bengkel Partner PVC</h5>
                        <p class="card-text">
                            "Kerja sama dengan PVC sangat menguntungkan. Event dan workshop mereka tersusun rapi,
                            mendatangkan banyak pelanggan baru. PVC benar-benar profesional dan peduli."
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!--Testi-3-->
        <div class="col-xl-4 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-content">
                    <img src="{{ asset('assets/compiled/jpg/testi-3.jpg') }}" class="card-img-top img-fluid" alt="singleminded">
                    <div class="card-body">
                        <h5 class="card-title">Testimoni 3: Siti, Peserta Event Pameran Vespa Klasik</h5>
                        <p class="card-text">
                            "Pameran Vespa Klasik oleh PVC sangat mengesankan. Event ini penuh dengan kegiatan menarik dan
                            suasananya hangat. Saya merasa diterima dengan baik meskipun bukan anggota."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
