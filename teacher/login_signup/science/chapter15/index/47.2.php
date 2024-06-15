





<!doctype html>
<html>
    <head>
        <script src="https://aframe.io/releases/1.0.4/aframe.min.js"></script>
        <script src="https://raw.githack.com/AR-js-org/AR.js/master/aframe/build/aframe-ar.js"></script>
        <script src="https://raw.githack.com/AR-js-org/studio-backend/master/src/modules/marker/tools/gesture-detector.js"></script>
        <script src="https://raw.githack.com/AR-js-org/studio-backend/master/src/modules/marker/tools/gesture-handler.js"></script>
        <script>
            AFRAME.registerComponent('videohandler', {
                init: function () {
                    var marker = this.el;
                    this.vid = document.querySelector("#vid");

                    marker.addEventListener('markerFound', function () {
                        this.toggle = true;
                        this.vid.play();
                    }.bind(this));

                    marker.addEventListener('markerLost', function () {
                        this.toggle = false;
                        this.vid.pause();
                    }.bind(this));
                },
            });
        </script>
        
        
        
        
        <!--from here-->
 
        
         <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
       <script type="text/javascript">
    var gotitBtn = $(".gotit");
    gotitBtn.click(function() {
      gotitBtn.parent().css({
        display: "none"
      });
    });
    //Camera feature check
    function hasGetUserMedia() {
      return !!(navigator.getUserMedia || navigator.webkitGetUserMedia ||
        navigator.mozGetUserMedia || navigator.msGetUserMedia);
    }
    if (hasGetUserMedia()) {
      $('#splashScreen').css('display', 'block');
    }
    
    $(document).bind("contextmenu",function(e) {
 e.preventDefault();
});



    $(document).keydown(function(e){
    if(e.which === 123){
       return false;
    }
});


document.onkeydown = function (e) {
    e = e || window.event;//Get event
    if (e.ctrlKey) {
        var c = e.which || e.keyCode;//Get key code
        switch (c) {
            case 83://Block Ctrl+S
                e.preventDefault();     
                e.stopPropagation();
            break;
        }
    }
};  
  </script>
  
  

        
        
        
        
    </head>
<style>
    
    button{
        width:25%;
        margin-left:65%;
                margin-right:25%;
    }
</style>
    <body style="margin: 0; overflow: hidden;">





<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../../../log.php");
    exit;
}
?>




        <div style='position: fixed; top:1px; width:100%; text-align: center; z-index: 1; margin-left: 65px;'>
     <a >   
       <button class="float-left submit-button" style="background-color: black; color: white; border-radius: 10px; " onclick="window.history.go(-1)">back</button>
     </a>
       <a href="../page1/47.php">
       <button class="float-left submit-button" style="background-color: black; color: white; border-radius: 10px;">explore</button>
     </a>  
    </div>

<!--to here-->
        <a-scene
            vr-mode-ui="enabled: false"
            loading-screen="enabled: false;"
            arjs='sourceType: webcam; debugUIEnabled: false;'
            id="scene"
            embedded
            gesture-detector
        >
            <a-assets>
                <video
                    id="vid"
                    src="../assets/47.2.mp4"
                    preload="auto"
                    response-type="arraybuffer"
                    loop
                    crossorigin
                    webkit-playsinline
                    autoplay
                    muted
                    playsinline
                ></video>
            </a-assets>

            <a-marker
                type="pattern"
                preset="custom"
                url="../assets/marker.patt"
                videohandler
                smooth="true"
                smoothCount="10"
                smoothTolerance="0.01"
                smoothThreshold="5"
                raycaster="objects: .clickable"
                emitevents="true"
                cursor="fuse: false; rayOrigin: mouse;"
                id="markerA"
            >
                <a-video
                    src="#vid"
                    scale="1 1 1"
                    position="0 0.1 0"
                    rotation="-90 0 0"
                    class="clickable"
                    gesture-handler
                ></a-video>
            </a-marker>

            <a-entity camera></a-entity>
        </a-scene>
    </body>
</html>
