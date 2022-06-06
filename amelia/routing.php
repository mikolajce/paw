<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('wip'); #default action
App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('hello', 'HelloCtrl');
Utils::addRoute('wip', 'WIPCtrl');
Utils::addRoute('loginShow', 'LoginCtrl');
Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');
Utils::addRoute('register', 'RegisterCtrl');
Utils::addRoute('registerShow', 'RegisterCtrl');
Utils::addRoute('admin', 'AdminCtrl');
Utils::addRoute('adminPromote', 'AdminCtrl', ['admin']);
Utils::addRoute('adminRevoke', 'AdminCtrl', ['admin']);
Utils::addRoute('adminDelete', 'AdminCtrl', ['admin']);

Utils::addRoute('vinylList', 'VinylListCtrl');
Utils::addRoute('vinylGet', 'VinylEditCtrl', ['user']);
Utils::addRoute('vinylNew', 'VinylEditCtrl',	['employee','admin']);
Utils::addRoute('vinylEdit', 'VinylEditCtrl',	['employee','admin']);
Utils::addRoute('vinylSave', 'VinylEditCtrl',	['employee','admin']);
Utils::addRoute('vinylDelete', 'VinylEditCtrl',	['admin']);
Utils::addRoute('cartList', 'CartCtrl',	['user']);
Utils::addRoute('cartDelete', 'CartCtrl',	['user']);
Utils::addRoute('cartFinalize', 'CartCtrl',	['user']);
