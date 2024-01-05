<?php
 
 $no = 1997;

 echo check_the_number_is_prime($no);
 
 function check_the_number_is_prime(int $no ) {
 	
  if ($no < 2) {
 	return 0;
  }	
   
  $is_prime = true;

  for ($i = 3; $i < $no; $i++) {
    if ($no % $i === 0 && ($no / $i) > 1) {
      $is_prime = false;
    }
    
  }
  
  if (!$is_prime) {
    return -1;
  } else {
  	$sum = 0;
  	for ($i = 1; $i <= $no; $i++) {
  	  $sum += $i;
  	}
  }
 
 return $sum;

 }
 
?> 
