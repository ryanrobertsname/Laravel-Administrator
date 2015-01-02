<?php

return array(

	'uri' => \Config::get('laravel-administrator::filemgr.uri'),

	'assets_uri' => \Config::get('laravel-administrator::filemgr.assets_uri'),

	/**
	 * Authorization filters
	 */
	'base_auth_filters' => \Config::get('laravel-administrator::filemgr.base_auth_filters'),

	'create_dir_auth_filters' => \Config::get('laravel-administrator::filemgr.create_dir_auth_filters'),

	'delete_dir_auth_filters' => \Config::get('laravel-administrator::filemgr.delete_dir_auth_filters'),

	'move_dir_auth_filters' => \Config::get('laravel-administrator::filemgr.move_dir_auth_filters'),

	'copy_dir_auth_filters' => \Config::get('laravel-administrator::filemgr.copy_dir_auth_filters'),

	'rename_dir_auth_filters' => \Config::get('laravel-administrator::filemgr.rename_dir_auth_filters'),

	'upload_auth_filters' => \Config::get('laravel-administrator::filemgr.upload_auth_filters'),

	'download_auth_filters' => \Config::get('laravel-administrator::filemgr.download_auth_filters'),

	'download_file_auth_filters' => \Config::get('laravel-administrator::filemgr.download_file_auth_filters'),

	'upload_auth_filters' => \Config::get('laravel-administrator::filemgr.upload_auth_filters'),

	'move_file_auth_filters' => \Config::get('laravel-administrator::filemgr.move_file_auth_filters'),

	'copy_file_auth_filters' => \Config::get('laravel-administrator::filemgr.copy_file_auth_filters'),

	'rename_file_auth_filters' => \Config::get('laravel-administrator::filemgr.rename_file_auth_filters'),

);