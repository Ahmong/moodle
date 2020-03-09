<?php
unset($CFG);  // Ignore this line
global $CFG;  // This is necessary here for PHPUnit execution
$CFG = new stdClass();

//=========================================================================
// 1. DATABASE SETUP
//=========================================================================
// First, you need to configure the database where all Moodle data       //
// will be stored.  This database must already have been created         //
// and a username/password created to access it.                         //

$CFG->dbtype    = 'mysqli';      // 'pgsql', 'mariadb', 'mysqli', 'sqlsrv' or 'oci'
$CFG->dblibrary = 'native';     // 'native' only at the moment
$CFG->dbhost    = 'mysql';  // eg 'localhost' or 'db.isp.com' or IP
$CFG->dbname    = 'moodle';     // database name, eg moodle
$CFG->dbuser    = 'moodle';   // your database username
$CFG->dbpass    = 'Moodle123';   // your database password
$CFG->prefix    = 'mdl_';       // prefix to use for all table names
$CFG->dboptions = array(
    'dbpersist' => false,       // should persistent database connections be
                                //  used? set to 'false' for the most stable
                                //  setting, 'true' can improve performance
                                //  sometimes
    'dbsocket'  => false,       // should connection via UNIX socket be used?
                                //  if you set it to 'true' or custom path
                                //  here set dbhost to 'localhost',
                                //  (please note mysql is always using socket
                                //  if dbhost is 'localhost' - if you need
                                //  local port connection use '127.0.0.1')
    'dbport'    => '',          // the TCP port number to use when connecting
                                //  to the server. keep empty string for the
                                //  default port
    'dbhandlesoptions' => false,// On PostgreSQL poolers like pgbouncer don't
                                // support advanced options on connection.
                                // If you set those in the database then
                                // the advanced settings will not be sent.
    'dbcollation' => 'utf8mb4_0900_as_ci', // MySQL has partial and full UTF-8
                                // support. If you wish to use partial UTF-8
                                // (three bytes) then set this option to
                                // 'utf8_unicode_ci', otherwise this option
                                // can be removed for MySQL (by default it will
                                // use 'utf8mb4_unicode_ci'. This option should
                                // be removed for all other databases.
    // 'fetchbuffersize' => 100000, // On PostgreSQL, this option sets a limit
                                // on the number of rows that are fetched into
                                // memory when doing a large recordset query
                                // (e.g. search indexing). Default is 100000.
                                // Uncomment and set to a value to change it,
                                // or zero to turn off the limit. You need to
                                // set to zero if you are using pg_bouncer in
                                // 'transaction' mode (it is fine in 'session'
                                // mode).
);


//=========================================================================
// 2. WEB SITE LOCATION
//=========================================================================
// Now you need to tell Moodle where it is located. Specify the full
// web address to where moodle has been installed.  If your web site
// is accessible via multiple URLs then choose the most natural one
// that your students would use.  Do not include a trailing slash
//
// If you need both intranet and Internet access please read
// http://docs.moodle.org/en/masquerading

$CFG->wwwroot   = 'http://web.parall.docker/moodle';


//=========================================================================
// 3. DATA FILES LOCATION
//=========================================================================
// Now you need a place where Moodle can save uploaded files.  This
// directory should be readable AND WRITEABLE by the web server user
// (usually 'nobody' or 'apache'), but it should not be accessible
// directly via the web.
//
// - On hosting systems you might need to make sure that your "group" has
//   no permissions at all, but that "others" have full permissions.
//
// - On Windows systems you might specify something like 'c:\moodledata'

$CFG->dataroot  = '/var/www/data/mdl_data';
//$CFG->dataroot  = '/home/application/current/data/mdl_data';


//=========================================================================
// 4. DATA FILES PERMISSIONS
//=========================================================================
// The following parameter sets the permissions of new directories
// created by Moodle within the data directory.  The format is in
// octal format (as used by the Unix utility chmod, for example).
// The default is usually OK, but you may want to change it to 0750
// if you are concerned about world-access to the files (you will need
// to make sure the web server process (eg Apache) can access the files.
// NOTE: the prefixed 0 is important, and don't use quotes.

$CFG->directorypermissions = 02777;


//=========================================================================
// 5. DIRECTORY LOCATION  (most people can just ignore this setting)
//=========================================================================
// A very few webhosts use /admin as a special URL for you to access a
// control panel or something.  Unfortunately this conflicts with the
// standard location for the Moodle admin pages.  You can work around this
// by renaming the admin directory in your installation, and putting that
// new name here.  eg "moodleadmin".  This should fix all admin links in Moodle.
// After any change you need to visit your new admin directory
// and purge all caches.

$CFG->admin = 'admin';

// XSendfile functionality
$CFG->xsendfile = 'X-Accel-Redirect';     // Nginx {@see http://wiki.nginx.org/XSendfile}
$CFG->xsendfilealiases = array(
	'/dataroot/' => $CFG->dataroot
);

// PHPUnit
$CFG->phpunit_prefix = 'phpu_';
$CFG->phpunit_dataroot = '/var/www/data/mdl_phpu';
//$CFG->phpunit_dataroot = '/home/application/current/data/mdl_phpu';

require_once(__DIR__ . '/lib/setup.php'); // Do not edit

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
