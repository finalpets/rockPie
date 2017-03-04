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

<!--Bostrap Modal js -->
<script type="text/javascript" src="{{ asset('plugins/boostrap3-dialog/js/bootstrap-dialog.js') }}"></script>


<script type="text/javascript">
	var contentLoadTriggered = false;
	var OFFSET_SCROLL = 360;

	var OFFSET_AJAX_REQUEST = 0;
	var TOTAL_ALBUM_REQUEST =16;//IMPORTANT:if you change this also change in AlbumController the Query offset
	var playSong = "";
	var isPlaying = false;
	var current_Artist = "";
	var current_Song = "";
	
function onloadFristAlbums(){	
   // ajax call get data from server and append to the div		
   contentLoadTriggered = true;           
   if(OFFSET_AJAX_REQUEST != 0)
		OFFSET_AJAX_REQUEST = OFFSET_AJAX_REQUEST + TOTAL_ALBUM_REQUEST;							
	//console.log(OFFSET_AJAX_REQUEST);
	$.ajax({
        type: "GET",
        url: "/",     
        data: { offset:OFFSET_AJAX_REQUEST },
        success: function( data ) {
        	if(OFFSET_AJAX_REQUEST == 0)
        		OFFSET_AJAX_REQUEST = OFFSET_AJAX_REQUEST+1;
        	$.each(data.albums, function(index,album){
        	$.each(data.artists, function(index,artist){
        		 
           			if(album.artist.artist_name == artist.artist_name)
           			{				               				
           				result = "<div class ="+"'col-sm-6 col-md-3 isotope-item"+" "+artist.letter.letter+"'>";
           				
           				result+= "\n<div class='image-box'>";
           				result+= "\n<div class='overlay-container'>";
           				result+= "\n<div align='center' class='h5_album_name'>";
           				result+= "\n<h5>"+artist.artist_name+" - "+album.album_name+"</h5>";
           				result+= "\n</div>";
           				result+= "\n<div class='row'>";
           				result+= "\n<div class='col-sm-5'>";
           				img_clean = "{{ asset('/music/') }}";
           				//song_url.replace(/ /g, "_");	
           				img_clean+= "/"+album.img.replace(/ /g, "%20");
           				img_clean+= ".jpg";
           				//console.log(img_clean);

           				result+= '\n<img src="'+img_clean+'" alt="Oops" class="img-rounded resize">';
           				result+= "\n</div>";
           				result+= "\n<div class='col-sm-7'>";
           				result+= "\n<table class='table table-striped'>";
           				result+= "\n<thead>";
           				result+= "\n<tr>";
           				result+= "\n<th>#</th>";
           				result+= "\n<th>SONG</th>";
           				result+= "\n</tr>";
           				result+= "\n</thead>";
           				result+= "\n<tbody>";

           				var number = 0;
           				 $.each(data.songs, function(index,song){
           				 	if(song.album.album_name == album.album_name)
           				 	{
           				 		number++;
           				 		result+= "\n<tr>";
           				 		result+= "\n<th scope='row'>"+number+"</th>";
           				 		result+= "\n<td>"+song.title+"</td>";
           				 		result+= "\n</tr>";
           				 	}
           				 });
           				 result+= "\n</tbody>";
           				 result+= "\n</table>";
           				 result+= "\n</div>";
           				 result+= "\n</div>";

           				 result+= "\n<a class='overlay' data-toggle='modal' data-target='#project-"+album.id+"'>";
           				 result+= "\n<i class='fa fa-search-plus'></i>";
           				 result+= "\n<span>"+artist.artist_name+"</span>";
           				 result+= "\n</a>";
           				 result+= "\n</div>";
           				 result+= "\n</div>";

           				 //MODAL
           				 result+= "\n<div class='modal fade' id='project-"+album.id+"' tabindex='-1' role='dialog' aria-labelledby='project-"+album.id+"-label' aria-hidden='true'>";
           				 result+= "\n<div class='modal-dialog modal-lg'>";
           				 result+= "\n<div class='modal-content'>";
           				 result+= "\n<div class='modal-header' align='center'>";
           				 result+= "\n<button type='button' class='close' data-dismiss='modal'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>";
           				 result+= "\n<h3 class='modal-title h5_album_name' id='project-"+album.id+"-label'>"+artist.artist_name+"</h3>";
           				 result+= "\n</div>";

           				 result+= "\n<div class='modal-body'>";
           				 result+= "\n<div align='center'>";
           				 result+= "\n<h3>"+album.album_name+"</h3>";
           				 result+= "\n</div>";
           				 result+= "\n<div class='row'>";
           				 result+= "\n<div class='col-md-5'>";
           				 img_clean = "{{asset('/music/')}}";
           				 //song_url.replace(/ /g, "_");	
           				 img_clean+= "/"+album.img.replace(/ /g, "%20");
           				 img_clean+= ".jpg";
           				 //result+= "\n<img src='"+img_clean+"' alt='' class='img-rounded resizeModal'>";
           				 result+= '\n<img src="'+img_clean+'" alt="Oops" class="img-rounded resizeModal">';

           				 result+= "\n</div>";
           				 result+= "\n<div class='col-sm-7'>";
           				 result+= "\n<table class='table table-striped table_modal'>";
           				 result+= "\n<thead>";
           				 result+= "\n<tr>";
           				 result+= "\n<th>#</th>";
           				 result+= "\n<th>SONG</th>";
           				 result+= "\n<th>ADD</th>";
           				 result+= "\n</tr>";
           				 result+= "\n</thead>";
           				 result+= "\n<tbody>";

           				 number = 0;

           				 $.each(data.songs, function(index,song){
           				 	if(song.album.album_name == album.album_name)
           				 	{
           				 		songTitle_clean = song.title.replace(/'/g, "^");
           				 		artistName_clean = album.artist.artist_name.replace(/'/g,"^");
           				 		songUrl_clean = song.song_url.replace(/'/g,"^");
           				 		// console.log(songTitle_clean);
           				 		// console.log(artistName_clean);
           				 		 //console.log('songURL:'+songUrl_clean);
           				 		number++;
           				 		result+= "\n<tr>";
           				 		result+= "\n<th scope='row'>"+number+"</th>";
           				 		result+= "\n<td>"+song.title+"</td>";

           				 		result+= '\n<th><button type="button" class="btn btn-sm btn-primary btn-shadow" onclick="addSong_to_playlist(\''+artistName_clean.toString()+'\',\''+songTitle_clean.toString()+'\',\''+songUrl_clean.toString()+'\')"><i class="fa fa-music" aria-hidden="true"></i> </button></th>';

           				 		result+= "\n</tr>";
           				 	}

           				 });

           				 result+= "\n</tbody>";
           				 result+= "\n</table>";
           				 result+= "\n</div>";
           				 result+= "\n</div>";
           				 result+= "\n</div>";

           				 result+= "\n<div class='modal-footer'>";
           				 result+= "\n<button type='button' class='btn btn-sm btn-danger btn-shadow' data-dismiss='modal'>Close</button>";
           				 result+= "\n</div>";
           				 result+= "\n</div>";
           				 result+= "\n</div>";
           				 result+= "\n</div>";
           				 //End Modal
           				 result+= "\n</div>";
           				//$('#isotopeAjax').append(result);
           				//div = album.id;
           				//var a = "";
           				//a+=""
           				//$(div).appendChild("<div class='image-box'></div>");


      					//var element = document.createElement("div");
					    // element.appendChild(document.createTextNode('The man who mistook his wife for a hat'));
					    // document.getElementById('lc').appendChild(element);
           			}
           		});
				//console.log("HTML:"+result);
		        $('#isotopeAjax').append(result);
		        contentLoadTriggered = false;
        	});
				
        }
	});				           
}
			
$('#ajaxTest1').on("click",function(e){
	if(OFFSET_AJAX_REQUEST != 0)
		OFFSET_AJAX_REQUEST = OFFSET_AJAX_REQUEST + TOTAL_ALBUM_REQUEST;							
	console.log(OFFSET_AJAX_REQUEST);
	$.ajax({
	    type: "GET",
	    url: "/ajaxText",     
	    data: { offset:OFFSET_AJAX_REQUEST },
	    success: function( albums ) {
	    	if(OFFSET_AJAX_REQUEST == 0)
	    		OFFSET_AJAX_REQUEST = OFFSET_AJAX_REQUEST+1;
	       $.each(albums, function(index,album){

	       	console.log(album.artist.artist_name);

	       });
	    }
	});
	// $.get('/ajaxText',function(data){
	// 	console.log(data);
	// });
});
$('#updateTab button').on("click",function(e){

		//console.log(e.currentTarget.innerText);
		var Letter = e.currentTarget.innerText;
		//BootstrapDialog.alert(Letter);
		$('#'+Letter).append('Loading...<i class="fa fa-spinner fa-spin fa fa-fw"></i><span class="sr-only">Loading...</span>');
		$("#updateTab button").attr("disabled", true);
		$("#myNavbar ul").attr("hidden",true);
		$(".navbar-header a").attr("hidden",true);
		$.ajax({			
		    type: "GET",		  
		    url: "{{ route('update.create') }}", 
		    data: { letter:Letter },
		    dataType: "json",
		    //url: "update/create", 		    
		    success: function( msg ) {
		    	//removing all the childs inside an ID
		    	var myNode = document.getElementById(''+Letter);
				while (myNode.firstChild) {
				    myNode.removeChild(myNode.firstChild);
				}

		    	 BootstrapDialog.show({
		    	 	title: 'Updated success',
		            message: 'Now is up to date',
		            type: BootstrapDialog.TYPE_PRIMARY,
					buttons: [{
				        id: 'btn-ok',   
				        icon: 'glyphicon glyphicon-check',       
				        label: 'OK',
				        cssClass: 'btn-success', 
				        autospin: false,
				        action: function(dialogRef){    
				            dialogRef.close();
				        }
				    }]
		        });
		    	//alert("update Finish");

		    	$("#updateTab button").attr("disabled", false);
		    	$("#myNavbar ul").attr("hidden",false);
		    	$(".navbar-header a").attr("hidden",false);
		    	console.log("Ajax success");
		    	console.log(msg);
		    },
		    error: function(XMLHttpRequest, textStatus, errorThrown) { 
        	// alert("Status: " + textStatus); 
        	// alert("Error: " + errorThrown); 
        	BootstrapDialog.show({
		    	 	title: 'Updated Error',
		            message: 'Now is up to date',
		            type: BootstrapDialog.TYPE_DANGER,
					buttons: [{
				        id: 'btn-ok',   
				        icon: 'glyphicon glyphicon-check',       
				        label: 'OK',
				        cssClass: 'btn-danger', 
				        autospin: false,
				        action: function(dialogRef){    
				            dialogRef.close();
				        }
				    }]
		        });
        	}
		});
	});

		// 		var opts = {
		//   lines: 13 // The number of lines to draw
		// , length: 28 // The length of each line
		// , width: 14 // The line thickness
		// , radius: 42 // The radius of the inner circle
		// , scale: 1 // Scales overall size of the spinner
		// , corners: 1 // Corner roundness (0..1)
		// , color: '#000' // #rgb or #rrggbb or array of colors
		// , opacity: 0.25 // Opacity of the lines
		// , rotate: 0 // The rotation offset
		// , direction: 1 // 1: clockwise, -1: counterclockwise
		// , speed: 1 // Rounds per second
		// , trail: 60 // Afterglow percentage
		// , fps: 20 // Frames per second when using setTimeout() as a fallback for CSS
		// , zIndex: 2e9 // The z-index (defaults to 2000000000)
		// , className: 'spinner' // The CSS class to assign to the spinner
		// , top: '50%' // Top position relative to parent
		// , left: '50%' // Left position relative to parent
		// , shadow: false // Whether to render a shadow
		// , hwaccel: false // Whether to use hardware acceleration
		// , position: 'absolute' // Element positioning
		// }
		// var target = document.getElementById('myPage')
		// var spinner = new Spinner(opts).spin(target);

		//var playing = 0;

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


	onloadFristAlbums(); //load the first 16 Albums when load the page	
	//check if the scroll reach the botton to get another albums request
	$('div#istope-album').scroll(function() {
		// console.log('scrollTop:'+$('div#istope-album').scrollTop());
		// console.log('heightAlbum:'+$('div#istope-album').height());
		// console.log('heightMusicTab:'+$('div#musicTab').height());
		if($('div#istope-album').scrollTop() + OFFSET_SCROLL >= $('div#musicTab').height() - $('div#istope-album').height()  && contentLoadTriggered == false) 
		{
	    		onloadFristAlbums();
		}
	});

	

	// *** Hidden input example ***
	// click on a link - add focus to hidden input
	$('.hiddenInput').click(function(){
		$('#hidden').data('keyboard').reveal();
		return false;
	});

	// Initialize keyboard script on hidden input
	// set "position.of" to the same link as above
	$('#hidden')
		.keyboard({
			layout   : 'qwerty',
			position : {
				of : $('.hiddenInput'),
				my : 'center top',
				at : 'center top'
			}
		})
		.addTyping();

	$('[data-toggle="tooltip"]').tooltip(); 

	$(function  () {
		$("ol.example").sortable();
	});

	 $(".nav-pills a").on('click', function(event) {
        event.preventDefault();
        //getting the Y position of the element you want to scroll to
		var position = $('#istope-album').offset().top-100;

		//scrolling to the element with an animation of 700 miliseconds
		$('#istope-album').animate({
		    scrollTop: position
		}, 700, function(){  //callback function (executed when animation finishes)
		    //alert("Hello there!");
		});
        window.scrollTo(0,0);// return to the top of the screen
        //window.scrollTo(x-coord, y-coord);
        //alert("hola");
       // $(this).parent().remove();
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
});

</script>