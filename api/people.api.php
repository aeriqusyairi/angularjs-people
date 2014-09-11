<?php
/**
 * People's Api
 * @author aeriqusyairi
 */
header('Content-type: application/json');

require_once 'db/DB.php';

DB::connect();

if(isset($_GET['scope']) && !empty($_GET['scope'])){
  $scope = $_GET['scope'];

  //output list of people
  if($scope == 'list'){

    DB::get('people', array(1,'=',1));
    if(!DB::error()){
      $peopleList = DB::results();
      echo json_encode($peopleList);
    }else{
      error();
    }

  }else{
    invalid();
  }


}else{
  invalid();
}

function invalid(){
  echo '{"status": "invalid request"}';
}

function error(){
  echo '{"status": "an error occured"}';
}

