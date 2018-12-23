<?php


namespace App\Config;

use App\Config\ConfigApp;
use App\Config\Params\DeployerParam;

class DeployerConfig extends ConfigApp {

    protected $config = array(
        DeployerParam::PROJECT_PATH => '/path/to/project',
        DeployerParam::FILES_PROVIDERS => [

        ]
    );

}
