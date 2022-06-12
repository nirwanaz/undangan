<?php 

if (!function_exists('check_email')){
  function check_email($email){
    $is_valid = true;
    $at_index = strrpos($email, '@');
    
    if (is_bool($at_index) && !$at_index) {
      $is_valid = false;

    } else {
      $domain = substr($email, $at_index+1);
      $local = substr($email, 0, $at_index);
      $local_len = strlen($local);
      $domain_len = strlen($domain);

      if ($local_len < 1 || $local_len > 64) {
        // local part exceeded
        $is_valid = false;
      } else if ($domain_len < 1 || $domain_len > 255) {
        // domain part len exceeded
        $is_valid = false;
      } else if ($local[0] == '.' || $local[$local_len-1] == '.')
      {
         // local part starts or ends with '.'
         $is_valid = false;
      }
      else if (preg_match('/\\.\\./', $local))
      {
         // local part has two consecutive dots
         $is_valid = false;
      }
      else if (!preg_match('/^[A-Za-z0-9\\-\\.]+$/', $domain))
      {
         // character not valid in domain part
         $is_valid = false;
      }
      else if (preg_match('/\\.\\./', $domain))
      {
         // domain part has two consecutive dots
         $is_valid = false;
      }
      else if (!preg_match('/^(\\\\.|[A-Za-z0-9!#%&`_=\\/$\'*+?^{}|~.-])+$/',
                 str_replace("\\\\","",$local)))
      {
         // character not valid in local part unless 
         // local part is quoted
         if (!preg_match('/^"(\\\\"|[^"])+"$/',
             str_replace("\\\\","",$local)))
         {
            $is_valid = false;
         }
      }

      if ($is_valid && !(checkdnsrr($domain,"MX") || checkdnsrr($domain,"A")))
      {
         // domain not found in DNS
         $is_valid = false;
      }
    }
  
    return $is_valid;

  }
}