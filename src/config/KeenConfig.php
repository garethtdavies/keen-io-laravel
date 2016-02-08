<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Project Id
    |--------------------------------------------------------------------------
    |
    | You can find your project ID via your Keen.io dashboard.
    |
    | This is the default project Id that will be used by the client. You may overwrite this at runtime by using the
    | Keen::setProjectId('NEW_PROJECT_ID') method.
    |
    */

    'projectId' => env('KEEN_PROJECT_ID', ''),

    /*
    |--------------------------------------------------------------------------
    | API Keys
    |--------------------------------------------------------------------------
    |
    | You can find your API keys via your Keen.io dashboard.
    |
    | For more information regarding each API keys please consult the official docs
    | https://keen.io/docs/security/.
    |
    | The keys required vary per method. If you do not wish to set any of the keys simply set the value to null.
    | Preferably set these keys via environment variables e.g. 'writeKey' => env('KEEN_WRITE_KEY'),
    |
    */

    'masterKey' => env('KEEN_MASTER_KEY', ''),

    'writeKey'  => env('KEEN_WRITE_KEY', ''),

    'readKey'   => env('KEEN_READ_KEY', ''),

);