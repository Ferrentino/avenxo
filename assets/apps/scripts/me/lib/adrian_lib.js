function mergeJson(obj1,obj2){
    var result={};
    $.extend(result, obj1, obj2);
    return result;
}
function validation(id){
    var frm = document.getElementsByClassName('frm_validation');
    var passed=true;
    
    for(i=0;i<frm.length;i++){
        if(frm[i].getAttribute('id')==id){
            var elm=frm[i].getElementsByTagName('INPUT');
            
            for(j=0;j<elm.length;j++){
                var elmId=elm[j].getAttribute('id');
                if(elm[j].getAttribute('required')=='required'){
                    if($("#"+elmId).val()=='' || $("#"+elmId).val().length==0){
                        $("#name-error-"+elmId).remove();
                        //$("#"+elmId).parent().after('<div class="col-md-3 val-help-block"><p class="help-block"><i class="fa fa-times-circle"></i> Oops!</p></div>');
                        
                        $("#form-group-"+elmId).addClass('has-error');
                        //var par=$("#"+elmId).parent().parent().get(0).setAttribute('class','form-group has-error');
                        $("#"+elmId).after('<span id="name-error-'+elmId+'" class="help-block help-block-error">This field is required.</span>');
                        passed=false;
                    }else{
                        $("#name-error-"+elmId).remove();
                        $("#form-group-"+elmId).removeClass('has-error');
                        //$("#"+elmId).parent().next().remove();
                        //$("#"+elmId).parent().after('<div class="col-md-3 val-help-block"><p class="help-block"><i class="fa fa-check"></i> Great success!</p></div>');
                        //var par=$("#"+elmId).parent().parent().get(0).setAttribute('class','form-group has-success');
                    }
                }   
            }
            var elm=frm[i].getElementsByTagName('SELECT');
            
            for(j=0;j<elm.length;j++){
                var elmId=elm[j].getAttribute('id');
                //alert(elmId);
                if(elm[j].getAttribute('required')=='required'){
                    if($("#"+elmId).val()=='' || $("#"+elmId).val()==null){
                        $("#name-error-"+elmId).remove();
                        //$("#"+elmId).parent().next().remove();
                        //$("#"+elmId).parent().after('<div class="col-md-3 val-help-block"><p class="help-block"><i class="fa fa-times-circle"></i> Oops!</p></div>');
                        $("#"+elmId).after('<span id="name-error-'+elmId+'" class="help-block help-block-error">This field is required.</span>');
                        var par=$("#"+elmId).parent().parent().get(0).setAttribute('class','form-group has-error');
                        passed=false;
                    }else{
                        $("#name-error-"+elmId).remove();
                        //$("#"+elmId).parent().next().remove();
                        //$("#"+elmId).parent().after('<div class="col-md-3 val-help-block"><p class="help-block"><i class="fa fa-check"></i> Great success!</p></div>');
                        //var par=$("#"+elmId).parent().parent().get(0).setAttribute('class','form-group has-success');
                    }
                }   
            }
            
            var elm=frm[i].getElementsByTagName('TEXTAREA');
            
            for(j=0;j<elm.length;j++){
                var elmId=elm[j].getAttribute('id');
                //alert(elmId);
                if(elm[j].getAttribute('required')=='required'){
                    if($("#"+elmId).val()=='' || $("#"+elmId).val().length==0){
                        var par=$("#"+elmId).parent().parent().get(0).setAttribute('class','form-group has-error');
                        $("#"+elmId).after('<span id="name-error-'+elmId+'" class="help-block help-block-error">This field is required.</span>');
                        passed=false;
                    }else{
                        var par=$("#"+elmId).parent().parent().get(0).setAttribute('class','form-group');
                        $("#name-error-"+elmId).remove();
                    }
                }   
            }
        }
        //alert(frm[i].getAttribute('id'));
    }
    return passed;
}

function isValid(classname){
    var isOk=true,t='',f='',h='';
    reset_validation();
    $("."+classname).each(function(i){
        if(
            (
                $(this).hasClass('radio-list')
                || $(this).hasClass('checkbox-list')
            ) 
        && $(this).attr('required')=='required'){
            if($(this).find('input:checked').length==0){
                $(this).after('<p class="text-help text-danger">This field is required.</p>')
                isOk=false;    
            }else return true;
        }else
        if($(this).attr('required')=='required'&&$(this).hasClass('date-picker')){
            var date_val=null;
            if($(this).prop('tagName')=='DIV') date_val=$(this).find('input').val();
            else date_val=$(this).val();
            if(date_val=null||date_val==''||date_val=='null'){
                $(this).closest('div.form-group').addClass('has-error');
                if($(this).prop('tagName')=='DIV')
                    $(this).after('<p class="text-help text-danger">This field is required.</p>');
                else $(this).closest('div.input-group').after('<p class="text-help text-danger">This field is required.</p>'); 
                $(".has-error .control-label").attr('for','inputError');
                idOk=false;
            }
        }else
        if($(this).attr('required')=='required' && ($(this).val()==''||$(this).val()=='null'||$(this).val()==null)){
            $(this).closest('.form-group').addClass('has-error');
            if($(this).hasClass('select2')){
                $(this).closest('.has-error').find('.select2.select2-container').after('<p class="text-help text-danger">This field is required.</p>');      
            }
            else $(this).after('<p class="text-help text-danger">This field is required.</p>');
            $(".has-error .control-label").attr('for','inputError');
            isOk=false;
        }else{
            var attr=$(this).attr("data-range");
            if(typeof attr !== typeof undefined && attr!==false){
                var lim=attr.split('-');
                var bot=lim[0];
                var up=lim[1];
                var val=$(this).val();
                                
                if(parseInt(val)<parseInt(bot) || parseInt(val) > parseInt(up)){
                    $(this).parent().addClass('has-error');
                    $(this).after('<p class="text-help text-danger">Value must between '+attr+'</p>')
                    $(".has-error .control-label").attr('for','inputError');
                    isOk=false;   
                }else{
                    if($(this).attr('required')=='required'){
                        $(this).parent().addClass('has-success');
                        $(".has-success .control-label").attr('for','success');    
                    }   
                }
            }else{
                if($(this).attr('required')=='required'){
                    $(this).parent().addClass('has-success');
                    $(".has-success .control-label").attr('for','success');    
                }
                   
            }
        }
        if(h.length==0){
            h=$(this);
        }
        if(!isOk){
            if(f.length==0){
                f=$(this);
            }
            if(t.length==0){
                t=$(this).attr('data-tab');
                if(typeof t=='undefined') t=$(this).closest('.tabbable-line').attr('id');
                if(typeof t=='undefined') t='';
                var tp=$(this).attr('data-tab-pane');
                if(typeof tp=='undefined') tp=$(this).closest('.tab-pane').attr('id');
                if(t.length>0){
                    $('#'+t+' li.active').removeClass('active');
                    $('#'+t+' .tab-pane.active').removeClass('active');
                    $('li a[href="#'+tp+'"]').parent().addClass('active');      
                    $('#'+t+' #'+tp).addClass('active');
                }
            }
        }
    });
    if(typeof f == 'object'){
        $('.modal-scrollable').animate({
            scrollTop: Math.abs(h.offset().top)+f.offset().top
        }, 500);   
    }
    return isOk;
}
function reset_validation(){
    $(".text-help").remove();
    $(".help-block").remove();
    $(".form-group").removeClass('has-error');
    $(".form-group").removeClass('has-success');
    $(".has-error").removeClass('has-error');
    $(".has-success").removeClass('has-success');
    return false;
}
function clear_form(form_id){
    if(form_id!=null && form_id.length>0){
        $("."+form_id).each(function(i){
            var type=$(this).attr('type');
            var id=$(this).attr('id');
            var htmlTag=$(this).prop('tagName');
            
            if(htmlTag=='DIV'){
                if($(this).hasClass('radio-list')||$(this).hasClass('checkbox-list')){
                    $(this).find('.checked').removeClass('checked');
                    $(this).find('input').removeAttr('data-origin');
                    $(this).find('input:checked').removeAttr('checked');
                }else
                if($(this).hasClass('dropzone')){
                    mydrop[id].removeAllFiles();
                    $('.dz_existed.'+form_id+'[data-dz="'+id+'"] .list-group .dz_existed-item').remove();
                }
            }if($(this).hasClass('select2-hidden-accessible')){
                    $(this).val('').trigger('change');    
            }if($(this).hasClass('date-picker')){
                    $(this).datepicker('clearDates');    
            }else{
                $(this).val('');
            }
        });
    }
    if(typeof on_clear_form == 'function') on_clear_form(form_id);
}
function clear_form1(id){
    var frm = document.getElementsByClassName('frm_validation');
    
    for(i=0;i<frm.length;i++){
        if(frm[i].getAttribute('id')==id){
            var elm=frm[i].getElementsByTagName('INPUT');
            for(j=0;j<elm.length;j++){
                var elmId=elm[j].getAttribute('id');
                var type=elm[j].getAttribute('type');
                if($("."+id+"#"+elmId).hasClass('timepicker')){
                    $("."+id+"#"+elmId).timepicker('setTime', '07:00 AM');
                }else
                if(type=='checkbox'){
                    $("."+id+"#"+elmId).prop('checked',false);
                }else
                $("."+id+"#"+elmId).val('');
            }
            
            var elm=frm[i].getElementsByTagName('SELECT');
            for(j=0;j<elm.length;j++){
                var elmId=elm[j].getAttribute('id');
                $("."+id+"#"+elmId).val('');   
            }
            
            var elm=frm[i].getElementsByTagName('TEXTAREA');
            for(j=0;j<elm.length;j++){
                var elmId=elm[j].getAttribute('id');
                $("."+id+"#"+elmId).val('');   
            }
        }
    }
    if($(".summernote").length>0) $(".summernote").code('');
    return false;
}

function clear_form_below(id,idTh){
    var isBelow=false;
    $("."+id).each(function(i){
        elmId=$(this).attr('id');
        if(isBelow)$("."+id+"#"+elmId).val('');
        if(elmId==idTh) isBelow=true;
    });
    return false;
}

function clear_detail(id){
    $("."+id).each(function(i){
        elmId=$(this).attr('id');
        if(elmId.substring(0,7)=='detail_')
             $("."+id+"#"+elmId).html('');
    });
    return false;
}

function generateDataString(id){
    var frm = document.getElementsByClassName('frm_validation');
    var res="";
    
    for(i=0;i<frm.length;i++){
        if(frm[i].getAttribute('id')==id){
            var elm=frm[i].getElementsByTagName('INPUT');
            for(j=0;j<elm.length;j++){ 
                var elmId=elm[j].getAttribute('id');
                var type=elm[j].getAttribute('type');
                if(type=='checkbox'){
                    if($("."+id+"#"+elmId).is(":checked"))
                        res+=("&"+elmId+"="+($("."+id+"#"+elmId).val())); 
                    else{
                        if($("."+id+"#"+elmId).val()=='NO')
                            res+=("&"+elmId+"=YES"); else res+=("&"+elmId+"=NO");   
                    }
                }else
                res+=("&"+elmId+"="+$("."+id+"#"+elmId).val());
            }
            
            var elm=frm[i].getElementsByTagName('SELECT');
            for(j=0;j<elm.length;j++){
                var elmId=elm[j].getAttribute('id');
                res+=("&"+elmId+"="+$("."+id+"#"+elmId).val());   
            }
            
            var elm=frm[i].getElementsByTagName('TEXTAREA');
            for(j=0;j<elm.length;j++){
                var elmId=elm[j].getAttribute('id');
                res+=("&"+elmId+"="+$("."+id+"#"+elmId).val());   
            }
        }
    }
    res=res.substr(1,res.length);
    return res;
}
function genDataStringByClass(className){
    var res='';
    $("."+className).each(function(i){
        var type=$(this).attr('type');
        var id=$(this).attr('id');
        var htmlTag=$(this).prop('tagName');
        
        if(htmlTag=='INPUT'){
            if(type=='text' || type=='hidden' ) res+=('&'+id+'='+$(this).val())
        }else
        if(htmlTag=='SELECT' || htmlTag=='TEXTAREA'){
            res+=('&'+id+'='+$(this).val())
        }
    });
    res=res.substr(1,res.length);
    return res;
}
function fill_form(formId,data){
    $.each(data, function(index,value){
        if($("."+formId+"#"+index).prop('type')=='checkbox'){
            if($("."+formId+"#"+index).val()==value)
                $("."+formId+"#"+index).prop('checked',true);
            else    $("."+formId+"#"+index).prop('checked',false);
        }else
        if($('.'+formId+'#'+index).hasClass('statictext')){
            $('.'+formId+'#'+index).html(value);
        }else
        if($('.'+formId+'#'+index).hasClass('radio-list')){
            $('.'+formId+'#'+index+' input[name="'+index+'"][value="'+value+'"]').parent().addClass('checked');
            $('.'+formId+'#'+index+' input[name="'+index+'"][value="'+value+'"]').attr('checked','checked');
            $('.'+formId+'#'+index+' input[name="'+index+'"][value="'+value+'"]').prop('checked','checked');
        }else
        if($('.'+formId+'#'+index).hasClass('checkbox-list')){
            if(typeof value!== 'undefined' && value !== null){
                $.each(value,function(cl_indx,cl_val){
                    $('.'+formId+'#'+index+' input[value="'+cl_val+'"]').parent().addClass('checked');
                    $('.'+formId+'#'+index+' input[value="'+cl_val+'"]').attr('checked','checked');
                    $('.'+formId+'#'+index+' input[value="'+cl_val+'"]').prop('checked','checked');
                    $('.'+formId+'#'+index+' input[value="'+cl_val+'"]').attr('data-origin','checked');
                })   
            }
        }else
        if($('.'+formId+'#'+index).hasClass('select2-hidden-accessible')){
            $("."+formId+"#"+index).val(value).trigger('change');
        }else
        if($('.'+formId+'#'+index).hasClass('date-picker')){
             $('.'+formId+'#'+index).datepicker('update', value);
        }else
        if($('.'+formId+'#'+index).hasClass('timepicker')){
             $('.'+formId+'#'+index).timepicker('setTime', value);
        }else
        if($('.'+formId+'#'+index).hasClass('dropzone')){
            if(typeof value=='object'){
                var dz_ex=$('.dz_existed.'+formId+'[data-dz="'+index+'"]');
                dz_ex.find('.dz_existed-item').remove();
                $.each(value,function(cl_indx,cl_val){
                    var n_elm='<li class="list-group-item dz_existed-item" id="'+cl_val.id+'"><span class="dz_ex_name">'+cl_val.name+'</span><a><span class="glyphicon glyphicon-trash pull-right popovers dz_ex_del" onclick="dz_delFile('+"'"+formId+"','"+index+"','"+cl_val.id+"'"+')" data-container="body" data-trigger="hover" data-placement="top" data-content="Hapus file"></span></a><a><span style="display: none;" class="fa fa-undo pull-right popovers dz_ex_undo" onclick="dz_undoDel('+"'"+formId+"','"+index+"','"+cl_val.id+"'"+')" data-container="body" data-trigger="hover" data-placement="top" data-content="Batal hapus"></span></a></li>';
                    if(dz_ex.find('.dz_existed-item').length>0) dz_ex.find('.dz_existed-item:last').after(n_elm);
                    else dz_ex.find('.list-group').html(n_elm);
                });
                $('.popovers').popover();   
            }           
        }else
        $("."+formId+"#"+index).val(value);
    })
    if(typeof on_fill_form =='function') on_fill_form(formId,data);
}
function genDataAsJsonObject(selector){
    if(typeof selector == 'object') var classname=selector.attr('id'); else var classname=selector;
    var res='{';
    $("."+classname).each(function(i){
        var type=$(this).attr('type');
        var id=$(this).attr('id');
        var htmlTag=$(this).prop('tagName');
        
        if(htmlTag=='SELECT' || htmlTag=='TEXTAREA'){
            res+=('"'+id+'":"'+$(this).val()+'",')
        }else
        if(htmlTag=='INPUT'){
            if(type=='text' || type=='hidden' || type=='password' || type=='email') res+=('"'+id+'":"'+$(this).val()+'",')
        }else
        if(htmlTag=='DIV'){
            if($(this).hasClass('radio-list')){
                res+=('"'+id+'":"'+$(this).find('input[type="radio"]:checked').val()+'",');
            }else
            if($(this).hasClass('date-picker')){
                res+=('"'+id+'":"'+$(this).find('input').val()+'",');
            }else
            if($(this).hasClass('dropzone')){
                var data_u=$(this).attr('data-uploaded');
                if(typeof data_u=='undefined') data_u='""';
                var up_d=$('.dz_existed.'+classname+'[data-dz="'+id+'"]').find('.dz_existed-item.deleted');
                if($(this).attr('data-type')=='multi'){
                    var del_data='[';
                    if(up_d.length>0){
                        up_d.each(function(i){
                            del_data+=('"'+$(this).attr('id')+'",');
                        })
                        del_data=del_data.substr(0,del_data.length-1);
                        del_data+=']';   
                    }else del_data='""';
                    data_u='{"new_file":'+data_u+',"delete_file":'+del_data+'}';
                }else{
                    var del_data=up_d.attr('id');
                    if(typeof del_data=='undefined') del_data='';
                    data_u='{"new_file":'+data_u+',"delete_file":"'+del_data+'"}';
                }
                res+=('"'+id+'":'+data_u+',');
            }else
            if($(this).hasClass('checkbox-list')){
                res+=('"'+id+'":[');
                var el_ch=$(this).find('input[type="checkbox"]:checked');
                if(el_ch.length>0){
                    el_ch.each(function(i){
                        res+=('"'+$(this).val()+'",');  
                    })
                    res=res.substr(0,res.length-1);    
                }
                res+=('],');
            }
        }
    });
    res=res.substr(0,res.length-1);
    res+='}';
    return JSON.parse(res);
}
function fill_detail(formId,data){
    $.each(data, function(index,value){
        $("."+formId+"#detail_"+index).html(value);
    })
}
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which:event.keyCode
    if(charCode >31 && (charCode<48 || charCode>57)) return false; return true;
};
function isFloatKey(evt){
    var charCode = (evt.which) ? evt.which:event.keyCode
    if(charCode==46) return true; else
    if(charCode >31 && (charCode<48 || charCode>57)) return false; return true;
};

//Dropzone Handling
function uploadDropzone(fid,li){
    var d=$("."+fid+".dropzone");
    d.each(function(i){
        if(i==li) return true;
        var d_id=$(this).attr('id');
        var fq=mydrop[d_id].getQueuedFiles();
        if(fq.length>0){
            mydrop[d_id].processQueue();
            mydrop[d_id].on('queuecomplete',function(file){
                if(d.length==(i+1)) onUploadComplete(d,fid);
                else uploadDropzone(fid,i);
            })
            mydrop[d_id].on('success',function(file,res){
                var div=$("."+fid+".dropzone#"+d_id),
                data=div.attr('data-uploaded'),
                type=div.attr('data-type'),
                nd='';
                if(typeof data != 'undefined'){
                    nd=data.substr(0,data.length-1);
                    nd+=(',"'+res+'"]');
                }else{ if(type=='multi') nd='["'+res+'"]';else nd='"'+res+'"'; }
                div.attr('data-uploaded',nd);
            })
            return false;
        }
        if(d.length==(i+1)) onUploadComplete(d,fid);
    })
}

function onUploadComplete(d,fid){
    var isCom=true;
    d.each(function(i){
        var fq=mydrop[$(this).attr('id')].getQueuedFiles();
        if(fq.length>0){
            isCom=false;
            return false;
        }
    });
    if(isCom) doSave();
}
function onDzAddedFile(dz){
    var div=$(".dropzone#"+dz),
    type=div.attr('data-type'),
    items=$('.dz_existed[data-dz="'+dz+'"] .dz_existed-item');
    if(type=='single' && items.length>0){
        window.setTimeout(function(){
            if(mydrop[dz].getAcceptedFiles().length>0){
                dz_delFile(frm,dz,items.attr('id'));
            }
        },300);   
    }
}
function onDzRemovedFile(dz){
    var div=$(".dropzone#"+dz),
    type=div.attr('data-type'),
    items=$('.dz_existed[data-dz="'+dz+'"] .dz_existed-item.deleted');
    if(type=='single' && items.length>0){
        if(mydrop[dz].getAcceptedFiles().length==0){
            dz_undoDel(frm,dz,items.attr('id'));
        }   
    }
}
function dz_delFile(frm,col,file){
    var dz_ex=$('.dz_existed.'+frm+'[data-dz="'+col+'"]');
    dz_ex.find('.dz_existed-item#'+file+' .dz_ex_name').css('text-decoration','line-through');
    dz_ex.find('.dz_existed-item#'+file).addClass('deleted');
    dz_ex.find('.dz_existed-item#'+file+' .dz_ex_del').hide(400);
    dz_ex.find('.dz_existed-item#'+file+' .dz_ex_undo').show(400);
}
function dz_undoDel(frm,col,file){
    var dz_ex=$('.dz_existed.'+frm+'[data-dz="'+col+'"]');
    dz_ex.find('.dz_existed-item#'+file+' .dz_ex_name').css('text-decoration','');
    dz_ex.find('.dz_existed-item#'+file).removeClass('deleted');
    dz_ex.find('.dz_existed-item#'+file+' .dz_ex_del').show(400);
    dz_ex.find('.dz_existed-item#'+file+' .dz_ex_undo').hide(400);
}
/* EXPORT EXCELL */
var tableToExcel = (function() {
  var uri = 'data:application/vnd.ms-excel;base64,'
    , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--><meta http-equiv="content-type" content="text/plain; charset=UTF-8"/></head><body><table>{table}</table></body></html>'
    , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
    , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
  return function(table, name) {
    if (!table.nodeType) table = document.getElementById(table)
    var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
    window.location.href = uri + base64(format(template, ctx))
  }
})()

function serialize_tb(tb){
    var res='{"'+$(tb).attr('id')+'":[';
    $(tb).find('tbody>tr').each(function(i){
        var str='{';
        $(this).find('td').each(function(i_d){
            $(this).find('input,select').each(function(i_e){
                if($(this).attr('type')=='checkbox'){
                    if($(this).is(':checked')) var val=value_as($(this).val());
                    else val='"NO"';
                    str+='"'+$(this).attr('name')+'":'+val+',';
                }else
                    str+='"'+$(this).attr('name')+'":'+value_as($(this).val())+',';
            })
        })
        if(str[str.length-1]==',') str=str.substr(0,str.length-1);
        str+='}';
        res+=(str+',');
    })
    if(res[res.length-1]==',') res=res.substr(0,res.length-1);
    res+=']}';
    return JSON.parse(res);
}
function value_as(val){
    if(typeof val=='string') return '"'+val+'"';
    else return val;
}
function block($trgt){
    App.blockUI({target: $trgt,animate: true});
}
function unblock($trgt){
    App.unblockUI($trgt);
}
function formatRepo(repo){
    if (repo.loading) return repo.text;
    var markup = "<div class='select2-result-repository'>" +
        "<div class='select2-result-repository__title'>" +repo.id +' '+ repo.nama_siswa + "</div></div>";
    return markup;
}
function select2remote($sel,fn,type='1'){
    if(fn==null) fn='getJsonSiswa';
    $($sel).select2({
      width: "off",
      //placeholder: "Select an option",
        ajax: {
            url: act_url+classname+'/'+fn,
            dataType: 'json',
            delay: 250,
            data: function(params) {
                return {
                    q: params.term, // search term
                    type:type,
                    page: params.page
                };
            },
            processResults: function(data, page) {
                return {
                    results: data.items
                };
            },
            cache: true
        },
        escapeMarkup: function(markup) {
            return markup;
        }, // let our custom formatter work
        minimumInputLength: 1,
        templateResult: formatRepo,
        templateSelection: formatRepoSelection
    });
}
function formatRepoSelection(repo) {
    if(typeof repo.nama_siswa=='undefined') return 'Masukkan NISS atau Nama Siswa'; else
    return repo.id+' '+repo.nama_siswa;
}
// Handles custom checkboxes & radios using jQuery Uniform plugin
var handleUniform_me = function() {
    if (!$().uniform) {
        return;
    }
    var test = $("input[type=checkbox]:not(.par-child, .uniform, .toggle, .md-check, .md-radiobtn, .make-switch, .icheck), input[type=radio]:not(.toggle, .md-check, .md-radiobtn, .star, .make-switch, .icheck)");
    if (test.size() > 0) {
        test.each(function() {
            if ($(this).parents(".checker").size() === 0) {
                $(this).show();
                $(this).uniform().addClass('uniform');
            }
        });
    }
};
$('body').on('click', '.md-checkbox > label, .md-radio > label', function() {
    var the = $(this);
    var el = $(this).children('span:first-child');
    el.addClass('inc');
    var newone = el.clone(true);  
    el.before(newone);
    $("." + el.attr("class") + ":last", the).remove();
});
function disabling(sel){
    $(sel).attr('disabled','disabled');
}
function enabling(sel){
    $(sel).removeAttr('disabled');
}
function isEnabled(sel){
    if($(sel).attr('disabled')==='disabled') return false; else return true;
}
function isChecked(sel){
    if($(sel).is(':checked')) return true; else return false;
}
function isFormComplete(sel){
    if(typeof sel=='string') $sel=$(sel); else
    if(typeof sel=='object') $sel=sel; else return false;
    
    var is=true;
    $sel.find('input,select').each(function(){
        if($(this).attr('required')=='required'){
            var tes=$(this).val();
            if(tes==null||tes.length==0){
                is=false;
                return false;   
            }   
        }
    })
    return is;
}
function init_date(format=null){
    if(format==null) format='dd-mm-yyyy';
    if (jQuery().datepicker) {
        $('.date-picker').datepicker({
            format: format,
            rtl: App.isRTL(),
            orientation: 'right',
            startView : 2,
            autoclose: true
        });
    }
}