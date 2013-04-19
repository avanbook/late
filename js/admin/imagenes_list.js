function guardar_des(id_imagen,id_imagen_tipo)
{
    base_url = $('#base_url').val();   
    $.blockUI({
        message: '<img src="'+base_url+'img/ajax-loader.gif" />'
    });
        
   des = $('#des_'+id_imagen+"_"+id_imagen_tipo).val(); 
        
    datos={
        im_id_imagen:id_imagen,
        im_descripcion:des,
        im_id_imagen_tipo:id_imagen_tipo
    }
    //AJAX
    $.ajax({
        url: base_url+"admin/imagenes/ajax_descripcion/",
        type: 'POST',
        data: datos,
        dataType: "json",
        success: function(msg) {
            
            if(msg.result == 'ok'){
                $.unblockUI();    
            }
            else
            {
                $.unblockUI(); 
                alert('error'); 
            }
            
            
                
        }
    })
}


