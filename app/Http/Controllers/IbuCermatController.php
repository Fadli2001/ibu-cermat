<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IbuCermatController extends Controller
{

    public function showConsent()
    {
        return view('consent');
    }

    public function showForm()
    {
        $questions = [
            "Apakah Anda sering merasa sakit kepala",
            "Apakah Anda kehilangan nafsu makan",
            "Apakah Tidur Anda tidak nyenyak",
            "Apakah Anda mudah merasa takut",
            "Apakah Anda merasa cemas, tegang, atau khawatir",
            "Apakah tangan Anda gemetar",
            "Apakah Anda mengalami gangguan pencernaan",
            "Apakah Anda merasa sulit berpikir jernih",
            "Apakah Anda merasa tidak bahagia",
            "Apakah Anda lebih sering menangis",
            "Apakah Anda merasa sulit untuk menikmati aktivitas sehari-hari",
            "Apakah Anda mengalami kesulitan untuk mengambil keputusan",
            "Apakah aktivitas/tugas sehari-hari Anda terbengkalai",
            "Apakah Anda merasa tidak mampu berperan dalam kehidupan ini",
            "Apakah Anda kehilangan minat terhadap banyak hal",
            "Apakah Anda merasa tidak berharga",
            "Apakah Anda mempunyai pikiran untuk mengakhiri hidup Anda",
            "Apakah Anda merasa lelah sepanjang waktu",
            "Apakah Anda merasa tidak enak di perut",
            "Apakah Anda mudah lelah",
            "Apakah Anda minum alkohol lebih banyak dari biasanya atau Apakah Anda menggunakan narkoba",
            "Apakah Anda yakin bahwa ada seseorang mencoba mencelakai Anda dengan cara tertentu",
            "Apakah ada yang mengganggu atau hal yang tidak biasa dalam pikiran Anda",
            "Apakah Anda pernah mendengar suara tanpa tahu sumbernya atau yang orang lain tidak dapat dengar",
            "Apakah Anda mengalami mimpi yang mengganggu, tentang suatu bencana/musibah atau adakah saat-saat Anda seolah mengalami kembali kejadian bencana itu?",
            "Apakah Anda menghindari kegiatan, tempat, orang atau pikiran yang mengingatkan Anda akan bencana tersebut",
            "Apakah minat Anda terhadap teman dan kegiatan yang biasa Anda lakukan berkurang",
            "Apakah Anda merasa sangat terganggu jika berada dalam situasi yang mengingatkan Anda akan bencana atau jika Anda berpikir tentang bencana itu",
            "Apakah Anda kesulitan mengalami atau mengekspresikan perasaan Anda"
        ];
    
        return view('form', compact('questions'));
    }
    

    public function showResult(Request $request)
    {
        $answers = $request->all();

        $score = 0;
        $gme_problems = 0;
        $drug_use = false;
        $psychotic_symptoms = false;
        $ptsd_symptoms = false;



        // Calculate score and analyze answers
        foreach ($answers as $key => $answer) {
            if (strpos($key, 'question') === 0) {
                if ($answer == 'Y') {
                    $score++;
                }
            }
        }

        // Check specific criteria
        if ($score >= 5 && $score <= 20) {
            $gme_problems = true;
        }

        if (isset($answers['question21']) && $answers['question21'] == 'Y') {
            $drug_use = true;
        }

        for ($i = 22; $i <= 24; $i++) {
            if (isset($answers['question'.$i]) && $answers['question'.$i] == 'Y') {
                $psychotic_symptoms = true;
                break;
            }
        }

        for ($i = 25; $i <= 29; $i++) {
            if (isset($answers['question'.$i]) && $answers['question'.$i] == 'Y') {
                $ptsd_symptoms = true;
                break;
            }
        }

        return view('result', compact('score', 'gme_problems', 'drug_use', 'psychotic_symptoms', 'ptsd_symptoms', 'answers'));
    }
}
