@extends('layouts.app')

@section('title', 'Result')

@section('content')
<div class="row">
    <div class="col-12 my-5">
        <div class="card shadow border-0" style="background-color: #ffe1f2;">
            <div class="card-header text-center" style="background-color: #7d3c98; color: white;">
                <h4 class="font-size-32">Result Self Reporting Questioner 29 (SRQ-29)</h4>
            </div>
            <div class="card-body">
                <h5 class="mb-3 border-left" style="color: #7d3c98;">Informasi User</h5>
                <div class="row">
                    <div class="col-md-6 col-12 border-md-end">
                        <div class="card mb-4 border-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 col-5">
                                        Nama
                                    </div>
                                    <div class="col-md-9 col-7">
                                        : {{ $answers['name'] }}
                                    </div>
                                    <div class="col-md-3 col-5 mt-1">
                                        Jenis Kelamin
                                    </div>
                                    <div class="col-md-9 col-7 mt-1">
                                        : {{ $answers['exampleForm'] }}
                                    </div>
                                    <div class="col-md-3 col-5 mt-1">
                                        Usia
                                    </div>
                                    <div class="col-md-9 col-7 mt-1">
                                        : {{ $answers['age'] }}
                                    </div>
                                    <div class="col-md-3 col-5 mt-1">
                                        No.HP
                                    </div>
                                    <div class="col-md-9 col-7 mt-1">
                                        : {{ $answers['phone'] }}
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="card border-0 mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 col-5">
                                        Alamat
                                    </div>
                                    <div class="col-md-9 col-7">
                                        : {{ $answers['address'] }}
                                    </div>
                                    <div class="col-md-3 col-5">
                                        RT
                                    </div>
                                    <div class="col-md-9 col-7">
                                        : {{ $answers['rt'] }}
                                    </div>
                                    <div class="col-md-3 col-5">
                                        RW
                                    </div>
                                    <div class="col-md-9 col-7">
                                        : {{ $answers['rw'] }}
                                    </div>
                                    <div class="col-md-3 col-5">
                                        Provinsi
                                    </div>
                                    <div class="col-md-9 col-7">
                                        : {{ $answers['provinsi'] }}
                                    </div>
                                    <div class="col-md-3 col-5">
                                        Kabupaten
                                    </div>
                                    <div class="col-md-9 col-7">
                                        : {{ $answers['kabupaten'] }}
                                    </div>
                                    <div class="col-md-3 col-5">
                                        Kecamatan
                                    </div>
                                    <div class="col-md-9 col-7">
                                        : {{ $answers['kecamatan'] }}
                                    </div>
                                    <div class="col-md-3 col-5">
                                        Kelurahan
                                    </div>
                                    <div class="col-md-9 col-7">
                                        : {{ $answers['kelurahan'] }}
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
                <hr style="color: black">
                <h5 class="mb-3 border-left" style="color: #7d3c98;">Hasil Penilaian</h5>
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="card border-0 mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-7 col-6">
                                        Total Skor
                                    </div>
                                    <div class="col-md-5 col-6 fw-bolder">
                                        : {{ $score }}
                                    </div>
                                    <div class="col-md-7 col-6">
                                        Masalah GME
                                    </div>
                                    <div class="col-md-5 col-6 fw-bolder">
                                        : {{ $gme_problems ? 'Ya' : 'Tidak' }}
                                    </div>
                                    <div class="col-md-7 col-6">
                                        Penggunaan Zat Psikoaktif/Narkoba
                                    </div>
                                    <div class="col-md-5 col-6 fw-bolder">
                                        : {{ $drug_use ? 'Ya' : 'Tidak' }}
                                    </div>
                                    <div class="col-md-7 col-6">
                                        Gejala Gangguan Psikotik
                                    </div>
                                    <div class="col-md-5 col-6 fw-bolder">
                                        : {{ $psychotic_symptoms ? 'Ya' : 'Tidak' }}
                                    </div>
                                    <div class="col-md-7 col-6">
                                        Gejala Gangguan PTSD
                                    </div>
                                    <div class="col-md-5 col-6 fw-bolder">
                                        : {{ $ptsd_symptoms ? 'Ya' : 'Tidak' }}
                                    </div>
                                </div>
                            </div>
                        </div>    
                        @if($score > 5)
                        <div class="alert alert-warning shadow">
                            <strong><i class="bi bi-exclamation-circle"></i></strong> Segera konsultasikan kepada bidan puskesmas terdekat
                        </div>
                        <div class="card mt-3 bg-light border-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-chat-quote-fill me-2" style="font-size: 24px; color: #7d3c98;"></i>
                                    <p class="mb-0" style="color: #7d3c98;">Jangan pernah merasa bahwa masalah Anda tidak penting, karena setiap perasaan berharga dan layak didengar. Ingatlah, Anda tidak sendirian dalam perjalanan ini.</p>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="alert alert-success shadow">
                            <strong><i class="bi bi-hand-thumbs-up"></i></strong> Selamat Kesehatan mental ibu dalam kondisi Baik
                        </div>
                        <div class="card mt-3 bg-light border-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-chat-quote-fill me-2" style="font-size: 24px; color: #7d3c98;"></i>
                                    <p class="mb-0" style="color: #7d3c98;">Kesehatan mental yang baik adalah kunci untuk mencapai kualitas hidup yang optimal dan kesejahteraan yang berkelanjutan.</p>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="col-md-6 col-12 text-center">
                        <img src="{{ asset('images/doctor.png') }}" alt="Logo" class="img-fluid" style="max-width: 290px;">
                    </div>    
                </div>                           
            </div>
        </div>
    </div>
</div>
@endsection
