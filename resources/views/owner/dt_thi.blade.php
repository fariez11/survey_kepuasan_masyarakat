@extends('layout.layowner')
<style type="text/css">
    .tab tr td{
        padding: 4px 4px 4px 4px;
    }
</style>
@section('content') 
            
<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="au-card m-b-30">
                    <div class="au-card-inner">
                        <div><h2 style="text-align: center;"><b>LAPORAN HASIL PEREKAPAN NILAI PADA TAHUN INI</b></h2></div>
                        <br>
                        <div style="width: 47%; height:50%;display: inline-grid;">
                            <canvas id="gender" style="display: inline-flex;"></canvas>
                        </div>
                        <div style="width: 47%; height:50%;display: inline-grid;">
                            <canvas id="pendidikan" style="display: inline-grid;"></canvas>
                        </div>
                    </div>
                    <br>
                <center>
                    <button class="btn btn-success btn--small btijo" data-toggle="modal" data-target="#tampil">
                        <!-- <i class="fa fa-e"></i> --> NIlai Mutu
                    </button>
                    <button class="btn btn-success btn--small btijo" data-toggle="modal" data-target="#tampilskm">
                        <!-- <i class="fa fa-e"></i> --> Tampil SKM
                    </button>
                </center>
                </div>
            </div>
        </div> 
    </div>
</div>
                    <?php
                        $jumlah = DB::table('surveiors')->count();

                        $a = DB::table('nilais')->SUM('U1')/$jumlah*0.11;
                        $b = DB::table('nilais')->SUM('U2')/$jumlah*0.11;
                        $c = DB::table('nilais')->SUM('U3')/$jumlah*0.11;
                        $d = DB::table('nilais')->SUM('U4')/$jumlah*0.11;
                        $e = DB::table('nilais')->SUM('U5')/$jumlah*0.11;
                        $f = DB::table('nilais')->SUM('U6')/$jumlah*0.11;
                        $g = DB::table('nilais')->SUM('U7')/$jumlah*0.11;
                        $h = DB::table('nilais')->SUM('U8')/$jumlah*0.11;
                        $i = DB::table('nilais')->SUM('U9')/$jumlah*0.11;
                    ?>
<div class="modal fade" id="tampil" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content" style="border-radius: 10px;width: 102%;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mediumModalLabel">Nilai Mutu</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php
                    $nilai = ROUND(($a+$b+$c+$d+$e+$f+$g+$h+$i),2); 
                    
                    if (($nilai >= 3.5324) && ($nilai <= 4.00)){
                            $ni  = "3,5324 - 4,00";
                            $nik = "88,31 - 100,00";
                            $nh  = "A";
                            $kup = "Sangat Baik";
                        }
                        else if (($nilai >= 3.0644) && ($nilai <= 3.532))
                        {
                            $ni  = "3,0644 - 3,532";
                            $nik = "76,61 - 88,30";
                            $nh  = "B";
                            $kup = "Baik";
                        }
                        else if (($nilai >= 2.60) && ($nilai <= 3.064))
                        {
                            $ni  = "2,60 - 3,064";
                            $nik = "65,00 - 76,60";
                            $nh  = "C";
                            $kup = "Kurang Baik";
                        }
                        else if (($nilai >= 1.00) && ($nilai <= 2.5996))
                        {
                            $ni  = "1,00 - 2,5996";
                            $nik = "25,00 - 64,99";
                            $nh  = "D";
                            $kup = "Tidak Baik";
                        }
                        else
                        {
                            $nilaihuruf = "Tidak Ada";
                        }
                    ?>
                    <div class="modal-body">
                        <center>
                            <table border>
                                <thead style="text-align:center;font-weight: bold;background-color: lightblue;">
                                    <td>NILAI INTERVAL</td>
                                    <td>NILAI INTERVAL KONVERSI</td>
                                    <td style="width: 20px;padding: 10px;">MUTU PELAYANAN</td>
                                    <td>KINERJA UNIT PELAYANAN</td>
                                </thead>
                                <tbody style="text-align:center;font-weight: bold;padding: 0px 20px 0px 20px;">
                                    <td><h2><?= $ni ?></h2></td>
                                    <td><h2><?= $nik ?></h2></td>
                                    <td><h2><?= $nh ?></h2></td>
                                    <td><h2><?= $kup ?></h2></td>
                                </tbody>
                            </table>
                        </center>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle"></i> Tutup</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="tampilskm" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content" style="border-radius: 10px;margin-top: -5px;">
                    <!-- <div class="modal-header">
                        <h5 class="modal-title" id="mediumModalLabel">Hasil SKM</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div> -->
                    <div class="modal-body">
                        <center>
                            <h5><b>
                                INDEK KEPUASAN MASYARAKAT(IKM)<br>
                                DINAS/KANTOR/UNIT/UPT DLHKP<br>
                                KEMENTRIAN/LEMBAGA/PEMERINTAH PROV/ KAB/KOTA KEDIRI <br>
                                BULAN/TRIWULAN/ SEMESTER/.....  TAHUN <?php echo date('Y'); ?>
                            </b></h5>
                            <div style="width:47%;border:2px solid black;padding:5px;display: inline-grid;border-radius: 0px 40px 40px 0px;height: 327px;">
                                <h5><b>NILAI IKM</b></h5>
                                <?php $skm = ROUND(($a+$b+$c+$d+$e+$f+$g+$h+$i)*25,1)?>
                                <font style="font-size: 180px;">{{$skm}}</font>
                            </div>
                            <?php 
                                $P = DB::table('surveiors')
                                            ->where('GENDER','like','P')
                                            ->count();

                                $L = DB::table('surveiors')
                                            ->where('GENDER','like','L')
                                            ->count();

                                $SD = DB::table('surveiors')
                                            ->where('PENDIDIKAN','like','SD')
                                            ->count();

                                $SMP = DB::table('surveiors')
                                            ->where('PENDIDIKAN','like','SMP')
                                            ->count();

                                $SMA = DB::table('surveiors')
                                            ->where('PENDIDIKAN','like','SMA')
                                            ->count();

                                $S1 = DB::table('surveiors')
                                            ->where('PENDIDIKAN','like','S1')
                                            ->count();

                                $S2 = DB::table('surveiors')
                                            ->where('PENDIDIKAN','like','S2')
                                            ->count();

                                $S3 = DB::table('surveiors')
                                            ->where('PENDIDIKAN','like','S3')
                                            ->count();
                            ?>
                            <div style="width:50%;border:2px solid black;padding:5px;display: inline-grid;border-radius: 40px 0px 0px 40px;">
                                <h5>NAMA PELAYANAN : .....</h5>
                                <b>RESPONDEN</b>
                                <table class="tab">
                                    <tr>
                                        <td>JUMLAH </td>
                                        <td>:</td>
                                        <td>{{$jumlah}}</td>
                                        <td>orang</td>
                                    </tr>
                                    <tr>
                                        <td>JENIS KELAMIN </td>
                                        <td>:</td>
                                        <td>L</td><td>= {{$L}} orang / P = {{$P}} orang</td>
                                    </tr>
                                    <tr>
                                        <td>PENDIDIKAN</td>
                                        <td>:</td>
                                        <td>SD</td><td>= {{$SD}} orang</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>SMP</td><td>= {{$SMP}} orang</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>SMA</td><td>= {{$SMA}} orang</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>S1</td><td>= {{$S1}} orang</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>S2</td><td>= {{$S2}} orang</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>S3</td><td>= {{$S3}} orang</td>
                                    </tr>
                                </table>
                                Periode Survei = 01-01-<?php echo date('Y'); ?> s/d 31-12-<?php echo date('Y'); ?>
                            </div>
                            <br>
                            <h8>
                                TERIMA KASIH ATAS PENILAIAN YANG TELAH ANDA BERIKAN <br>
                                MASUKAN ANDA SANGAT BERMANFAAT UNTUK KEMAJUAN UNIT KAMI AGAR TERUS MEMPERAIKI <br>
                                DAN MENINGKATKAN KUALITAS PELAYANAN BAGI MASYARAKAT
                            </h8>
                        </center>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle"></i> Tutup</button>
                    </div>
                </div>
            </div>
        </div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
<script  type="text/javascript">
    <?php 
    $jenkel = DB::select('SELECT GENDER, COUNT(GENDER) as per FROM `surveiors` GROUP BY GENDER'); 
    // $result = mysqli_query($connect, $query)    ;
    // ROUND(COUNT(TAHUN)/(SELECT COUNT(*)FROM surveiors)*100,0)
    ?>
    var ctx = document.getElementById("gender").getContext("2d");
    var data = {
            labels: [<?php foreach($jenkel as $data) { echo '"' . $data->GENDER. '",'; }?>],
            datasets: [
                {
                  label: "Penjualan Smartphone",
                  data: [<?php foreach($jenkel as $data) { echo '"' . $data->per . '",'; }?>],
                backgroundColor: [
                  "lightgreen",
                  "pink"]
                }
                ]
        };

    var myBarChart = new Chart(ctx, {
        type: 'pie',
        data: data,
        options: {
        responsive: true
      }
    }); 

    <?php 
    $pen = DB::select('SELECT PENDIDIKAN , COUNT(PENDIDIKAN) as jum_p FROM surveiors GROUP BY PENDIDIKAN'); 
    // $result = mysqli_query($connect, $query)    ;?>
    var ctx = document.getElementById("pendidikan").getContext("2d");
    var data = {
            labels: [<?php foreach($pen as $dat) { echo '"' . $dat->PENDIDIKAN. '",'; }?>],
            datasets: [
                {
                  label: "Penjualan Smartphone",
                  data: [<?php foreach($pen as $dat) { echo '"' . $dat->jum_p . '",'; }?>],
                backgroundColor: [
                  "grey",
                  "lightgrey",
                  "#b2fcff",
                  "#5edfff",
                  "#3e64ff"]
                }
                ]
        };

    var myBarChart = new Chart(ctx, {
        type: 'pie',
        data: data,
        options: {
        responsive: true
      }
    });
</script>

    
@endsection