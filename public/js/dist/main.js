function copyright(){
    var date = new Date();
    var day = date.getDay();
    var dayM = date.getDate();
    var month = date.getMonth();
    var year = date.getFullYear();
    var hour = date.getHours();
    var min = date.getMinutes();
    var sec = date.getSeconds();
    var dayarray = new Array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
    var montharray = new Array("Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Decembre");
    var copy = document.getElementById("copy");
    
    copy.innerText = "" + dayarray[day] + " Le " + dayM + "/" + montharray[month] + "/" + year + " | " + hour + ":" + min + ":" + sec;
    setTimeout('copyright()', 1000);
}

var n, sn, c, dprt, cl, em, submit;

n = document.getElementById('n');
submit = document.getElementById('submit');
submit.addEventListener('click', submit);
function submit(){
    alert("nothing inside your fields");
}
if(n == ""){
    submit();
}
// run the function
copyright();