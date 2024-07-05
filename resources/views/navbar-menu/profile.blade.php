@extends('layout.app')

@section('title', 'Profile')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Profile Kami</h4>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="basicInput">Nama Klub</label>
                        <input type="text" class="form-control" id="basicInput" value="PVC (Palopo Vespa Club)" disabled>
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Lokasi</label>
                        <input type="text" class="form-control" id="basicInput" value="Kota Palopo" disabled>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="basicInput">Tahun Berdiri</label>
                        <input type="text" class="form-control" id="basicInput" value="1980" disabled>
                    </div>
                    <div class="form-group">
                        <label for="basicInput">Jumlah Member</label>
                        <input type="text" class="form-control" id="basicInput" value="55" disabled>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h5>Palopo Vespa Club (PVC)</h5>
                </div>
                <div class="card-body">
                    PVC (Palopo Vespa Club) adalah komunitas pecinta Vespa yang berdiri sejak [Tahun Berdiri] di Palopo,
                    Sulawesi Selatan. Kami mengadakan berbagai kegiatan seperti touring, event otomotif, workshop, dan
                    kegiatan sosial. Dengan semangat kebersamaan, kami berkomitmen untuk memberikan kontribusi positif bagi
                    masyarakat dan mempromosikan budaya berkendara yang aman dan tertib.
                    <br><br>
                    <strong>Pengalaman Club</strong><br>
                    Sejak berdiri, kami telah mengadakan berbagai kegiatan dan event yang melibatkan ribuan peserta.
                    Beberapa pengalaman penting kami meliputi:
                    <ul>
                        <li>Mengadakan touring lintas provinsi dengan rute yang menantang dan indah.</li>
                        <li>Menyelenggarakan pameran otomotif yang menampilkan motor-motor klasik dan modifikasi.</li>
                        <li>Melakukan kegiatan amal seperti bakti sosial dan donasi untuk masyarakat yang membutuhkan.</li>
                        <li>Mengadakan workshop dan pelatihan mekanik yang diikuti oleh ratusan peserta.</li>
                    </ul>
                    <br>
                    <strong>Kelebihan Club</strong><br>
                    <ol>
                        <li>Kebersamaan dan Solidaritas: Kami menjunjung tinggi nilai kebersamaan dan
                            solidaritas antar anggota.</li>
                        <li>Profesionalisme: Dalam setiap kegiatan, kami selalu mengedepankan
                            profesionalisme dan keselamatan.</li>
                        <li>Kegiatan Variatif: Kami menyediakan berbagai kegiatan yang menarik dan
                            bermanfaat bagi anggota.</li>
                        <li>Kontribusi Sosial: Kami aktif dalam berbagai kegiatan sosial sebagai bentuk
                            tanggung jawab kepada masyarakat.</li>
                        <li>Pengembangan Anggota: Kami berkomitmen untuk terus mengembangkan kemampuan dan
                            pengetahuan anggota dalam bidang otomotif.</li>
                    </ol>

                </div>
            </div>
        </div>
    </div>
@endsection
