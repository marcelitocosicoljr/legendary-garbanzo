<html>
<head><title>Calculation Result</title></head>
<body>
    <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $val1= $_POST["val1"];
            $val2= $_POST["val2"];

             if (isset($_POST["calc"])){
                $calc=$_POST["calc"];
             }else{
                $calc='';
             }

             $result=0;
              
        # test if input is_numeric
        if(is_numeric($val1) && is_numeric($val2)){
            # test if calc is not null
            if(!empty($calc)){
                # switch statement for value of calc
                switch($calc){
                    case 'add':
                        $result= $val1 + $val2; 
                        break;
                    case 'sub':
                        $result= $val1 - $val2; 
                        break;
                    case 'mul':
                        $result= $val1 * $val2; 
                        break;
                    case 'div':
                        $result= $val1 / $val2; 
                        break;
                }
                    echo "Calculation result: ".$result." ";
            }else{
                echo "No operation selected. <a href='index.php'>please retry</a>";
            }
        }
        else{ echo "Invalid entry - <a href='index.php'>please retry</a>"; }

     }

    ?>
</body>
</html>