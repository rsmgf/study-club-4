<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Models\Student;
use App\Models\Product;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/dashboard', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return view('tampilan');
// });

// // CODE 1
// // Route::get('/home/{nilai}-{value}', function ($nilai, $value) {
// //     return view('tampilan', [
// //         'nilai' => $nilai,
// //         'value' => $value
// //     ]);
// // });

// // Different way to write code 1 you can use '-' or '/' for the variable
// // Route::get('/home/{nilai}/{$value}', function ($nilai, $value) {
// //     return view('tampilan', [
// //         'nilai' => $nilai,
// //         'value' => $value
// //     ]);
// // });

// Route::get('/home/{nama}-{asal_daerah}-{prodi}-{angkatan}', function ($nama, $asal_daerah, $prodi, $angkatan) {
//     return view('tampilan', [
//         'nama' => $nama,
//         'asal_daerah' => $asal_daerah,
//         'prodi' => $prodi,
//         'angkatan' => $angkatan
//     ]);
// });

// //New Section
// Route::get('/dashboard', function () {
//     return view('latihan2.dashboard');
// })->name('dashboard');

// Route::get('/daftar', function () {
//     return view('latihan2.daftar');
// })->name('daftar');

// Route::get('/my/home', function () {
//     return view('ujian.home');
// })->name('my.home');

// Route::get('/my/home/nama', function () {
//     return view('ujian.nama');
// })->name('my.nama');
// Route::get('/my/home/asal', function () {
//     return view('ujian.asal');
// })->name('my.asal');
// Route::get('/my/home/prodi', function () {
//     return view('ujian.prodi');
// })->name('my.prodi');
// Route::get('/my/home/angkatan', function () {
//     return view('ujian.angkatan');
// })->name('my.angkatan');

// Route::get('/students', function () {
//    $students = Student::all();
//    return view("student", ["students" => $students]);
// });

// Route::get('/students/create', function () {
//     Student::create([
//         'nim' => "F1E1",
//         'name' => "Wok",
//         'prodi' => "SisIm",
//         'angkatan' => 2000,
//         'alamat' => "Sotoy"
//        ]); 
// });

// Route::get('/students/update/{id}', function ($id) {
//     Student::find($id)->update([
//         'nim' => "F1E1Update",
//         'name' => "Wok Update",
//         'prodi' => "Sistem Update",
//         'angkatan' => 2000,
//         'alamat' => "Sotoy update"
//        ]); 
//        echo "Data Berhasil $id Diupdate Ngab!";
// });

// Route::get('/students/delete/{id}', function ($id) {
//     Student::find($id)->delete();
//        echo "Data Berhasil $id Dihapus Ngab!";
// });

// Route::get('/products', function () {
//     $products = Product::all();
//     return view("product", ["products" => $products]);
//  });

// Route::get('/products/create', function () {
//     Product::create([
//         'code' => "2",
//         'nama' => "indomie",
//         'deskripsi' => "Mie Goreng Paling enak Paling mantap Paling Paling",
//         'qty' => 20,
//         'price' => 3500000
//        ]);  
// });

// Route::get('/products/update/{id}', function ($id) {
//     Product::find($id)->update([
//         'code' => "2",
//         'nama' => "Mie Sedap",
//         'deskripsi' => "Mie Goreng Paling enak Paling mantap Paling Paling",
//         'qty' => 20,
//         'price' => 3500000
//        ]);  
//        echo "Data Berhasil $id Diupdate Ngab!";
// });

// Route::get('/products/delete/{id}', function ($id) {
//     Product::find($id)->delete();
//        echo "Data Berhasil $id Dihapus Bro!";
// });

Route::resource('/student', StudentController::class);
