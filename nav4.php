<!doctype html>

<html>

<head>
    <meta charset="UTF-8">

</head>

<body>
    <div class="navContainer">
        <div id="myNav">

            <div class="row">
                <div class="col-md-12">


                    <a href="index.php">
                        <button id="maryscahilldotnet" type=input class=mybtn style="width:100%;">
                            MARY SCAHILL DOT NET </button>
                    </a>


                </div>
            </div>

            <div class="navItems">
                <!-- Nav tabs -->
                <ul class="nav myNav" role="tablist">

                    <li class="mybtn" role="presentation"><a href="#bio" aria-controls="bio" role="tab" data-toggle="tab">BIO</a>
                    </li>
                    <li class="mybtn" role="presentation"><a href="#cv" aria-controls="cv" role="tab" data-toggle="tab">CV</a>
                    </li>
                    <li class="mybtn" role="presentation"><a href="#cntct" aria-controls="cntct" role="tab" data-toggle="tab">CNTCT</a>
                    </li>
                </ul>

                <!--             Tab panes-->
                <div id="myTabs" class="tab-content">
                    <div role="tabpanel" class="mybtn tab-pane" id="bio">
                        <?php include 'bio.php'; ?>
                    </div>

                    <div role="tabpanel" class="mybtn tab-pane" id="cv">
                        <?php include 'cv.php'; ?>
                    </div>

                    <div role="tabpanel" class="mybtn tab-pane" id="cntct">
                        </br>
                        info@maryscahill.net
                        </br>
                        </br>

                    </div>


    <script src="js/app.js"></script>


                </div>
                <script>
                    $('.nav a').click(function (e) {
                        var tab = $(this);
                        if (tab.parent('li').hasClass('active')) {
                            window.setTimeout(function () {
                                $(".tab-pane").removeClass('active');
                                tab.parent('li').removeClass('active');
                            }, 1);
                        }
                    });
                </script>

            </div>
        </div>

    </div>

</body>

</html>
