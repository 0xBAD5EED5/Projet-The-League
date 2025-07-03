<?php

//MODELS
require "models/Games.php";
require "models/Media.php";
require "models/Players.php";
require "models/Teams.php";



//MANAGERS

require "managers/AbstractManager.php";
require "managers/MediaManager.php";
require "managers/PlayersManager.php";
require "managers/TeamsManager.php";
require "managers/GamesManager.php";




//CONTROLLERS
require "controllers/AbstractController.php";
require "controllers/MediaController.php";
require "controllers/PlayersController.php";
require "controllers/TeamsController.php";
require "controllers/GamesController.php";



//SERVICES

require "Router.php";