
(()=>{

    var imagenesDestacadas = document.querySelectorAll('section .cajaGaleria .cajaItems .item .cajaImagen img');
    var imagenesDeInteres = document.querySelectorAll('section .cajaExtra .cajaItems .item .cajaImagen img');
    var desplazamientoDerecha = document.querySelector('#botonDerecho');
    var desplazamientoIzquierda = document.querySelector('#botonIzquierda'); 
    var longitudGaleria = document.querySelectorAll('section .cajaSlider ul li').length;
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

    //Funcionalidades para la galeria de fotos(Slider)

    $('section .cajaSlider ul li').hide();
    $('section .cajaSlider ul li:first').show();

    //Siempre arranca en la priemra posicion
    var posImagen = 1;

    botonDerecho.addEventListener('click',imagenPosterior);
    botonIzquierdo.addEventListener('click',imagenAnterior);
    setInterval(imagenPosterior,9000);

    function imagenPosterior(){
      if(posImagen >= longitudGaleria){
        posImagen = 1;
        $('section .cajaSlider ul li').hide();
        $('section .cajaSlider ul li:nth-child('+posImagen+')').fadeIn();
      }else{
        posImagen++;
        $('section .cajaSlider ul li').hide();
        $('section .cajaSlider ul li:nth-child('+posImagen+')').fadeIn();
    }};
         
    function imagenAnterior(){
      if(posImagen <= 1){
        posImagen = 3;
        $('section .cajaSlider ul li').hide();
        $('section .cajaSlider ul li:nth-child('+posImagen+')').fadeIn();
      }else{
        posImagen--;
        $('section .cajaSlider ul li').hide();
        $('section .cajaSlider ul li:nth-child('+posImagen+')').fadeIn();
    }};

    
})();


