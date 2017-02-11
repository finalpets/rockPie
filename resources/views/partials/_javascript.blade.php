<!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
		<!-- Jquery and Bootstap core js files -->
		 
		 <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script> 
		<!-- Isotope javascript -->
		<!-- <script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script> -->
		<script type="text/javascript" src="{{ asset('plugins/isotope/isotope.pkgd.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('plugins/vue.js') }}"></script>

		<script type='text/javascript' src='js/template.js'></script> 
		<!-- sortable plugin -->
		<script src='plugins/jquery-sortable.js'></script>


		<script type="text/javascript">
		//var playing = 0;
		var playSong = "";
		var isPlaying = false;
		var current_Artist = "";
		var current_Song = "";
			function addSong_to_playlist(artist, song, song_url) {
			var sound_click = "{{ asset('sounds/click.mp3') }}";
			var snd = new Audio(sound_click);
			snd.play();


			//console.log(playing);
			console.log('Song_url:'+song_url);
			console.log('playSong:'+playSong);
			//var clean_url = song_url.replace("'", "^");
			 var music = song_url.replace(/ /g, "_");
			 let navbar = Array.from(document.querySelectorAll('#listBar>ol>li'));
			 console.log(navbar.length);
			 if(navbar.length == 0 && isPlaying == false )
			 {
			 	//playing = 1;		
			 	
			 	$("#jquery_jplayer_1").jPlayer("option", "cssSelector.title");
				$("ol").append("<li id="+music+">"+artist+" - "+song+"</li>");
				playList();
			 }
			 else
			 {
			 	$("ol").append("<li id="+music+" >"+artist+" - "+song+"<button class ='btn-xs btn-danger'> X </button></li>");
			 }
    
    		}

    		function nextSong(){
    			let navbar = Array.from(document.querySelectorAll('#listBar>ol>li'));
    			if(navbar.length != 0)
    			{
    				console.log("Function closeBtn");
    				var sound_click = "{{ asset('sounds/next.mp3') }}";
					var snd = new Audio(sound_click);
					snd.play();
	    			console.log("Function nextSong");
	    			isPlaying = false;	    			
	    			playList();
    			}	
    		}    		

    		function parsed_CurrentSong(currentSong){
    			console.log("before currentSong:"+currentSong);	
    			 current_Song =currentSong.substring(currentSong.lastIndexOf("/")+1,currentSong.length);
    			console.log("after currentSong:"+current_Song);	 

    		}

    		function playList(){
    			let navbar = Array.from(document.querySelectorAll('#listBar>ol>li'));
				 console.log('Get first: ', navbar[0].id);
				// console.log('Get first: ', navbar[0].textContent);
				// console.log('Get first: ', navbar.length);

				var parsedSong_url = navbar[0].id.split('_').join(' ');// return to the original URL 
				var song = parsedSong_url.split("^").join("'");// return to the original URL 
				console.log(song);	 
				var musicPath = "{{ asset('music') }}";	
		        console.log('musicPath:',musicPath);	 
				song_url = musicPath.concat("/");
				song_url2 = song_url.concat(song);
				console.log('Origina Song:', song);
				parsed_CurrentSong(song);

				playSong = song_url2;
				console.log('Origina music:', playSong);

				$('#listBar>ol>li').first().remove();
		        
		        $('#jquery_jplayer_1').jPlayer("setMedia", {
		            title: current_Song,
		            m4a: playSong,
		            oga: "http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg"
		          });

		       	$('#jquery_jplayer_1').jPlayer("play");

    		}

		    $(document).ready(function(){
		    	 $('[data-toggle="tooltip"]').tooltip(); 

				$(function  () {
				  $("ol.example").sortable();
				});

				

		      $("#jquery_jplayer_1").jPlayer({
		      	// Options

		        ready: function () {
		        var music = "{{ asset('music/05 - Tifa no Theme (Piano Version).mp3') }}";
		        $(this).jPlayer("volume", 0.50);
		       // console.log(music);
		        //playList();
		          $(this).jPlayer("setMedia", {
		           // title: "RockPie",		            
		          //  m4a: "http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg",
		           // oga: "http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg"
		          });
		        },

		        cssSelectorAncestor: "#jp_container_1",
		        swfPath: "/js",
		        supplied: "mp3,m4a, oga",
		        useStateClassSkin: true,
		        autoBlur: false,
		        smoothPlayBar: true,
		        keyEnabled: true,
		        remainingDuration: true,
		        toggleDuration: true ,		        
		        wmode: "window"
		        , ended: function() { // The $.jPlayer.event.ended event	

		        	isPlaying = false;
		        	playList();
	  				console.log("play isPlaying:"+isPlaying);	        	
		        	console.log("songEnded:"+playSong);	
	    			$(this).jPlayer("setMedia", {
	    				mp3: playSong,				      
				      }).jPlayer("play"); // Attempts to Auto-Play the media
	  			},
	  			 play  : function() { // The $.jPlayer.event.play  event
	  			 	isPlaying = true;
	  				console.log("play isPlaying:"+isPlaying);
	  			},	

		      });

		 //    var myCirclePlayer = new CirclePlayer("#jquery_jplayer_1",
			// {
		
			// 	oga: "http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg"
			// }, {
			// 	cssSelectorAncestor: "#cp_container_1"
			// });
			
			// if(myCirclePlayer.player.pause())
			// {
			// 	myCirclePlayer.setMedia({
			
			// 	oga: "http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg"
			// });	
			// }
		    });

  		</script>