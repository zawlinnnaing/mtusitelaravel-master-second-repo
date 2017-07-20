<?php
namespace Deployer;

require 'recipe/laravel.php';

// Configuration
set('mtusitelaravel', 'git@github.com:lynnphayu/mtusitelaravel.git');
set('git_tty', true); // [Optional] Allocate tty for git on first deployment
add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);
set('default_stage', 'staging');
set('ssh_type', 'native');
set('ssh_multiplexing', true);
// Hosts

host('sentimentalrat.com')
    ->stage('staging')
    ->set('deploy_path', '/var/www/sentimentalrat.com/html');
    
// host('beta.project.com')
//     ->stage('beta')
//     ->set('deploy_path', '/var/www/project.com');  


// Tasks

desc('Restart PHP-FPM service');
task('php-fpm:restart', function () {
    // The user must have rights for restart service
    // /etc/sudoers: username ALL=NOPASSWD:/bin/systemctl restart php-fpm.service
    run('sudo systemctl restart php-fpm.service');
});
after('deploy:symlink', 'php-fpm:restart');

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');