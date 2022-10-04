<?php

// $cfg = realpath('./config.json');
// $config = json_decode(file_get_contents($cfg), true);
// if (date('ymdHis') - $config['updatetime'] > 60*30) {
//     $path = realpath('../storage/textures');
//     $date = date('Y/m/d H:i:s');
//     chdir($path);
//     foreach (glob('*') as $v) {
//         if ($v == 'pngs') continue;
//         copy($path.DIRECTORY_SEPARATOR.$v, $path.DIRECTORY_SEPARATOR.'../../storage/textures/pngs/'.$v.'.png');
//     }
//     chdir('pngs');
//     shell_exec('git add .');
//     shell_exec("git commit -m \"Auto updation at $date\"");
//     shell_exec('git push github main');
//     $config['updatetime'] = (int)date('ymdHis');
//     file_put_contents($cfg, json_encode($config, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
// }

define('LARAVEL_START', microtime(true));

if (file_exists(__DIR__.'/../storage/framework/maintenance.php')) {
    require __DIR__.'/../storage/framework/maintenance.php';
}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Environment Check
|--------------------------------------------------------------------------
*/
if (!file_exists(__DIR__.'/../storage/install.lock')) {
    require __DIR__.'/../bootstrap/chkenv.php';
}

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);