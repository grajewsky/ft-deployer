<?php

namespace App\Http\Controllers;

use App\Services\Deployer;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    /**
     * @var App\Services\Deployer
     */
    private $deployer  = null;

    public function __construct(Deployer $deployer) {
        $this->deployer = $deployer;
    }
    public function index(Request $req) {
        return $this->deployer->loadFiles();
    }
}
