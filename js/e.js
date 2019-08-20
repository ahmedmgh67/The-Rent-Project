var d1 = document.getElementById('d1');
var d2 = document.getElementById('d2');
var d3 = document.getElementById('d3');
var d4 = document.getElementById('d4');
var p1 = document.getElementById('p1');
var p2 = document.getElementById('p2');
var p3 = document.getElementById('p3');
var p4 = document.getElementById('p4');
d1.onclick=function(){
    if(p1.style.display=="none")
        p1.style.display="block";
    else
        p1.style.display="none";
        
}
d2.onclick=function(){
    if(p2.style.display=="none")
        p2.style.display="block";
    else
        p2.style.display="none";
}
d3.onclick=function(){
    if(p3.style.display=="none")
        p3.style.display="block";
    else
        p3.style.display="none"
}
d4.onclick=function(){
    if(p4.style.display=="none")
        p4.style.display="block";
    else
        p4.style.display="none"
}