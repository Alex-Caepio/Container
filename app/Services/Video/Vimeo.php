<?php
namespace App\Services\Video;

use App\Contracts\Video\VideoHosting;

class Vimeo implements VideoHosting{

    protected $random;
    public function __construct(){
        $this->random = 'Vimeo'.rand(0, 10000);
    }

    public function showMeRandomString(){
        return $this->random;
    }
    public function getVideoWidth() {}
    public function getVideoHeight() {}
    public function getVideoPreviewUrl() {}

    public function showString() {
        $this->showMeRandomString();
    }
}