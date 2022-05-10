<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('hello'); #default action
App::getRouter()->setLoginRoute('accessdenied'); #action to forward if no permissions

Utils::addRoute('loginShow', 'LoginCtrl');
Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');

Utils::addRoute('hello', 'HelloCtrl');
Utils::addRoute('accessdenied', 'HelloCtrl');

Utils::addRoute('wip', 'WIPCtrl');
