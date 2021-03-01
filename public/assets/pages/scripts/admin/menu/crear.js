$(function (){
      Biblioteca.validacionGeneral('form-general');
      $('#inputIcono').on('blur', function () {
         $('#mostrar-icono').removeClass().addClass('fa fa-fw ' + $(this).val());
      });
});