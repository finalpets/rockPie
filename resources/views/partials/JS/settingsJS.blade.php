$('#externalDrive').on("change",function(e){
  
  EXTERNAL_DRIVE = $(this).prop('checked');
  ShowDebugMessage("externalDrive",EXTERNAL_DRIVE);  
});

$('#update_letter').on("click",function(e){
        
    var select_letter = document.getElementById("select_letter");
    ShowDebugMessage("#update_letter","Selector:"+select_letter.selectedIndex);    

    if(select_letter.selectedIndex == 0)
      return;    
    var text = select_letter.options[select_letter.selectedIndex].text;
    
    $('#update_Loading').append('Loading...<i class="fa fa-spinner fa-spin fa fa-fw"></i><span class="sr-only">Loading...</span>');
    //$("#updateTab button").attr("disabled", true);
    $("#myNavbar ul").attr("hidden",true);
    $("#update_letter").attr("disabled",true);
    $("#delete_letter").attr("disabled",true);
    $(".navbar-header a").attr("hidden",true);
    $.ajax({
        type: "GET",
        url: "{{ route('update.create') }}",
        data: { letter:text , external_drive: EXTERNAL_DRIVE },
        dataType: "json",
        //url: "update/create",
        success: function( msg ) {
          //removing all the childs inside an ID
          var myNode = document.getElementById('update_Loading');
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

          //$("#updateTab button").attr("disabled", false);
          $("#myNavbar ul").attr("hidden",false);
          $(".navbar-header a").attr("hidden",false);
          $("#update_letter").attr("disabled",false);
          $("#delete_letter").attr("disabled",false);
          console.log("Ajax success");
          console.log(msg);
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
  // $.ajax({
  //       type: "DELETE",
  //       url: '{{ url('/update') }}' + '/' + '1',        
  //       data: { offset:1 , letter_id: 2,  "_token": "{{ csrf_token() }}" },
  //       success: function( data ) {    
  //         console.log("success");
  //       }
  //    });

});


$('#delete_letter').on("click",function(e){
  ShowDebugMessage("#delete_letter","delete letter Pressed");
  var select_letter = document.getElementById("select_letter");
  ShowDebugMessage("#delete_letter","Selector:"+select_letter.selectedIndex);    

  if(select_letter.selectedIndex == 0)
    return;
  remove_Letter_from_DB();
  // $.ajax({
  //       type: "DELETE",
  //       url: '{{ url('/update') }}' + '/' + '1',        
  //       data: { offset:1 , letter_id: letter_id,  "_token": "{{ csrf_token() }}" },
  //       success: function( data ) {
  //         console.log("success");
  //       }
  // });
});