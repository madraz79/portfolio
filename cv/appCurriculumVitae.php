<?php

use mikehaertl\wkhtmlto\Pdf;

include PATHROOT . '/vendor/autoload.php';
$pdf = new Pdf([
    'no-outline',         // Make Chrome not complain
    'margin-top' => 0,
    'margin-right' => 0,
    'margin-bottom' => 0,
    'margin-left' => 0
]);


ob_start();
include PATHROOT . DS . "cv/curriculumVitae.php";
$content = ob_get_clean();

if (false) {
    debug($content, __FILE__, __LINE__);
    exit();
} else {
    $pdf->addPage($content);

// ... or send to client for inline display
    if (!$pdf->send()) {
        $error = $pdf->getError();
        // ... handle error here
    }
}

