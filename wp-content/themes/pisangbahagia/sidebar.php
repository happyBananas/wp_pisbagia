
<?php if( is_single() ){
    $style_sticky = ' sticky-sidebar ';
}?>

<div class="side-content <?=$style_sticky?> ">

    <?php dynamic_sidebar('sidebar-1');?>

</div>