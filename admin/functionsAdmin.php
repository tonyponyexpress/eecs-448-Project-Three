<?php
// error_reporting(E_ALL);
// ini_set("display_errors",1);
global $mysqli;

class functionsAdmin{

  public function functionsAdmin(){
    //empty constructor
  }

  public function delete_issue($test,$id){
      // Credentials
      if($test=="true"){
          include ('../cms/sql_credentials.php');
      }
      else if($test == "false"){
          include ('../../cms/sql_credentials.php');
      }

      $query = "SELECT * FROM Project_Problems WHERE problem_id='$id'";

      // Echo errors
      if ($result = $mysqli->query($query)){
          if(mysqli_num_rows($result) == 0){
            echo "Issue ID#" . $id . " does not exist";
          }
          else{
            $query2 = "DELETE FROM Project_Problems WHERE problem_id='$id'";
            if ($result2 = $mysqli->query($query2)){
              echo $id . " deleted";
            }
          }

      }

      // Return to page if it is not a test
      if($test=="false"){
          header("Location: ../admin_problems.php");
      }

  }

  public function delete_items(){
    // Credentials
    if($test=="true"){
        include ('../cms/sql_credentials.php');
    }
    else if($test == "false"){
        include ('../../cms/sql_credentials.php');
    }



  }

  public function delete_user(){

  }

  public function login(){

  }

  public function createOffer(){

  }

  public function logout(){

  }

  public function sendMessage(){

  }

}

?>
