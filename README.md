Basic setup based on https://github.com/mattandersen/vagrant-lamp



Requirements
------------
* VirtualBox <http://www.virtualbox.org>
* Vagrant <http://www.vagrantup.com>
* Git <http://git-scm.com/>

Usage
-----

### Startup

1. Download one of the releases available
2. Extract the ZIP file.
3. From the command-line:
```
$ cd vagrant-lamp-release
$ vagrant up
```
That is pretty simple.

### Connecting

#### Apache
The Apache server is available at <http://localhost:7105>

#### MySQL
Externally the MySQL server is available at port 8889, and when running on the VM it is available as a socket or at port 3306 as usual.
Username: root
Password: root

Technical Details
-----------------
* Ubuntu 14.04 64-bit
* Apache 2.4
* PHP 5.5
* MySQL 5.5
* XDebug
* PHPUnit 4.8
* Composer
