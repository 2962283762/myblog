<?php 
require_once './admin/config/config.php';
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $db = connecttodb();
    if ($db->connect_errno) {
        echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
    }
    $db->set_charset("utf8");
    $sql = "SELECT * FROM article WHERE id = $id";
    $result = $db->query($sql);
    $row = $result->fetch_assoc();
    
        $title = $row['title'];
        $content = $row['source'];
        $time = $row['create_time'];
        $id = $row['id'];
        echo "
        <div class='article'>
        
        <div class='text'>
        <h2>$title</h2>
        <h4>$time</h4>
        <p>
            $content
        </p>
        </div>
        <div class='article_img'>
            
        
        </div></div>";
        
    
}








?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "$title"?></title>
    <style>
        body{
            background-image: url("./img/bg.jpg");
            margin:0px;
            background-size:cover;
            background-attachment:fixed;
        }
        p{
            color: white;
            font-size: 20px;
            font-weight: 600;
            margin: 0px;
            padding: 0px;
            text-align: center;
            margin-top: 20px;
        }
        h2,h4{
            color: white;
            font-size: 20px;
            font-weight: 600;
            margin: 0px;
            padding: 0px;
           
        }
    </style>
</head>
<body>

    
</body>
</html>