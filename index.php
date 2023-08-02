<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Car show</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
      
       <style>
            @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap');
           #car{
               background: linear-gradient( rgb(48,48,48), rgba(255,255,255,.75),rgb(48,48,48));
               border-radius: 10%;
           }
           #rdimg{
               border-radius: 20%;
               width: 600px;
           }
           .cl{
               background-color: #bfbfbf;
           }
           .ct{
               border-radius: 20%;
               margin-top: 60px;
               
           }
           .tc{
             text-align: center;
            
           }
           h1,h2,h3,h4{
              font-family: 'Ubuntu', sans-serif;
              text-align: center;
            }
           
           #abc{
              background: linear-gradient( rgb(107,107,107), rgba(255,255,255,.75),rgb(0,28,0) ), url(assets/pic/gr.jpg);
	          background-attachment: fixed;
	          background-size: cover;
              background-position: center center;
	          padding:80px 15px;
          }
           #w1{
               background:  url(assets/pic/v1.jpg);
	           background-size: cover;
              
               
           }
           .w2{
               color: white;
               background-color: black;
           }
           .w3{
               color: white;
           }

        
        
       </style>
    </head>
    
    <body>
      <nav class="navbar navbar-expand-lg bg-secondary-subtle">
  <div class="container-fluid">
      <img src="assets/pic/logo.png"  width="80" height="70">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active btn btn-secondary" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-secondary" href="admin.php">Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-secondary" href="#">Pricing</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
        
        <!--introo 
        <section class="container-fluid py-5 " id="w1">
        <div class="container">
           <div class="row">
            <div class="col-md-6  p-2 text-dark " id="car">  
              <h1> CAR DEAL </h1>
              <p>Sell your car quickly. Get your offer online and quickly complete the transaction with a short appointment.</p>
                <div class="mb-3">
                   <label class="form-label">Car name</label>
                   <input type="name" class="form-control" id="nm" >
                </div>  
                <button type="submit"  class="btn btn-outline-secondary" id="inquirysubmit" data-bs-toggle="modal" data-bs-target="#submitreceipt">Shop Now</button>
            

            
            </div>
            <div class="col-md-6 ">
          <!--      <img src="assets/pic/bntl.jpg" id="rdimg"> 
            </div>
           </div>
         </div>
      </section> -->
        <section id="w1">
        <div class="container text-center py-5" >
     
  <div class="row py-5">
    <div class="col-md-6 offset-md-3 py-5 "><h1> CAR DEAL </h1>
              <p>Sell your car quickly. Get your offer online and quickly complete the transaction with a short appointment.</p>
                <div class="mb-3">
                   <label class="form-label">Car name</label>
                   <input type="name" class="form-control" id="cm"  >
                </div>  
                <button type="submit"  class="btn btn-outline-secondary" id="inquirysubmit" data-bs-toggle="modal" data-bs-target="#submitreceipt">Shop New </button>
                <button type="submit"  class="btn btn-outline-secondary" id="inquirysubmit" data-bs-toggle="modal" data-bs-target="#submitreceipt"> Shop Used</button>
      </div>
  </div>
</div>
        </section>
        <?php ?>
  <section class="container-fluid  py-5 bg-secondary-subtle">
      <div class="bg-black w2">
      <h1>Sell your car </h1>
          </div>
          <div class="container">
           <div class="row">
               <div class="col-md-6 " >
             <img src="assets/pic/camry.png" width="500" height="400" class="ct">
            </div>
            <div class="col-md-6 mx-auto bg-opacity-5" > 
                <h1>Car Moldels</h1>
            <form action="dh.php" method="POST" enctype="multipart/form-data">
               <label for="cname" class="form-label" > Car name</label><br>
               <input type="text"  name="cname" class="form-control" required><br>
                
              <label for="model">Model</label><br>
              <input type="number" name="model" class="form-control" required><br>
                
               <label for="state" >  State </label><br>   
               <select name="state" class="form-control">
                    <option value="----"> ---- </option>
                    <option value="nj"> New jersy </option>
                    <option value="ny"> New York </option>
               </select><br><br>
                
                <label>
			   <input type="file" name="pic"  class="form-control"> 
		       </label><br> 
                
              <label for="mileage">Mileage</label><br>
              <input type="number" name="mileage" class="form-control" required><br>
                
              <label for="message">Message</label><br>
              <textarea name="message" class="form-control" required></textarea><br>
                <input type="submit" class="btn btn-outline-secondary" value="submit" required><br>
            </form>
            </div>
        </div>
      </div>
    </section>
        <?php ?>
        <section class="continer" id="abc">
          
         <div class="row">      
          <div class="card col" style="width: 18rem;">
             <img src="assets/pic/dg.jpg" class="card-img-top" alt="...">
          <div class="card-body">
             <h2 class="card-title">Racing cars</h2>
             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
             <a href="#" class="btn btn-outline-secondary"> Find more</a>
          </div>
          </div>
          <div class="card col" style="width:18rem;">
             <img src="assets/pic/elct.jpg" class="card-img-top" alt="...">
          <div class="card-body">
             <h2 class="card-title">Electric cars</h2>
             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
             <a href="#" class="btn btn-outline-secondary">Find more</a>
          </div>
          </div>
          <div class="card col" style="width: 18rem;">
             <img src="assets/pic/picup.jpg" class="card-img-top" alt="...">
          <div class="card-body">
             <h2 class="card-title">Pickup trucks </h2>
             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
             <a href="#" class="btn btn-outline-secondary">Find more</a>
          </div>
          </div>     
         </div>
            <div class="text-center mb-0 text-white py-5">
		       <h2 class="text-uppercase "> 24/7 Services</h2>
		       <p class="lead"> Car show  </p>
		       <a class="btn btn-outline-secondary text-dark btn-lg" href="#" role="button"> Find your dream car </a>
	     </div>
      
      
      </section>
    </body>

  <!-- footer -->
    <footer class="bg-secondary-subtle py-5">
  <section >
    <div class="container text-center mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h2 class="text-uppercase mb-4">
            Products
          </h2>
          <p>
            <a href="#!" class="text-reset">Used</a>
          </p>
          <p>
            <a href="#!" class="text-reset">New</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Sell your car</a>
          </p>
            <p><a class="link-offset-2 link-underline link-underline-opacity-100" href="#">Sell your car</a></p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h2 class="text-uppercase mb-4">
             links
          </h2>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h2 class="text-uppercase mb-4">Contact</h2>
          <p><i class=""></i> New York, NY 10012, US</p>
          <p>
            <i class=""></i>
            Carshow@example.com
          </p>
          <p><i class=""></i> + 01 234 567 5489</p>
        </div>
        
      </div>
    </div>
  </section>
  <div class="text-center ">
    © 2023 Copyright:
    <a class="nav-link active btn btn-secondary" href="index.php">Car show</a>
  </div>
</footer>
</html>