var n,b=d.getElementsByTagName(s)[0];
function l(i,c,z){
    if(!d.getElementById(i)){
        setTimeout(function(){
            n=d.createElement(s);
            n.id=i;
            n.src=c;
            b.parentNode.insertBefore(n,b);
        },z);
    }
}