<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Lubusin\Decomposer\Decomposer;

class IndexController extends Controller
{
    public function index()
    {
        $composerArray = Decomposer::getComposerArray();

        $packages = Decomposer::getPackagesAndDependencies($composerArray['require']);

        $version = Decomposer::getDecomposerVersion($composerArray, $packages);

        $laravelEnv = Decomposer::getLaravelEnv($version);

        $serverEnv = Decomposer::getServerEnv();

        $serverExtras = Decomposer::getServerExtras();

        $laravelExtras = Decomposer::getLaravelExtras();

        $extraStats = Decomposer::getExtraStats();


        return view('admin.index',compact('packages', 'laravelEnv', 'serverEnv', 'extraStats', 'serverExtras', 'laravelExtras'));
    }
}
