function addSong_to_playlist(artist, song, song_url) {
	ShowDebugMessage("addSong_to_playlist()","");
	var sound_click = "{{ asset('sounds/click.mp3') }}";
	var snd = new Audio(sound_click);
	snd.play();


	//console.log(playing);
	console.log('Song_url:'+song_url);
	console.log('playSong:'+playSong);
	//var clean_url = song_url.replace("'", "^");
	 var music = song_url.replace(/ /g, "%20");
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
	 	$('#editPlaylist').bootstrapToggle('enable');
	 	$("ol").append("<li id="+music+"><button class ='btn-xs btn-danger btn-playList'> <i class='fa fa-trash-o btn-shadow' aria-hidden='true'></i> </button>"+artist+" - "+song+"</li>");
	 	$(".btn-playList").on('click', function(event) {
       		event.preventDefault();
       		$(this).parent().remove();

       		let navbar = Array.from(document.querySelectorAll('#listBar>ol>li'));
       		if(navbar.length < 1)
			{
				$('#editPlaylist').bootstrapToggle('off');
				$('#editPlaylist').bootstrapToggle('disable');

			}
    	});
	 }

	 	if($('#editPlaylist').prop('checked'))
	 	{
	 		$(".btn-playList").attr("hidden",false);
	 	}
	 	else
	 		$(".btn-playList").attr("hidden",true);



}
function nextSong(){
	let navbar = Array.from(document.querySelectorAll('#listBar>ol>li'));

	if(navbar.length < 2)
	{
		$('#editPlaylist').bootstrapToggle('off');
		$('#editPlaylist').bootstrapToggle('disable');

	}
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

function playList(){
	ShowDebugMessage("playList()","");
	let navbar = Array.from(document.querySelectorAll('#listBar>ol>li'));
	if(navbar.length == 0){
		playSong = "";
		title_song ="";
		$('#editPlaylist').bootstrapToggle('off');
		$('#editPlaylist').bootstrapToggle('disable');
		return;
	}
	console.log('Navbar Lenght: ', navbar.length);
	console.log('Get first: ', navbar[0].id);
	// console.log('Get first: ', navbar[0].textContent);
	// console.log('Get first: ', navbar.length);

	//var parsedSong_url = navbar[0].id.split('_').join(' ');// return to the original URL
	var parsedSong_url = navbar[0].id;// return to the original URL
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
	title_song = current_Artist.replace(/%20/g," ") +" - "+current_Song.replace(/%20/g," ");

	if(title_song.length > TITLE_SONG_SIZE) //check if the title is too long for display in the player
	{
		title_song = title_song.substring(0,TITLE_SONG_SIZE);
		title_song = title_song + "...";
	}
	console.log("LENGHT TITLE SONG:"+title_song.length);
	$('#listBar>ol>li').first().remove();

    $('#jquery_jplayer_1').jPlayer("setMedia", {
        title: title_song,
        m4a: playSong,
        oga: "http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg"
      });

   	$('#jquery_jplayer_1').jPlayer("play");
   	isPlaying = true;
}

function removeAllSongs() {
	BootstrapDialog.confirm({
            title: 'WARNING',
            message: 'Are you sure to remove All Songs?',
            type: BootstrapDialog.TYPE_DANGER, // <-- Default value is BootstrapDialog.TYPE_PRIMARY
            closable: true, // <-- Default value is false
            draggable: true, // <-- Default value is false
            btnCancelLabel: 'Cancel', // <-- Default value is 'Cancel',
            btnOKLabel: 'Yes!', // <-- Default value is 'OK',
            btnOKClass: 'btn-danger', // <-- If you didn't specify it, dialog type will be used,
            callback: function(result) {
                // result will be true if button was click, while it will be false if users close the dialog directly.
                if(result) {
                    $(".example").html('')

                    let navbar = Array.from(document.querySelectorAll('#listBar>ol>li'));

						$('#editPlaylist').bootstrapToggle('off');
						$('#editPlaylist').bootstrapToggle('disable');


                }else {

                }
            }
        });
}


function remove_ALL_IsotopeAjaxDivs(){

	for (var i = 1; i <= MAX_AJAX_DIVS; i++) {		
		var myNode = document.getElementById('isotopeAjax_'+i);
		removeIsotopeAjaxDivs(myNode);
	}
}
function removeIsotopeAjaxDivs(myNode){
	while (myNode.firstChild) {
		myNode.removeChild(myNode.firstChild);
	}
}

function add_all_album_to_the_playList(album_id){
	ShowDebugMessage("add_all_album_to_the_playList()","");
	console.log("Album_id:"+album_id);
	$.ajax({
	        type: "GET",
	        data : { album_id: album_id },
	        url: "{{ route('getAlbum_Songs') }}",
	        dataType: "json",	        
	        success: function( msg ) {
	               console.log(msg);	                        
	               $.each(msg.songs, function(index,song){		
           				songTitle_clean = song.title.replace(/'/g, "^");
   				 		artistName_clean = song.album.artist.artist_name.replace(/'/g,"^");
   				 		songUrl_clean = song.song_url.replace(/'/g,"^");               
	               		addSong_to_playlist(artistName_clean,songTitle_clean,songUrl_clean);
	               });
	        },
	        error: function(XMLHttpRequest, textStatus, errorThrown) {          
	                   
	          }
	    });
}
