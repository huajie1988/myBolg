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

 

    <script type="text/javascript" src="./js/jquery.js"></script>

 

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

 

 

 

                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong id="start">Start</strong><img  src="./img/glyphicons-halflings.png" class="mybtn_up" id="mybtn"></a>

 

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

 

 

 

                                    <li><a href=""><strong>二进制</strong></a></li>

 

 

 

                                    <li><a href=""><strong>电磁炮</strong></a></li>

 

 

 

                                    <li><a href=""><strong>About</strong></a></li>

 

 

 

                            </ul>                        

 

 

 

 

 

                            <form action="" class="navbar-search pull-right offset2"><input type="text" class="search-query span2" placeholder="Search"></form>

 

 

 

 

 

                    </div>

 

 

 

                    </div>

 

 

 

                </div>

 

 

 

            </div>

 

 



    <div class="container-fluid">

 

 

 

        <div class="row-fluid">

 

 

 

            <div class="span2 offset1">

 

 

 

                <ul class="unstyled myulbg">

 

 

 

<li><div class="myasidetitlebg">&nbsp;title1</div><img  id="myasideimg" class="myasideimg" src="./img/aside.png"/></li>

 

 

 

				<li>
					<div class="myasidetitlebg">&nbsp;title2</div><div class="myasidecontainer">
						aside
					</div>
				</li>

 

 

 

				<li><div class="myasidetitlebg">&nbsp;title3</div><div class="myasidecontainer" id="cloud">
				<script type="text/javascript">
					$(document).ready(function(){
					setInterval("tagCloud()",1000);
		//	tagCloud();
			});
			</script>
				</div>
				</li>

 

 

 

                <li><div class="myasidetitlebg">&nbsp;title4</div><div class="myasidecontainer">asideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideasideaside</div></li>

 

 

 

				<li>
				<div class="myasidetitlebg">&nbsp;title5</div><div class="myasidecontainer" style="height:190px;">
						<?php
							//echo "aside1";
							include("./weibo_Class_inc.php");
							$arr=array('skin'=>10,'width'=>'','fansRow'=>0,'height'=>200/*'uid'=>1401880315,'verifier'=>'f47cc89f'*/);
							$wb=new weibo($arr);
							$wb->display();
						?>
				</div>
				</li>

 

 

 

                </ul>

 

 

 

        </div>

 

 

 

			<div class="span8 mycontainerbg">container
		<!--	<script>
            $(document).ready(function () {
               $("#date").text((new Date()).toString());
            });
            
        </script>-->


 </div>

 

 

 

        </div>

 

 

 

    </div>



 <script type="text/javascript">
 $(document).ready(function(){
 clickArrow();
 changeAsideImg();
 aside_show();
 initMobAsideImg();
 })

 </script>

 

</body>

 

 

 

</html>
 
