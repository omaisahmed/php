<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php 
    if(isset($_POST['txt2'])){
     $pass=$_POST['txt1'];
for($i=0; $i=strlen($pass); $i++){
echo "*";
    }
}
    ?>
    <form method="post">
    <input type="password" name="txt1">
    <input type="submit" name="txt2">
    </form>
</body>
</html>