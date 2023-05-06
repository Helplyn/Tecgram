import Dropzone from "dropzone";

Dropzone.auroDiscover = false;

const dropzone = new Dropzone('#dropzone',{
    dictDefaultMessage:'Da click aqui',
    acceptedFiels:'.png, .jpg, .jpeg, .img',
    addRemoveLinks:true,
    dictRemoveFile:'borrar fotografia',
    maxFiles:1,
    uploadMultiple:false,
});

dropzone.on('success',function(file,response){
    console.log(response);
});
