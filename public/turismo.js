


    var imagenesDestacadas = document.querySelectorAll('featured__img');
    var imagenesDeInteres = document.querySelectorAll('section .cajaExtra .cajaItems .item .cajaImagen img');
    var botonDerecho = document.getElementById('botonDerecho');
    var botonIzquierdo = document.getElementById('botonIzquierda'); 
    var longitudGaleria = document.querySelectorAll('section .cajaSlider ul li .cajaImagen');
    console.log(longitudGaleria);
    var imagenUnica = document.querySelector('section .cajaImagenUnica .imagenUnica img');
    var pantallaNegra= document.querySelector('section .cajaImagenUnica');
    var galeria = document.querySelectorAll('section .cajaSlider ul li .cajaImagen img');


    //Funcionalidad para mostrar imagen de forma unica

    mostrarImagenes(imagenesDestacadas);
    mostrarImagenes(imagenesDeInteres);
    mostrarImagenes(galeria);


    function mostrarImagenes(imagenes){
        imagenes.forEach((imagen)=>{
          imagen.addEventListener('click',()=>{
            var src = imagen.getAttribute('src');
            imagenUnica.src=src;
            imagenUnica.parentNode.parentNode.classList.add('imagenUnicaActivada');

        });
        });
        
    };

    //Funcionalidad para cerrar imagen(pantalla negra)

     cerrarImagen(pantallaNegra);

    function cerrarImagen(elemento){
      elemento.addEventListener('click',(evento)=>{
              evento.target.id!='imagen'? imagenUnica.parentNode.parentNode.classList.remove('imagenUnicaActivada') : '';
           
    });
    };

 

  
    



   