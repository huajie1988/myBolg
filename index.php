<!doctype html>
 
 
 
<html lang="en">
 
 
 
<head>
 
 
 
    <meta charset="UTF-8">
 
 
 
    <title>kumaCoreTest</title>
 
 
 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
 
 
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
 
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" /> 
 
    <link rel="stylesheet" type="text/css" href="./css/bootstrap-responsive.css">
 
    <link rel="stylesheet" type="text/css" href="./css/myStyle.css"> 
 
	<!-- <link href="./css/jquery.gridly.css" rel="stylesheet" type="text/css" /> -->

    <script type="text/javascript" src="./js/jquery.js"></script>
 	<script src="./js/jquery.ui.core.js"></script>
	<script src="./js/jquery.ui.widget.js"></script>
	<script src="./js/jquery.ui.mouse.js"></script>
	<script src="./js/jquery.ui.sortable.js"></script>
    <script type="text/javascript" src="./js/myjs.js"></script>  
 	<script type="text/javascript" src="./js/tagCloud.js"></script>  
    <script type="text/javascript" src="./js/bootstrap.js"></script>


</head>
 
 
 
<body class="mymainbg">
 
            <div class="navbar">
 
                <div class="navbar-inner">
 
<div class=container>
 
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-responsive-collapse">
 
                            <span class="icon-bar"></span>
 
 
                            <span class="icon-bar"></span>
 
 
                            <span class="icon-bar"></span>
 
 
                        </a>
 
                        <a href="#" class="brand">KuMaCore</a>    
 
                <div class="nav-collapse collapse navbar-responsive-collapse">
 
 
                            <ul class="nav">
 
                                    <li class="divider-vertical"></li>
 
                                    <li id="mystart">
 
 
 
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<strong id="start">Start</strong>
										<!--<img  src="./img/glyphicons-halflings.png" class="mybtn_up" id="mybtn">-->
										<i class="icon-download" id="mybtn"></i>
									</a>
 
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
 
                                          <li><a tabindex="-1" href="#">Regular link</a></li>
 
                                          <li class="disabled"><a tabindex="-1" href="#">Disabled link</a></li>
 
                                          <li><a tabindex="-1" href="#">Another link1234567890</a></li>
 
                                          <li class="divider"></li>
 
                                          <li class="dropdown-submenu">
 
                                            <a tabindex="-1" href="#">More options</a>
 
                                            <ul class="dropdown-menu">
 
                                              <li><a tabindex="-1" href="#">Regular link</a></li>
 
                                              <li class="disabled"><a tabindex="-1" href="#">Disabled link</a></li>
 
                                              <li><a tabindex="-1" href="#">Another link</a></li>
 
                                            </ul>
 
                                          </li>
 
                                    </ul>
 
                                    </li>
 
                                    <li class="divider-vertical offset1"></li>
 
                                    <li class="active"><a href=""><strong>首页</strong></a></li>
 
 
 
									<li class="noAction"><a href="<?php echo "#";?>" value="二进制"><strong>二进制</strong></a></li>
 
 
 
                                    <li class="noAction"><a href="<?php echo "#2";?>" value="电磁炮"><strong>电磁炮</strong></a></li>
 
 
 
                                    <li class="noAction"><a href="<?php echo "#3";?>" value="About"><strong>About</strong></a></li>
 
 
 
                            </ul>                        
 
 
							<form action="" class="navbar-search pull-right offset2">
								<input type="text" class="search-query span2" placeholder="Search">
							</form>
 
 
                    </div>
 
 
 
                    </div>
 
 
 
                </div>
 
 
 
            </div>
 
 
    <div class="container-fluid">
 
 
 
        <div class="row-fluid">
 
 
 
            <div class="span2 offset1">
 
 
 
                <ul class="unstyled myulbg">
 
 
 
				<li>
					<div class="myasidetitlebg" style="border-bottom-width:0px">
					<strong class="myStrong">&nbsp;LOGO</strong>
					</div>
					<img  id="myasideimg" class="myasideimg" src="./img/aside.png"/>
				</li>
 
 
 
				<li>
					<div class="myasidetitlebg" style="border-top-width:1px">
						<strong class="myStrong">&nbsp;Recent Articles</strong>
					</div>
					<div class="myasidecontainer">
						aside
					</div>
				</li>
 
 
 
				<li>
				<div class="myasidetitlebg">
					<strong class="myStrong">&nbsp;tagCloud</strong>
				</div>

				<div class="myasidecontainer" id="cloud">
				<script type="text/javascript">
					$(document).ready(function(){
					setInterval("tagCloud()",1000);
		//	tagCloud();
			});
				</script>
				</div>
				</li>
 
 
 
				<li>
					<div class="myasidetitlebg">
						<strong class="myStrong">&nbsp;Bit by bit</strong>
					</div>
					<div class="myasidecontainer">
						asideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideaside
					</div>
				</li>
 
 
 
				<li>
				<div class="myasidetitlebg"><strong class="myStrong">&nbsp;MyMicroBlog</strong></div><div class="myasidecontainer" style="height:190px;">
						<?php
						//	echo "aside1";
							include("./classes/weibo_Class_inc.php");
							$arr=array('skin'=>10,'width'=>'','fansRow'=>0,'height'=>200/*'uid'=>1401880315,'verifier'=>'f47cc89f'*/);
							$wb=new weibo($arr);
							$wb->display();
						?>
				</div>
				</li>
 
 
 
                </ul>
 
 
 
        </div>
 
 
 
		<div class="span8 mycontainerbgtitle" >containerTitle
		<!--	<script>
            $(document).ready(function () {
               $("#date").text((new Date()).toString());
            });
            
        </script>-->

 		</div>
        <div class="span8  hero-unit mycontainerbg" id="mycontainer">
		  <h1>Heading</h1>
		  <p id="container">Tagline</p>
		  <p>
		    <a class="btn btn-primary btn-large">
		      Learn more
		    </a>
		  </p>
		  
		  	<ul id="sortable">
		  	<li><img src="./img/ico_day/chrome.png"/></li>
		  	<li><img src="./img/ico_day/gmail_has.png"/></li>
		  	<li><img src="./img/ico_day/calendar.png"/></li>
		  	<li><img src="./img/ico_day/evernote_gw.png"/></li>
		  	<li><img src="./img/ico_day/music.png"/></li>
		  	<li><img src="./img/ico_day/rss.png"/></li>
		  	<li><img src="./img/ico_day/SMS.png"/></li>
		  	<li><img src="./img/ico_day/Weather.png"/></li>
		  	<li><img src="./img/ico_day/github.png"/></li>
		  	<li><img src="./img/ico_day/Messageboards.png"/></li>
		  	<li><img src="./img/ico_day/twitter_bwb.png"/></li>
		  	<li><img src="./img/ico_day/cnbeta.png"/></li>
		  	<li><img src="./img/ico_day/GMap.png"/></li>
		  	<li><img src="./img/ico_day/Gplus.png"/></li>
		  	<li><img src="./img/ico_day/youtube.png"/></li>
		  	<li><img src="./img/ico_day/csdn.jpg"/></li>
		  	<li><img src="./img/ico_day/skype.png"/></li>
		  	<li><img src="./img/ico_day/summer.logo.png"/></li>
		  </ul>
		   <ul id="sortable2">
		  	<li><img src="./img/ico_night/chrome.png"/></li>
		  	<li><img src="./img/ico_night/gmail_has.png"/></li>
		  	<li><img src="./img/ico_night/calendar.png"/></li>
		  	<li><img src="./img/ico_night/evernote_gw.png"/></li>
		  	<li><img src="./img/ico_night/music.png"/></li>
		  	<li><img src="./img/ico_night/rss.png"/></li>
		  	<li><img src="./img/ico_night/SMS.png"/></li>
		  	<li><img src="./img/ico_night/Weather.png"/></li>
		  	<li><img src="./img/ico_night/github.png"/></li>
		  	<li><img src="./img/ico_night/Messageboards.png"/></li>
		  	<li><img src="./img/ico_night/twitter_bwb.png"/></li>
		  	<li><img src="./img/ico_night/cnbeta.png"/></li>
		  	<li><img src="./img/ico_night/GMap.png"/></li>
		  	<li><img src="./img/ico_night/Gplus.png"/></li>
		  	<li><img src="./img/ico_night/youtube.png"/></li>
		  	<li><img src="./img/ico_night/csdn.png"/></li>
		  	<li><img src="./img/ico_night/skype.png"/></li>
		  	<li><img src="./img/ico_night/summer.logo.png"/></li>
		  </ul>
		</div>
       </div>
 
 
 
	</div>
	  <div class="row-fluid">
		<div class="navbar navbar span10">
		  <div class="navbar-inner navbar-fixed-bottom">
		    <ul class="nav offset1">
		      <li class="active"><a href="#"><strong >Start</strong></a></li>
		      <li><a href="#"><strong >Start</strong></a></li>
		      <li><a href="#"><strong >Start</strong></a></li>
		    </ul>
		  </div>
		</div>
		<div class="span1"></div>
	  </div>



 <script type="text/javascript">
 $(document).ready(function(){
 clickArrow();
 changeAsideImg();
 aside_show();
 initMobAsideImg();
 getAction();
 getTagCloud();
 initSkin();
 
 })
  $(function() {
		$( "#sortable" ).sortable();
		$( "#sortable" ).disableSelection();
	});
    $(function() {
		$( "#sortable2" ).sortable();
		$( "#sortable2" ).disableSelection();
	});
 </script>
 
</body>
 
 
 
</html>
 
