
<?php
class function_used{
  function generate_random_password($length = 10) {
    //$alphabets = range('A','Z');
    $numbers = range('0','9');
    //$additional_characters = array('_','.', '*', '}', '{', '^');
    $final_array = array_merge($numbers);
         
    $password = '';
  
    while($length--) {
      $key = array_rand($final_array);
      $password .= $final_array[$key];
    }
  
    return $password;
  }
  //echo 'Random password generated is "<b>' . generate_random_password(15) . '</b>".';
}
?>