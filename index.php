 
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
    
    <style>

body {
background: #dde1e7;
font-family: arial;
}
.box {
background: #dde1e7;
width: 250px;
height: 550px;
border-radius: .5em;
box-shadow: -3px -3px 7px #ffffff73,
          2px 2px 5px rgba(94, 104, 121, 0.288);
margin: 0 auto;
padding: 25px 28px;
display: flex;
flex-direction: column;
justify-content: space-between;

}
.box .result {
width: 100%;
height: 10px;
box-shadow: 4px 4px 8px #babecc,
          -10px -10px 15px red;

}
.box .result p {
font-size: 40pt;
overflow-y: auto;
text-align: right;

}

</style>
</head>
<body>

    <?php 
    ini_set('display_errors',0);
    
        if (isset($_POST['submit'])) {
            $result1 = $_POST['numb1'];
            $result2 = $_POST['numb2'];
            $operator = $_POST['operator'];
            $ans=" ";
          
            switch ($operator) {

                
                case '+':
                     $ans = $result1 + $result2;
                    break;
                case '-':
                      $ans =$result1 - $result2;
                    break;
                case '*':
                    $ans =$result1 * $result2;
                    break;
                case '/':
                      $ans =$result1 / $result2;
                    break;
               
                  
            }
        }


     ?>


     <form method="post"  class="box">
        <input type="number" name="numb1" required>
       
        <select name="operator" id="" required>
           <option>+</option>
           <option>-</option>
           <option>*</option>
           <option>/</option>
        </select> 

        <input type="number" name="numb2" required>

        <button type="submit" name="submit" value="submit">Calculate</button>

       <p class="result"><?php echo $ans;?></p>
     </form>

  

   

</body>
</html>