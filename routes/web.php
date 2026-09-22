<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Gemini\Laravel\Facades\Gemini;
use Gemini\Data\Blob;
use Gemini\Enums\MimeType;
use Gemini\Enums\ResponseMimeType;
use Gemini\Data\GenerationConfig;
use PhpOffice\PhpWord\TemplateProcessor;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-ai', function () {
    $result = Gemini::generativeModel(model: 'gemini-3.6-flash')->generateContent('Halo Gemini, apakah Laravel sudah terhubung?');
    return $result->text();
});

Route::get('/test-ai-json', function () {
    // Pastikan kedua gambar sudah disimpan di folder public/images/
    $imagePath1 = public_path('images/transfer1.jpg'); // Gambar pertama (BNI)
    $imagePath2 = public_path('images/transfer2.jpg'); // Gambar kedua (BCA)

    if (!file_exists($imagePath1) || !file_exists($imagePath2)) {
        return "Pastikan file transfer1.jpg dan transfer2.jpg sudah ada di folder public/images/";
    }

    // Ubah gambar menjadi Blob
    $blob1 = new Blob(mimeType: MimeType::IMAGE_JPEG, data: base64_encode(file_get_contents($imagePath1)));
    $blob2 = new Blob(mimeType: MimeType::IMAGE_JPEG, data: base64_encode(file_get_contents($imagePath2)));

    // Instruksi/Prompt untuk mengekstrak data ke format JSON
    $prompt = 'Analisis kedua bukti transfer di atas. Ekstrak informasi dari masing-masing gambar ke dalam format JSON berupa array of objects dengan struktur kunci berikut:
    - "bank" (nama bank pengirim/penerima yang tertera)
    - "nama_pengirim" (nama lengkap orang yang melakukan transaksi)
    - "nominal" (angka nominal uang saja atau berformat rupiah)
    - "tanggal_datetime" (tanggal dan waktu transaksi, ubah ke format standar YYYY-MM-DD HH:MM:SS jika memungkinkan)

    Berikan hanya output JSON yang valid tanpa teks pembuka atau penutup.';

    // Kirim ke Gemini dengan GenerationConfig untuk memaksa format JSON
    $result = Gemini::generativeModel(model: 'gemini-3.6-flash')
        ->withGenerationConfig(new GenerationConfig(
            responseMimeType: ResponseMimeType::APPLICATION_JSON
        ))
        ->generateContent([
            $blob1,
            $blob2,
            $prompt
        ]);

    // Set header agar output langsung terbaca sebagai JSON di browser
    return response($result->text(), 200, ['Content-Type' => 'application/json']);
});

Route::get('/generate-doc', function () {
    $templatePath = storage_path('app/templates/template.docx');

    if (!file_exists($templatePath)) {
        return "File template.docx tidak ditemukan!";
    }

    $templateProcessor = new TemplateProcessor($templatePath);

    // Mengisi placeholder sesuai dengan yang ada di file Word Anda
    $templateProcessor->setValue('nama', 'Budi Santoso');
    $templateProcessor->setValue('jabatan', 'SEKRETARIS YAYASAN');
    $templateProcessor->setValue('instansi', 'YAYASAN PENELITI KEWIRAUSAHAAN MANAJEMEN DAN INDUSTRI');

    $fileName = 'Surat_Keputusan_' . time() . '.docx';
    $pathToSave = storage_path('app/public/' . $fileName);

    $templateProcessor->saveAs($pathToSave);

    return response()->download($pathToSave)->deleteFileAfterSend(true);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
