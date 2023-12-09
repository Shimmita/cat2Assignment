<?php
function majority_element_in_array($arr)
 {

    //current index init
        $current_index = 0;
        //counts the number of occurencess
        $occurence_counter = 1;
        
        for($i=1; $i<sizeof($arr); $i++)
        {
            if ($arr[$current_index] == $arr[$i])
            {
                $occurence_counter += 1;
            }
            else
             {
                $occurence_counter -= 1;
                if ($occurence_counter == 0)
                {
                    $current_index = $i;
                    $occurence_counter = 1;
                }
          }   
        }      
    return $arr[$current_index];
}
$num1 = array(1, 5, 3, 9, 9, 7, 7, 7, 0, 1, 6);

//output
echo('majority element is: <h1>'.majority_element_in_array($num1)."</h1> <br>");
?>
