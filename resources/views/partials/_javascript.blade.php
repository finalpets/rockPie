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
			function addSong_to_playlist(artist, song, song_url) {	
			//console.log(playing);
			 let navbar = Array.from(document.querySelectorAll('#listBar>ol>li'));
			 console.log(navbar.length);
			 if(navbar.length == 0)
			 {
			 	//playing = 1;			 	
			 	$("#jquery_jplayer_1").jPlayer("option", "cssSelector.title");
				$("ol").append("<li id="+song_url+">"+artist+" - "+song+"</li>");
				playList();
			 }
			 else
			 {
			 	$("ol").append("<li id="+song_url+">"+artist+" - "+song+"</li>");
			 }
    
    		}

    		function playList(){
    			let navbar = Array.from(document.querySelectorAll('#listBar>ol>li'));
				// console.log('Get first: ', navbar[0].id);
				// console.log('Get first: ', navbar[0].textContent);
				// console.log('Get first: ', navbar.length);

		        var music = "{{ asset('music/05 - Tifa no Theme (Piano Version).mp3') }}";	
		         console.log(music);	 
		        $('#jquery_jplayer_1').jPlayer("setMedia", {
		            title: navbar[0].textContent,		            
		            m4a: music,
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
		       // console.log(music);
		        //playList();
		          $(this).jPlayer("setMedia", {
		            title: "RockPie",		            
		            m4a: "http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg",
		            oga: "http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg"
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
	    			$(this).jPlayer("setMedia", {
	    				mp3: "{{ asset('music/05 - Tifa no Theme (Piano Version).mp3') }}",
				        m4v: "{{ asset('music/05 - Tifa no Theme (Piano Version).mp3') }}", // Defines the m4v url
				        oga: "http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg" 
				      }).jPlayer("play"); // Attempts to Auto-Play the media
	  			},

		      });

		 //    var myCirclePlayer = new CirclePlayer("#jquery_jplayer_1",
			// {
			// 	m4a: "{{ asset('music/05 - Tifa no Theme (Piano Version).mp3') }}",
			// 	oga: "http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg"
			// }, {
			// 	cssSelectorAncestor: "#cp_container_1"
			// });
			
			// if(myCirclePlayer.player.pause())
			// {
			// 	myCirclePlayer.setMedia({
			// 	m4a: "{{ asset('music/Pantera - Cementary Gates.mp3') }}",
			// 	oga: "http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg"
			// });	
			// }
		    });

  		</script>