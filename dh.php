<?php 

 // print_r( $_POST   );

 // echo '<br>';
   // print_r( $_FILES['pic'] );

$t = $_FILES['pic']['tmp_name'];
$i = 'assets/img/'.$_FILES['pic']['name'];

move_uploaded_file( $t, $i);

$a = $_POST; 
$a['img'] = $i;
   // echo '<br>';
 //print_r( $a );
    

$d = file_get_contents( 'data.json' );
 
// echo '<br>';
 //print_r( $d );


$d = json_decode( $d, true);

 //echo '<br>';
// print_r( $d );

array_unshift( $d, $a );

 //echo '<br>';
 //print_r( $d );

$d = json_encode($d);

 //echo '<br>';
 //print_r( $d );

file_put_contents( 'data.json', $d );
header( 'location:../admin.php' );

?>