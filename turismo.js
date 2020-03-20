(()=>{


	var imagenesDestacadas = document.querySelectorAll('section .cajaGaleria .cajaItems .item .cajaImagen img');
  var imagenesDeInteres = document.querySelectorAll('section .cajaExtra .cajaItems .item .cajaImagen img');
    //Falta corregir-Repeticion de codigo
    //var totalImagenes = imagenesDestacadas.concat(imagenesDeInteres);

    var imagenUnica = document.querySelector('section .cajaImagenUnica .imagenUnica img');
    
    var pantallaNegra= document.querySelector('section .cajaImagenUnica');

    //Funcionalidad para mostrar imagen de forma unica
    
    imagenesDestacadas.forEach((imagen)=>{
        imagen.addEventListener('click',()=>{
              var src = imagen.getAttribute('src');
              imagenUnica.src=src;
              imagenUnica.parentNode.parentNode.classList.add('imagenUnicaActivada');

     
    })
    });

     imagenesDeInteres.forEach((imagen)=>{
        imagen.addEventListener('click',()=>{
              var src = imagen.getAttribute('src');
              imagenUnica.src=src;
              imagenUnica.parentNode.parentNode.classList.add('imagenUnicaActivada');
     
    })
    });

    //Funcionalidad para cerrar imagen de forma unica
    
    pantallaNegra.addEventListener('click',(evento)=>{
              evento.target.id!='imagen'? imagenUnica.parentNode.parentNode.classList.remove('imagenUnicaActivada') : '';
    	     
    });


    
})();