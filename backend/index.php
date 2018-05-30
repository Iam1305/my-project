<?php
    include ("head.php");
?>
<body>
    
<div class="container-fluid">
  <div class="row">
    <div class="categories col-lg-auto col-12 bg-dark p-0"> 
      <h2>B-CLOTHING</h2>
      <nav class="navbar navbar-expand-lg navbar-dark p-0">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="#">HOME</a></li>
            <li class="nav-item"><a class="nav-link" href="#" id = "category">CETEGORY</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id = "product" id="navbarDropdownMenuLink"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PRODUCT</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">T-shirt</a></li>
                <li><a class="dropdown-item" href="#">Pant</a></li>
                <li><a class="dropdown-item" href="#">Cap</a></li>
              </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="#" id = "order">ORDER</a></li>
            <li class="nav-item"><a class="nav-link" href="#" id = "shopconfig">SHOP CONFIG</a></li>
            <li class="nav-item"><a class="nav-link" href="#" id = "user">USER</a></li>
            <li class="nav-item"><a class="nav-link" href="#">LOGOUT</a></li>
            
          </ul>
        </div>
      </nav> <!--navbar end-->
    </div> <!--categories end-->
    <div class = "col-lg-8">
        <div id = "right" >
            <h1></h1>

        </div>

    </div>  
  </div>
</div>


</body>

</html>

