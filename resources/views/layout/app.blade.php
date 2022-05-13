

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{asset('css/style.css')}}">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<script src="https://kit.fontawesome.com/afd6aa68df.js" crossorigin="anonymous"></script>
<script language="JavaScript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js" type="text/javascript"></script>


  <title>Test</title>
</head>
<body>
    <style>

.logout-btn{
background-color:#fff;
border-color:#fff;
border:none;
margin-top:8px;
color:#000;
}
.breadcrumb>.active {
color: #808080;
}

        </style>




<nav class="navbar navbar-expand-md ">
<a class="" href="">

  <img src="{{ asset('images/logo.png') }}" alt="Logo" style="width: 150px;">
</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
      <span class="navbar-toggler-icon justify-content-end"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarNav">



      <ul class="navbar-nav">
      <li class="nav-item ">
              <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>

          </li>

          <li class="nav-item">
              <a class="nav-link" href="">PRODUCTS</a>
          </li>

          <li class="nav-item">
              <a class="nav-link" href="">ABOUT</a>
          </li>
        @guest
        <li class="nav-item">
            <a class="nav-link" href="">Login/Register</a>
        </li>
        @endguest

         @auth

               <li class="nav-item">
              <a class="nav-link" href="">My Account</a>
          </li>
                 <form  method="post" >
              <li class="nav-item">

                  <button  name="logout"  class="nav-link logout-btn"> Logout</button>

                          </li>

                          </form>

                          <li class="nav-item">
          <a class="nav-link" href="
          ">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
<path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg></a>
</li>
    @endauth

      </ul>






  </div>
  <hr class="navhr">

</nav>
@yield('content')
<footer class="text-center text-white" style="background-color: #808080;">

    <div class="text-center p-3" style="background-color: #808080;">
      © 2022 Copyright:
      <a class="text-white" href="https://">The Doctor</a>
    </div>

  </footer>


    </body>
  </html>
