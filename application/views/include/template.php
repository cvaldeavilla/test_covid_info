<?php
$head = $this->load->view('include/header', '', TRUE);
$body= $this->load->view($main_content, '', TRUE);
$footer = $this->load->view('include/footer', '', TRUE);
$search = array(
    '/\>[^\S ]+/s',
    '/[^\S ]+\</s',
    '/(\s)+/s', // shorten multiple whitespace sequences
    '#(?://)?<!\[CDATA\[(.*?)(?://)?\]\]>#s' //leave CDATA alone
);
$replace = array(
    '>',
    '<',
    '\\1',
    "//&lt;![CDATA[\n".'\1'."\n//]]>"
);
//$body = preg_replace($search, $replace, $nav.$body);
//$whole_body = $head.$body.$footer;
$whole_body = $head.$body.$footer;
$whole_body = trim($whole_body);

$this->output
    ->set_content_type('text/html', 'UTF-8')
    ->set_output($whole_body);

//$this->output->enable_profiler(TRUE);
