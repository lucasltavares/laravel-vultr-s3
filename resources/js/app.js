require('./bootstrap');

document.getElementById('fileImage').addEventListener('change',function(){
    if( this.files.length > 0 ){
        document.getElementById('uploadBtn').removeAttribute('disabled');
    }
});