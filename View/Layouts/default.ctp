<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width-device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
        <!-- Bootstrap -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <meta name="keywords" content="youtube,ユーチューブ,movie,動画,download,ダウンロード,export,エクスポート" />
        <meta name="description" content="youtube(youtube.com)の動画をダウンロードできるサービスです。" />
        <title><?php echo $title_for_layout ?> - Export Youtube</title>
        <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-41583079-2', 'auto');
        ga('require', 'displayfeatures');
        ga('send', 'pageview');

        </script>
        <?php
        echo $this->Html->meta('icon');
        echo $this->fetch('meta');
        echo $this->fetch('css');
        ?>
        <style>
        h2 {
            margin-top: 0.1em;
        }
        .nav-pills>li>a {
            border-bottom: 1px solid lightgray;
        }
        .content-box {
            background-color: #f9f9f9;
        }
        footer div.container {
            margin-top: 1em;
            background-color: #f5f5f5;
            text-align: center;
        }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-default container">
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".target">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Export Youtube</a>
            </div>
            <div class="collapse navbar-collapse target">
                <ul class="nav navbar-nav">
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/contacts/">Contact</a></li>
                </ul>
            </div>
        </nav>

        <div class="container">
            <div class="btn-group">
                <div class="ninja_onebutton">
                    <script type="text/javascript">
                    //<![CDATA[
                    (function(d){
                        if(typeof(window.NINJA_CO_JP_ONETAG_BUTTON_0750bcd7e07536b67d248e57940857a2)=='undefined'){
                            document.write("<sc"+"ript type='text\/javascript' src='http:\/\/omt.shinobi.jp\/b\/0750bcd7e07536b67d248e57940857a2'><\/sc"+"ript>");
                        }else{
                            window.NINJA_CO_JP_ONETAG_BUTTON_0750bcd7e07536b67d248e57940857a2.ONETAGButton_Load();}
                    })(document);
                    //]]>
                    </script><span class="ninja_onebutton_hidden" style="display:none;"></span><span style="display:none;" class="ninja_onebutton_hidden"></span>
                </div>
            </div>
            
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->fetch('content'); ?>
        </div>

        <footer id="footer">
            <div class="container">
                <p>Copyright © 2014-2014 genzouw All Rights Reserved.</p>
                <p>( twitter:<a href="https://twitter.com/genzouw">@genzouw</a> , facebook:<a href="https://www.facebook.com/genzouw">genzouw</a>, mailto:<a href="mailto:genzouw@gmail.com">genzouw@gmail.com</a> )</p>
                <iframe src="//www.facebook.com/plugins/follow?href=https%3A%2F%2Fwww.facebook.com%2Fgenzouw&amp;layout=standard&amp;show_faces=true&amp;colorscheme=light&amp;width=450&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe>
            </div>
        </footer>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" async defer></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js" async defer></script>
        <?php
        echo $this->fetch('script');
        ?>
    </body>
</html>
