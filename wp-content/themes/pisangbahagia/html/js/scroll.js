const btn_scroll_top = document.querySelector('.btn-sroll-top');
const i_scroll_top = document.querySelector('.btn-sroll-top i');

window.addEventListener('scroll', function(ev){
    let pY = window.pageYOffset;
    // let sH = document.body.scrollHeight;
    let cH = document.body.clientHeight / 2;

    if(pY > cH){
        btn_scroll_top.classList.add('show');   
    }else{
        btn_scroll_top.classList.remove('show');
    }
}); 

btn_scroll_top.addEventListener('click', function(){
    scroll({
        top: 0,
        behavior: "smooth"
    });
    setTimeout(removeBtnScrollTop, 500);
});


function removeBtnScrollTop(){
    btn_scroll_top.classList.remove('show');
}

function smoothScroll(e){
    e.preventDefault();
    const el_sc = document.querySelector(e.target.getAttribute('href'));
    if(el_sc){
        el_sc.scrollIntoView({
            behavior: 'smooth'
        });
    }else{
        console.log('(_ERROR_SCROLL_) : href scroll not found ' + e.target.getAttribute('href'));
    }
}
