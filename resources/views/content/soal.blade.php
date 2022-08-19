@extends('layout.layhome')

@section('content')

<style type="text/css">
    input{
        margin-left: 20px; 
        margin-right: 5px;
        width: 17px;
        height: 17px;
    }
</style>

   <div class="main-content" style="padding-top: 10px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="au-card"  style="background: rgba(251,251,251,0.9);">
                        <form action="{{url('/kersoal')}}" enctype="multipart/form-data">
                            <?php
                              $no = 1; 
                            ?>  
                            @foreach ($data as $key)
                            <div style="width: 48%;display: inline-table;">
                                {{$key->NO_SOAL}}. <font>{{$key->SOAL}}<br></font>
                                <input type="radio" class="radio" value="1" name="u{{$key->NO_SOAL}}" required="">{{$key->A}}
                                <br>
                                <input type="radio" class="radio" value="2" name="u{{$key->NO_SOAL}}">{{$key->B}}
                                <br>
                                <input type="radio" class="radio" value="3" name="u{{$key->NO_SOAL}}">{{$key->C}}
                                <br>
                                <input type="radio" class="radio" value="4" name="u{{$key->NO_SOAL}}" style="margin-bottom: 15px;">{{$key->D}}
                                <br>
                            </div>
                            @endforeach
                            <br><br>
                            <input type="hidden" name="nik" value="{{Session::get('NIK')}}" style="width: 100px;">
                            <input type="hidden" name="tahun" value="<?php echo date('Y'); ?>" style="width: 100px;">
                            <button class="au-btn au-btn--green au-btn--small">
                                <i class="fa fa-check-circle"></i> Selesai
                            </button>
                        </form>
                    </div>
                </div>
            </div> 
        </div>
    </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script type="text/javascript">

    $(document).ready(function() {
    $(window).keydown(function(event){
        if(event.keyCode == 116) {
          event.preventDefault();
          return false;
        }
      });
    });


    $(document).ready(function() {
    $(window).keydown(function(event){
        if(event.keyCode == 82) {
          event.preventDefault();
          return false;
        }
      });
    });
    

    $(document).keydown(function(e){
    if(e.which === 123){
       return false;
    }
 
  });

  $(document).bind("contextmenu",function(e) { 
  e.preventDefault();

  }); 

</script>
<script type="text/javascript">
      function launchFullScreen(element) {
  if(element.requestFullScreen) {
    element.requestFullScreen();
  } else if(element.mozRequestFullScreen) {
    element.mozRequestFullScreen();
  } else if(element.webkitRequestFullScreen) {
    element.webkitRequestFullScreen();
  }
}

// Launch fullscreen for browsers that support it!
launchFullScreen(document.documentElement); // the whole page
launchFullScreen(document.getElementById("videoElement")); // any individual element
 
</script>

@endsection