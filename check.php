

$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con, 'quizdbase');


if(isset($_POST['submit'])) {
    if(!empty($_POST['quizcheck'])) {
        
        $count = count($_POST['quizcheck']);
        echo "Out of 2, you have selected " .$count. "options";
        
       $result = 0;
      $i = 1;
       
        $selected = $_POST['quizcheck'];
        print_r($selected);
        
        $q = "select * from questions";
      
        
        $query = mysqli_query($con, $q);
        
        while( $rows = mysqli_fetch_array($query))  {
            print_r($rows['and_id']);
            
            $checked = $rows['and_id'] == $selected[$i] ;
            
            if($checked) {
                
                $result++;
            }
          $i++;
            
        }
        
       echo "<br>RESULT:" .$result;
       
        
    }
}

      $name = $_SESSION['username'];
      $finalresult = " insert into user (username, totalques, answerscorrect) values ('$name', '5', '$result')";
      $queryresult=  mysqli_query($con, $finalresult);








