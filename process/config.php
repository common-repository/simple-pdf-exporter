<?php

/* --------------------------------------------------------------------------------
*
* CUSTOM VARS & SETUP
*
-------------------------------------------------------------------------------- */

global  $pdf_export_post_type,
	    $pdf_export_force,
	    $pdf_posts_per_page,
	    $pdf_export_post_id,
	    $pdf_export_final_pdf,
		$pdf_export_css_file;

// CSS
if(file_exists(SIMPLE_PDF_EXPORTER_CSS_FILE)) {
	$pdf_export_css_file = SIMPLE_PDF_EXPORTER_CSS_FILE;
} else {
	$pdf_export_css_file = SIMPLE_PDF_EXPORTER_PLUGIN_URL.'assets/pdf_export.css';
}

// LAYOUT
if(file_exists(SIMPLE_PDF_EXPORTER_LAYOUT_FILE)) {
	require_once(SIMPLE_PDF_EXPORTER_LAYOUT_FILE);
} else {
	require_once(SIMPLE_PDF_EXPORTER_PLUGIN.'assets/pdf_layout.php');
}

/* --------------------------------------------------------------------------------
*
* INCLUDES
*
-------------------------------------------------------------------------------- */

// DOMPDF
require_once SIMPLE_PDF_EXPORTER_PLUGIN.'libs/dompdf/autoload.inc.php';
use Dompdf\Dompdf;

// FPDF
//require_once(SIMPLE_PDF_EXPORTER_PLUGIN.'libs/fpdf/fpdf.php');

//FPDI
//require_once(SIMPLE_PDF_EXPORTER_PLUGIN.'libs/fpdi/fpdi.php');
require_once(SIMPLE_PDF_EXPORTER_PLUGIN.'libs/fpdi/src/autoload.php');

/*require_once(SIMPLE_PDF_EXPORTER_PLUGIN.'libs/fpdi_addon/annots.php');
if(SIMPLE_PDF_EXPORTER_PAGINATION && $pdf_export_post_id == '' && $pdf_posts_per_page > 1) {
	require_once(SIMPLE_PDF_EXPORTER_PLUGIN.'libs/pageno/pdfnumber.php');
	require_once(SIMPLE_PDF_EXPORTER_PLUGIN.'libs/pageno/pageno.php');
}*/

// PDF MERGER
require_once(SIMPLE_PDF_EXPORTER_PLUGIN.'libs/pdfmerger/pdfmerger.php');
