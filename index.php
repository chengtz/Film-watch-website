<?php
/*
 * @Author: yumusb
 * @Date: 2019-07-14 18:39:54
 * @LastEditors: yumusb
 * @LastEditTime: 2019-07-14 19:36:54
 * @Description: 首页文件
 */

require "common.php";

if ($set['autokeywords'] == 1) {
    $word = get_word();
} else {
    $word = "迪迦奥特曼";
}
?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="keywords" content="<?php echo $set['keywords']; ?>">
    <meta name="description" content="<?php echo $set['desc']; ?>">
    <title><?php echo $set['title']; ?></title>
    <link rel="stylesheet" href="https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.min.css">
    <script data-ad-client="ca-pub-1477654537138358" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?a9ecfbca047fe1ff573e9f1241bf3c4d";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

    <script src="https://cdn.staticfile.org/jquery/2.2.4/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#search").css("height", ($(window).height()) + "px");
            $("#search").css("margin-top", "-65px");
            $("#loadgif").hide();
            $('#search-btn').click(function() {
                $("#searchres").hide();
                $.ajax({
                    type: "get",
                    
                    url: "./api.php",
                    dataType: "json",
                    data: "do=get&v=" + $("input[id='search-kw']").val(),
                    async: true,
                    beforeSend:function() {  $("#loadgif").show();}, 


                        success: function(res) {
                        	$("#loadgif").hide();
                        if (res.status == 200) {
                            res = res.res;
                            var res1 = "";
                            var resheight = 0;
                            for (i in res) {
                                res1 = res1 + '<a href=javascript:play(' + res[i] + ')>' + i + '</a><br>';
                                resheight += 40;
                                console.log(resheight);
                            }
                            if (resheight > 300) {
                                $("#searchres").css("height", 300 + "px");
                                $("#searchres").css("overflow", 'auto');
                            } else {
                                $("#searchres").css("height", resheight + "px");
                            }
                            $("#searchres").html(
                                res1
                            );
                            $("#searchres").slideDown();
                        } else {
                            alert(res.res);
                        }

                    },
                    error: function(a) {
                    	$("#loadgif").hide();
                        alert("不好意思，没有你想看的电影电视剧呢~");
                    


                    }
                    
                });
            });
        });

        function play(id) {

            $("#searchres").hide();
            $.ajax({
                type: "get",
                url: "./api.php",
               
                dataType: "json",
                data: "do=play&v=" + id,
                async: true,
                beforeSend:function() {  $("#loadgif").show();},
                success: function(res) {
                	$("#loadgif").hide();
                    if (res.status == 200) {
                    	res=res.res;
                        var res1 = ""
                        var resheight = 0;
                        for (i in res) {
                            res1 = res1 + '<a target="_blank" href="' + res[i] + '">' + i + '</a><br>';
                            resheight += 40;
                        }
                        if (resheight > 300) {
                            $("#searchres").css("height", 300 + "px");
                            $("#searchres").css("overflow", 'auto');
                        } else {
                            $("#searchres").css("height", resheight + "px");
                        }
                        $("#searchres").html(
                            res1
                        );
                        $("#searchres").slideDown();
                    } else {
                        alert(res.res);
                    }
                },
                error: function(a) {
                	$("#loadgif").hide();
                    alert("不好意思，没有你想看的电影电视剧呢~");
                }
            })
        }


        
    </script>
    <link rel="stylesheet" href="./static/index.min.css">
</head>

<body id="page-index" style="background: #000000 url(<?php echo $set['bg']; ?>)">


    <header id="masthead" data-login-status="0">
    </header>

    <main>
        <section id="search">
            <div class="container">
                <div class="absolute-center">
                    <div class="logo center-block">
                        <h1>
                            <a href="./">
                                <img src="./static/logo.png">
                            </a>
                        </h1>

                    </div>
                    <div class="search-form form-inline">
                        <div class="form-group">
                            <label for="search-kw" class="hidden"></label>
                            <input type="search" id="search-kw" class="form-control" name="longurl" placeholder="<?php echo $word; ?>" autocomplete="off">
                        </div>
                        <button type="submit" id="search-btn" class="btn btn-default">我要看</button>
                    </div>
                    <div class="center-block" id="searchres" style="padding: 15px; border: 1px solid transparent;margin-bottom: 20px;background: rgba(132, 131, 137, 0.67); color: #FFF; font-size:15px;text-align:left;display:none;">


                    </div>
                    	<div id="loadgif" style="width: 80px; height: 80px; position: absolute; top: 148px; left: 205px;">
　　<img alt="加载中..." src="/upload/jiazai.gif"/><p>努力加载中</p>
　　</div>



                </div>

            </div>
            <div id="sb_foot"><span>©2019 本站为视频搜索引擎，如有违反版权请联系地址栏源码站 </span>
            </div>
        </section>
<script type="text/javascript" src="https://cdn.jsdelivr.net/gh/yumusb/cdn@master/push.js"></script>
</body>

</html>
