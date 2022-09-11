<?php
    require_once "admin/config/config.php";
    $db = connecttodb();
    $info = mysqli_query($db, "SELECT * FROM `web_system`");
    $info = mysqli_fetch_assoc($info);
    $title = $info['title'];
    $description = $info['description'];
    $keywords = $info['keywords'];
    $author = $info['author'];
    $email = $info['email'];
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title><?php echo $title.$description?></title>
		<link href="img/title.ico" rel="shortcut icon"/>
		<style type="text/css">
			html{
				position: relative;
			}
			.top{
				background-color: #FFFFFF;
				height: 60px;
				width: 1900px;
				position: absolute;
				top: 0;
				left: 0;
			}
			.top h1{
				padding-left: 150px;
				font-family: "华文新魏";
			}
			.top-left{
				width: 250px;
				height: 50px;
			}
			.top-left span{
				position: absolute;
				top: 15px;
				left: 250px;
				font-family: "华文新魏";
				font-size: 28px;
				color: pink;
				float: left;
				display: none;
			}
			.top-left:hover span{
				display: block;
			}
			.top1{
				position: absolute;
				top: 0px;
				left: 600px;
				padding: 20px;
				font-family: "华文新魏";
				font-size: 30px;
			}
			.top2{
				position: absolute;
				top: 0px;
				left: 800px;
				padding: 20px;
				font-family: "华文新魏";
				font-size: 30px;
			}
			.top3{
				position: absolute;
				top: 0px;
				left: 1050px;
				padding: 20px;
				font-family: "华文新魏";
				font-size: 30px;
			}
			.top4{
				position: absolute;
				top: 0px;
				left: 1300px;
				padding: 20px;
				font-family: "华文新魏";
				font-size: 30px;
			}
			a{
				text-decoration: none;
				color: black;
			}
			a:hover{
				text-decoration: none;
				color:  orange;
			}
			a:active{
				text-decoration: line-through;
				color: cadetblue;
			}
			.top-right{
					position: absolute;
					top: 0px;
					right: 30px;
					padding: 20px;
					font-family: "华文新魏";
					font-size: 20px;
			}
			.top img{
				width: 40px;
				height: 40px;
				border-radius: 25px;
				position: absolute;
				top: 5px;
				right: 0px;
			}
			.top-right1{
					position: absolute;
					top: -4px;
					right: -150px;
					padding: 20px;
			}
			.top-right1 input{
				font-family: "华文新魏";
				font-size: 20px;
				border-radius: 8px;
			}
			.main{
				position: absolute;
				top: 60px;
				left: 0;
				background-image: url(img/人生背景.jpg);
				background-repeat: no-repeat;
				background-size: cover;
				background-attachment: fixed;
				width: 2133px;
				height: 1141px;
			}
			.main-left h1{
				position: absolute;
				left: 50px;
				top: 180px;
				color: #517693;
				font-size: 40px;
				font-weight: bold;
				font-family: "华文行楷";
			}
			.main-left h3{
				position: absolute;
				left: 50px;
				top: 280px;
				color: #517693;
				font-size: 28px;
				font-weight: bold;
				font-family: "华文行楷";
			}
			.center-left{
				position: absolute;
				top: 30px;
				left: 550px;
				width: 250px;
				height: 850px;
				border: 3px solid white;
				border-radius: 20px;
				background-color:white;
				opacity: 0.8;
			}
			.center-left img{
				width: 100px;
				height: 100px;
				border-radius: 100px;
				position: absolute;
				top: 5px;
				left: 75px;
			}
			.center-left #name{
				position: absolute;
				top: 110px;
				left: 75px;
				text-align: center;
				font-family: "华文新魏";
				font-size: 17px;
			}
			.span ul{
				position:absolute;
				top: 200px;
				left: 510px;
				width: 250px;
				height: 680px;
			}
			.span li{
				line-height: 111px;
				list-style-type: none;
			}
			.pane{
				width: 256px;
				text-align: center;
				font-family: "华文新魏";
				font-size: 20px;
			}
			.pane:hover{
				background-color: white;
			}
			.pane1{
				width: 256px;
				height: 114px;
				border-bottom-left-radius: 15px;
				border-bottom-right-radius: 15px;
				text-align: center;
				font-family: "华文新魏";
				font-size: 20px;
			}
			.pane1:hover{
				background-color: white;
			}
			.center{
				position: absolute;
				top: 30px;
				left: 820px;
				width: 850px;
				height: 850px;
				border: 3px solid white;
				border-radius: 20px;
				background: rgba(250,250,250,0.8);
			}
			.center iframe{
				border-radius: 20px;
			}
			#showtime1{
					position: absolute;
					left: 30px;
					bottom: 20px;
					color: #517693;
					font-size: 28px;
					font-weight: bold;
					font-family: "华文新魏";
					}
			#showtime2{
					position: absolute;
					left:40px;
					bottom: -15px;
					color: #517693;
					font-size: 25px;
					font-weight: bold;
					font-family: "华文新魏";
					}
			.time{
				position: absolute;
				right: 30px;
				bottom: 5px;
				color: #517693;
				font-size: 28px;
				font-weight: bold;
				font-family: "华文新魏";
				}
			.bottom
			{
				position: absolute;
				top: 1110px;
				width: 2110px;
				height: 85px;
			}
		</style>
	</head>
	<body>
		<div class="top">
			<div class="top-left">
				<h1>my blog</h1>
				<span>风止于秋水，我止于你💗</span>
			</div>
			<a class="top1" href="home page.html">首页</a>
			<a class="top2" href="search.php">苦海无涯</a>
			<a class="top3" href="life.html">人生旅途</a>
			<a class="top4" href="message board.html">人生良言</a>
			<span class="top-right">黎曙</span>
			<img src="img/头像.jpg" title="头像" alt="头像" />
			<span class="top-right1"><input type="submit" value="登录"></span>
		</div>
		<div class="main">
			<div class="main-left">
				<h1>欢迎来到黎曙的世界！<br/>Welcome to Li Shu's world!</h1>
				<h3>今天也要加油昂！<br/>Today, we still have to refuel!</h3>
			</div>
			<div class="main-center">
				<div class="center-left">
					<a href="my.html" target="frame"><img src="img/头像.jpg" alt="头像" title="头像" /></a>
					<span id="name">黎曙<br/>非常热爱生活</span>
				</div>
			</div>
				<div class="span">
						<ul>
							<li class="pane"><a href="main1.html" target="frame">主页</a></li>
							<li class="pane"><a href="work.html" target="frame">笔记</a></li>
							<li class="pane"><a href="conclude.html" target="frame">归档</a></li>
							<li class="pane"><a href="email.html" target="frame">邮箱</a></li>
							<li class="pane"><a href="about.html" target="frame">关于</a></li>
							<li class="pane1">更多</li>
						</ul>
				</div>
				<div class="center">
					<iframe src="main1.html" width="850px" height="850px" frameborder="0" scrolling="yes" name="frame"></iframe>
				</div>
			</div>
		<div class="bottom">
			<p id="showtime1" title="我们的征途是星辰大海">哈雷彗星的约定：</p>
			<p id="showtime2" >14193天3:22:55</p>
			<script>
				var showtime2 = function () {
					var nowtime = new Date();
						endtime = new Date("2061/1/1");
					var lefttime = endtime.getTime() - nowtime.getTime();
						leftd = Math.floor(lefttime/(1000*60*60*24));  
						lefth = Math.floor(lefttime/(1000*60*60)%24);  
						leftm = Math.floor(lefttime/(1000*60)%60);  
						lefts = Math.floor(lefttime/1000%60); 
					return leftd + "&#22825;" + lefth + ":" + leftm + ":" + lefts;
				}
				var div = document.getElementById("showtime2");
				setInterval (function () {
					div.innerHTML = showtime2();
				}, 1000);
			</script>
			<div class="time">
				<script> 
					document.write("<span id=time></span>") 
					setInterval("time.innerText=new Date().toLocaleString()",1000)
				</script> 
			</div>
		</div>
	</body>
</html>

