<?php

namespace App\Deployer\FilesProvider;

interface FilesProvider {

    public function setBasePath(string $basepath);
    /**
     * @return Array<string>
     */
    public function getListFiles(): array;
}
