<?php 
if(isset($_POST['register'])){
    $user=$_POST['first-name'];
    $family=$_POST['last-name'];
    $password=$_POST['up-password'];
    $email_mobile=$_POST['email-mobile'];
    $birthday=$_POST['birth-day']."/".$_POST['birth-month']."/".$_POST['birth-year'];
    $gender=$_POST['gen'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            background-color: black;
            height: 50vh;
        }
        p{
            color: white;
            padding: 20px;
            line-height: 40px;

        }
    </style>
</head>
<body>

    <div>
        <p>
            Hello mr/ms <em><?php echo $user." ".$family ;?></em>, you are welcome <br>
            please check your information last time : <br>
            your full name is : <?php echo $user." ".$family ;?> <br>
            your communication way :  <?php echo $email_mobile ;?><br>
            your password : <?php echo $password ;?><br>
            yourbirthday is : <?php echo $birthday ;?><br>
            your gender is : <?php echo $gender ;?><br>
        </p>
    </div>
    
</body>
</html>
<?php
}
else {
    echo "If you invite me to dinner, I will give you the page information ";
}
?>