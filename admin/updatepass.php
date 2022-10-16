<?php
        if (isset($_GET['username'])) {
            echo "modify_pass.php?id=".$_GET['username'];
        require_once './admin/config/config.php';
        $db = connecttodb();
        if ($db->connect_errno) {
            echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
        }
        $db->set_charset("utf8");
        $sql = "update user set password = '$_POST[password]' where username = '$_POST[username]'";
        $result = $db->query($sql);
        if ($result) {
            echo "<script>alert('修改成功！');location.href='login.php';</script>";
        } else {
            echo "<script>alert('修改失败！');location.href='login.php';</script>";
        }
        }

    
    ?>