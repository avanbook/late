function js_metodo(metodo)
{
    var total_estadia = $('#total_estadia').text();
    var senia=$('#senia').val();
    var total_senia;
    
    if(metodo=='anticipado')
    {
        $('#total_pagar').text(total_estadia);
        $('#metod_div').show();
        $('#garantia_div').hide();
    }
        
    if(metodo=='senia')
    {
        
        total_senia= (senia*total_estadia/100);
        total_senia=total_senia.toFixed(2);
        $('#total_pagar').text(total_senia);    
        $('#metod_div').show();
        $('#garantia_div').hide();
        
    }
    
    if(metodo=='garantia')
    {
        $('#garantia_div').show();
        $('#metod_div').hide();
    }
}

function aplicar_descuento()
{
    var descuento = $('#descuento').val();
    var total = $('#total').val();
    
    des=descuento*total/100;
    des_total=total-des;
    $('#total_estadia').text(des_total);
    
    
}
