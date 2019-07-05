/*fonction du modal pour sa fermeture*/
var messagebtn= document.getElementById("messagebtn");
var modal= document.getElementById("alertmessage");
var span = document.getElementById("close");
var i=0;

messagebtn.onclick=function(){

i++;
  console.log(i);
  if(i==3)
  {
    modal.style.display="block";
    i=0;
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
