@extends('layout.layhome')

@section('content')
        <!-- PAGE CONTENT-->
   <!--  <div class="page-content--bgf7">
          	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  	<ol class="carousel-indicators">
				    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  	</ol>
			  	<div class="carousel-inner">
				    <div class="carousel-item active">
				      	<img class="d-block w-100" src="assets/images/1.jpg" style="width: 100px;height: 400px;">
				    </div>
				    <div class="carousel-item">
				      	<img class="d-block w-100" src="assets/images/2.jpg" style="width: 100px;height: 400px;">
				    </div>
				    <div class="carousel-item">
				      	<img class="d-block w-100" src="assets/images/3.jpg" style="width: 100px;height: 400px;">
				    </div>
				</div>
			  	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
			  	</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				</a>
			</div>



        <section class="au-breadcrumb2">
            <div class="container">
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
                                    <li class="list-inline-item">Dashboard</li>
                                </ul>
                            </div>
                            <form class="au-form-icon--sm" action="" method="post">
                                <input class="au-input--w300 au-input--style2" type="text" placeholder="Search for datas &amp; reports...">
                                <button class="au-btn--submit2" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
	 	<section class="welcome p-t-10">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-12">
	                    <h1 class="title-4">Welcome back
	                        <span>John!</span>
	                    </h1>
	                    <hr class="line-seprate">
	                </div>
	            </div>
	        </div>
	    </section>
	   </div> -->

	   <div class="page-wrapper">
        <div class="page-content--bge5" style="margin-bottom: -75.6px;background-image: url(assets/images/5.jpg);background-size: 100% 100%;">
            <div class="container">
                <br><br>
                <div class="login-wrap">
                    <div class="login-content" style="border-radius: 20px;background: rgba(251,251,251, 0.7); ">
                        <div class="login-logo">
                            <a href="#">
                                <img src="assets/images/logo.png" style="width: 100px;position: relative; margin-top: -80px;">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="{{ url('/log_admin') }}">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" style="border-radius: 20px;" type="text" name="user" placeholder="username" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" style="border-radius: 20px;" type="password" name="pass" placeholder="Password">
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" style="border-radius: 20px;" type="submit">sign in</button>
                                <center>
                                    <font color="red" style="font-weight: bold;">{{Session::get('error')}}</font>
                                </center>
                            </form>
                          <!--   <div class="register-link" style="margin: -10px 0px 10px 0px;">
                                <p>
                                    Don't you have account?
                                    <a href="#">Sign Up Here</a>
                                </p>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

	  

@endsection