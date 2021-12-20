@extends('layouts.app')

@section('title', 'Detail Travel')

@section('content')
    <main>
        <section class="section-details-header"></section>
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    Paket Travel
                                </li>
                                <li class="breadcrumb-item active">
                                    Details
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 pl-lg-0 mb-3">
                        <div class="card card-details">
                            <h1>Ubud Bali</h1>
                            <p>
                                Republic Of Indonesia Raya
                            </p>
                            <div class="gallery">
                                <div class="xzoom-container">
                                    <img src="frontend/images/Ubud_detail.jpg" class="xzoom" alt="Ubud"
                                        id="xzoom-default" xoriginal="frontend/images/original/ubud.jpg">
                                </div>
                                <div class="xzoom-thumbs">
                                    <a href="{{ url('frontend/images/original/ubud.jpg') }}">
                                        <img src="{{ url('frontend/images/ubud-item.png') }}" alt="ubud-bali"
                                            class="xzoom-gallery" width="128"
                                            xpreview="{{ url('frontend/images/original/ubud.jpg') }}">
                                    </a>
                                    <a href="{{ url('frontend/images/original/barong.jpg') }}">
                                        <img src="{{ url('frontend/images/barong.jpg') }}" alt="Barong"
                                            class="xzoom-gallery" width="128"
                                            xpreview="{{ url('frontend/images/original/barong.jpg') }}">
                                    </a>
                                    <a href="{{ url('frontend/images/original/pura.jpg') }}">
                                        <img src="{{ url('frontend/images/Pura_kuning.jpg') }}" alt="Pura Kuning"
                                            class="xzoom-gallery" width="128"
                                            xpreview="{{ url('frontend/images/original/pura.jpg') }}">
                                    </a>
                                    <a href="{{ url('frontend/images/original/nature.jpg') }}">
                                        <img src="{{ url('frontend/images/Pura_saraswati.jpg') }}" alt="Pura Saraswati"
                                            class="xzoom-gallery" width="128"
                                            xpreview="{{ url('frontend/images/original/nature.jpg') }}">
                                    </a>
                                    <a href="{{ url('frontend/images/original/kecak.jpg') }}">
                                        <img src="{{ url('frontend/images/Kecak.jpg') }}" alt="kecak"
                                            class="xzoom-gallery" width="128"
                                            xpreview="{{ url('frontend/images/original/kecak.jpg') }}">
                                    </a>
                                </div>
                            </div>
                            <h2>Tentang Wisata</h2>
                            <p>
                                Ubud is a town on the Indonesian island of Bali in Ubud District, located amongst rice
                                paddies and steep ravines in the central foothills of the Gianyar regency. Promoted as an
                                arts and culture centre, it has developed a large tourism industry.
                            </p>
                            <p>
                                Ubud's population of about 112,490 people and receives more than 3 million foreign tourists
                                each year. The area surrounding the town is made up of small farms, rice paddies,
                                agroforestry plantations, and tourist accommodations. As of 2018, more tourists visited Ubud
                                than Denpasar in southern Bali.
                            </p>
                            <div class="features row">
                                <div class="col-md-4 border-left">
                                    <div class="description">
                                        <img src="frontend/images/ic_event.png" alt="icon-event" class="features-icon">
                                        <div class="description">
                                            <h3>Featured Event</h3>
                                            <p>Tari Kecak</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <div class="description">
                                        <img src="frontend/images/ic_language.png" alt="icon-language"
                                            class="features-icon">
                                        <div class="description">
                                            <h3>Language</h3>
                                            <p>Bahasa Indonesia</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <div class="description">
                                        <img src="frontend/images/ic_foods.png" alt="icon-foods" class="features-icon">
                                        <div class="description">
                                            <h3>Food</h3>
                                            <p>Local Food</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-details card-right">
                            <h2>
                                Members are going
                            </h2>
                            <div class="members my-2">
                                <img src="frontend/images/member1.png" alt="member1" class="images-member">
                                <img src="frontend/images/member2.png" alt="member2" class="images-member">
                                <img src="frontend/images/member3.png" alt="member3" class="images-member">
                                <img src="frontend/images/member4.png" alt="member4" class="images-member">
                                <img src="frontend/images/allmembers.png" alt="allmembers" class="images-member">
                            </div>
                            <hr>
                            <h2>
                                Trip Information
                            </h2>
                            <table class="trip-informations">
                                <tr>
                                    <th width="50%">Date of Departure</th>
                                    <td width="50%" class="text-right">
                                        22 Aug, 2020
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Duration</th>
                                    <td width="50%" class="text-right">
                                        4D 3N
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Type</th>
                                    <td width="50%" class="text-right">
                                        Open Trip
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Price</th>
                                    <td width="50%" class="text-right">
                                        $80,00 / Person
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="join-container">
                            <a href="{{ route('checkout') }}" class="btn btn-block btn-join-now mt-3 py2">
                                Join Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="frontend/libraries/xzoom/xzoom.css">
@endpush

@push('addon-script')
    <script src="frontend/libraries/xzoom/xzoom.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.xzoom, .xzoom-gallery').xzoom({
                zoomWidth: 500,
                title: false,
                tint: '#333',
                Xoffset: 15
            });
        });
    </script>
@endpush
