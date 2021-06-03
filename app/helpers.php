<?php
function setActive($routeName){
    return request()->routeIs($routeName)?'active':'';
}
// actualizar composer
// composer dump-autoload