function getOptPeriode(src,trgt,pnl,after){
    block(pnl);
    $.post(act_url+classname+'/getListOfPeriode',{program:$(src).val()},function(data){
        $(trgt).find('option:enabled').remove();
        if(typeof after!='undefined'){
            if(after==false)
                $(trgt).html(data.opt);
            else if(after.length==0)
                $(trgt).find('option:disabled').after(data.opt);
            else 
                $(trgt).find(after).after(data.opt);
        } else $(trgt).find('option:disabled').after(data.opt);
        
        unblock(pnl)
        $(trgt).val(data.set).trigger('change');
    },'json')
}
function getOptRombel(par,trgt,pnl){
    block(pnl);
    $.post(act_url+classname+'/getListOfRombel',par,function(data){
        $(trgt).find('option:enabled').remove();
        $(trgt).find('optgroup').remove();
        $(trgt).find('option:disabled').after(data);
        $(trgt).find('option:disabled').prop('selected','selected').trigger('change');
        unblock(pnl);
    })
}
$('body').on('click','a.list-group-item',function(){
    $(this).parent().find('a.list-group-item.active').removeClass('active');
    $(this).addClass('active');
})