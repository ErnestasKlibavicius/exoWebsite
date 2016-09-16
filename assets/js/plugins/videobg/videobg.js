$(document).ready(function() {
    
    "use strict";
    
    
    //Video Background
    $("#top").vide("assets/images/video/exoVideo.mp4", {
		posterType: "jpg"
	});


    //Youtube Background Video
    $(function(){
      $(".player").mb_YTPlayer();
    });


});
