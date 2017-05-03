
$('#myNavbar').on("click",function(e){
	$('#select_album').selectpicker('hide');
	$('#select_song').selectpicker('hide');
	//$("#select_add").attr("hidden",true);
	$("#select_add").attr("hidden",true);

	$.ajax({
        type: "GET",
        url: "{{ route('search.artist') }}",        
        dataType: "json",
        //url: "update/create",
        success: function( msg ) {
          //removing all the childs inside an ID          
                console.log(msg);  
                //$('#select_peter').append("<option>HELP</option>");
                $('#select_search').html("");

               $.each(msg.artists, function(index,artist){
               	//$("#select_search").html("<option value='text'>text</option>");

               	$('#select_search').append($('<option>', {
               	    value: artist.id,
               	    text: artist.artist_name
               	}));

               	
               });
              // $('#select_search').selectpicker('render');      
               $('.selectpicker').selectpicker('refresh');                       
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {          
                   
          }
    });
});

$('#select_search').on("change",function(e){
	$('#select_album').selectpicker('show');
	var select_artist = document.getElementById("select_search");
  	ShowDebugMessage("Selector:"+select_artist.selectedIndex);
  	//data = select_artist.selectedIndex;
	$.ajax({
        type: "GET",
        data : { id: select_artist.selectedIndex },
        url: '{{ url('search') }}' + '/' + '1',
        //data: { offset:1 , letter_id: 2" },       
        dataType: "json",
        //url: "update/create",
        success: function( msg ) {
                        console.log(msg);
                        $('#select_album').html("");
                        $('#select_song').html("");
                        $("#select_add").attr("hidden",true);
               $.each(msg.albums, function(index,album){
               	//$("#select_search").html("<option value='text'>text</option>");

               	$('#select_album').append($('<option>', {
               	    value: album.id,
               	    text: album.album_name
               	}));

               	
               });
              // $('#select_search').selectpicker('render');      
               $('.selectpicker').selectpicker('refresh');                       
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {          
                   
          }
    });
});

$('#select_album').on("change",function(e){

	$('#select_song').selectpicker('show');

	//var select_albums = document.getElementById("select_album");
	var select_albums = $('#select_album').selectpicker('val');
		$.ajax({
	        type: "GET",
	        data : { select_albums: select_albums },
	        url: "{{ route('search.songs') }}",   
	        //data: { offset:1 , letter_id: 2" },       
	        dataType: "json",
	        //url: "update/create",
	        success: function( msg ) {
	                        console.log(msg);
	                        $('#select_song').html("");
	               $.each(msg.songs, function(index,song){
	               	//$("#select_search").html("<option value='text'>text</option>");

	               	$('#select_song').append($('<option>', {
	               	    value: song.id,
	               	    text: song.title
	               	}));

	               	
	               });
	              // $('#select_search').selectpicker('render');      
	               $('.selectpicker').selectpicker('refresh');   
	               $("#select_add").attr("hidden",false);                    
	        },
	        error: function(XMLHttpRequest, textStatus, errorThrown) {          
	                   
	          }
	    });
	

});