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
<form action="" >
<input type="text" name="location"/>
<button type="submit">Submit</button> 
</form>
    <?php
    echo 1 <=> 1;
    if(!empty($instagarm_array['data'])){
        foreach($instagarm_array['data'] as $img){
            echo '<img src="'.$img['images']['low_resolution']['url'].'" alt="" />';
        }
    }

    ?>
</body>
</html>