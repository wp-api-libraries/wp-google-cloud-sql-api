<?php
/**
 * WP Google Cloud SQL API
 *
 * @link https://cloud.google.com/sql/docs/mysql/admin-api/v1beta4/
 * @package WP-API-Libraries\WP-Google-Cloud-SQL-API
 */
/*
* Plugin Name: WP Google Cloud SQL API
* Plugin URI: https://github.com/wp-api-libraries/wp-google-cloud-sql-api
* Description: Perform API requests to Google Cloud SQL in WordPress.
* Author: WP API Libraries
* Version: 1.0.0
* Author URI: https://wp-api-libraries.com
* GitHub Plugin URI: https://github.com/wp-api-libraries/wp-google-cloud-sql-api
* GitHub Branch: master
*/
/* Exit if accessed directly. */
if ( ! defined( 'ABSPATH' ) ) { exit; }

/* Check if class exists. */
if ( ! class_exists( 'GoogleCloudSQLAPI' ) ) {
	
	/**
	 * GoogleCloudSQLAPI Class.
	 */
	class GoogleCloudSQLAPI {
		
		
		/* BACKUP RUNS. */
		
		public function delete_backup_run() {
			
		}
		
		public function get_backup_run() {
			
		}
		
		public function insert_backup_run() {
			
		}
		
		public function get_backup_run() {
			
		}
		
		/* DATABASES. */
		
		public function delete_database() {
			
		}
		
		public function get_database() {
			
		}
		
		public function insert_database() {
			
		}
		
		public function list_database() {
			
		}
		
		public function patch_database() {
			
		}
		
		public function update_database() {
			
		}
		
		
		/* FLAGS. */
		
		/* INSTANCES. */
		
		/* OPERATIONS. */
		
		/* SSL CERTS. */
		
		/* TIERS. */
		
		/* USERS. */
		


	} // End Class;
}