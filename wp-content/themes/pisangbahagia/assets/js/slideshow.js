const arr_left = document.querySelector('#arrow-left');
const arr_right = document.querySelector('#arrow-right');   
const bann_wr_lg = document.querySelector('#banner-wrap-lg');
const bwl_child = bann_wr_lg.children;
var curX = 0;
var wdEl =  bann_wr_lg.getBoundingClientRect().width;

//slideshow arrow left dan right
arr_left.addEventListener('click', arrowLeft);
arr_right.addEventListener('click', arrowRight);
        
function arrowLeft(){     
    let totEl = bwl_child.length - 2;            
    let maxMv = -1 * totEl * wdEl; 
    let x = curX == 0 ? curX - (maxMv*-1) : curX + wdEl;
    curX = x;
    for(let i=1; i<bwl_child.length; i++){
        bwl_child[i].style.transform="translateX("+ x +"px)";
    }
    // console.log('left: ['+curX+']');
}

setInterval(arrowRight, 5000);

function arrowRight(){   
    let totEl = bwl_child.length - 2;            
    let maxMv = -1 * totEl * wdEl;
    let x = curX == maxMv ? curX + (maxMv*-1) : curX - wdEl;
    curX = x;                       
    for(let i=1; i<bwl_child.length; i++){
        bwl_child[i].style.transform = "translateX("+ x +"px)";
    }
            
    // console.log("right["+ curX +"]");
    // console.log("client width : " + bann_wr_lg.clientWidth);
    // console.log("getboundin   : "  + bann_wr_lg.getBoundingClientRect().width);
}