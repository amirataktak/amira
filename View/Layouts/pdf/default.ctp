<?php
$action = $this->params['action'];

require_once(APP . 'Vendor' . DS . 'dompdf' . DS . 'dompdf_config.inc.php'); 
spl_autoload_register('DOMPDF_autoload'); 
$dompdf = new DOMPDF(); 

if($action=="etat") $dompdf->set_paper("a4", "landscape");
if($action=="view") $dompdf->set_paper = 'A4';
$dompdf->load_html(utf8_decode($content_for_layout), Configure::read('App.encoding'));
$dompdf->render();
echo $dompdf->output();