$(document).ready(function(){
	var hash = new Fingerprint({screen_resolution: true}).get();
	$("input[name='bfi']").val(hash);
    $("input[name='browser']").val(JSON.stringify($.browser));
    $("input[name='appVersion']").val(navigator['appVersion']);
})

$('button.submit-login').click(function(){
    $('form#form-login').submit();
})