<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Profiler Sections
| -------------------------------------------------------------------------
| This file lets you determine whether or not various sections of Profiler
| data are displayed when the Profiler is enabled.
| Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/profiling.html
|
*/
$config['queries']         = TRUE;
$config['benchmarks']      = TRUE;
$config['controller_info'] = FALSE;
$config['http_headers']    = FALSE;
$config['config']    = FALSE;
$config['memory_usage']         = TRUE;
$config['post']      = TRUE;
$config['uri_string'] = TRUE;
$config['get']  = TRUE;
$config['query_toggle_count']    = TRUE;