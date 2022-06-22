<?php

/**
 * @throws Exception
 */
function upload_single_file($file, $allow_type, $path, $allow_format = [], $max_size = 2000000): void {
    if (!is_array($file) || !isset($file['error'])) {
        throw new Exception('file illegal');
    }
    if (!is_dir($path)) {
        throw new Exception('path illegal');
    }
    switch ($file['error']) {
        case 1:
        case 2:
            throw new Exception('file over size');
        case 3:
            throw new Exception('file damaged');
        case 4:
            throw new Exception('file not selected');
        case 6:
        case 7:
            throw new Exception('server error');
        default:
            break;
    }
    if(!in_array($file['type'], $allow_type)){
        throw new Exception('type not allowed : '.$file['type']);
    }

}

try {
    upload_single_file();
} catch (Exception $e) {
    echo $e;
}