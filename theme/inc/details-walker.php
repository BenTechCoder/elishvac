<?php
class Details_Walker_Nav_Menu extends Walker_Nav_Menu
{
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $sub_menu_svg = '<svg width="800px" class="icon has_sub_menu_icon" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<g id="Arrow / Caret_Down_MD">
<path id="Vector" d="M16 10L12 14L8 10" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</g>
</svg>';
        $has_children = in_array('menu-item-has-children', (array) $item->classes);

        if ($has_children && $depth === 0) {
            $output .= "<li class='has_sub_menu'><div class='flex items-center'><a href='{$item->url}'>{$item->title}</a>";
            $output .= $sub_menu_svg . "</div>";
        } else {
            $output .= "<li><a href='{$item->url}'>{$item->title}</a>";
        }
    }

    public function start_lvl(&$output, $depth = 0, $args = \null)
    {
        $output .= "\n<ul class=\"sub_menu cluster level-" . $depth . "\">\n";
    }

    public function end_el(&$output, $item, $depth = 0, $args = null)
    {
        $has_children = in_array('menu-item-has-children', (array) $item->classes);

        if ($has_children && $depth === 0) {
            $output .= "</li>";
        } else {
            $output .= "</li>";
        }
    }
}
