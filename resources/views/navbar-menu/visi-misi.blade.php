@extends('layout.app')

@section('title', 'Visi dan Misi')

@section('content')
    <div class="row">
        <div class="col-12 col-md-11">
            <div class="card">
                <!--Title-->
                <div class="card-header">
                    <h4>Visi & Misi</h4>
                </div>

                <div class="card-body">
                    <!--TEKS SINGKAT-->
                    <p>
                        Dengan semangat kebersamaan dan kecintaan terhadap dunia otomotif, kami berkomitmen untuk
                        menciptakan komunitas yang solid dan berkontribusi positif bagi masyarakat melalui berbagai kegiatan
                        dan program yang inspiratif.
                    </p>

                    <!--VISI MISI-->
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <!--VISI-->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    VISI
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample" style="">
                                <div class="accordion-body">
                                    Menjadi klub motor terdepan yang tidak hanya dikenal karena semangat dan kebersamaan
                                    anggotanya, tetapi juga karena kontribusinya dalam menciptakan budaya berkendara yang
                                    aman dan bertanggung jawab di Indonesia.
                                </div>
                            </div>
                        </div>

                        <!--MISI-->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    MISI
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample" style="">
                                <div class="accordion-body">
                                    Misi kami adalah menjalin hubungan yang erat dan solid antar anggota klub melalui
                                    berbagai kegiatan positif dan produktif. Kami mengadakan kegiatan touring dan event
                                    otomotif yang menarik dan bermanfaat bagi anggota serta masyarakat umum. Selain itu,
                                    kami berkomitmen untuk meningkatkan pengetahuan dan keterampilan anggota dalam bidang
                                    mekanik dan keselamatan berkendara. Kami juga berperan aktif dalam kegiatan sosial dan
                                    amal sebagai bentuk tanggung jawab sosial klub. Lebih dari itu, kami mempromosikan
                                    budaya berkendara yang aman, tertib, dan bertanggung jawab di kalangan pengguna motor.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
