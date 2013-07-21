﻿<!doctype html>

 

 

 

<html lang="en">

 

 

 

<head>

 

 

 

    <meta charset="UTF-8">

 

 

 

    <title>kumaCoreTest</title>

 

 

 

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

 

 

 

    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">

 

	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" /> 

 

    <link rel="stylesheet" type="text/css" href="./css/bootstrap-responsive.css">

 

 

 

    <script type="text/javascript" src="./js/jquery.js"></script>

 

 

 

    <script type="text/javascript" src="./js/bootstrap.js"></script>

 

    <style type="text/css">

        .mybtn{

            position: absolute;

            clip: rect(23px 138px  43px 118px);

            z-index: 9999;

            left: -50px;

            top: -11px;

            opacity: 0.7;

        }

        .mybtn2{

            position: absolute;

            clip: rect(23px 161px  43px 141px);

            z-index: 9999;

            left: -74px;

            top: -11px;

        }

        .myulbg{
			/*margin:0;
			padding:0;*/
			background-color: #ff00ff;/*建议正式使用不加，加后与mycontainerbg混合叠加效果*/
        }

        .mymainbg{

			/* 	background-image: url("http://a.hiphotos.baidu.com/zhidao/pic/item/00e93901213fb80ecb349a4e36d12f2eb8389446.jpg");

				height: 120px;  start height 如果去掉，则会随着响应导航栏变化而变化
				background-size: cover; */
			/*background-position: center;   保证Internet Explorer 7/8 正常显示，图片会居中*/
			background: url("http://a.hiphotos.baidu.com/zhidao/pic/item/00e93901213fb80ecb349a4e36d12f2eb8389446.jpg") no-repeat center center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}

.myasideimg{

width:100%;

}

.myasidetitlebg{

width:100%;

background-color:#fff;

height:100%;

}
    .mycontainerbg{
        background-color: #fff;
        opacity:0.8;
    }

    .myasidecontainer{
        display: none;
        width: 100%;
		word-break:break-all;
		background-color: #fff;
        opacity:0.8;
        /*overflow: auto;
        height: 50px;
        scrollbar-arrow-color:#FFFFFF;*/
    }

    </style>

 

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

 

 

 

                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong id="start">Start</strong><img  src="./img/glyphicons-halflings.png" class="mybtn" id="mybtn"></a>

 

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

 

 

 

                <li><div class="myasidetitlebg">&nbsp;title3</div><div class="myasidecontainer">aside</div></li>

 

 

 

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

 

 

 

            <div class="span8 mycontainerbg">container</div>

 

 

 

        </div>

 

 

 

    </div>



 <script type="text/javascript">

 /*================================================================

 

        2013/05/07  Ver0.01

        1、添加下拉箭头动画功能

        2、修正当用mybtn或mystart其中一个打开下拉菜单，用另一个想关闭时

          需要按两次的问题。

        3、当打开菜单后如果单击其他地方，下拉菜单消失，但箭头方向未变

 

 ================================================================

        

        2013/05/07 Ver0.02

        1、修改算法为click。

        2、问题3依旧存在

 

 ==============================================================*/

    $(document).ready(function(){

            $('#mystart,#mybtn').click(function(){

            var hasCls=$('#mystart').hasClass("open");

                //alert(hasCls);        

                if(!hasCls)

                {

                    //alert(hasCls);

                    //$('#mystart').addClass("open");//不需要添加，click事件会自动添加open类，如果手动添加反而会出错

                    $('#mybtn').removeClass("mybtn").addClass("mybtn2");

                }

                else

                    $('#mybtn').addClass("mybtn").removeClass("mybtn2");

            //$('#mystart').addClass("open");

            });

    })

    $(document).ready(function(){
        $('#myasideimg').toggle(function(){
            $(this).attr("src","./img/aside2.png");
            $('.navbar').addClass("navbar-inverse");
        },function(){
            $(this).attr("src","./img/aside.png");
            $('.navbar').removeClass("navbar-inverse");            
        });
        $('#myasideimg').mousemove(function(){
            $(this).css("cursor","pointer");
        });
    })

    $(document).ready(function(){
        $('.myasidetitlebg').click(function(){
            $('.myasidecontainer,#myasideimg').hide(600).end;
            $(this).next().show(600).end();
        }/*,function(){
            //$('.myasidecontainer,#myasideimg').hide(600).end;
            $(this).next().hide(600).end();
        }*/);
    })

    $(document).ready(function(){
        var myWidth;
        if($.browser.msie){
             myWidth=document.compatMode == "CSS1Compat"? document.documentElement.clientHeight:document.body.clientWidth;
            }else{
                myWidth= self.innerWidth;
                }
        //alert(myWidth);
        if(myWidth<400)
            $('#myasideimg').hide(600).end;
    })

 </script>

 

</body>

 

 

 

</html>
 
