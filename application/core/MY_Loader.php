<?php

/**
 * /application/core/MY_Loader.php
 *
 */
class My_loader extends CI_Loader {
    public function template($template_name, $vars = array(), $return = FALSE)
    {
        

        $content  = $this->view('layout/head', $vars, $return);
		$content .= $this->view('layout/navbar', $vars, $return);
		$content .= $this->view('layout/sidebar', $vars, $return);
        $content .= $this->view($template_name, $vars, $return);
		$content .= $this->view('layout/footer', $vars, $return);

        if ($return)
        {
            return $content;
        }
    }
}