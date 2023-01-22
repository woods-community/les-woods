<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'https://github.com/woods-community/les-woods.git');
set('http_user', '`whoami`');
set('writable_mode', 'chown');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('les-woods.net')
    ->set('deploy_path', '~/les-woods');

// Hooks

after('deploy:failed', 'deploy:unlock');
