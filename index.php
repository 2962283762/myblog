﻿<?php 
require_once './admin/config/config.php';
$db = connecttodb();
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}
$db->set_charset("utf8");
$sql = "SELECT * FROM web_system";
$result = $db->query($sql);
$row = $result->fetch_assoc();
$web_name = $row['web_name'];
$web_description = $row['description'];
$web_keywords = $row['keywords'];
$web_author = $row['author'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is a blog website">
    <title><?php echo "$web_name"?></title>
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
    <div class="container">

        <div class="content">
        <div class="header">
            <ul>
                <div>
                <a href="#">
                    <li>首页</li>
                </a>
                </div>
                <div>
                <a href="#">
                    <li>关于</li>
                </a></div>
                <div>
                <a href="#">
                    <li>更多</li>
                </a>
                </div>
                
            </ul>
        </div>

            <p id="float_p"></p>
            <img src="./img/bg.jpg" alt="">
            <div class="source">
                <?php 
                require_once './admin/config/config.php';
                $db = connecttodb();
                if ($db->connect_errno) {
                    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
                }
                $db->set_charset("utf8");
                $sql = "SELECT * FROM article";
                $result = $db->query($sql);
                while ($row = $result->fetch_assoc()) {
                    $title = $row['title'];
                    $content = $row['description'];
                    $time = $row['create_time'];
                    $id = $row['id'];
                    echo "
                    <a href='jump.php?id=$id' class='a_class'>
                    <div class='article'>
                    
                    <div class='text'>
                    <h2>$title</h2>
                    <h4>$time</h4>
                    <p>
                        $content
                    </p>
                    </div>
                    <div class='article_img'>
                        <img src='https://www.dmoe.cc/random.php'>
                    
                    </div></div></a>";
                    
                }
                
                
                
                ?>
                
                <!-- <div class="article">
                <a href="#">
                    <div class="text">
                    <h2>tiele</h2>
                    <h4>2022.10.9</h4>
                    <p>
                        这里是文字哦!
                    </p>
                    </div>
                    <div class="article_img">
                        <img src="./img/bg.jpg" alt="">
                </a>
                    </div> -->
                    <?php 
                // echo "
                // <a href='jump.php?id=id' class='a_class'>
                // <div class='article'>
                
                // <div class='text'>
                // <h2>title</h2>
                // <h4>time</h4>
                // <p>
                //     content
                // </p>
                // </div>
                // <div class='article_img'>
                //     <img src='./img/bg.jpg'>
                
                // </div></div></a>";
                
                ?>
                 <!--    
                </div></a>
                <a href="#"><div class="article">
                    <div class="text">
                    <h2>tiele</h2>
                    <h4>2022.10.9</h4>
                    <p>
                        这里是文字哦!
                    </p>
                    </div>
                    <div class="article_img">
                        
                        <img src="./img/bg.jpg" alt="">
                    </div> -->
                    
                </div></a>
            </div>
        </div>
        <div class="footer">
            <footer>myblog</footer>
        </div>
    </div>

    <script>
    var float_p = document.getElementById("float_p");
    var str =  "欢迎来到我的博客!";
    var i = 0;
    function typing () {
    if (i <= str.length) {
      float_p.innerHTML = str.slice(0, i++) + '_'
      timer = setTimeout(typing, 500)
    }
    else {
      float_p.innerHTML = str//结束打字,移除 _ 光标
      clearTimeout(timer)
    }
  }

  typing()


    
    



</script>
</body>

</html>