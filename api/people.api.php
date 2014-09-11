<?php
/**
 * People's Api
 * @author aeriqusyairi
 */
//header('Content-type: application/json');

require_once 'db/DB.php';

DB::connect();

if(isset($_GET['scope']) && !empty($_GET['scope'])){
  $scope = $_GET['scope'];

  //output list of people
  if($scope == 'list'){

    DB::get('people', array(1,'=',1));
    if(!DB::error()){
      
      //get the people list
      $peopleList = DB::results();

      //fetch friends for each people
      foreach ($peopleList as $people) {
        DB::get('friend', array('people', '=', $people->id));
        
        $friends = DB::results();
        $people->friends = array();
        foreach ($friends as $friend) {
          //get the name of each friend
          DB::get('people', array('id', '=', $friend->friend));
          $name = DB::first()->name;
          array_push($people->friends,array("id"=>$friend->friend, "name"=> $name));
        }
      }

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

