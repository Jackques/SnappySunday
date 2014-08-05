console.log("hoi");

function volgende_pag(){
//var url = $(this).attr("href");
//var lastSegment = url.split('/').pop();
var lastPart = window.location.href.split("/").pop();

if(lastPart == ""){
lastPart = 3;
alert(lastPart);
}else{
alert(lastPart);
}


};