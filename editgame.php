
<?php require("./connection.php"); $qnss = [1,2,3,4,5,6];
  if(isset($_POST['submit'])){
    foreach($qnss as $qn){
      $qns = $_POST['qns'.$qn];
      $ans = $_POST['ans'.$qn];
      $pt = $_POST['pt'.$qn];
      $sqlq = "INSERT INTO questions(question, answer, points) VALUES ('$qns','$ans','$pt');";
      $sql = mysqli_query($conn,$sqlq);
      }

      foreach($qnss as $qn){
        $locationval = $_POST['location_'.$qn];
        if($locationval === NULL){
          echo "Input location";
        }
        elseif($locationval === 'Harrisons'){
          $sqllq = "UPDATE locations SET locid = $qn WHERE locname = 'Harrisons';";
        }else if ($locationval === 'Cornwall'){
          $sqllq = "UPDATE locations SET locid = $qn WHERE locname = 'Cornwall';";
        }else if ($locationval === 'Forum'){
           $sqllq = "UPDATE locations SET locid = $qn WHERE locname = 'Forum';";
         }else if ($locationval === 'Northcott'){
           $sqllq = "UPDATE locations SET locid = $qn WHERE locname = 'Northcott';";
         }else if ($locationval === 'Greathall'){
           $sqllq = "UPDATE locations SET locid = $qn WHERE locname = 'Greathall';";
         }else if ($locationval === 'Amory'){
           $sqllq = "UPDATE locations SET locid = $qn WHERE locname = 'Amory';";
         }else{
           $sqllq = "";
         }


         echo $locationval;
         if (!$sqllq){
            echo 'error';
         }
         $sqll = mysqli_query($conn,$sqllq);

       }


  echo "1 record added";

  mysqli_close($conn);

 }
 if (isset($_POST['reset'])){
   foreach($qnss as $qn){
     $sqlquery = "UPDATE locations SET locid = 9"."$qn WHERE locid = $qn;";
     $sql = mysqli_query($conn,$sqlquery);
 }
}
?>
