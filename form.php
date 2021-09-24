<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="">Name</label>: <input type="text" name="name"> <br> <br>
        <label for="">E-mail</label>: <input type="email" name="email"> <br> <br>
        <label for="">Website</label>: <input type="text" name="website"> <br> <br>
        <label for="">Comment</label>: <textarea name="comment" cols="40" rows="5"></textarea> <br> <br>
        
        Gender: 
        <input type="radio" name="gender" value="female"> Female
        <input type="radio" name="gender" value="male"> Male    
        <input type="radio" name="gender" value="other"> Other <br><br>
        <input type="submit">
    </form>

    <?php
        $name = $email = $website = $comment = $gender = "";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = test_input($_POST['name']);
            $email = test_input($_POST['email']);
            $website = test_input($_POST['website']);
            $gender = test_input($_POST['gender']);
            $comment = test_input($_POST['comment']);
        }

        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
</body>
</html>
