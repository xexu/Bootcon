<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('bootcon'))
{
    function bootcon($icon, $wrapper="<div></div>", $white=false)
    {
        $pos = strpos($wrapper, '>');
        $start = ($pos == -1) ? "" : substr($wrapper,0 , $pos + 1);
        $end = ($pos == -1) ? "" : substr($wrapper,$pos + 1);
        $white_class = $white ? " icon-white" : "";
        $icon_tag = '<i class="icon-'.$icon.$white_class.'"></i>';

        return $start.$icon_tag.$end;
    }   
}