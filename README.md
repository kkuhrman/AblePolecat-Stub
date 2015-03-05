# AblePolecat-Stub
This project comprises all the essential files necessary to set up a project 
using the Able Polecat core class library and project installation tool with 
conventional Able Polecat project configuration practices.

In some cases, conventional Able Polecat project configuration practices will not 
meet the requirements of a project. For example, a developer may wish to share 
the Able Polecat class library across multiple projects or maintain project 
files in different file system locations than those expected by a conventional 
project. This project provides developers with instructions on how to override 
Able Polecat project configuration files in support of unconventional projects, 
as well.

## Conventional Project

### Configure your web server

1. Be sure to read the section on [system requirements](https://github.com/kkuhrman/AblePolecat/wiki/System-Requirements) 
on the Able Polecat [wiki](https://github.com/kkuhrman/AblePolecat/wiki).
2. The document root of your host (or virtual host) should be defined as ./AblePolecat-Stub/var/www/htdocs/.
3. If you do not plan to use .htaccess to configure your host (for example, you have write access yo httpd.conf), 
make sure to read the section on [web server configuration](https://github.com/kkuhrman/AblePolecat/wiki/Web-Server-Configuration)
on the Able Polecat [wiki](https://github.com/kkuhrman/AblePolecat/wiki).

### Configure your project

1. Clone or copy the full project to a directory on your web server, which is accessible by your web server 
user/group (e.g. /Applications/MAMP/htdocs, /var/www/htdocs, or c:\wamp\www, etc). This will make a 
directory named AblePolecat-Stub, hence referred to as the 'project root'.
2. Either copy ./AblePolecat-Stub/etc/polecat/conf/project.xml to ./AblePolecat/usr/etc/polecat/conf/project.xml 
and make the latter file writeable; or make the directory ./AblePolecat/usr/etc/polecat/conf/ writeable.
2. Make the directory ./AblePolecat/lib with read-only privileges for your web server user/group.
3. Clone or copy the Able Polecat project to ./AblePolecat/lib.
4. If you must define an alias (e.g. your project's web address is something like http://localhost/AblePolecat-Stub),
define the alias name in a file you create at ./AblePolecat-Stub/usr/etc/polecat/conf/path.config (substitute 
'AblePolecat-Stub' with your own alias, if necessary):

      if (!defined('ABLE_POLECAT_ALIAS')) {
        global $ABLE_POLECAT_ALIAS;
        !isset($ABLE_POLECAT_ALIAS) ? $ABLE_POLECAT_ALIAS = 'AblePolecat-Stub' : NULL;
        define('ABLE_POLECAT_ALIAS', $ABLE_POLECAT_ALIAS);
      }
    
5. If you wish to use the boot log feature, you must define the boot log path in ./AblePolecat-Stub/usr/etc/polecat/conf/path.config 
(you can define any path and/or file name you wish provided the parent directory is writeable by the web server user/group):

      if (!defined('ABLE_POLECAT_BOOT_LOG')) {
        global $ABLE_POLECAT_BOOT_LOG;
        $ABLE_POLECAT_BOOT_LOG = implode(DIRECTORY_SEPARATOR, array(ABLE_POLECAT_VAR, 'log', 'bootlog.csv'));
        define('ABLE_POLECAT_BOOT_LOG', $ABLE_POLECAT_BOOT_LOG);
      }

      