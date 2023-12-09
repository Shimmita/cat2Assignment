<?php
function majority_element($arr)
 {
        $idx = 0;
        $ctr = 1;
        
        for($i=1; $i<sizeof($arr); $i++)
        {
            if ($arr[$idx] == $arr[$i])
            {
                $ctr += 1;
            }
            else
             {
                $ctr -= 1;
                if ($ctr == 0)
                {
                    $idx = $i;
                    $ctr = 1;
                }
          }   
        }      
    return $arr[$idx];
}
$num1 = array(1, 5, 3, 9, 9, 7, 7, 7, 0, 1, 6);
echo('majority element is: <h1>'.majority_element($num1)."</h1> <br>");
?>
