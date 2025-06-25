<?php
class Details_Walker_Nav_Menu extends Walker_Nav_Menu
{
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $has_children = in_array('menu-item-has-children', (array) $item->classes);

        if ($has_children && $depth === 0) {
            $output .= "";
            $output .= "<a href='{$item->url}'>{$item->title}</a>";
        } else {
            $output .= "<li><a href='{$item->url}'>{$item->title}</a>";
        }
    }

    public function start_lvl(&$output, $depth = 0, $args = \null)
    {
        $output .= "\n<ul class=\"stack level-".$depth."\">\n";
    }

    public function end_el(&$output, $item, $depth = 0, $args = null)
    {
        $has_children = in_array('menu-item-has-children', (array) $item->classes);

        if ($has_children && $depth === 0) {
            $output .= "";
        } else {
            $output .= "</li>";
        }
    }
}
?>