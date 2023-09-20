<?php  
/* print the first 15 numbers in the Fibonacci series.*/  
$num = 15;  
echo "First 15 numbers Fibonacci series:";  
echo "\n";  
function fibonacci($num){  
    if($num == 0){  
    return 0;  
    }else if( $num == 1){  
    return 1;  
}  else {  
return (fibonacci($num-1) + fibonacci($num-2));  
}   
}  

for ($i = 0; $i < $num; $i++){  
echo fibonacci($i)." ";  
}  
