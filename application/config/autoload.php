<?php
defined('BASEPATH') or exit('No direct script access allowed');
$autoload['packages'] = array();
$autoload['libraries'] = array('form_validation', 'database', 'session');
$autoload['drivers'] = array();
$autoload['helper'] = array('url', 'perpus_helper');
$autoload['config'] = array();
$autoload['language'] = array();
$autoload['model'] = array('ModelUser', 'ModelBuku');
