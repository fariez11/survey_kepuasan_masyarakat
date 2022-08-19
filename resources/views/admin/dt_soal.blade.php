@extends('layout.layadmin')

<style type="text/css">
    table tr td {
        padding : 10px 5px 10px 5px;
    }

    textarea.ta{
    display: block;
    width: 100%;
    height: 87px;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    resize: none;
    }

    .bt{
    margin-bottom: 5px;
    }

    .btijo{
        margin-bottom: 10px;
    }
</style>
@section('content')   

    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="au-card m-b-30">
                        <div class="au-card-inner">
                                <?php 
                                     $query = DB::table('soals')->count();
                                ?>
                                @if($query==9)
                                    <button type="button" class="btn btn-success btijo" style="cursor: not-allowed;" disabled>
                                    <i class="fa fa-plus-square"></i> Tambah Soal
                                    </button>
                                @else
                                    <button class="btn btn-success btn--small btijo" data-toggle="modal" data-target="#largeModal">
                                    <i class="fa fa-plus-square"></i> Tambah Soal
                                    </button>
                                @endif


                            <?php
                              $no = 1; 
                            ?>
                            <table id="example" class="table table-striped table-bordered" style="width:100%">

                                <thead>
                                    <tr>
                                        <!-- <th>#</th> -->
                                        <!-- <th>ID</th> -->
                                        <!-- <th>ID_SOAL</th> -->
                                        <th>NO</th>
                                        <th>SOAL</th>
                                        <th>A</th>
                                        <th>B</th>
                                        <th>C</th>
                                        <th>D</th>
                                        <th>ACT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach ($data as $key)
                                    <tr>
                                        <!-- <td>{{$no++}}</td> -->
                                        <!-- <td>{{$key->SURV_ID}}</td> -->
                                        <!-- <td>{{$key->SOAL_ID}}</td> -->
                                        <td style="text-align: center;">{{$key->NO_SOAL}}</td>
                                        <td width="300">{{$key->SOAL}}</td>
                                        <td>{{$key->A}}</td>
                                        <td>{{$key->B}}</td>
                                        <td>{{$key->C}}</td>
                                        <td>{{$key->D}}</td>
                                        <td>
                                           <!--  <a href="#" class="au-btn au-btn--blue au-btn--small  bt" role="button"><i class="fa fa-list-alt"></i></a> -->
                                            <a href="#" class="btn btn-warning bt-sm bt" data-toggle="modal" data-target="#myModal<?= $key['SOAL_ID']; ?>"><i class="fa fa-edit"></i></a>
                                            <!-- <a href="#" class="btn bt-sm btn-danger bt" role="button"><i class="fa fa-trash"></i></a> -->
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

        <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content" style="border-radius: 10px;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mediumModalLabel">Tambah Soal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{url('/soal:tambah')}}" enctype="multipart/form-data">
                          <div class="modal-body">
                                <table>
                                   <!--  <tr>
                                        <td><label><b>ID SOAL</label></td>
                                        <td>:</td>
                                        <td width="350"><input class="form-control" name="id" value="{{$key->SOAL_ID+1}}" readonly=""></td>
                                    </tr> -->
                                    <tr>                            
                                        <td><b>NO SOAL</td>
                                        <td>:</td>
                                        <td width="277"><input class="form-control" name="no" value="{{$key->NO_SOAL+1}}" readonly=""></td>
                                    </tr>
                                    <tr>
                                        <td><b>SOAL</td>
                                        <td>:</td>
                                        <td><textarea class="ta" name="soal" required=""></textarea></td>
                                    </tr>
                                    <tr>
                                        <td><b>PILIHAN A</td>
                                        <td>:</td>
                                        <td><textarea class="ta" name="pa" required=""></textarea></td>
                                  
                                        <td><b>PILIHAN B</td>
                                        <td>:</td>
                                        <td width="277"><textarea class="ta" name="pb" required=""></textarea></td>
                                    </tr>
                                    <tr>
                                        <td><b>PILIHAN C</td>
                                        <td>:</td>
                                        <td width=""><textarea class="ta" name="pc" required=""></textarea></td>
    
                                        <td><b>PILIHAN D</td>
                                        <td>:</td>
                                        <td><textarea class="ta" name="pd" required=""></textarea></td>
                                    </tr>
                                </table>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle"></i> Batal</button>
                              <button type="submit" class="btn btn-primary"><i class="fa fa-check-circle"></i> Simpan</button>
                          </div>
                    </form>
                </div>
            </div>
        </div>
        
        @foreach($data as $key)
        <div class="modal fade" id="myModal<?= $key['SOAL_ID']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content" style="border-radius: 10px;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mediumModalLabel">Edit Soal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php
                    $id = $key['SOAL_ID'];
                    $tampil = DB::table('soals')->where('SOAL_ID','=',$id)->get();
                    ?>
                    @foreach($tampil as $dat)
                    <form action="/soal:edit={{$dat->SOAL_ID}}" enctype="multipart/form-data">
                          <div class="modal-body">
                                <table>
                                    <tr>                            
                                        <td><b>NO SOAL</td>
                                        <td>:</td>
                                        <td width="277"><input class="form-control" name="no" value="{{$dat->NO_SOAL}}" readonly=""></td>
                                    </tr>
                                    <tr>
                                        <td><b>SOAL</td>
                                        <td>:</td>
                                        <td><textarea class="ta" name="soal" required="">{{$dat->SOAL}}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td><b>PILIHAN A</td>
                                        <td>:</td>
                                        <td><textarea class="ta" name="pa" required="">{{$dat->A}}</textarea></td>
                                  
                                        <td><b>PILIHAN B</td>
                                        <td>:</td>
                                        <td width="277"><textarea class="ta" name="pb" required="">{{$dat->B}}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td><b>PILIHAN C</td>
                                        <td>:</td>
                                        <td width=""><textarea class="ta" name="pc" required="">{{$dat->C}}</textarea></td>
    
                                        <td><b>PILIHAN D</td>
                                        <td>:</td>
                                        <td><textarea class="ta" name="pd" required="">{{$dat->D}}</textarea></td>
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

