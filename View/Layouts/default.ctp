<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <meta name="keywords" content="youtube,download,export,ユーチューブ,ダウンロード,エクスポート" />
    <meta name="description" content="Youtube動画をダウンロードできるサービスです。" />
    <title>Top - Export Youtube</title>
	<?php
    echo $this->Html->meta('icon');
    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
	?>
</head>
<body>
    <div class="navbar navbar-default">
        <div class="navbar-inner">
            <div class="container">
                <h1><a href="javascript:void(0);" class="brand">Export Youtube</a></h1>
                <ul class="nav pull-right">
                    <li><a href="/"></a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <?php echo $this->Session->flash(); ?>
        <?php echo $this->fetch('content'); ?>
    </div>
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-41583079-2', 'export-youtube.xyz');
    ga('send', 'pageview');
    </script>

    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>
</body>
</html>
