(function(){

   var regalo=document.getElementById('regalo');

"use strict";



document.addEventListener('DOMContentLoaded', function(){

    //console.log("listo"); 

    // campos datos usuarios 

   var nombre=document.getElementById('nombre');
   var apellido=document.getElementById('apellido');
   var email=document.getElementById('email');
    //campos pases 
      
   var pase_dia=document.getElementById('pase_dia')
   var pase_dosdias=document.getElementById('pase_dosdias')
   var pase_completo=document.getElementById('pase_completo')
      
     //botones y divs

   var calcular =document.getElementById('calcular');
   var errorDiv =document.getElementById('error');
   var botonRegistro=document.getElementById('btnRegistro');
   var resultado=document.getElementById('lista_productos');

   calcular.addEventListener('click', calcularMontos);

   function calcularMontos(e){
      e.preventDefault();
   if(regalo.value===""){
      alert("Debes elegir un regalo");
      regalo.focus();
   }else{
      var boletosDia=pase_dia.value,
          boleto2Dias=pase_dosdias.value,
          boletoCompleto=pase_completo.value;

          var totalPagar = (boletosDia * 30) + (boleto2Dias * 45) + (boletoCompleto * 50);
 console.log( totalPagar);
   }

}





 }); //DOM content loaded
})();