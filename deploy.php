<?php
namespace Deployer;

define('YII_DEBUG', false);
define('YII_ENV', 'prod');

require 'vendor/deployer/deployer/recipe/yii2-app-basic.php';

if (!file_exists ('servers.yml')) {
    die('Please create servers.yml before continuing.');
}
serverList('servers.yml');

set('default_stage', 'production');
set('keep_releases', 3);
set('repository', 'git@github.com:connorholt/yoffer.git');
add('shared_files', []);
add('writable_dirs', [
    'runtime', 'web/assets', 'vendor'
]);
server('production');

task('upload_config', function() {
    upload(__DIR__ . '/config/db/', '{{release_path}}/config/db/');
})->desc('Change production');

task('deploy:assets', function () {
    run('chmod -R 755 {{release_path}}/web/assets');
})->desc('Chomd 755 assets');
task('deploy:composer', function() {
    run("cd {{release_path}} && composer update --no-dev --prefer-dist --optimize-autoloader");
});

before('deploy:run_migrations', 'upload_config');

task('deploy', [
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'deploy:update_code',
    'deploy:shared',
    'deploy:vendors',
    'deploy:composer',
    'deploy:run_migrations',
    'deploy:assets',
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
])->desc('Deploy your project');

after('deploy', 'success');

after('deploy:failed', 'deploy:unlock');