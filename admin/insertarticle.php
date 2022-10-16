<?php
    require_once "config/config.php";
 
    if(isset($_POST['textarea'])&&isset($_POST['title']))
    {
        $db = connecttodb();
        $title = $_POST['title'];
        $content = $_POST['textarea'];
        $descrption = substr($content,0,10);
        $timer = date("Y-m-d H:i:s");
        $result = mysqli_query($db,"INSERT INTO article (title,source,description,create_time) VALUES ('$title','$content','$descrption','$timer')");
        if($result)
        {
            echo "<script>alert('发布成功');window.location.href='article.php';</script>";
        }
        else
        {
            echo "发布失败";
            echo mysqli_error($db);
        }
    }
    ?>