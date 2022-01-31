addEventListener('load', function(){
    document.querySelector('.modal-loading').classList.remove('show');   
    document.body.removeAttribute('style');

    //delete skeleton loader
    Array.from(document.querySelectorAll('.anim-loader-skeleton')).forEach( function(e, n){
        e.classList.remove('anim-loader-skeleton');
    });
});