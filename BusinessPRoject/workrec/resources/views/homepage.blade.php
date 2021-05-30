
{{-- <div id="btndiv" class="d-grid col-1 m-auto">
    <a href="insertchallan"><button class="btn btn-success btn-lg">Insert</button></a><br><br>
    <a href="viewc"><button id="btns" class="btn btn-success btn-lg">View</button></a>
</div> --}}


@include('header')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause="false">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{url('/img/1.jpg')}}" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{url('/img/2.jpg')}}" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{url('/img/3.jpg')}}" alt="Third slide">
      </div>
      <div id="btndiv" class="d-grid col-3 m-auto">
        <a href="insertchallan"><button id="btn1" class="btn btn-warning btn-lg">Insert</button></a><br><br>
        <a href="viewc"><button id="btn2" class="btn btn-warning btn-lg">View</button></a>
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
 
@include('footer')

<style>
  .carousel-item{
    height: 510px;
  } 
  .carousel-item img{
    height: 510px;
  }
  #btndiv{
      margin-top:100px; 
      text-align: center;
  }
  #btn1,#btn2{
        border-radius:20px; 
        width: 60%;
        letter-spacing: 2px;
        font-weight:700; 
  }
  #btn1{
    margin-top: 190px; 
  }
</style>
