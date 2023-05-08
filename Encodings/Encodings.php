<?php

/**
 * Encode ZIP file indo base64 + DM5 hash
 */
class Encodings
{

    static public function encode_base64_md5($path)
    {
        // Open file content
        $fp = fopen($path, "rb");
        $data = fread($fp, filesize($path));

        // Encode file
        $base64 = base64_encode($data);
        $md5 = md5($base64);

        // Output file
        $base64_output = 'Encodings/output/base64.txt';
        $md5_output = 'Encodings/output/md5.txt';

        file_put_contents($base64_output, $base64);
        file_put_contents($md5_output, $md5);
    }
}