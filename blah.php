
<?php require("./connection.php"); $qnss = [1,2,3,4,5];
  if(isset($_POST['submit'])){
    foreach($qnss as $qn){
      $qns = $_POST['qns'.$qn];
      $ans = $_POST['ans'.$qn];
      $sqlq = "INSERT INTO testgm(questions, answers) VALUES ('$qns','$ans');";
      $sql = mysqli_query($conn,$sqlq);
      }

      foreach($qnss as $qn){
        $locationval = $_POST['location_'.$qn];
        if($locationval === 'Harrisons'){
          $sqllq = "UPDATE locations SET locid = $qn WHERE locname = 'Harrisons';";
        }else if ($locationval === 'Cornwall'){
          $sqllq = "UPDATE locations SET locid = $qn WHERE locname = 'Cornwall';";
        }else if ($locationval === 'Forum'){
           $sqllq = "UPDATE locations SET locid = $qn WHERE locname = 'Forum';";
         }else if ($locationval === 'Northcott'){
           $sqllq = "UPDATE locations SET locid = $qn WHERE locname = 'Northcott';";
         }else if ($locationval === 'Greathall'){
           $sqllq = "UPDATE locations SET locid = $qn WHERE locname = 'Greathall';";
         }

         echo $locationval;
         if (!$sqllq){
            echo 'error';
         }
         $sqll = mysqli_query($conn,$sqllq);

       }


  echo "1 record added";

  mysqli_close($conn);

 } ?>
