# WordpressTest

Install instructions:
---------------------
1. Clone source code from git repository into document root folder.
2. Edit wp-config.php and set the database connection parameters.
3. The site was installed with http://wordpress.localhost:8001 as the URL, to change this update siteurl and home records in wp_options table.
4. The admin credentials are the same as the database credentials.

Testing:
--------
1. To run unit tests you need to install PHPUnit, wp-cli and SVN.
2. Generate the local test environment by running `bash bin/install-wp-tests.sh <database> <username> <password> <server> <wp-version>` from `/wp-content/plugins/test-plugin` folder.
3. Run `phpunit` from the `/wp-content/plugins/test-plugin` folder.
