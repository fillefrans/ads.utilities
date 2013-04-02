<!--
  ==========================================================================
    VIDEO
  ==========================================================================
  -->
  
  <div id="videocontainer" style="padding-top: 33%; padding-bottom: 33%; height: 100%;">
    <section id="videoexample">

      <!--
        - use autoplay="autoplay" for autoplay on load, but most phones will ignore it, for bandwith issues, so try to avoid it.
        - place videos in video folder in root
        - use jwplayer for fallback, you can define your own image, but look at path, same goes for video.
        - <video widht height ...> is set in CSS in style.css. It is set now to fluid layout 100% width with auto height.
      -->
      <video controls="controls" width="100%" heigth="auto">
       <source src="video/The_Iron_Lady_Wi-Fi.m4v" type="video/mp4" />
       <source src="video/The_Iron_Lady_Wi-Fi.ogg" type="video/ogg" />
       <source src="video/The_Iron_Lady_Wi-Fi.webm" type="video/webm" />
       <object width="320" height="240" type="application/x-shockwave-flash"
		data="jwplayer/player.swf?image=jwplayer/play_overlay.png&file=../video/The_Iron_Lady_Wi-Fi.m4v">
		<param name="movie" value="jwplayer/player.swf?image=jwplayer/play_overlay.png&file=../video/The_Iron_Lady_Wi-Fi.m4v" />
	</object>
      </video>
    </section>
  </div>
  <!-- end VIDEO -->