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

    <!-- <section class="welcome2 p-t-40 p-b-55">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="au-breadcrumb3">
                        <div class="au-breadcrumb-left">
                            <span class="au-breadcrumb-span">You are here:</span>
                            <ul class="list-unstyled list-inline au-breadcrumb__list">
                                <li class="list-inline-item active">
                                    <a href="#">Home</a>
                                </li>
                                <li class="list-inline-item seprate">
                                    <span>/</span>
                                </li>
                                <li class="list-inline-item">Dashboard</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="welcome2-inner m-t-20">
                        <div class="welcome2-greeting">
                            <h1 class="title-6">Hi
                                <span>John</span>, Welcome back</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <div style="background-image: url(assets/images/6.jpg);background-size: 100% 100%;">
        <section class="alert-wrap p-t-70 p-b-70">
            <div class="container" style="height: 550px;">
                <!-- <div class="alert au-alert-success alert-dismissible fade show au-alert au-alert--70per" role="alert">
                    <i class="zmdi zmdi-check-circle"></i>
                    <span class="content">Terima Kasih Atas Partisipasinya</span>
                    <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">
                            <i class="zmdi zmdi-close-circle"></i>
                        </span>
                    </button>
                </div> -->
                <!-- <button class="btn btn-secondary btn-lg" style="position: relative; float: right;">Selesai</button> -->
                <a href="/" class="btn btn-default" style="float: right;margin-right: 150px;margin-top: 140px;"><img src="assets/images/selesai.png"><br><h1 style="margin-top: -30px">selesai</h1></a>
            </div>
        </section>
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