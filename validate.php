<?php
  class validate{
    public function checkEmpty($data, $fields){
      $msg = null;
      foreach ($fields as $value){
        if (empty($data[$value])){
          $msg .= "<p>$value field empty</p>";
        }
      }
      return $msg;
    }

    // check contact number
    public function validContact($contact){
      // check to see if the data is numeric
      if (preg_match("/^[0-9]+$/", $contact)){
        return true;
      }
      return false;
    }

    // check to see if our email follows the email format
    public function validEmail($email){
      if (filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
      }
      return false;
    }

    // check if the name is not empty
    public function validName($name){
      if($name == '' || $name == ' '){
        return false;
      }else{
        return true;
      }
    }

    // check to see if position was selected
    public function validPosition($position){
      if($position == '0'){
        return false;
      }else{
        return true;
      }
    }

    // check to see if timeslot was selected
    public function validTimeSlot($timeslot){
      if($timeslot == '0'){
        return false;
      }else{
        return true;
      }
    }    

    // check Date of Birth field
    function validBirth($birth) {
      $date = explode("-", $birth);
      if (!checkdate($date[1], $date[2], $date[0])) return false;
      return true;
    }

  }
?>