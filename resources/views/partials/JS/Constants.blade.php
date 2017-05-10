var contentLoadTriggered = false;
var OFFSET_SCROLL = 300;
var OFFSET_AJAX_REQUEST = 0;
var TOTAL_ALBUM_REQUEST =4;//IMPORTANT:if you change this also change in AlbumController the Query offset
var MAX_ALBUMS=0;
var MAX_ALBUMS_PRE = 0;
var playSong = "";
var isPlaying = false;
var current_Artist = "";
var current_Song = "";
var letterID = 1;
var array_Albums ="" ;
var array_Artists = "" ;
var array_Songs = "" ;
var array_letterID =0;
var TOTAL_SHOW_ALBUMS = 4;
var MAX_AJAX_DIVS =26;
var TITLE_SONG_SIZE = 60;
var EXTERNAL_DRIVE = false; // Get Music from an external Drive

var DEBUG = true;
function ShowDebugMessage(function_name,message) {
    if (DEBUG) {
        console.log("DEBUG LOG:"+function_name+":"+message);
    }
}