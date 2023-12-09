<?

//the function takes params radius and height
function pizza_volume($radius, $height) {
  
    $volume = pi() * $radius**2 * $height;
    return round($volume);
  }
  
  //radius in centimeteres (cm)
  $radius = 10; 
  //height in centimeteres (cm)
  $height = 2; 
  //volume
  $volume = pizza_volume($radius, $height);
  
  //output
  echo(`The volume of the pizza is {$volume} cm^3.`);