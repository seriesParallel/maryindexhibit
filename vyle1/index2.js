function draw3D()  {

   function setup() {

        var tweenOpenDoor = new TWEEN.Tween( door.rotation )
            .to( { y: door.rotation.y - Math.PI }, 3000 );

        var tweenWalkUp = new TWEEN.Tween(camera.position)
            .to({z: camera.position.z - 25}, 8000);

        var tweenWalkIn = new TWEEN.Tween(camera.position)
            .to({z: camera.position.z - 32}, 5000);

          tweenOpenDoor.chain(tweenWalkIn);
          tweenWalkUp.chain(tweenOpenDoor);
          tweenWalkUp.start();

    }

    function animate() {
      requestAnimationFrame( animate );
      ... code to rotate objects ...
      TWEEN.update();
      renderer.render(scene, camera);
    }

   // Code for setting up the three spinning shapes skipped for brevity

    // floor
    geo = new THREE.PlaneGeometry(20, 50);
    var floor = new THREE.Mesh(geo, new THREE.MeshBasicMaterial({color: 0xcfcfcf}));
    floor.material.side = THREE.DoubleSide;
    floor.rotation.x = Math.PI/2;
    floor.position.y = -2;  floor.position.z = 10;
    floor.receiveShadow = true;

    // left wall
    geo = new THREE.PlaneGeometry(50,20);
    var wallleft = new THREE.Mesh(geo ,new THREE.MeshBasicMaterial({color : 0xcccc00}));
    wallleft.material.side = THREE.DoubleSide;
    wallleft.rotation.y = Math.PI/2;
    wallleft.position.x = -8;
    wallleft.position.z = 12;

    // right wall
    var wallright = wallleft.clone();
    wallright.position.x = 8;

    // door
    geo = new THREE.CubeGeometry(2, 3.5, 0.2);
    geo.applyMatrix( new THREE.Matrix4().makeTranslation( 1, 0, 0 ) );  // move to hinge
    var door = new THREE.Mesh(geo, new THREE.MeshPhongMaterial({ color: 0x00c0ce}));
    door.position.set(-1.5, -0.25, 8);

    // wall with door
    var doorWall = new THREE.Shape();
    doorWall.moveTo(  0, 0 );
    doorWall.lineTo(  23, 0 );
    doorWall.lineTo( 23, 3.5 );
    doorWall.lineTo( 25, 3.5 );
    doorWall.lineTo( 25, 0);
    doorWall.lineTo( 50, 0);
    doorWall.lineTo(50, 20)
    doorWall.lineTo(0,20);
    doorWall.lineTo(0,0);
    geo = new THREE.ShapeGeometry(doorWall);
    var dWall = new THREE.Mesh(geo, new THREE.MeshBasicMaterial({color: 0xff0000}));
    dWall.material.side = THREE.DoubleSide;
    dWall.position.set(-24.5,-2, 8);

    // lights
    var light = new THREE.DirectionalLight(0xe0e0e0);
    light.position.set(5,2,5).normalize();
    light.castShadow = true;
    light.shadowDarkness = 0.5;
    light.shadowCameraRight = 5;
    light.shadowCameraLeft = -5;
    light.shadowCameraTop = 5;
    light.shadowCameraBottom = -5;
    light.shadowCameraNear = 2;
    light.shadowCameraFar = 100;

    var scene = new THREE.Scene();
    scene.add(floor)
    scene.add(wallright);
    scene.add(wallleft);
    scene.add(dWall);
    scene.add(door);
    scene.add(light);
    scene.add(multi);
    scene.add(new THREE.AmbientLight(0x101010));

    var camera = new THREE.PerspectiveCamera(  45, 1024/500,0.1, 100);
    camera.position.z = 40;  // 20
    camera.position.y = 1;

    var div = document.getElementById("shapecanvas2");
    var renderer = new THREE.WebGLRenderer();
    renderer.setSize(1024,500);
    renderer.setClearColor(0x000000, 1);
    renderer.shadowMapEnabled = true;

    div.appendChild( renderer.domElement );


    setup();
    animate();

}
