@extends('layout.layadmin')

@section('content')            <!-- BREADCRUMB-->
            

<!-- 
        <section class="au-breadcrumb m-t-75">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <span class="au-breadcrumb-span">You are here:</span>
                                    <ul class="list-unstyled list-inline au-breadcrumb__list">
                                        <li class="list-inline-item active">
                                            <a href="#">Home</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">Data Surveior</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- END BREADCRUMB-->

    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="au-card m-b-30">
                        <div class="au-card-inner">
                            <?php
                              $no = 1; 
                            ?>
                            <table id="example" class="table table-striped table-bordered" style="width:100%">

                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>NIK</th>
                                        <th>TGL SURVEI</th>
                                        <th>TAHUN SURVEI</th>
                                        <th>JAM SURVEI</th>
                                        <th>GENDER</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                               
                                <tbody>
                                     @foreach ($data as $key)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{$key->NIK}}</td>
                                        <td>{{$key->TGL}}</td>
                                        <td>{{$key->TAHUN}}</td>
                                        <td>{{$key->JAM}}</td>
                                        <td>{{$key->GENDER}}</td>
                                        <td style="width: 110px">
                                            <a href="#" class="btn btn-primary btn-sm bt" data-toggle="modal" data-target="#detailModal<?= $key['NIK']; ?>"><i class="fa fa-list-alt"></i></a>
                                            <a href="#" class="btn btn-warning btn-sm bt" data-toggle="modal" data-target="#editModal<?= $key['NIK']; ?>"><i class="fa fa-edit"></i></a>
                                            <a href="/sur:hapus={{$key->NIK}}" class="btn btn-sm btn-danger" onclick="return(confirm('Anda Yakin ?'));"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                              <!--   <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                </tfoot> -->
                            </table>
                        </div>
                    </div>
                </div>
            </div> 
        </div>

        @foreach($data as $key)
        <div class="modal fade" id="detailModal<?= $key['NIK']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content" style="border-radius: 10px;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mediumModalLabel">Detail Surveior</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php
                    $id = $key['NIK'];
                    $tampil = DB::table('surveiors')->where('NIK','=',$id)->get();
                    ?>
                          <div class="modal-body">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">

                                <thead>
                                    <tr>
                                        <th>UMUR</th>
                                        <th>PENDIDIKAN</th>
                                        <th>PERKERJAAN</th>
                                        <th>JENIS PELAYAN</th>
                                    </tr>
                                </thead>
                                     @foreach ($tampil as $dat)
                                    <tr>
                                        <td>{{$dat->UMUR}}</td>
                                        <td>{{$dat->PENDIDIKAN}}</td>
                                        <td>{{$dat->PEKERJAAN}}</td>
                                        <td>{{$dat->JENIS}}</td>
                                    </tr>
                                @endforeach
                            </table>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle"></i> Tutup</button>
                          </div>
                </div>
            </div>
        </div>
        @endforeach

        @foreach($data as $key)
        <div class="modal fade" id="editModal<?= $key['NIK']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content" style="border-radius: 10px;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mediumModalLabel">Edit Surveior</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php
                    $id = $key['NIK'];
                    $tampil = DB::table('surveiors')->where('NIK','=',$id)->get();
                    ?>
                    @foreach($tampil as $dat)
                    <form action="/sur:edit={{$dat->NIK}}" enctype="multipart/form-data">
                          <div class="modal-body">
                            <style type="text/css">
                                td{
                                    padding: 5px;
                                }
                            </style>
                                <table>
                                    <tr>                            
                                        <td><b>NIK</td>
                                        <td>:</td>
                                        <td width="277"><input class="form-control" name="nik" value="{{$dat->NIK}}" readonly=""></td>
                                    </tr>
                                    <tr>                            
                                        <td><b>GENDER</td>
                                        <td>:</td>
                                        <td width="277">
                                            <select class="form-control" name="gen">
                                                <option>{{$dat->GENDER}}</option>    
                                                <option>L</option>   
                                                <option>P</option>   
                                            </select> 
                                        </td>
                                    </tr>
                                    <tr>                            
                                        <td><b>UMUR</td>
                                        <td>:</td>
                                        <td width="277"><input type="number" class="form-control" name="age" value="{{$dat->UMUR}}"></td>
                                    </tr>
                                    <tr>                            
                                        <td><b>PENDIDIKAN</td>
                                        <td>:</td>
                                        <td width="277">
                                            <select class="form-control" name="pen">
                                                <option>{{$dat->PENDIDIKAN}}</option>
                                                <option>SD</option>
                                                <option>SMP</option>
                                                <option>SMA</option>
                                                <option>S1</option>
                                                <option>S2</option>
                                                <option>S3</option>
                                            </select><!-- <input class="form-control" name="pen" value="{{$dat->PENDIDIKAN}}"> -->
                                        </td>
                                    </tr>
                                    <tr>                            
                                        <td><b>PEKERJAAN</td>
                                        <td>:</td>
                                        <td width="277"><select class="form-control" name="pek">
                                                <option>{{$dat->PEKERJAAN}}</option>    
                                                <option>PNS</option>    
                                                <option>TNI</option>    
                                                <option>POLRI</option>    
                                                <option>SWASTA</option>    
                                                <option>WIRASWASTA</option>    
                                                <option>LAINNYA</option>    
                                            </select> </td>
                                    </tr>
                                    <tr>                            
                                        <td><b>JENIS PELAYANAN</td>
                                        <td>:</td>
                                        <td width="277">
                                            <select class="form-control" name="jen">
                                                <option>{{$dat->JENIS}}</option>    
                                                <option>KTP</option>    
                                                <option>Akta Kelahiran</option>    
                                                <option>Sertifikat</option>    
                                                <option>Poli Umum</option>    
                                            </select> 
                                        </td>
                                    </tr>
                                </table>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle"></i> Batal</button>
                              <button type="submit" class="btn btn-primary"><i class="fa fa-check-circle"></i> Ubah</button>
                          </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
        @endforeach

 
    
@endsection