<?php
namespace App\Services;

use App\Contracts\Video\VideoHosting;

class FakeService {

    protected $service;
    public function __construct(VideoHosting $service){

        $this->service = $service;
    }

    public function process(){

        return $this->service->showString();
    }
}