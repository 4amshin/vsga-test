@extends('layout.app')

@section('title', 'Gallery')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Galeri</h5>
                </div>
                <div class="card-body">
                    <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                        @for ($i = 1; $i <= 4; $i++)
                            <div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
                                <a href="#">
                                    <img class="w-100 active" src="{{ asset('assets/compiled/jpg/gal-' . ($i) . '.jpg') }}"
                                        data-bs-target="#Gallerycarousel" data-bs-slide-to="0">
                                </a>
                            </div>
                        @endfor
                    </div>

                    <div class="row mt-2 mt-md-4 gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                        @for ($i = 5; $i <= 8; $i++)
                            <div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
                                <a href="#">
                                    <img class="w-100 active" src="{{ asset('assets/compiled/jpg/gal-'.($i).'.jpg') }}"
                                        data-bs-target="#Gallerycarousel" data-bs-slide-to="0">
                                </a>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
