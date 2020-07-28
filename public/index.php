<?php
setlocale(LC_ALL, 'fr_FR.UTF-8', 'fr_FR@euro', 'fr_FR', 'fra', 'french');
date_default_timezone_set('Europe/paris');
function debug($value, $file, $line)
{
    echo $file . " " . $line . "<br><pre style='background:black;color:gray;padding:5px 10px'>";
    var_dump($value);
    echo "</pre><br>";
}

if (false && $_SERVER['REMOTE_ADDR'] !== "90.30.21.75") {
    exit("EN MAINTENANCE");
}

const DS = "/";
const PATHROOT = __DIR__ . DS . "..";

if (file_exists(PATHROOT . DS . "data.json")) {
    $data = json_decode(file_get_contents(PATHROOT . DS . "data.json"));
    try {
        $age = (new DateTime($data->identity->birthday))->diff(new DateTime())->format('%Y');
    } catch (Exception $e) {
        debug($e->getMessage(), __FILE__, __LINE__);
    }
}

if (!empty($_GET) and isset($_GET['url']) and !empty($_GET['url'])) {
    if ($_GET['url'] === 'curriculumVitae-madraz.pdf') {
        $path = PATHROOT . DS . 'cv/appCurriculumVitae.php';
        if (file_exists($path)) {
            include $path;
        } else {
            header("HTTP/2.0 404 Not Found");
        }
        exit();
    } elseif (
        $_GET['url'] === 'php/contact_form.php' and
        $_SERVER["REQUEST_METHOD"] === "POST" and !empty($_POST)
    ) {
        $path = PATHROOT . '/php/contact_form.php';
        if (file_exists($path)) {
            include $path;
        } else {
            header("HTTP/2.0 404 Not Found");
        }
        exit();
    }
}
$indexPath = PATHROOT . DS . "index.php";
if (file_exists($indexPath)) {
    /** @include ../index.php */
    require $indexPath;
} else {
    header("HTTP/2.0 404 Not Found");
}