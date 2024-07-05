@extends('layout.app')

@section('title', 'Event')

@section('content')
    <div class="row">
        <!--Event-1-->
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <h4 class="card-title">Touring Nusantara 2024</h4>
                        <small class="text-muted">15 - 20 Agustus 2024</small>
                        <p class="card-text">
                            Touring Nusantara adalah salah satu event terbesar yang diadakan oleh Palopo Vespa Club. Pada
                            tahun 2024, kami akan menjelajahi rute yang menantang dan indah dari Palopo menuju Toraja,
                            kemudian melanjutkan perjalanan hingga Makassar. Event ini tidak hanya sekadar perjalanan,
                            tetapi juga merupakan ajang untuk mempererat kebersamaan antar anggota. Selama touring, peserta
                            akan menikmati pemandangan alam yang memukau, mengunjungi tempat-tempat wisata terkenal, dan
                            tentunya, merasakan kehangatan persaudaraan di setiap pemberhentian.
                        </p>
                        <p class="card-text">
                            Setiap peserta diharapkan untuk mempersiapkan diri dengan baik, termasuk memastikan kondisi
                            Vespa dalam keadaan prima. Kami juga akan mengadakan berbagai aktivitas menarik di setiap
                            pemberhentian, seperti lomba foto perjalanan dan kontes keterampilan berkendara.
                        </p>
                    </div>
                    <img class="card-img-bottom img-fluid" src="{{ asset('assets/compiled/jpg/touring.jpg') }}"
                        alt="Card image cap" style="height: 20rem; object-fit: cover;">
                </div>
            </div>
        </div>

        <!--Event-2-->
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <h4 class="card-title">Pameran Vespa Klasik 2024</h4>
                        <small class="text-muted">10 September 2024</small>
                        <p class="card-text">
                            Pameran Vespa Klasik adalah event tahunan yang selalu dinantikan oleh para pecinta Vespa. Pada
                            pameran ini, berbagai model Vespa klasik dan modifikasi dari seluruh Indonesia akan dipamerkan.
                            Event ini menjadi ajang berkumpulnya para pecinta Vespa untuk berbagi cerita, pengalaman, dan
                            pengetahuan tentang skuter legendaris ini. Selain pameran, akan ada berbagai kegiatan menarik
                            seperti kontes modifikasi Vespa, lelang motor klasik, dan sesi berbagi pengalaman dari para ahli
                            Vespa.
                        </p>
                        <p class="card-text">
                            Tidak hanya itu, pengunjung juga bisa menikmati bazar otomotif yang menjual berbagai aksesori
                            dan suku cadang Vespa, serta berbagai stand makanan dan minuman khas Palopo.
                        </p>
                    </div>
                    <img class="card-img-bottom img-fluid" src="{{ asset('assets/compiled/jpg/pameran.jpg') }}"
                        alt="Card image cap" style="height: 20rem; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
@endsection
