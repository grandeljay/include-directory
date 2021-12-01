<?php

/**
 * include-directory.php
 *
 * @author Jay Trees <github.jay@grandel.anonaddy.me>
 */

namespace grandel;

class IncludeDirectory
{
    /**
     * Include Directory
     *
     * @param string $directoryToInclude The directory to include.
     *
     * @return void
     */
    public function __construct(string $directoryToInclude)
    {
        foreach (scandir($directoryToInclude) as $filename) {
            $filepath = str_replace('\\', '/', $directoryToInclude . '/' . $filename);

            if (is_file($filepath)) {
                require $filepath;
            }
        }
    }
}
