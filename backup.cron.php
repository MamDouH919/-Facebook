<?php
include_once './core/stalker_configuration.core.php';
include_once './core/stalker_registerar.core.php';
include_once './core/stalker_schema.core.php';
include_once './core/stalker_validator.core.php';
include_once './core/stalker_database.core.php';
include_once './core/stalker_information_schema.core.php';
include_once './core/stalker_query.core.php';
include_once './core/stalker_migrator.core.php';
include_once './core/stalker_backup.core.php';
include_once './core/stalker_table.core.php';
include_once './core/stalker_seed.core.php';
include_once './core/stalker_seeder.core.php';
include_once './core/stalker_view.core.php';
include_once 'PHP.php';

require_once('miniRouter.php');
foreach ( glob("./tables/*.table.php") as $file ) {
    require_once $file;
}
Stalker_Registerar::auto_register();
if(Stalker_Migrator::need_migration()){
    Stalker_Migrator::migrate();
}
foreach ( glob("./views/*.view.php") as $file ) {
    require_once $file;
}

foreach ( glob("./seeds/*.seed.php") as $file ) {
	require_once $file;
}
$router = new miniRouter();

$router->group("/facebook", function($router){
    // always use class
    $router->get('/', function(){
        include 'facebook.php';
    });

    $router->get('/signup', function(){
        include 'create-ac.php';
    });
    $router->get('/loggedin', function(){
        include 'login-done.php';
    });

$router->group('/api', function($router){
        $router->post('/signup',[new UsersData(), 'signup']);
        $router->post('/login',[new UsersData(), 'login']);
        $router->post('/logout',[new UsersData(), 'logout']);

    });
        
});
    
$router->fallback(function(){
    echo "Page Not Found";
});

$router->start_routing();
    