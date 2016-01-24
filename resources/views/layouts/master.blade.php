<!-- Inspired by HTML5 Boilerplate -->
<!doctype html>
<html lang=''>
<head>
    <!-- UTF-8 please (also in the headers, just to be sure) -->
    <meta charset='utf-8'>

    <!-- Some content meta tags -->
    <title>Update My Browser - @yield('title')</title>
    <meta name='description' content='Keep your browser up to date. Detect your current browser and checks if it is up to date. Provides site owners with an easy widget to inform visitors of outdated browsers.' />
    <meta name='author' content='Nabble' />

    <!-- Mobile presentation meta tags -->
    <meta name='viewport' content='width=device-width, initial-scale=1' />

    <!-- Define the root of the site -->
    <base href='<?php echo URL::to('/'); ?>/' />

    <!-- Styles -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.2/css/bootstrap.min.css'>
    <link rel='stylesheet' href='css/main.css'>

    <!-- Google Analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', '<?php echo env('GOOGLE_ANALYTICS_PROPERTY'); ?>', 'auto');
        ga('send', 'pageview');
    </script>
</head>
<body>

    <!-- The content -->
    <div id='wrapper'>
        <div id='headerwrapper'>
            <div id='header'>
                <!-- Logo by Alex Roman: http://www.icanbecreative.com/logo-vector-pack.html -->
                <a href='browser'>
                    <img src='images/logo.gif' alt='Logo' width='35' height='48' />
                </a>
                <h1>updatemybrowser.org</h1>
                <h2>always fresh</h2>
                <ul>
                    <li>
                        <a class='active bb-shadow' href='browser'>Browser Check</a>
                    </li>
                    <li>
                        <a class='bb-shadow' href='widget'>Widget</a>
                    </li>
                    <li>
                        <a class='bb-shadow' href='docs'>Documentation</a>
                    </li>
                    <li>
                        <a class='bb-shadow' href='about'>About</a>
                    </li>
                </ul>
            </div>
        </div>

        @yield('content')

        <?php if (env('ADS_ENABLED')) : ?>
            <div id='adwrapper'>
                <script async src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
                <!-- Main page responsive -->
                <ins class='adsbygoogle'
                     style='display:block'
                     data-ad-client='<?php echo env('ADS_CLIENT'); ?>'
                     data-ad-slot='<?php echo env('ADS_SLOT'); ?>'
                     data-ad-format='auto'></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        <?php endif; ?>

        <div id='footerwrapper'>
            <div id='footer'>
                <p class='outro'>
                    <strong>updatemybrowser.org</strong> is an initiative to spread modern browsers <strong>among all internet users</strong>. Websites these days have evolved to <strong>state of the art</strong> applications and todays browsers are built to serve them to you <strong>just right</strong>. But unfortunately, not everybody uses them, yet...'
                </p>
                <span class='copy'>
                    &copy; <?php echo date('Y'); ?> <a href='http://nabble.nl' target='_blank'>Nabble</a> All right reserved
                </span>
                <div class='twitter'>
                    <a id='twitter_update_list' class='twitter-timeline' href='https://twitter.com/updatemybrowser'
                       data-widget-id='<?php echo env('TWITTER_WIDGET'); ?>'
                       data-chrome='noheader nofooter noborders noscrollbar transparent'
                    >Loading last tweet...</a>
                    <a href='https://twitter.com/updatemybrowser' class='twitter-follow-button' data-show-count='false' data-size='large'>Follow @updatemybrowser</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='//platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','twitter-wjs');</script>
                </div>
            </div>
        </div>
    </div>

    <!-- The scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.js"></script>
    <script src="js/main.js"></script>

</body>
</html>
