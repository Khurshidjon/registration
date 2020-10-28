@extends('layouts.certificate')
@section('content')
@section('title', 'Test natijalari')
    <div class="_215b15">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title125">
                        <div class="titleleft">
                            <div class="ttl121">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('front.home') }}">Bosh sahifa</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('front.certification-center') }}">Sertifikatlash markazi</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Natijalari</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <div class="titleright">
                            <a href="{{ route('front.certification-center') }}" class="blog_link"><i class="uil uil-angle-double-left"></i>Sertifikatlash markaziga qaytish</a>
                        </div>
                    </div>
                    <div class="title126">
                        <h2>Natijalar</h2>
                    </div>
                </div>
            </div>
        </div>
        </div>
    <div class="faq1256">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-6">
                <div class="certi_form rght1528">
                    <div class="test_result_bg">
                        <ul class="test_result_left">
                            <li>
                                <div class="result_dt">
                                    <i class="uil uil-check right_ans"></i>
                                    <p>To'g'ri javoblar<span>(15)</span></p>
                                </div>
                            </li>
                            <li>
                                <div class="result_dt">
                                    <i class="uil uil-times wrong_ans"></i>
                                    <p>Noto'g'ri javoblar<span>(5)</span></p>
                                </div>
                            </li>
                            <li>
                                <div class="result_dt">
                                    <h4>15</h4>
                                    <p>20 tadan</p>
                                </div>
                            </li>
                        </ul>
                        <div class="result_content">
                            <h2>Tabriklaymiz! Hurmatli fuqoro</h2>
                            <p>Siz ushbu sertifikatga ega bo'ldingiz</p>
                            <a href="../../html-imgs/certificate.jpg" class="download_btn" download="w3logo" target="_blank">Sertifikatni yuklab olish</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
