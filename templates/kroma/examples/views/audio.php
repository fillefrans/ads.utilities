<!--
  ==========================================================================
    AUDIO
    - See VIDEO for reference of usage
    - Note the play bar is 20px height in JWplayer, so set it to 20
  ==========================================================================
  -->
  
  <div id="audiowrapper" style="padding-top: 33%; padding-bottom: 33%; min-height: 260px; background-image: url('img/audioexample/bg.jpg') !important;">
    <section id="audioexample">
      <audio controls="controls" style="display: block; height: 40px; width: 320px;">
        <source src="audio/song.ogg" type="audio/ogg" autoplay=""/>
        <source src="audio/song.mp3" type="audio/mpeg" autoplay=""/>
          <embed src="audio/song.mp3" autostart=false loop=false volume=50 height=20/>
      </audio>
    </section>
  </div>
  <!-- end AUDIO -->