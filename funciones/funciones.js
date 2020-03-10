


function agregarProducto(nom_prod, unidx_prod, fecha_ven_prod, prec_prod){
	cadena="nom_prod="+ nombre +
	"&unidx_prod="+ unidades +  
	"&fecha_ven_prod="+ vencimiento +
	"&prec_prod="+ precio;


$.ajax({
	type:"POST",
	url:"../peticiones/agregarProducto.php",
	date:cadena,
	success:function(r){
		if(r==1){
			success("agregado con exito");
		}
	}
});

}