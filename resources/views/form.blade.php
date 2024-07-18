@extends('layouts.app')

@section('title', 'Form Input')

@section('content')    
<div class="row">
    <div class="col-md-12 my-5">
        <div class="card shadow border-0" style="background-color: #ffe1f2;">
            <div class="card-header text-center" style="background-color: #7d3c98; color: white;">
                <h4 style="font-size: 32px;">SELF REPORTING QUESTIONER 29 (SRQ-29)</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="/result">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 border-end">
                            <div class="card mb-4 border-0">
                                <div class="card-body">
                                    <div class="form-group mb-2">
                                        <label for="name">Nama<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control mt-1" id="name" name="name" required>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="gender">Jenis Kelamin<span class="text-danger">*</span></label>
                                        <div class="form-check mt-2">
                                            <input class="form-check-input" type="radio" name="exampleForm" id="radioExample1" value="Laki-laki" required />
                                            <label class="form-check-label" for="radioExample1">Laki-laki</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleForm" id="radioExample2" value="Perempuan" required />
                                            <label class="form-check-label" for="radioExample2">Perempuan</label>
                                        </div>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="age">Usia<span class="text-danger">*</span></label>
                                        <input type="number" class="form-control mt-1" id="age" name="age" required>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="phone">No HP<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control mt-1" id="phone" name="phone" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-4 border-0">
                                <div class="card-body">
                                    <div class="form-group mb-2">
                                        <label for="address">Alamat<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control mt-1" id="address" name="address" required>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="rt">RT<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control mt-1" id="rt" name="rt" required>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="rw">RW<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control mt-1" id="rw" name="rw" required>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="provinsi">Provinsi<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control mt-1" id="provinsi" name="provinsi" required>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="kabupaten">Kabupaten<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control mt-1" id="kabupaten" name="kabupaten" required>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="kecamatan">Kecamatan<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control mt-1" id="kecamatan" name="kecamatan" required>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="kelurahan">Kelurahan<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control mt-1" id="kelurahan" name="kelurahan" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h5 class="mt-4" style="color: #7d3c98;">Petunjuk</h5>
                    <p>
                        Bacalah petunjuk ini seluruhnya sebelum mulai mengisi. Pertanyaan berikut berhubungan dengan masalah yang mungkin mengganggu Anda selama 30 hari terakhir.
                        Jika Anda tidak yakin tentang jawabannya, berilah jawaban yang paling
                        sesuai di antara Y dan T. Kami tegaskan bahwa jawaban Anda bersifat rahasia dan akan digunakan hanya untuk membantu pemecahan masalah Anda.
                    </p>
                    {{-- <div class="d-flex">
                        <div class="me-5">
                            <label class="text-muted">Apabila ibu menganggap pertanyaan ini dialami selama 30 hari terakhir klik kolom Ya</label>
                        </div>
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                <label class="form-check-label text-muted" for="flexCheckDefault">
                                    Ya
                                </label>
                            </div>
                        </div>
                    </div> --}}
                    @foreach(range(1, 29) as $i)
                        <div class="form-group mt-3">
                            <label>{{ $i }}. {{ $questions[$i-1] }}</label>
                            <div class="ms-3 mt-2">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" style="height:18px; width:18px; vertical-align: middle;"  name="question{{ $i }}" id="question{{ $i }}Y" value="Y" required>
                                    <label class="form-check-label" style="font-size: 15px;margin-top: 3px" for="question{{ $i }}Y">Ya</label>                                    
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" style="height:18px; width:18px; vertical-align: middle;" name="question{{ $i }}" id="question{{ $i }}T" value="T" required>
                                    <label class="form-check-label" style="font-size: 15px;margin-top: 3px" for="question{{ $i }}T">Tidak</label>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="float-end mt-4">
                        <button type="submit" class="btn" style="background-color: #7d3c98; color: white;">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
