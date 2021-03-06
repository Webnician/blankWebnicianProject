<?php
    /**
     * Created by PhpStorm.
     * User: Olaf Broms
     * Date: 8/2/2016
     * Time: 8:14 PM
     */
    // All Deployer recipes are based on `recipe/common.php`.
    require 'recipe/symfony.php';

// Define a server for deployment.
// Let's name it "prod" and use port 22.
    server('prod', 'host', 22)
        ->user('name')
        ->forwardAgent() // You can use identity key, ssh config, or username/password to auth on the server.
        ->stage('production')
        ->env('deploy_path', '/your/project/path'); // Define the base path to deploy your project to.

// Specify the repository from which to download your project's code.
// The server needs to have git installed for this to work.
// If you're not using a forward agent, then the server has to be able to clone
// your project from this repository.
    set('repository', 'https://github.com/Webnician/teamworkAPI.git');