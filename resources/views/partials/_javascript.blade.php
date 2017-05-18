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
<!--Bostrap toogle  -->
<script type="text/javascript" src="{{ asset('plugins/boostrap-toogle/js/bootstrap-toggle.min.js') }}"></script>

<!--Bostrap Select  -->

<script type="text/javascript" src="{{ asset('plugins/bootstrap-select/js/bootstrap-select.min.js') }}"></script>



<script type="text/javascript">
// EXAMPLE OF NEW CLASSES
// class Point {
//   constructor(xPos , yPos){
//     this.xPos = xPos;
//     this.yPos = yPos;
//   }
//   getPos(){
//     console.log(this.suma());  
//     return "X:"+this.xPos + "Y:"+this.yPos;
    
//   }

//   suma(){
//     var resultado = this.xPos+this.yPos;
//     return "SUMA :"+resultado;
//   }
// }
// var point = new Point(100,200);
// console.log(point.getPos());

@include('partials.JS.Constants')
@include('partials.JS.music_Player')
@include('partials.JS.search')
@include('partials.JS.settingsJS');

	// var contentLoadTriggered = false;
	// var OFFSET_SCROLL = 300;

	// var OFFSET_AJAX_REQUEST = 0;
	// var TOTAL_ALBUM_REQUEST =4;//IMPORTANT:if you change this also change in AlbumController the Query offset
	// var MAX_ALBUMS=0;
	// var MAX_ALBUMS_PRE = 0;
	// var playSong = "";
	// var isPlaying = false;
	// var current_Artist = "";
	// var current_Song = "";
	// var letterID = 1;
	// var array_Albums ="" ;
	// var array_Artists = "" ;
	// var array_Songs = "" ;
	// var array_letterID =0;
	// var TOTAL_SHOW_ALBUMS = 4;
function load_Array_Albums(){
  ShowDebugMessage("load_Array_Albums()","");
	if(MAX_ALBUMS == 0)
		contentLoadTriggered= false;
	ShowDebugMessage("load_Array_Albums()","ALbum_ARRAY:"+array_Albums);
	for (var i = 0; i < array_Albums.length; i++) {
		//console.log(array_Albums[i].album_name);
        		//for (var x = 0; x < array_Artists.length; x++) {

        			//if(array_Albums[i].artist.artist_name == array_Artists[x].artist_name)
           			//{
           				result = "<div class ="+"'col-sm-6 col-md-3 isotope-item"+" "+array_Albums[i].artist.letter.letter+" btn-shadow'>";

           				result+= "\n<div class='image-box'>";
           				result+= "\n<div class='overlay-container'>";
           				result+= "\n<div align='center' class='h5_album_name'>";
           				result+= "\n<h5>"+array_Albums[i].artist.artist_name+" - "+array_Albums[i].album_name+"</h5>";
           				result+= "\n</div>";
           				result+= "\n<div class='row'>";
           				result+= "\n<div class='col-sm-5'>";
                  if(EXTERNAL_DRIVE)
             				img_clean = "http://localhost/music";
                  else
                    img_clean = "{{ asset('/music/') }}";
           				//song_url.replace(/ /g, "_");
           				img_clean+= "/"+array_Albums[i].img.replace(/ /g, "%20");
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
           				 for (var y = 0; y < array_Songs.length; y++) {
           				 	//console.log(array_Artists[x].artist_name);
           				 	if(array_Songs[y].album.album_name == array_Albums[i].album_name)
           				 	{
           				 		number++;
           				 		result+= "\n<tr>";
           				 		result+= "\n<th scope='row'>"+number+"</th>";
           				 		result+= "\n<td>"+array_Songs[y].title+"</td>";
           				 		result+= "\n</tr>";
           				 	}
           				 }
           				 result+= "\n</tbody>";
           				 result+= "\n</table>";
           				 result+= "\n</div>";
           				 result+= "\n</div>";

           				 result+= "\n<a class='overlay' data-toggle='modal' data-target='#project-"+array_Albums[i].id+"'>";
           				 result+= "\n<i class='fa fa-search-plus'></i>";
           				 result+= "\n<span>"+array_Albums[i].artist.artist_name+"</span>";
           				 result+= "\n</a>";
           				 result+= "\n</div>";
           				 result+= "\n</div>";

           				 //MODAL
           				 result+= "\n<div class='modal fade' id='project-"+array_Albums[i].id+"' tabindex='-1' role='dialog' aria-labelledby='project-"+array_Albums[i].id+"-label' aria-hidden='true'>";
           				 result+= "\n<div class='modal-dialog modal-lg'>";
           				 result+= "\n<div class='modal-content'>";
           				 result+= "\n<div class='modal-header' align='center'>";
           				 result+= "\n<button type='button' class='close' data-dismiss='modal'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>";
           				 result+= "\n<h3 class='modal-title h5_album_name' id='project-"+array_Albums[i].id+"-label'>"+array_Albums[i].artist.artist_name+"</h3>";
           				 result+= "\n</div>";

           				 result+= "\n<div class='modal-body'>";
           				 result+= "\n<div align='center'>";
           				 result+= "\n<h3>"+array_Albums[i].album_name+"</h3>";
           				 result+= "\n</div>";
           				 result+= "\n<div class='row'>";
           				 result+= "\n<div class='col-md-5'>";
                   if(EXTERNAL_DRIVE)
                      img_clean = "http://localhost/music";
                    else
           				   img_clean = "{{asset('/music/')}}";
           				 //song_url.replace(/ /g, "_");
           				 img_clean+= "/"+array_Albums[i].img.replace(/ /g, "%20");
           				 img_clean+= ".jpg";
           				 //result+= "\n<img src='"+img_clean+"' alt='' class='img-rounded resizeModal'>";
           				 result+= '\n<img src="'+img_clean+'" alt="Oops" class="img-rounded resizeModal">';
                   result+= "\n<hr>";
                   result+= "\n<div align='center'>";
                   result+= "\n<button onclick='add_all_album_to_the_playList("+array_Albums[i].id+")' class='all_album btn btn-success btn-shadow'><i class='fa fa-play' aria-hidden='true'></i> All Songs </button>";
                   result+= "\n</div>";
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
           				 for (var y = 0; y < array_Songs.length; y++) {
           				 	if(array_Songs[y].album.album_name == array_Albums[i].album_name)
           				 	{
           				 		songTitle_clean = array_Songs[y].title.replace(/'/g, "^");
           				 		artistName_clean = array_Albums[i].artist.artist_name.replace(/'/g,"^");
           				 		songUrl_clean = array_Songs[y].song_url.replace(/'/g,"^");
           				 		// console.log(songTitle_clean);
           				 		// console.log(artistName_clean);
           				 		 //console.log('songURL:'+songUrl_clean);
           				 		number++;
           				 		result+= "\n<tr>";
           				 		result+= "\n<th scope='row'>"+number+"</th>";
           				 		result+= "\n<td>"+array_Songs[y].title+"</td>";

           				 		result+= '\n<th><button type="button" class="btn btn-sm btn-primary btn-shadow" onclick="addSong_to_playlist(\''+artistName_clean.toString()+'\',\''+songTitle_clean.toString()+'\',\''+songUrl_clean.toString()+'\')"><i class="fa fa-music" aria-hidden="true"></i> </button></th>';

           				 		result+= "\n</tr>";
           				 	}

           				 }
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
           //			}
        //		}
        //$('#isotopeAjax_'+array_letterID).hide();
        //$('#isotopeAjax_'+array_letterID).addClass('animated bounceOutLeft');
        //$('#isotopeAjax_'+array_letterID).addClass('animated bounceInDown');
        $('#isotopeAjax_'+array_letterID).append(result).animateCss('fadeIn');;
        //$('#isotopeAjax_'+array_letterID).show();
        //$('#isotopeAjax_'+array_letterID).addClass('animated wobble');
        //$('#isotopeAjax_'+array_letterID).fadeIn(100);
		        contentLoadTriggered = false;
		        //console.log(contentLoadTriggered);
    }
     // array_Albums.shift();
     // array_Albums.shift();
     // array_Albums.shift();
     // array_Albums.shift();
     array_Albums = "";
   // console.log("Remove albums number:"+array_Albums.length);
}

function onloadFristAlbums(LetterID){
	console.log("LetterID:"+LetterID);
   // ajax call get data from server and append to the div
   contentLoadTriggered = true;
   console.log("OFFSET_AJAX_REQUEST:"+OFFSET_AJAX_REQUEST);
  //  if(OFFSET_AJAX_REQUEST != 0)
		// OFFSET_AJAX_REQUEST = OFFSET_AJAX_REQUEST + TOTAL_ALBUM_REQUEST;
	//console.log(OFFSET_AJAX_REQUEST);
	if(array_Albums.length != 0)
		load_Array_Albums();
	else
	$.ajax({
        type: "GET",
        url: "/",
        data: { offset:OFFSET_AJAX_REQUEST , letter_id: LetterID},
        success: function( data ) {
        	//console.log(data.letter_id);
        	console.log('max_albums:'+data.max_albums);
        	console.log('max_albums_pre:'+data.max_albums_pre);

        		MAX_ALBUMS = data.max_albums;
        		MAX_ALBUMS_PRE = data.max_albums_pre;
        	 // if(OFFSET_AJAX_REQUEST == 0)
        	 // 	OFFSET_AJAX_REQUEST = OFFSET_AJAX_REQUEST+4;
        	array_Albums = data.albums;
        	array_Artists = data.artists;
        	array_Songs = data.songs;
        	array_letterID = data.letter_id;
        	console.log("array_letterID:"+array_letterID);

        	//console.log("Albumnes:"+data.albums.length);
        	load_Array_Albums();
        	return;
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
				// if(data.letter_id == 'LA')
				// 	$('#isotopeAjax_LA').append(result);
				// else
		  //       	$('#isotopeAjax_LALL').append(result);
		         $('#isotopeAjax_'+data.letter_id).append(result);
		        contentLoadTriggered = false;
		        //console.log(contentLoadTriggered);
        	});

        }
	});

}

$('#leftsidebar button').on("click",function(e){
	//prevent multiple clics
	e.preventDefault(); 
	 if(contentLoadTriggered | MAX_ALBUMS < 4)
	 	return;
	load_Next = false;

		
		if(e.currentTarget.id == "UP")
		{
				if(OFFSET_AJAX_REQUEST >= 4)
				{
					OFFSET_AJAX_REQUEST = OFFSET_AJAX_REQUEST - TOTAL_ALBUM_REQUEST;
					console.log("CLICK UP: "+OFFSET_AJAX_REQUEST);
					load_Next = true;
				}
				else if(Number(letterID) > 1)
				{
					OFFSET_AJAX_REQUEST = MAX_ALBUMS_PRE -4;
					console.log("Click  DONW:"+OFFSET_AJAX_REQUEST);
					load_Next = true;
					letterID = Number(letterID)-1;
					$('#myTabs a[href="#Letter_'+letterID+'"]').tab('show');

				}
		}
		else
		{			
			if(OFFSET_AJAX_REQUEST == 0)
				{
					OFFSET_AJAX_REQUEST = 4;
					load_Next = true;
				}
			else
				if(OFFSET_AJAX_REQUEST < MAX_ALBUMS -4)
				{					
					OFFSET_AJAX_REQUEST = OFFSET_AJAX_REQUEST + TOTAL_ALBUM_REQUEST;
					console.log("Click  DONW:"+OFFSET_AJAX_REQUEST);
					load_Next = true;
						test = "1";
					test = Number(test) +1;
					console.log("TEST:"+test);
					//$(".nav-pills #2").attr('id').addClass("active");					


				}			
				else
				{
					OFFSET_AJAX_REQUEST = 0;
					console.log("Click  DONW:"+OFFSET_AJAX_REQUEST);
					load_Next = true;
					// $(".nav-pills").find("li.active").removeClass("active");
					letterID = Number(letterID)+1;
					// $('#'+letterID).parent().addClass("active");	
					$('#myTabs a[href="#Letter_'+letterID+'"]').tab('show');		
					//$('#someTab').tab('show')
				}
		}
		if(load_Next)
		{
			remove_ALL_IsotopeAjaxDivs();			
			onloadFristAlbums(letterID);
		}
	console.log("offsetJax:"+OFFSET_AJAX_REQUEST);
});

$('#letternav > ul >li a').on("click",function(e){
e.preventDefault();
	 if(contentLoadTriggered)
	 	return;
	// if(contentLoadTriggered) //prevent alot of clicks
	// 	return;
	e.preventDefault();
	OFFSET_AJAX_REQUEST = 0;
	letterID = e.target.id;
	//console.log(e.target.id);

	//console.log('isotopeAjax_'+letterID);

	
	remove_ALL_IsotopeAjaxDivs();
	onloadFristAlbums(letterID);
				// while (myNode.firstChild) {
				//     myNode.removeChild(myNode.firstChild);
				// }
});

$('#ajaxTest').on("click",function(e){
	
	$.ajax({
        type: "DELETE",
        url: '{{ url('/update') }}' + '/' + '1',        
        data: { offset:1 , letter_id: 2,  "_token": "{{ csrf_token() }}" },
        success: function( data ) {    
          console.log("success");
        }
     });

});
function remove_Letter_from_DB() {
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
                  var letter_id = select_letter.selectedIndex;
                  $('#update_Loading').append('Loading...<i class="fa fa-spinner fa-spin fa fa-fw"></i><span class="sr-only">Loading...</span>');    
                  $("#myNavbar ul").attr("hidden",true);
                  $("#update_letter").attr("disabled",true);
                  $("#delete_letter").attr("disabled",true);
                  $(".navbar-header a").attr("hidden",true);
                                    
                  $.ajax({
                        type: "DELETE",
                        url: '{{ url('/update') }}' + '/' + '1',        
                        data: { offset:1 , letter_id: letter_id,  "_token": "{{ csrf_token() }}" },
                        success: function( data ) {
                          $("#myNavbar ul").attr("hidden",false);
                          $("#update_letter").attr("disabled",false);
                          $("#delete_letter").attr("disabled",false);
                          $(".navbar-header a").attr("hidden",false);

                          var myNode = document.getElementById('update_Loading');
                          while (myNode.firstChild) {
                              myNode.removeChild(myNode.firstChild);
                          }
                           BootstrapDialog.show({
                            title: 'Updated success',
                                message: 'Remove songs success',
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
                          console.log("success");
                        },
                        error: function(XMLHttpRequest, textStatus, errorThrown) {
                          $("#myNavbar ul").attr("hidden",false);
                          $(".navbar-header a").attr("hidden",false);
                          $("#update_letter").attr("disabled",false);
                          $("#delete_letter").attr("disabled",false);
                          // alert("Status: " + textStatus);
                          // alert("Error: " + errorThrown);
                          BootstrapDialog.show({
                            title: 'Updated Error',
                                message: 'UPS! SOMETHING WRONG',
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
                  
                  ShowDebugMessage("remove_Letter_from_DB()","RESPONSE YES");


                }
                else {
                  ShowDebugMessage("remove_Letter_from_DB()","RESPONSE NO");
                  
                }
            }
        });
}

$('#updateTab button').on("click",function(e){
return;
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

//OBJECT PLAYER_CONTROL
// function addSong_to_playlist(artist, song, song_url) {
// 	var sound_click = "{{ asset('sounds/click.mp3') }}";
// 	var snd = new Audio(sound_click);
// 	snd.play();


// 	//console.log(playing);
// 	console.log('Song_url:'+song_url);
// 	console.log('playSong:'+playSong);
// 	//var clean_url = song_url.replace("'", "^");
// 	 var music = song_url.replace(/ /g, "%20");
// 	 let navbar = Array.from(document.querySelectorAll('#listBar>ol>li'));
// 	 console.log(navbar.length);
// 	 if(navbar.length == 0 && isPlaying == false )
// 	 {
// 	 	//playing = 1;

// 	 	$("#jquery_jplayer_1").jPlayer("option", "cssSelector.title");
// 		$("ol").append("<li id="+music+">"+artist+" - "+song+"</li>");
// 		playList();
// 	 }
// 	 else
// 	 {
// 	 	$('#editPlaylist').bootstrapToggle('enable');
// 	 	$("ol").append("<li id="+music+"><button class ='btn-xs btn-danger btn-playList'> <i class='fa fa-trash-o btn-shadow' aria-hidden='true'></i> </button>"+artist+" - "+song+"</li>");
// 	 	$(".btn-playList").on('click', function(event) {
//        		event.preventDefault();
//        		$(this).parent().remove();

//        		let navbar = Array.from(document.querySelectorAll('#listBar>ol>li'));
//        		if(navbar.length < 1)
// 			{
// 				$('#editPlaylist').bootstrapToggle('off');
// 				$('#editPlaylist').bootstrapToggle('disable');

// 			}
//     	});
// 	 }

// 	 	if($('#editPlaylist').prop('checked'))
// 	 	{
// 	 		$(".btn-playList").attr("hidden",false);
// 	 	}
// 	 	else
// 	 		$(".btn-playList").attr("hidden",true);



// }
//OBJECT PLAYER_CONTROL
// function nextSong(){
// 	let navbar = Array.from(document.querySelectorAll('#listBar>ol>li'));

// 	if(navbar.length < 2)
// 	{
// 		$('#editPlaylist').bootstrapToggle('off');
// 		$('#editPlaylist').bootstrapToggle('disable');

// 	}
// 	if(navbar.length != 0)
// 	{
// 		console.log("Function closeBtn");
// 		var sound_click = "{{ asset('sounds/next.mp3') }}";
// 		var snd = new Audio(sound_click);
// 		snd.play();
// 		console.log("Function nextSong");
// 		isPlaying = false;
// 		playList();
// 	}
// }

function parsed_CurrentSong(currentSong){
	console.log("before currentSong:"+currentSong);
	console.log("before current_Artist:"+current_Artist);
	current_Artist = currentSong.substring(0,currentSong.lastIndexOf("/"));
	current_Artist = current_Artist.substring(0,current_Artist.lastIndexOf("/"));
	current_Artist = current_Artist.substring(current_Artist.lastIndexOf("/")+1,current_Artist.length);
	//current_Artist = currentSong.substring(0,currentSong.indexOf("/"));
	current_Song =currentSong.substring(currentSong.lastIndexOf("/")+1,currentSong.length);
	current_Song = current_Song.replace("Mp3","");
	current_Song = current_Song.replace("MP3","");
	current_Song = current_Song.replace("mP3","");
	current_Song = current_Song.replace("mp3","");

	console.log("after current_Artist:"+current_Artist);
	console.log("after currentSong:"+current_Song);

}
//OBJECT PLAYER_CONTROL
// function playList(){
// 	let navbar = Array.from(document.querySelectorAll('#listBar>ol>li'));
// 	if(navbar.length == 0){
// 		playSong = "";
// 		title_song ="";
// 		$('#editPlaylist').bootstrapToggle('off');
// 		$('#editPlaylist').bootstrapToggle('disable');
// 		return;
// 	}
// 	console.log('Navbar Lenght: ', navbar.length);
// 	 console.log('Get first: ', navbar[0].id);
// 	// console.log('Get first: ', navbar[0].textContent);
// 	// console.log('Get first: ', navbar.length);

// 	//var parsedSong_url = navbar[0].id.split('_').join(' ');// return to the original URL
// 	var parsedSong_url = navbar[0].id;// return to the original URL
// 	var song = parsedSong_url.split("^").join("'");// return to the original URL
// 	console.log(song);
// 	var musicPath = "{{ asset('music') }}";
//     console.log('musicPath:',musicPath);
// 	song_url = musicPath.concat("/");
// 	song_url2 = song_url.concat(song);
// 	console.log('Origina Song:', song);
// 	parsed_CurrentSong(song);

// 	playSong = song_url2;
// 	console.log('Origina music:', playSong);
// 	title_song = current_Artist.replace(/%20/g," ") +" - "+current_Song.replace(/%20/g," ");
// 	$('#listBar>ol>li').first().remove();

//     $('#jquery_jplayer_1').jPlayer("setMedia", {
//         title: title_song,
//         m4a: playSong,
//         oga: "http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg"
//       });

//    	$('#jquery_jplayer_1').jPlayer("play");

// }
//OBJECT PLAYER_CONTROL
// function removeAllSongs() {
// 	BootstrapDialog.confirm({
//             title: 'WARNING',
//             message: 'Are you sure to remove All Songs?',
//             type: BootstrapDialog.TYPE_DANGER, // <-- Default value is BootstrapDialog.TYPE_PRIMARY
//             closable: true, // <-- Default value is false
//             draggable: true, // <-- Default value is false
//             btnCancelLabel: 'Cancel', // <-- Default value is 'Cancel',
//             btnOKLabel: 'Yes!', // <-- Default value is 'OK',
//             btnOKClass: 'btn-danger', // <-- If you didn't specify it, dialog type will be used,
//             callback: function(result) {
//                 // result will be true if button was click, while it will be false if users close the dialog directly.
//                 if(result) {
//                     $(".example").html('')

//                     let navbar = Array.from(document.querySelectorAll('#listBar>ol>li'));

// 						$('#editPlaylist').bootstrapToggle('off');
// 						$('#editPlaylist').bootstrapToggle('disable');


//                 }else {

//                 }
//             }
//         });



// }

$(document).ready(function(){

  if(EXTERNAL_DRIVE) //check if external drive is ON or OFF //Constants.blade
    $('#externalDrive').bootstrapToggle('on');    
  else
    $('#externalDrive').bootstrapToggle('off');
  
  //hide all elements in the search section
  $('#select_album').selectpicker('hide');
  $('#select_song').selectpicker('hide');  
  $("#select_add").attr("hidden",true);

	$("#btn_removeAllSongs").attr("hidden",true);
	let navbar = Array.from(document.querySelectorAll('#listBar>ol>li'));
	if(navbar.length == 0)
	{
		$('#editPlaylist').bootstrapToggle('disable')
	}

	onloadFristAlbums(letterID); //load the first 16 Albums when load the page
	//check if the scroll reach the botton to get another albums request
	$('div#istope-album').scroll(function(e) {
		// console.log('scrollTop:'+$('div#istope-album').scrollTop());
		// console.log('heightAlbum:'+$('div#istope-album').height());
		// console.log('heightMusicTab:'+$('div#musicTab').height());
		if($('div#istope-album').scrollTop() + OFFSET_SCROLL >= $('div#musicTab').height() - $('div#istope-album').height()  && contentLoadTriggered == false)
		{		console.log(letterID);
	    		onloadFristAlbums(letterID);
		}

	});

	 $('#editPlaylist').change(function() {

	 	if($(this).prop('checked'))
	 	{
	 		$(".btn-playList").attr("hidden",false);
	 		$("#btn_removeAllSongs").attr("hidden",false);
	 	}
	 	else
	 	{
	 		$(".btn-playList").attr("hidden",true);
	 		$("#btn_removeAllSongs").attr("hidden",true);
	 		//$('').hidden
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

	 // $(".nav-pills a").on('click', function(event) {
  //       event.preventDefault();
  //       //getting the Y position of the element you want to scroll to
		// var position = $('#istope-album').offset().top-100;

		// //scrolling to the element with an animation of 700 miliseconds
		// $('#istope-album').animate({
		//     scrollTop: position
		// }, 700, function(){  //callback function (executed when animation finishes)
		//     //alert("Hello there!");
		// });
  //       window.scrollTo(0,0);// return to the top of the screen
  //       //window.scrollTo(x-coord, y-coord);
  //       //alert("hola");
  //      // $(this).parent().remove();
  //   });
	$.fn.extend({
	    animateCss: function (animationName) {
	        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
	        this.addClass('animated ' + animationName).one(animationEnd, function() {
	            $(this).removeClass('animated ' + animationName);
	        });
	    }
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
		let navbar = Array.from(document.querySelectorAll('#listBar>ol>li'));
		if(navbar.length < 2){
			
			$('#editPlaylist').bootstrapToggle('off');
			$('#editPlaylist').bootstrapToggle('disable');
			
		}
    	isPlaying = false;
    	playList();
			console.log("play isPlaying:"+isPlaying);
    	console.log("songEnded:"+playSong);
    	console.log("title_song:"+title_song);
		$(this).jPlayer("setMedia", {
			title: title_song,
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
