# moodle-block_add_user
This is moodle block plugin which have input field, when user enter name it will check's moodle database whether user is present or not. If present then add user name to this block(add_user) database table.


https://docs.moodle.org/dev/Moodle_architecture

#Blocks plugin
Blocks are small bits of interface functionality that can be added to (normally the sides of) pages. Many blocks provide additional views of data stored and modified elsewhere. Blocks live in the blocks folder.

blocks are used to display boxes of information in either the right-hand side or
left-hand side column of the Moodle page. This is one of the simplest module types
to make, and also tend to work across multiple versions of Moodle with little or
no modifications.

#db folder
The Moodle database structure is defined in install.xml files inside the db folder in each plugin. For example mod/forum/db/install.xml contains the database definition for the forum module. lib/db/install.xml defines the tables used by Moodle core. The install.xml files contain comments that should explain the purpose of each table and column. These comments can be turned into human-readable documentation by going to Site administration -> Development -> XMLDB editor in your Moodle installation, and clicking on the [Doc] link.


1. to create database one way is you create block plugin and from Site administration -> Development -> XMLDB

select the your block plugin, select create link, then load link. It will create install.xml inside your plugin_folder/db/install.xml.After uninstall plugin and then install same plugin it creates database.

2. write your own install.xml inside db folder.

#lang folder

lang:
The lang folder stores the core system language strings. This is the foundation of Moodle's localization and language support. All of the strings displayed to the end user are mapped via this facility. Language string mappings are also stored in the Moodle data lang folder. This structure allows for easy local customization of language files.
The following is a small section of the /lang/en_utf8/moodle.php language file. Notice how each string that is displayed to the end user is mapped to a string hash by using a key value that is descriptive of the strings purpose (in English):
$string['abouttobeinstalled'] = 'about to be installed';
$string['action'] = 'Action';
$string['actions'] = 'Actions';
$string['active'] = 'Active';
$string['activeusers'] = 'Active users';