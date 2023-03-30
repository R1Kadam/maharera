<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');  
 
require 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
use Dompdf\Options;

class Pdf extends Dompdf    
{
public function __construct()
    {
    parent::__construct();      
    $dompdf = new Dompdf();
    $options = new Options(); 
    }
}
?>