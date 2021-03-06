<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
  | -------------------------------------------------------------------------
  | URI ROUTING
  | -------------------------------------------------------------------------
  | This file lets you re-map URI requests to specific controller functions.
  |
  | Typically there is a one-to-one relationship between a URL string
  | and its corresponding controller class/method. The segments in a
  | URL normally follow this pattern:
  |
  |	example.com/class/method/id/
  |
  | In some instances, however, you may want to remap this relationship
  | so that a different class/function is called than the one
  | corresponding to the URL.
  |
  | Please see the user guide for complete details:
  |
  |	https://codeigniter.com/user_guide/general/routing.html
  |
  | -------------------------------------------------------------------------
  | RESERVED ROUTES
  | -------------------------------------------------------------------------
  |
  | There are three reserved routes:
  |
  |	$route['default_controller'] = 'welcome';
  |
  | This route indicates which controller class should be loaded if the
  | URI contains no data. In the above example, the "welcome" class
  | would be loaded.
  |
  |	$route['404_override'] = 'errors/page_missing';
  |
  | This route will tell the Router which controller/method to use if those
  | provided in the URL cannot be matched to a valid route.
  |
  |	$route['translate_uri_dashes'] = FALSE;
  |
  | This is not exactly a route, but allows you to automatically route
  | controller and method names that contain dashes. '-' isn't a valid
  | class or method name character, so it requires translation.
  | When you set this option to TRUE, it will replace ALL dashes in the
  | controller and method URI segments.
  |
  | Examples:	my-controller/index	-> my_controller/index
  |		my-controller/my-method	-> my_controller/my_method
 */
$route['default_controller'] = '_StartController';
$route['404_override'] = '_ErrorsController/index';
$route['translate_uri_dashes'] = true;
$route['test'] = '_Test/index';

# Cron jobs
$route['cron/update_summoners'] = 'CronjobsController/update_summoners';
$route['cron/p'] = 'CronjobsController/p';

# Start controller

$route['logout'] = '_StartController/logout';
$route['login'] = '_StartController/login';
$route['sign-in'] = '_StartController/signin';
$route['conditions'] = '_StartController/conditions';

# ~ Panel

$route['panel'] = 'PanelController/index';
$route['panel/config'] = 'PanelController/config';

$route['panel/stats/subslist'] = 'PanelController/stats_subslist';
$route['panel/stats/ranked'] = 'PanelController/stats_ranked';
$route['panel/stats/leagues'] = 'PanelController/stats_leagues';
$route['panel/stats/sumary'] = 'PanelController/stats_sumary';
$route['panel/stats/champions'] = 'PanelController/stats_champions';

# ~ subs

$route['sub/search'] = 'SuscriptoresController/sub_search';
$route['sub/add'] = 'SuscriptoresController/sub_add';
$route['sub/ok'] = 'SuscriptoresController/sub_ok';
$route['sub'] = 'SuscriptoresController/sub_ok';

$route['(.*)'] = 'SuscriptoresController/index/$1';


