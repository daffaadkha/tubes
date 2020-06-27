@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <div >
            </div>
            <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Posyandu Nimomartani</h2>
                    <hr class="light">
                    <p class="text-justify">
                        Sebagai Kader kami akan menentukan status gizi balita berdasarkan inggi badan : pendek, normal, dan tinggi
Laki-laki :
Pendek : <72cm
Normal : 72-98 cm
Tinggi : >98cm
● Lingkar kepala : kecil, normal, dan besar
Kecil : <44 cm
Normal : 44 - 54 cm
Besar : >54 cm
● Berat badan : kurus, ideal, dan gemuk
Kurus : <8 kg
Ideal : 9 - 19 kg
Gemuk : >19 kg
● Status gizi : buruk, kurang, baik, dan lebih
Buruk : < -3 SD atau 70%
Kurang : ≥ 3 SD sampai < -2 SD atau 80%
Baik : -2 SD sampai +2 SD
● Usia : bayi, batita, dan balita
Bayi : 0-12 bulan
Batita : 12-36 bulan
Balita : 36-60 bulan

                    </p>
                    <a href="#prediksi" class="page-scroll btn btn-default btn-xl sr-button">Tentukan Status Gizi</a>
                </div>
            </div>
        </div>
    </section>

    <section id="prediksi">
  
        <div class="container">
            <div class="row">
            <div class="row" style="margin-bottom: 30px">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Tentukan Status Gizi</h2>
                    <hr class="primary">
                </div>

                <div class="col-lg-6 col-md-4 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-diamond text-primary sr-icons"></i>
                        <h3>Tinggi Badan</h3>
                        <img src="img/kurva_jarak.jpg" class="img-responsive" alt="jarak kos">
                        <p class="text-muted"></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>
                        <h3>Berat Badan</h3>
                        <img src="img/kurva_ukuran.jpg" class="img-responsive" alt="ukuran kamar kos">
                        <p class="text-muted"></p>
                    </div>
                </div>
                </div>
                <div class="col-lg-6 col-md-4 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>
                        <h3>Usia</h3>
                        <img src="img/kurva_harga.jpg" class="img-responsive" alt="harga kos">
                        <p class="text-muted"></p>
                    </div>
                </div>
            </div> 
                
            
            <fieldset>                
                <div class="form-group row">
                    <label class="col-md-4 control-label text-right" for="jarak">Berat Badan</label>
                    <div class="col-md-4">
                        <input id="jarak" name="jarak" type="number" placeholder="Berat Badan" class="form-control input-md">
                    </div>
                    <label class="control-label text-left" for="km">kg</label>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 control-label text-right" for="ukuran">Tinggi Badan</label>
                    <div class="col-md-4">
                        <input id="ukuran" name="ukuran" type="number" placeholder="Tinggi Badan" class="form-control input-md">
                    </div>
                    <label class="control-label text-left" for="m">cm</label>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 control-label text-right" for="ukuran">Usia</label>
                    <div class="col-md-4">
                        <input id="ukuran" name="ukuran" type="number" placeholder="Usia" class="form-control input-md">
                    </div>
                    <label class="control-label text-left" for="m">bulan</label>
                </div>
                <div class="col-lg-6 text-center">
                    <button type="submit" id="proses" class="proses">Status Gizi</button>
                </div>

                <div class="col-lg-6 text-center">
                    <h3 style="display: inline">10 (buruk) -perbanyak ASI</h3>
                    <input type="text" name="hasil" id="hasil" class="hasil" style=" border:none" />
                </div>
                 <!-- <div >
                    <table id="z-result" style="align: center">
                        
                    </table>  
                </div> -->
            </fieldset>
                
            </div>
        </div>
        
    </section>
        </div>
    </div>
</div>
@endsection
