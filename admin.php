<html>
<head>
	<title>admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
    <style>
        .cl{
            background-color: #bfbfbf;
           }
        h1{
            font-family: cursive;
            text-align: center;
        }
        table{
	        border: 5px #000 solid;
	        padding:5px;
	        margin:0 auto;
	        width:90%;
        }
        table th{
	        border: 1px #ddd solid;
	        padding:10px;
        }
        img{
            width: 100px;
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
          <a class="nav-link btn btn-secondary"  href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  active btn btn-secondary" aria-current="page" href="admin.php">Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-secondary" href="#">Pricing</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    
    <section>
	<h1>Admin</h1>
	<hr>
	<table class="table table-dark table-hover">
		<tr>
            <th>id</th>
			<th>car</th>
            <th>pic</th>
            <th>state</th>
			<th>model</th>
            <th>mileage</th>
            <th>message</th>
            
         </tr>
   <!--    <tr>
            <th>0</th>
			<th>bmw</th>
           <th><img src="assets/img/user1.jpg" width="150"></th>
			<th>2018</th>
            <th>10k</th>          
            <th>good</th>
         </tr>--->

<?php 

 $d = file_get_contents('data.json');
 $d = json_decode($d, true);        
       // print_r($d);
        
        foreach( $d as $k => $v){
            
          //  print_r($v);
          //  print_r($k);
           
            echo'
                 <tr>
            <td>'.$k.'</td>
			<td>'.$v['cname'].'</td>
            <td><img src="'.$v['img'].'" width="150"></td>
            <td>'.$v['state'].'</td>
			<td>'.$v['model'].'</td>
            <td>'.$v['mileage'].'</td>          
           <td>'.$v['message'].'</td>
           </tr>     
            
            ';
            
        };
        
        
        
        
        
        
 ?>

	</table>
	<hr>
        
	<?php ?>
        </section>
</body>
    
</html>