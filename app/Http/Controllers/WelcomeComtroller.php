<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\FakeService;
use App\Services\Video\Youtube;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use App\Contracts\Video\VideoHosting;

class WelcomeComtroller extends Controller
{
    public function index(VideoHosting $service){


        return view('welcome', [
            'service' => $service,
            'fakeService' => App::make(FakeService::class)
        ]);
        
    
    }
}
