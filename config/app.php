<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    'providers' => [
        \Genesis\Auth\AuthServiceProvider::class,
        \Genesis\Console\ConsoleServiceProvider::class,
        \Illuminate\Database\DatabaseServiceProvider::class,
        \Genesis\Events\EventServiceProvider::class,
        \Illuminate\Filesystem\FilesystemServiceProvider::class,
        \Genesis\Http\HttpServiceProvider::class,
        \Genesis\Mail\MailServiceProvider::class,
        \Genesis\Routing\RoutingServiceProvider::class,
        \Genesis\View\BladeServiceProvider::class,
        \Genesis\View\ViewServiceProvider::class,
        \Genesis\WordPress\WordPressServiceProvider::class,
        \Illuminate\Translation\TranslationServiceProvider::class,

        #\Illuminate\Auth\AuthServiceProvider::class,
        #\Illuminate\Broadcasting\BroadcastServiceProvider::class,
        #\Illuminate\Bus\BusServiceProvider::class,
        #\Illuminate\Cache\CacheServiceProvider::class,
        #\Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        #\Illuminate\Cookie\CookieServiceProvider::class,
        #\Illuminate\Encryption\EncryptionServiceProvider::class,
        #\Illuminate\Hashing\HashServiceProvider::class,
        #\Illuminate\Mail\MailServiceProvider::class,
        #\Illuminate\Notifications\NotificationServiceProvider::class,
        #\Illuminate\Pagination\PaginationServiceProvider::class,
        #\Illuminate\Pipeline\PipelineServiceProvider::class,
        #\Illuminate\Queue\QueueServiceProvider::class,
        #\Illuminate\Redis\RedisServiceProvider::class,
        #\Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
        #\Illuminate\Session\SessionServiceProvider::class,
        #\Illuminate\Translation\TranslationServiceProvider::class,
        #\Illuminate\Validation\ValidationServiceProvider::class,


        \App\Providers\EventServiceProvider::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */

    'aliases' => [
        'App'      => \Illuminate\Support\Facades\App::class,
        'Arr'      => \Illuminate\Support\Arr::class,
        'Ajax'     => \Genesis\Support\Facades\Ajax::class,
        'Auth'     => \Genesis\Support\Facades\Auth::class,
        'Blade'    => \Illuminate\Support\Facades\Blade::class,
        'Config'   => \Illuminate\Support\Facades\Config::class,
        'Console'  => \Genesis\Support\Facades\Console::class,
        'DB'       => \Illuminate\Support\Facades\DB::class,
        'Eloquent' => \Illuminate\Database\Eloquent\Model::class,
        'Event'    => \Genesis\Support\Facades\Event::class,
        'File'     => \Illuminate\Support\Facades\File::class,
        'Mail'     => \Genesis\Support\Facades\Mail::class,
        'Request'  => \Genesis\Support\Facades\Request::class,
        'Route'    => \Genesis\Support\Facades\Route::class,
        'Str'      => \Illuminate\Support\Str::class,
        'URL'      => \Genesis\Support\Facades\URL::class,
        'View'     => \Illuminate\Support\Facades\View::class,

        # 'Artisan' => Illuminate\Support\Facades\Artisan::class,
        # 'Auth' => Illuminate\Support\Facades\Auth::class,
        # 'Broadcast' => Illuminate\Support\Facades\Broadcast::class,
        # 'Bus' => Illuminate\Support\Facades\Bus::class,
        # 'Cache' => Illuminate\Support\Facades\Cache::class,
        # 'Cookie' => Illuminate\Support\Facades\Cookie::class,
        # 'Crypt' => Illuminate\Support\Facades\Crypt::class,
        # 'Gate' => Illuminate\Support\Facades\Gate::class,
        # 'Hash' => Illuminate\Support\Facades\Hash::class,
        # 'Http' => Illuminate\Support\Facades\Http::class,
        # 'Lang' => Illuminate\Support\Facades\Lang::class,
        # 'Log' => Illuminate\Support\Facades\Log::class,
        # 'Mail' => Illuminate\Support\Facades\Mail::class,
        # 'Notification' => Illuminate\Support\Facades\Notification::class,
        # 'Password' => Illuminate\Support\Facades\Password::class,
        # 'Queue' => Illuminate\Support\Facades\Queue::class,
        # 'Redirect' => Illuminate\Support\Facades\Redirect::class,
        # 'Redis' => Illuminate\Support\Facades\Redis::class,
        # 'Request' => Illuminate\Support\Facades\Request::class,
        # 'Response' => Illuminate\Support\Facades\Response::class,
        # 'Route' => Illuminate\Support\Facades\Route::class,
        # 'Schema' => Illuminate\Support\Facades\Schema::class,
        # 'Session' => Illuminate\Support\Facades\Session::class,
        # 'Storage' => Illuminate\Support\Facades\Storage::class,
        # 'URL' => Illuminate\Support\Facades\URL::class,
        # 'Validator' => Illuminate\Support\Facades\Validator::class,
    ],
];
