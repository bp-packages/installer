<?php

namespace Composer\Installers;

class CodeIgniterInstaller extends BaseInstaller
{
    /** @var array<string, string> */
    protected $locations = array(
        'library'     => 'app/Libraries/{$name}/',
        'third-party' => 'app/ThirdParty/{$name}/',
        'module'      => 'app/Models/{$name}/',
    );
}