import Dropzone from "dropzone";

Dropzone.auroDiscover = false;

const dropzone = new Dropzone('#dropzone'.{
    dictDefaultMessage:'Da click aqui',
    acceptedFiels:'.png, .jpg, .jpeg, .img',
    addRemoveFile:'borrar fotografia',
    maxFiles:1,
    
})
