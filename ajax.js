function getXmlHttp()
{
var xmlhttp;
try{
xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
} catch(e) {
try {
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
} catch(E) {
xmlhttp = false;
}
}
if(!xmlhttp && typeof XMLHttpRequest != 'undefined'){
xmlhttp = new XMLHttpRequest();
}
return xmlhttp;
}

function setContext(num)
{
var req = getXmlHttp();
var statusElem = document.getElementById('mainContent');

req.onreadystatechange = function() {
if(req.readyState == 4) {
statusElem.innerHTML = req.responseText;
}
}

req.open('GET', '/distributor.php?page=' + num, true);

req.send(null);

statusElem.innerHTML = 'wait...'; 
}