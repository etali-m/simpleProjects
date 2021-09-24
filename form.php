<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .error{
            color:red;
        }
    </style>
</head>
<body>
<?php
        $nameErr = $emailErr = $genderErr = $websiteErr = "";
        $name = $email = $website = $comment = $gender = "";
        if($_SERVER["REQUEST_METHOD"] == "POST"){

            if(empty($_POST['name'])){
                $nameErr = "Name is required";
            } else{
                $name = test_input($_POST['name']);
            }

            if(empty($_POST['email'])){
                $emailErr = "Email is required";
            } else{
                $email = test_input($_POST['email']);
            }

            if(empty($_POST['website'])){
                $websiteErr = "website is required";
            } else{
                $website = test_input($_POST['website']);
            }

            if(empty($_POST['gender'])){
                $genderErr = "Gender is required";
            } else{
                $gender = test_input($_POST['gender']);
            }

            if(empty($_POST['comment'])){
                $comment = "";
            } else{
                $comment = test_input($_POST['comment']);
            }

        }

        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="">Name</label>: <input type="text" name="name"> 
        <span class="error">* <?php echo $nameErr;?></span> <br><br>

        <label for="">E-mail</label>: <input type="email" name="email">
        <span class="error">* <?php echo $emailErr;?></span> <br> <br>

        <label for="">Website</label>: <input type="text" name="website">
        <span class="error">* <?php echo $websiteErr;?></span> <br><br>

        <label for="">Comment</label>: <textarea name="comment" cols="40" rows="5"></textarea> <br> <br>
        
        Gender: 
        <input type="radio" name="gender" value="female"> Female
        <input type="radio" name="gender" value="male"> Male    
        <input type="radio" name="gender" value="other"> Other <br>
        <span class="error">* <?php echo $genderErr;?></span> <br><br>

        <input type="submit">
    </form>
</body>
</html>
