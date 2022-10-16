<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once "config/config.php";
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $db = connecttodb();
        $result = mysqli_query($db,"SELECT * FROM article WHERE id = $id");
        $row = mysqli_fetch_array($result);
        $title = $row['title'];
        $content = $row['source'];
    }
    else{
        die("没有id");
    }

    ?>
<form action="<?php
    if(isset($_POST['title'])&&isset($_POST['textarea']))
    {
        $timer = date("Y-m-d H:i:s");
        $title = $_POST['title'];
        $content = $_POST['textarea'];
        $db = connecttodb();
        $result = mysqli_query($db,"UPDATE article SET title = '$title',source = '$content',create_time = '$timer' WHERE id = $id");
        if($result)
        {
            echo "修改成功";
            header("Location: /admin/article.php");
        }
        else
        {
            echo "修改失败";
            echo mysqli_error($db);
        }
    }
    



?>" method="post">
    <div>
        标题:<input type="text" name="title" id="title" value="<?php echo $title?>" >
    </div>

    <div>
    <textarea rows="40" cols="100" style="margin: 5px;" name="textarea"><?php echo $content?></textarea>        
        
    </div>
    <div>
    <input type="submit" value="发布">
    </div>
        
    
    </form>
</body>
</html>