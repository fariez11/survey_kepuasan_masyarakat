@extends('layout.layadmin')
<style type="text/css">
    table tr td {
        padding : 10px 5px 10px 5px;
    }

    .btijo{
        margin-bottom: 10px;
    }
    .nil{
        text-align: center;
    }

    tfoot tr th{
        text-align: center;
    } 

    tfoot tr th.le{
        text-align: left;
    }
    .tbn{
    	clear: both;
	    margin-top: 6px !important;
	    margin-bottom: 6px !important;
	    max-width: none !important;
	    border-collapse: separate !important;
	    border-spacing: 0;
    }
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
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>NIK</th>
                                        <th>U1</th>
                                        <th>U2</th>
                                        <th>U3</th>
                                        <th>U4</th>
                                        <th>U5</th>
                                        <th>U6</th>
                                        <th>U7</th>
                                        <th>U8</th>
                                        <th>U9</th>
                                        <th>TAHUN</th>
                                        <!-- <th>ACT</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach ($data as $key)
                                    <tr>
                                        <td style="width: 18%;">{{$key->JNIK}}</td>
                                        <td class="nil">{{$key->U1}}</td>
                                        <td class="nil">{{$key->U2}}</td>
                                        <td class="nil">{{$key->U3}}</td>
                                        <td class="nil">{{$key->U4}}</td>
                                        <td class="nil">{{$key->U5}}</td>
                                        <td class="nil">{{$key->U6}}</td>
                                        <td class="nil">{{$key->U7}}</td>
                                        <td class="nil">{{$key->U8}}</td>
                                        <td class="nil">{{$key->U9}}</td>
                                        <td style="text-align:center;width: 5%">{{$key->TAHUN}}</td>
                                        <!-- <td>
                                            <a href="#" class="btn btn-sm btn-warning bt" role="button"><i class="fa fa-pencil-square"></i></a>
                                            <br>
                                            <a href="#" class="btn btn-sm btn-danger bt" role="button"><i class="fa fa-trash"></i></a>
                                        </td> -->
                                    </tr>
                                @endforeach
                                </tbody>
                                <?php
                                    $jumlah = DB::table('surveiors')->count();
                                ?>
                                <tfoot>
                                    <tr>
                                        <th class="le">NILAI RATA-RATA</th>
                                        <th><?= ROUND($aa = DB::table('nilais')->SUM('U1')/$jumlah,2) ?></th>
                                        <th><?= ROUND($bb = DB::table('nilais')->SUM('U2')/$jumlah,2) ?></th>
                                        <th><?= ROUND($cc = DB::table('nilais')->SUM('U3')/$jumlah,2) ?></th>
                                        <th><?= ROUND($dd = DB::table('nilais')->SUM('U4')/$jumlah,2) ?></th>
                                        <th><?= ROUND($ee = DB::table('nilais')->SUM('U5')/$jumlah,2) ?></th>
                                        <th><?= ROUND($ff = DB::table('nilais')->SUM('U6')/$jumlah,2) ?></th>
                                        <th><?= ROUND($gg = DB::table('nilais')->SUM('U7')/$jumlah,2) ?></th>
                                        <th><?= ROUND($hh = DB::table('nilais')->SUM('U8')/$jumlah,2) ?></th>
                                        <th><?= ROUND($ii = DB::table('nilais')->SUM('U9')/$jumlah,2) ?></th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                                <tfoot>
                                    <tr>
                                        <th class="le">NRR x 0,11</th>
                                        <th><?= ROUND($a = DB::table('nilais')->SUM('U1')/$jumlah*0.11,2) ?></th>
                                        <th><?= ROUND($b = DB::table('nilais')->SUM('U2')/$jumlah*0.11,2) ?></th>
                                        <th><?= ROUND($c = DB::table('nilais')->SUM('U3')/$jumlah*0.11,2) ?></th>
                                        <th><?= ROUND($d = DB::table('nilais')->SUM('U4')/$jumlah*0.11,2) ?></th>
                                        <th><?= ROUND($e = DB::table('nilais')->SUM('U5')/$jumlah*0.11,2) ?></th>
                                        <th><?= ROUND($f = DB::table('nilais')->SUM('U6')/$jumlah*0.11,2) ?></th>
                                        <th><?= ROUND($g = DB::table('nilais')->SUM('U7')/$jumlah*0.11,2) ?></th>
                                        <th><?= ROUND($h = DB::table('nilais')->SUM('U8')/$jumlah*0.11,2) ?></th>
                                        <th><?= ROUND($i = DB::table('nilais')->SUM('U9')/$jumlah*0.11,2) ?></th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                                <tfoot>
                                    <tr>
                                        <th class="le">NILAI UNSUR</th>
                                        <th><?= $ab = DB::table('nilais')->SUM('U1') ?></th>
                                        <th><?= $bc = DB::table('nilais')->SUM('U2') ?></th>
                                        <th><?= $cd = DB::table('nilais')->SUM('U3') ?></th>
                                        <th><?= $de = DB::table('nilais')->SUM('U4') ?></th>
                                        <th><?= $ef = DB::table('nilais')->SUM('U5') ?></th>
                                        <th><?= $fg = DB::table('nilais')->SUM('U6') ?></th>
                                        <th><?= $gh = DB::table('nilais')->SUM('U7') ?></th>
                                        <th><?= $hi = DB::table('nilais')->SUM('U8') ?></th>
                                        <th><?= $ij = DB::table('nilais')->SUM('U9') ?></th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
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
            <div class="modal-dialog modal-lg" style="">
                <div class="modal-content" style="border-radius: 10px;">
                    <!-- <div class="modal-header">
                        <h5 class="modal-title" id="mediumModalLabel">Hasil SKM</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div> -->
                    <?php
                    
                    ?>
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

@endsection