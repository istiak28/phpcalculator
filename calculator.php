<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>

    <div class="main">

        <form method="POST">

            <input type="text" name="num1" placeholder="Enter First Number">
            <input type="text" name="num2" placeholder="Enter Second Number">

            <select name="opr">

                <option value="add">ADD</option>
                <option value="sub">SUB</option>
                <option value="div">DIV</option>
                <option value="mul">MUL</option>

            </select>

            <input type="submit" value="submit" name="submit">

        </form>

    </div>

    <div class="result">

        <p>
            <?php
                if(isset($_POST['submit'])){

                    $num1 = $_POST['num1'];
                    $num2 = $_POST['num2'];

                    $opr = $_POST['opr'];

                    switch($opr){
                        
                        case "add":
                            $addition = $num1 + $num2;
                            echo "The result is : {$addition}";
                            break;
                        
                        case "sub":
                            $sub = $num1 - $num2;
                            echo "The Addition is : {$sub}";
                            break;

                            case "div":
                                $div = $num1 / $num2;
                                echo "The Addition is : {$div}";
                                break;

                                case "mul":
                                    $mul = $num1 * $num2;
                                    echo "The Addition is : {$mul}";
                                    break;

                        default:
                        echo "Sorry Not Valid";



                    }

                }




            ?>
        </p>

    </div>
    


    <?php




    ?>

    
</body>
</html>