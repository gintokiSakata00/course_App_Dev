<html>
<head><title>Calculation Result</title></head>
<body>
    <?php
        //check if two inputs has been set and if set values were numeric
        if(isset($_POST['val1']) and isset($_POST['val2']) 
        and is_numeric($_POST['val1']) and is_numeric($_POST['val2']))
        {
            //store values in php variables
            $first_num = $_POST['val1'];
            $second_num = $_POST['val2'];
        
            if(isset($_POST['calc']) and !empty($_POST['calc']))
            {
                switch($_POST['calc']){
                    case 'add': 
                        $result = $first_num + $second_num; 
                    break;
                    case 'sub': 
                        $result = $first_num - $second_num; 
                    break;
                    case 'mul': 
                        $result = $first_num * $second_num;
                    break;
                    case 'div': 
                        $result = $first_num / $second_num; 
                    break;
                    
                } 
                //display results
                echo "Results: $result";
            } 
            else 
            {
                echo "Chose an operator";
            }
        } 
        else 
        {
            echo "Input values must set and must be numeric";
        }
    ?>
</body>
</html>