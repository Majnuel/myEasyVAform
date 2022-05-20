<?php
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

$uniqueKey = $_GET['uniqueKey'];
$uniqueKey = preg_replace("/[^A-Za-z0-9 ]/", '', $uniqueKey);

header('Content-disposition: attachment; filename=' . $pdf_form_url);
header('Content-type: application/pdf');
readfile('build/' . $uniqueKey . '-' . $pdf_form_url);
?>
