<?php
if(!isset($_COOKIE['username']))
{
    die("没登陆啊");
    header("Location: login.html");
}
require_once "config/config.php";
$db = connecttodb();
$result = mysqli_query($db,"SELECT * FROM web_system");
$resultarry = mysqli_fetch_array($result);
$web_name = $resultarry['web_name'];
$web_keywords = $resultarry['keywords'];
$web_description = $resultarry['description'];
$web_author = $resultarry['author'];
$web_email = $resultarry['email'];
$web_icp = $resultarry['icp'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>网站管理</title>
</head>
<body>
    <form action="<?php
    if(isset($_POST['web_name'])&&$_POST['web_keywords']&&$_POST['web_description']&&$_POST['web_author']&&$_POST['web_email']&&$_POST['web_icp'])
    {
        $web_name = $_POST['web_name'];
        $web_keywords = $_POST['web_keywords'];
        $web_description = $_POST['web_description'];
        $web_author = $_POST['web_author'];
        $web_email = $_POST['web_email'];
        $web_icp = $_POST['web_icp'];
        $db = connecttodb();
        $result = mysqli_query($db,"UPDATE web_system SET web_name = '$web_name',keywords = '$web_keywords',description = '$web_description',author = '$web_author',email = '$web_email',icp = '$web_icp'");
        if($result)
        {
            echo "修改成功";
            header("Location: /admin/system.php");
        }
        else
        {
            echo "修改失败";
        }
    }

    
    
    ?>" method="post">
        <table>
            <tr>
                <td>网站名称</td>
                <td><input type="text" name="web_name" value="<?php echo $web_name; ?>"></td>
            </tr>
            <tr>
                <td>网站关键字</td>
                <td><input type="text" name="web_keywords" value="<?php echo $web_keywords; ?>"></td>
            </tr>
            <tr>
                <td>网站描述</td>
                <td><input type="text" name="web_description" value="<?php echo $web_description; ?>"></td>
            </tr>
            <tr>
                <td>网站作者</td>
                <td><input type="text" name="web_author" value="<?php echo $web_author; ?>"></td>

            </tr>
            <tr>
                <td>网站邮箱</td>
                <td><input type="text" name="web_email" value="<?php echo $web_email; ?>"></td>
            </tr>
            <tr>
                <td>网站备案号</td>
                <td><input type="text" name="web_icp" value="<?php echo $web_icp; ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="提交"></td>

            </tr>
        </table>

    </form>
    
</body>
</html>