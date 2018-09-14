<?php
function isPointOnGraph($x, $y, $r) {
    if (// I quadrant
        ($x >= 0 && $y >= 0 && $x*$x + $y*$y <= $r*$r/4) || //x^2 + y^2 = (r/2)^2
        // II quadrant
        ($x <= 0 && $x >= $r && $y <= r / 2 && $y >= 0) ||
        // III quadrant
        ($x <= 0 && $y <= 0 && $y >= (-2) * x - $r) // y = kx + b; y = -2x - r
    ) return true;
    return false;
}

?>