##
# @file      AblePolecat-Stub/usr/etc/polecat/conf/README.TXT
# @brief     Able Polecat local project path configuration file.
# 
# Changes to ./usr/etc/polecat/conf/path.config will effect only the local 
# environment and will be excluded from source control.
#
# @author    Karl Kuhrman
# @copyright [BDS II License] (https://github.com/kkuhrman/AblePolecat/blob/master/LICENSE.md)
#

##
# Define ABLE_POLECAT_ALIAS only if your project index.php is in a sub-folder of
# document root. For example, it is common when setting up concurrent local development 
# environments on a single machine to use aliases; http://localhost/my_project, etc.
# In such case, define('ABLE_POLECAT_ALIAS', 'my_project') in your local path 
# configuration file (e.g. ./my_project/usr/etc/polecat/conf/path.config).
#
if (!defined('ABLE_POLECAT_ALIAS')) {
  global $ABLE_POLECAT_ALIAS;
  !isset($ABLE_POLECAT_ALIAS) ? $ABLE_POLECAT_ALIAS = 'AblePolecat-Stub' : NULL;
  define('ABLE_POLECAT_ALIAS', $ABLE_POLECAT_ALIAS);
}

##
# To enable the boot log feature, assign a valid file name/path to ABLE_POLECAT_BOOT_LOG
# in your local path configuration file (e.g. ./my_project/usr/etc/polecat/conf/path.config).
# Any path and/or file name is OK provided the parent directory is writeable by the 
# web server user/group.
#
if (!defined('ABLE_POLECAT_BOOT_LOG')) {
  global $ABLE_POLECAT_BOOT_LOG;
  $ABLE_POLECAT_BOOT_LOG = implode(DIRECTORY_SEPARATOR, array(ABLE_POLECAT_VAR, 'log', 'bootlog.csv'));
  define('ABLE_POLECAT_BOOT_LOG', $ABLE_POLECAT_BOOT_LOG);
}

##
# To add IP address(es) to white list of remote hosts, which may access install, update and
# other Able Polecat utilities define ABLE_POLECAT_ADMIN_IP in your local path configuration file 
# (e.g. ./my_project/usr/etc/polecat/conf/path.config) and add the address(es) to the global
# variable $ABLE_POLECAT_ADMIN_IP.
#/
if (!defined('ABLE_POLECAT_ADMIN_IP')) {
  global $ABLE_POLECAT_ADMIN_IP;
  $ABLE_POLECAT_ADMIN_IP = array('127.0.0.1' => TRUE, '68.169.193.132' => TRUE,);
  define('ABLE_POLECAT_ADMIN_IP', TRUE);
}
else {
  global $ABLE_POLECAT_ADMIN_IP;
  $ABLE_POLECAT_ADMIN_IP['127.0.0.1'] = TRUE;
  $ABLE_POLECAT_ADMIN_IP['68.169.193.132'] = TRUE;
}