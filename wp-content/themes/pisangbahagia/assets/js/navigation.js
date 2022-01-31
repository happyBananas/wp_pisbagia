const btn_search_mb = document.querySelector('.btn-nav-search-top');
const modal_search_mb = document.querySelector('.modal-search');
const btn_close_modal_top = document.querySelector('.btn-close-modal-top');
const input_search_top = document.querySelector('.input-search-top');

btn_search_mb.addEventListener('click', ()=>{
    modal_search_mb.classList.add('show');
    btn_close_modal_top.classList.add('show');
    input_search_top.classList.add('show');
    document.body.style = 'overflow:hidden';
});

btn_close_modal_top.addEventListener('click', ()=>{
    modal_search_mb.classList.remove('show');
    btn_close_modal_top.classList.remove('show');
    input_search_top.classList.remove('show');
    document.body.style = 'overflow:auto';
});



