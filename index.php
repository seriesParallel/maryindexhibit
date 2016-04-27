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
    <script src="js/jquery-2.1.0.min.js"></script>
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

    <div class="fullscreen">
        <!-- Page Content -->



        <div class="container">
            <script>
                document.onload = checkbrowser();
                if (runMyScript = true) {
                    var camera, scene, renderer;
                    var onRenderFcts = [];

                    var renderer = Detector.webgl ? new THREE.WebGLRenderer() : new THREE.CanvasRenderer();

                    renderer.setSize(window.innerWidth, window.innerHeight);
                    document.body.appendChild(renderer.domElement);

                    var div = document.createElement("div");
                    div.style.position = "absolute";
                    div.style.top = "0px";
                    div.style.width = "100%";
                    div.style.height = "100%";
                    div.style.backgroundImage = "url('images/watermarkSpell.png')";
                    div.style.backgroundPosition = "-42px 0px";
                    div.style.opacity = ".6";
                    div.style.backgroundRepeat = "repeat";
                    div.style.backgroundAttachment = "scroll";
                    document.body.appendChild(div);



                    scene = new THREE.Scene();
                    camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 0.01, 1000)
                    camera.position.z = 3;


                    window.addEventListener('resize', onWindowResize, false);

                    function onWindowResize() {

                        camera.aspect = window.innerWidth / window.innerHeight;
                        camera.updateProjectionMatrix();

                        renderer.setSize(window.innerWidth, window.innerHeight);

                        render();

                    }


                    var path = "images/"

                    var format = '.png'
                    var urls = [
  path + 'squareHands2' + format, path + 'squareHands2' + format,
  path + 'squareHands' + format, path + 'squareHands2' + format,
  path + 'squareHands' + format, path + 'squareHands' + format
 ]
                    var textureCube = THREE.ImageUtils.loadTextureCube(urls)
                    textureCube.format = THREE.RGBFormat


                    for (var i = 0; i < 100; i++) {;
                        (function () {
                            var mesh = new THREEx.BubbleMesh(textureCube)
                            scene.add(mesh)
                                // position the mesh
                            mesh.position.x = (Math.random() - 0.5) * 10
                            mesh.position.y = (Math.random() - 0.5) * 10
                            mesh.position.z = (Math.random() - 0.5) * 5 - 5
                                // set the scale of the mesh
                            mesh.scale.multiplyScalar(Math.random() * 1 + 1);
                            // animate the mesh
                            onRenderFcts.push(function (delta, now) {
                                var angle = 0.01 * now * Math.PI * 2;
                                mesh.position.x = 4 * Math.cos(angle + mesh.id);
                                mesh.position.y = 10 * Math.sin(angle + mesh.id * 1.1);
                            })
                        })()
                    }
                    //
                    //         //////////////////////////////////////////////////////////////////////////////////
                    //		Camera Controls							//
                    //////////////////////////////////////////////////////////////////////////////////
                    var mouse = {
                        x: -.4,
                        y: 0
                    }
                    document.addEventListener('mousemove', function (event) {
                        mouse.x = (event.clientX / window.innerWidth) - 0.5
                        mouse.y = (event.clientY / window.innerHeight) - 0.5
                    }, false)
                    onRenderFcts.push(function (delta, now) {
                        camera.position.x += (mouse.x * .8 - camera.position.x) * (delta * 3)
                        camera.position.y += (mouse.y * 2 - camera.position.y) * (delta * 3)
                        camera.lookAt(scene.position)
                    })


                    //////////////////////////////////////////////////////////////////////////////////
                    //		add a skybox							//
                    //         //////////////////////////////////////////////////////////////////////////////////
                    var shader = THREE.ShaderLib["cube"];
                    shader.uniforms["tCube"].value = textureCube;
                    var material = new THREE.ShaderMaterial({
                        fragmentShader: shader.fragmentShader,
                        vertexShader: shader.vertexShader,
                        uniforms: shader.uniforms,
                        side: THREE.BackSide
                    })
                    var geometry = new THREE.CubeGeometry(5000, 500, 500)
                    var meshSkybox = new THREE.Mesh(geometry, material);
                    scene.add(meshSkybox);


                    onRenderFcts.push(function () {
                        renderer.render(scene, camera);
                    })

                    var lastTimeMsec = null
                    requestAnimationFrame(function animate(nowMsec) {
                        // keep looping
                        requestAnimationFrame(animate);
                        // measure time
                        lastTimeMsec = lastTimeMsec || nowMsec - 1000 / 60
                        var deltaMsec = Math.min(200, nowMsec - lastTimeMsec)
                        lastTimeMsec = nowMsec
                            // call each update function
                        onRenderFcts.forEach(function (onRenderFct) {
                            onRenderFct(deltaMsec / 1000, nowMsec / 1000)
                        })
                    })
                }
            </script>
        </div>
        <!--

        <div id="hands1">
            <div id="hands2">
                <img src="images/screenReach.png">
            </div>
        </div>
-->


    </div>


</body>

</html>
