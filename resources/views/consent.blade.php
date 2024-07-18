@extends('layouts.app')

@section('content')
<div class="d-flex align-items-center justify-content-center" style="height: 100vh;"> 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-sm-12 pt-4">
            <div id="consentContainer" class="card p-4 shadow-sm bg-purple">
                <div>
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo mx-auto d-block mb-4 img-fluid" style="max-width: 200px;">
                </div>
                <div class="content text-muted">                    
                    <p class="text-justify"><span>Hallo Ibu Cermat !!!</span>
                        Tahukah ibu bahwa gangguan kesehatan mental pada periode perinatal (Masa selama kehamilan, persalinan dan nifas) dapat meningkatkan komplikasi obstetri (kondisi seperti preeklampsia, perdarahan, infeksi, atau masalah dengan letak janin), dan 75% kematian ibu dalam masa perinatal disebabkan oleh komplikasi kedaruratan.
                    </p>
                    <p class="text-justify">
                        Selain itu dampaknya tidak hanya terbatas pada depresi berulang dan peningkatan risiko bunuh diri pada perempuan, tetapi juga mencakup perubahan epigenetik pada bayi, kelahiran prematur, serta gangguan perkembangan kognitif dan emosional yang serius.
                    </p>
                    <p class="text-justify">
                        Yuk kita satukan langkah dalam memperkuat kesadaran akan pentingnya deteksi dini masalah kesehatan mental perinatal, untuk menjaga kesejahteraan ibu dan bayi dengan lebih baik!
                    </p>
                </div>
                <div class="d-flex justify-content-between mt-3">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="agree" onclick="toggleButton()">
                        <label class="form-check-label text-muted" for="agree">Saya setuju</label>
                    </div>
                    <div>
                        <button id="nextButton" class="btn btn-sm next-button text-muted" onclick="proceedToForm()" disabled>
                            Next
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
    

<script>
    function toggleButton() {
        const checkbox = document.getElementById('agree');
        const button = document.getElementById('nextButton');
        button.disabled = !checkbox.checked;
    }

    function proceedToForm() {
        if (document.getElementById('nextButton').disabled) return; // Prevent click if disabled
        showLoading();
        setTimeout(function() {
            window.location.href = '/form';
        }, 2000); // Simulate loading time
    }

    function showLoading() {
        // Implement your loading logic here, e.g., show a loading spinner
        console.log('Loading...');
    }
</script>
@endsection
