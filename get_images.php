<?php
$folder = $_GET['folder'] ?? '';
$allowed_folders = ['almari', 'cot', 'chair', 'table', 'ladder', 'rack', 'dressing', 'sofa'];

if (!in_array($folder, $allowed_folders)) {
    echo json_encode([]);
    exit;
}

$dirPath = __DIR__ . "/$folder/";
$images = [];

if (is_dir($dirPath)) {
    $files = scandir($dirPath);
    foreach ($files as $file) {
        if (in_array(strtolower(pathinfo($file, PATHINFO_EXTENSION)), ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
            $images[] = $file;
        }
    }
}

echo json_encode($images);
?>
