<?php
namespace Deployer;

require 'recipe/codeigniter.php';

// Config

set('repository', 'https://github.com/luqman1412/codeigniter-sample.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('139.59.124.32')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '~/github-codeigniter');

// Hooks

after('deploy:failed', 'deploy:unlock');
