<?php

namespace App\Deployer\FilesProvider;

use App\Deployer\FilesProvider\FilesProvider;


class GitFilesProvider implements FilesProvider {
    private $basePath = null;

    public function __construct() {

    }
    public function setBasePath(string $basepath) {
        if(\file_exists($basepath)) {
            $this->basePath = $basepath;
        }
    }
    /**
     * @return Array<string>
     */
    public function getListFiles(): array {

    }
}
