<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        table{
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
        }
        td{
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
        }
        th{
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
        }
        a{
            text-decoration: none;
            color: black;
        }
        a:hover{
            color: red;
        }
    </style>
    <table>
        <tr><th>文章id</th><th>文章标题</th><th>创建时间</th><th>删除</th></tr>
        <?php
        require_once "config/config.php";
        $db = connecttodb();
        $result = mysqli_query($db,"SELECT * FROM article");
        while($row = mysqli_fetch_array($result))
        {
            $id = $row['id'];
            echo "<tr><td>".$id."</td><td>".$row['title']."</td><td>".$row['create_time']."</td><td><a href='deltearticle.php?id=$id'>删除</a></td><td><a href='updatearticle.php?id=$id'>修改</a></td></tr>";
        }
        

        ?>
    </table>
    
</body>
</html>