<?php
require_once "config/config.php";
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $db = connecttodb();
    $result = mysqli_query($db,"DELETE FROM article WHERE id = $id");
    if($result)
    {
        echo "<script>alert('删除成功');window.location.href='article.php';</script>";
    }
    else
    {
        echo "<script>alert('删除失败');window.location.href='article.php';</script>";
    }
}
$db = connecttodb();



?>