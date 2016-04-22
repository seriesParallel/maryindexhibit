<!DOCTYPE html>
<html class="full" lang="en">
<!-- Make sure the <html> tag is set to the .full CSS class. Change the background image in the full.css file. -->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="(╯°□°）╯︵ ┻━┻ the best search results are gleaned by using natural language ┬──┬◡ﾉ(° -°ﾉ)">
    <meta name="author" content="MARY SCAHILL">

    <title>MARY SCAHILL DOT NET</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>


    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!--        <link href="css/the-big-picture.css" rel="stylesheet">-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
        function checkbrowser() {

            var nVer = navigator.appVersion;
            var nAgt = navigator.userAgent;
            var browserName = navigator.appName;
            var fullVersion = '' + parseFloat(navigator.appVersion);
            var majorVersion = parseInt(navigator.appVersion, 10);
            var nameOffset, verOffset, ix;
            var runMyScript;

            // In Opera, the true version is after "Opera" or after "Version"
            if ((verOffset = nAgt.indexOf("Opera")) != -1) {
                browserName = "Opera";
                fullVersion = nAgt.substring(verOffset + 6);
                if ((verOffset = nAgt.indexOf("Version")) != -1)
                    fullVersion = nAgt.substring(verOffset + 8);
                runMyScript = true;
            }

            // In MSIE, the true version is after "MSIE" in userAgent
            else if ((verOffset = nAgt.indexOf("MSIE")) != -1) {
                browserName = "Microsoft Internet Explorer";
                fullVersion = nAgt.substring(verOffset + 5);
                runMyScript = true;

            }
            // In Chrome, the true version is after "Chrome"
            else if ((verOffset = nAgt.indexOf("Chrome")) != -1) {
                browserName = "Chrome";
                fullVersion = nAgt.substring(verOffset + 7);
                runMyScript = true;
            }
            // In Safari, the true version is after "Safari" or after "Version"
            else if ((verOffset = nAgt.indexOf("Safari")) != -1) {
                browserName = "Safari";
                fullVersion = nAgt.substring(verOffset + 7);
                if ((verOffset = nAgt.indexOf("Version")) != -1)
                    fullVersion = nAgt.substring(verOffset + 8);
                ///// INSERT HERE THE VERSION OF PAGE U WANT TO SHOW TO SAFARI USERS
                runMyScript = false;
                document.body.style.backgroundImage = "url('/images/screenReach.png')";
                document.body.style.backgroundSize = "cover";
                // txt ="<p id='pd0' style='color:blue'> It is Safarai Browser, Browser name  ="+browserName+'</p>';
                // document.write(txt);

            }
        }
    </script>
    <!-- Navigation -->
    <?php include 'nav4.php'; ?>
</head>

<body>

    <script src="js/three.min.js"></script>
    <script src="js/FresnelShader.js"></script>
    <script src="js/threex.bubble.js"></script>
    <script src="js/detector.js"></script>




</body>

</html>
