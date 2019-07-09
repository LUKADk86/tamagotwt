/*fonction du modal pour sa fermeture*/
var subbtn= document.getElementById("subbtn");
var modal= document.getElementById("alertmessage");
var span = document.getElementById("close");

subbtn.onclick=function(){
  console.log(compteurs);
  compteurs++;
  if(compteurs==2)
  {
    modal.style.display="block";
    compteurs=0;
  }
}

span.onclick = function() {
    modal.style.display = "none";
}
/*A vérifier , peut-être à enlever*/
window.onclick = function(event) {
    if (event.target == modal) {
    modal.style.display = "none";
   }
}
