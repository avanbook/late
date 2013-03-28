function llenar()
{
    var base_url = $('#base_url').val();
    var datos={};
    
    document.getElementById('ID_SubtipoEmpresa').options.length = 0;
    document.getElementById('ID_SubtipoEmpresa').options[0] = new Option("Seleccione...", "0", false, false)
    
    datos={
        ID_TipoEmpresa : $('#ID_TipoEmpresa').val()
    }
    $.ajax({
        url: base_url+"admin/ajax/subtipoempresas_list/",
        type: 'POST',
        data: datos,
        dataType: "json",
        success: function(msg) {
            $.each(msg, function(k,v){
                nombre = v.SubtipoEmpresa;
                valor = v.ID_SubtipoEmpresa;
                document.getElementById('ID_SubtipoEmpresa').options[k+1] = new Option(nombre, valor, false)
            });
                
            
        }
    })
        
        
        
        
        
}//Fin Funcion