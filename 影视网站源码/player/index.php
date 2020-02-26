<?php

$url = @$_GET['play'];
if (!empty($url))
    $url = htmlentities($url, ENT_QUOTES);
else {
    header('Refresh:3,Url=../');
    echo '<h1>地址出错，将返回首页。。。</h1>';
    die;
}
?>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name=”applicable-device” content=”pc,mobile”>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/video.js@7.4.1/dist/video-js.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/open-iconic@1.1.1/font/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../static/style.css">
    <style type="text/css">
    .navbar.navbar-expand-lg.navbar-dark.shadow-sm.rounded.nice-nav .container a {
    font-family: Constantia, Lucida Bright, DejaVu Serif, Georgia, serif;
}
    </style>
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


    <title>在线播放</title>
</head>

<body>
	<body style=" background-color:#030303">
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm rounded nice-nav">
        <div class="container">
        <a class="navbar-brand logo" href="/"><img src="../static/logo5.png" alt="" class="mr-2"><span style="font-size:24px;">爱6播放器</span>&nbsp; &nbsp;</a>
		<a><strong>请勿相信视频内任何广告</strong></a>
		</div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-12 py-">
                <video id="player" class="video-js vjs-16-9 vjs-big-play-centered" controls preload="auto" data-setup="{}">
                  <source id="video-player" src="<?php echo $url; ?>" type="application/x-mpegURL">
                    <p class="vjs-no-js">
                        To view this video please enable JavaScript, and consider upgrading to a web browser that
                        <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                    </p>
                </video>
                <div class="my-3">
                    <div class="d-none history">
                        <div class="text-center"><a href="javascript:;" class="p-3 h-close nice-c"><span class="oi oi-chevron-top"></span></a></div>
                        <ul class="list-unstyled nice-c my-2 h-list">
                        </ul>
                        <a href="https://a--6.com" class="clear-history">返回首页</a>
                    </div>
                    <div class="text-center"><a href="javascript:;" class="p-3 h-open nice-c"><span class="oi oi-chevron-bottom"></span></span></a></div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/video.js@7.4.1/dist/video.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@videojs/http-streaming@1.10.3/dist/videojs-http-streaming.min.js"></script>
    <script src="../static/bundle.js"></script>
    <div class="d-none">
    </div>
</body>

</html>