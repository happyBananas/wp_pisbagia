const toogle = document.querySelector('.toogle.view-mode');
const toogle_i = document.querySelector('.toogle.view-mode span i');
const toogle_btn = document.querySelector('.toogle.view-mode span');

const img = document.getElementsByTagName('img');
const footer = document.getElementsByTagName('footer');
const ft_banner_lg = document.querySelectorAll('.banner-ctn.lg p');
const ft_banner_lg_sm = document.querySelectorAll('.banner-ctn.lg small');
const ft_banner_sm = document.querySelectorAll('.banner-ctn.sm');
const modal_search = document.querySelector('.modal-search');
const modal_loading = document.querySelector('.modal-loading');

if(localStorage.getItem('view_mode')==='dark'){
        toogle_btn.classList.toggle('dark');
        document.documentElement.classList.toggle('mode-dark');
        modal_search.classList.toggle('mode-bright');
        modal_loading.classList.toggle('mode-bright');

        Array.from(img).forEach(e => {
            e.classList.toggle('mode-bright');
        });

        Array.from(footer).forEach(e => {
            e.classList.toggle('mode-bright');
        });

        Array.from(ft_banner_lg).forEach(e => {
            e.classList.toggle('mode-bright');
        });

        Array.from(ft_banner_lg_sm).forEach(e => {
            e.classList.toggle('mode-bright');
        });

        Array.from(ft_banner_sm).forEach(e => {
            e.classList.toggle('mode-bright');
        });
}

document.addEventListener('click', function(ev){
    if(ev.target == toogle || ev.target == toogle_i || ev.target == toogle_btn){
        toogle_btn.classList.toggle('dark');
        document.documentElement.classList.toggle('mode-dark');
        modal_search.classList.toggle('mode-bright');
        modal_loading.classList.toggle('mode-bright');

        Array.from(img).forEach(e => {
            e.classList.toggle('mode-bright');
        });

        Array.from(footer).forEach(e => {
            e.classList.toggle('mode-bright');
        });

        Array.from(ft_banner_lg).forEach(e => {
            e.classList.toggle('mode-bright');
        });

        Array.from(ft_banner_lg_sm).forEach(e => {
            e.classList.toggle('mode-bright');
        });

        Array.from(ft_banner_sm).forEach(e => {
            e.classList.toggle('mode-bright');
        });

        if(Array.from(document.documentElement.classList).includes('mode-dark')){
            localStorage.setItem('view_mode', 'dark');
        }else{
            localStorage.setItem('view_mode', 'bright');
        }
    }
    // console.log(localStorage.getItem('view_mode'));
});