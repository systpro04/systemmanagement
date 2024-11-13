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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'Dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login']                             = 'Auth/Login_ctrl/index';
$route['logout']                            = 'Auth/Login_ctrl/logout'; 

$route['dashboard']                         = 'Dashboard/index';
$route['profile']                           = 'Dashboard/profile';

// admin setup
$route['add_user_view']                     = 'Admin/add_user_view';
$route['user_list']                         = 'Admin/user_list';
$route['search']                            = 'Admin/search';
$route['emp_data']                          = 'Admin/emp_data';
$route['add_user']                          = 'Admin/add_user';
$route['update_user']                       = 'Admin/update_user';

$route['kpi_view']                          = 'Admin/kpi_view';
$route['kpi_list']                          = 'Admin/kpi_list';
$route['create_kpi']                        = 'Admin/create_kpi';
$route['edit_kpi']                          = 'Admin/edit_kpi';
$route['update_kpi']                        = 'Admin/update_kpi';
$route['delete_kpi']                        = 'Admin/delete_kpi';

$route['module_view']                       = 'Admin/module_view';
$route['module_list']                       = 'Admin/module_list';
$route['add_module']                        = 'Admin/add_module';
$route['edit_module']                       = 'Admin/edit_module';
$route['update_module']                     = 'Admin/update_module';
$route['view_submodule']                    = 'Admin/view_submodule';
$route['submodule_list']                    = 'Admin/submodule_list';
$route['add_submodule_content']             = 'Admin/add_submodule_content';
$route['insert_submodule']                  = 'Admin/insert_submodule';
$route['edit_submodule_content']            = 'Admin/edit_submodule_content';
$route['update_submodule']                  = 'Admin/update_submodule';

$route['request']                           = 'Admin/request';
$route['typeofsystem_data']                 = 'Admin/typeofsystem_data';
$route['approved']                          = 'Admin/approved';
$route['backtopending']                     = 'Admin/backtopending';
$route['file_preview/(:any)']               = 'Admin/file_preview/$1';

// Menu
$route['structure']                         = 'Menu/Structure/index';
$route['kpi']                               = 'Menu/KPI/index';
$route['it_responsibilities']               = 'Menu/It_Respo/index';
$route['setup_workload']                    = 'Menu/It_Respo/setup_workload';
$route['setup_module']                      = 'Menu/It_Respo/setup_module';

$route['workload_list']                     = 'Menu/It_Respo/workload_list';
$route['submit_workload']                   = 'Menu/It_Respo/submit_workload';
$route['submit_updated_workload']           = 'Menu/It_Respo/submit_updated_workload';
$route['edit_workload_content']             = 'Menu/It_Respo/edit_workload_content';
$route['delete_workload']                   = 'Menu/It_Respo/delete_workload';

//Current System
$route['current_system']                    = 'Menu/Current_Sys/index';
$route['get_folders']                       = 'Menu/Current_Sys/get_folders';
$route['view_folder_modal']                 = 'Menu/Current_Sys/view_folder_modal';
$route['upload_file']                       = 'Menu/Current_Sys/upload_file';
$route['delete_file']                       = 'Menu/Current_Sys/delete_file';
$route['get_filter_options']                = 'Menu/Current_Sys/get_filter_options';

$route['open_image/(:any)/(:any)']          = 'Menu/Current_Sys/open_image/$1/$2';
$route['open_pdf/(:any)/(:any)']            = 'Menu/Current_Sys/open_pdf/$1/$2';
$route['open_csv/(:any)/(:any)']            = 'Menu/Current_Sys/open_csv/$1/$2';
$route['open_txt/(:any)/(:any)']            = 'Menu/Current_Sys/open_txt/$1/$2';
$route['open_audio/(:any)/(:any)']          = 'Menu/Current_Sys/open_audio/$1/$2';


//New System
$route['new_system']                        = 'Menu/New_Sys/index';
$route['get_new_folders']                   = 'Menu/New_Sys/get_new_folders';
$route['view_new_folder_modal']             = 'Menu/New_Sys/view_new_folder_modal';
$route['upload_new_files']                  = 'Menu/New_Sys/upload_new_files';
$route['delete_file_new']                   = 'Menu/New_Sys/delete_file_new';
$route['check_directory_status']            = 'Menu/New_Sys/check_directory_status';
$route['get_files_for_upload']              = 'Menu/New_Sys/get_files_for_upload';

$route['open_new_image/(:any)/(:any)']      = 'Menu/New_Sys/open_new_image/$1/$2';
$route['open_new_pdf/(:any)/(:any)']        = 'Menu/New_Sys/open_new_pdf/$1/$2';
$route['open_new_csv/(:any)/(:any)']        = 'Menu/New_Sys/open_new_csv/$1/$2';
$route['open_new_txt/(:any)/(:any)']        = 'Menu/New_Sys/open_new_txt/$1/$2';
$route['open_new_audio/(:any)/(:any)']      = 'Menu/New_Sys/open_new_audio/$1/$2';












