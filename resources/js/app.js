import Dropzone from "dropzone";

Dropzone.autoDiscover = false;

const dropzone = new Dropzone('#dropzone',{
    dictDefaultMessage:'da clic para subir una fotografia',
    acceptedFiles:'.png, .jpg, .jpeg, .gif',
    addRemoveLinks:true,
    dictRemoveFile: 'Borrar fotografia',
    maxFiles:1,
    uploadMultiple:false,

    init:function(){
        if(document.querySelector('[name="imagen"]').value.trim()){
            const imagenPublicada = {};
            imagenPublicada.size = 1234;
            imagenPublicada.name = document.querySelector(['name="image"'].value);

            this.options.addedfiles.call(this,imagenPublicada);
            this.options.thumbnail.call(this,imagenPublicada,'public/uploads/${imagenPublicada.name}');

            imagenPublicada.previewElement.classList.add(
                "dz-success",
                "dz-complete"
            );
        }
    }
});

dropzone.on('success', function(file,response){
    document.querySelector('[name="imagen"]').value = response.imagen;
});