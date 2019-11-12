<?php
if(isset($_GET['number1']) && (isset($_GET['number2'])))
{
    $number1=$_GET['number1'];
    $number2=$_GET['number2'];
    $result=$_GET['result'];
    $fct=$_GET['fct'];
    
    switch($fct)
    {
        case "+":
            $result=$number1+$number2;
            break;
        case "-":
            $result=$number1-$number2;
            break;
        case "*":
            $result=$number1*$number2;
            break;
        case "/":
            $result=$number1/$number2;
            break;
    }
}

?>
<html>
<head>
    <title>My Calculator</title>
    </head>
    <body>
     <div class="content">
        <form method="get">
             Number1:<input type="text" name="number1"><br>
             <select name="fct">
               <option value="+">+</option>
               <option value="-">-</option>
               <option value="*">*</option>
               <option value="/">/</option>
             </select><br>
             Number2:<input type="text" name="number2"><br>
              <input type="submit" class="btn" name="btn" value="="><br>
             Result:<input type="text" name="result" value="<?php if(isset($_GET['btn'])) echo $result;  ?>">
         </form>
        </div>
    </body>
    <style>
    .content {
    width: 500px;
    height: 500px;
    border: 1px solid black;
    }
        .content form {
            margin-top: 40px;
            margin-left: 100px;
        }
        .content form input {
            padding: 10px;
            margin-bottom: 20px;
        }
        .content select {
            padding: 10px;
        }
        .content .btn {
            width: 150px;
            border: none;
            cursor: pointer;
            height: 50px;
        }
    </style>
</html>