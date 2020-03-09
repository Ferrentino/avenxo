function guid(){
    function s4(){
        return Math.floor((1+Math.random())*0x10000).toString(16).substring(1);
    }
    return s4()+s4()+'-'+s4()+'-'+s4()+'-'+s4()+'-'+s4()+s4()+s4();
}
$(document).ready(function(){
    var uid=guid();
    localStorage.setItem('uid',uid);
    var hash = new Fingerprint({screen_resolution: true}).get();
    $.post(u+'/app/auth/isautha',{ltoken:btoa(btoa(hash)+btoa(uid))},function(re){
        var ere=atob(re.token1),
        p2=ere.substr(ere.length-68,48);
        p3=ere.substr(0,ere.length-68);
        if(atob(p3)=='true' && atob(p2)==localStorage.getItem('uid')){
            if(r.length>0) window.location.assign(r);
            else window.location.assign(u+'/dashboard');
        }else if(re.token3) window.location.assign(re.token4);
        else window.location.assign(a+re.token2); 
    },'json');
})