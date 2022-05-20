<?php
require_once('forge_fdf.php');  

function hexToStr($hex){
	$string='';
	for ($i=0; $i < strlen($hex)-1; $i+=2){
		$string .= chr(hexdec($hex[$i].$hex[$i+1]));
	}
	return $string;
}

$uniqueKey = $_GET['uniqueKey'];
$uniqueKey = preg_replace("/[^A-Za-z0-9 ]/", '', $uniqueKey);

if($_GET['pdfID'] == "1")
{
	$pdf_form_url = "VBA-27-2008-ARE.pdf";
}
else if($_GET['pdfID'] == "2")
{
	$pdf_form_url = "VA40-1330.pdf";
}
else if($_GET['pdfID'] == "3")
{
	$pdf_form_url = "21P-530.pdf";
}
else if($_GET['pdfID'] == "4")
{
	$pdf_form_url = "40-0247.pdf";
}
else if($_GET['pdfID'] == "5")
{
	$pdf_form_url = "40-1330M.pdf";
}
else if($_GET['pdfID'] == "6")
{
	$pdf_form_url = "SF-180.pdf";
}
else if($_GET['pdfID'] == "7")
{
	$pdf_form_url = "29-4125.pdf";
}

$fdf_data_names = array();
$fdf_data_strings = array();

foreach($_POST as $key => $value)
{
	$fdf_data_strings[hexToStr($key)] = $value;
}

$fields_hidden = array();
$fields_readonly = array();

$fdf = forge_fdf($pdf_form_url, $fdf_data_strings, $fdf_data_names, $fields_hidden, $fields_readonly);

$fdf_tmp_file = tempnam('tmp/', 'fdf');
$fdf_file = fopen($fdf_tmp_file, 'w');
if($fdf_file)
{
	fwrite($fdf_file, $fdf);
	fclose($fdf_file);

	passthru('pdftk files/' . $pdf_form_url . ' fill_form ' . $fdf_tmp_file . ' output build/' . $uniqueKey . '-' . $pdf_form_url . ' flatten');
	unlink($fdf_tmp_file);
}
?>
