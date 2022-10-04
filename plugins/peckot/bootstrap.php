<?php

use Blessing\Filter;
use App\Services\Hook;
use App\Services\Plugin;
use Illuminate\Contracts\Events\Dispatcher;

return function (Dispatcher $events, Plugin $plugin) {
    
        Hook::addStyleFileToPage($plugin->assets('css/coloring.css'));
        Hook::addStyleFileToPage($plugin->assets('css/animate.css'));
        Hook::addStyleFileToPage($plugin->assets('css/animation.css'));
        Hook::addStyleFileToPage($plugin->assets('css/font-awesome.css'));
        Hook::addStyleFileToPage($plugin->assets('css/fontsload.css'));
        Hook::addStyleFileToPage($plugin->assets('css/home.css'));
        Hook::addStyleFileToPage($plugin->assets('css/jpreloader.css'));
        // Hook::addStyleFileToPage($plugin->assets('css/nEwinDex.css'));
        Hook::addStyleFileToPage($plugin->assets('css/scheme-01.css'));
        Hook::addScriptFileToPage($plugin->assets('js/app.js'));
        Hook::addScriptFileToPage($plugin->assets('js/designesia.min.js'));
        Hook::addScriptFileToPage($plugin->assets('js/jpreLoader.min.js'));
        Hook::addScriptFileToPage($plugin->assets('js/jquery.plugin.js'));
        
};
