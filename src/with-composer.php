<?php

// use the composer autoloader
require_once(realpath(__DIR__ . '/..') . '/vendor/autoload.php');

// phar file inclusion path
define('LIB_ROOT', realpath(__DIR__ . '/../lib'));

require_once(LIB_ROOT . '/Parser.php');

require_once(LIB_ROOT . '/MasterCardCoreSDK.phar');
/*
Output:
PHP Warning:  require_once(XML/Util.php): failed to open stream: No such file or directory in phar:///home/chris/src/revo/organization/masterpass-debug/lib/MasterCardCoreSDK.phar/XML/Serializer.php on line 58
PHP Fatal error:  require_once(): Failed opening required 'XML/Util.php' (include_path='phar:///home/chris/src/revo/organization/masterpass-debug/lib/MasterCardCoreSDK.phar:/home/chris/src/revo/organization/masterpass-debug/vendor/pear/pear_exception:/home/chris/src/revo/organization/masterpass-debug/vendor/pear/console_getopt:/home/chris/src/revo/organization/masterpass-debug/vendor/pear/pear-core-minimal/src:/home/chris/src/revo/organization/masterpass-debug/vendor/pear/xml_parser:.:/usr/share/php') in phar:///home/chris/src/revo/organization/masterpass-debug/lib/MasterCardCoreSDK.phar/XML/Serializer.php on line 58
*/

require_once(LIB_ROOT . '/MastercardMerchantCheckout.phar');
/*
Output:
PHP Fatal error:  Interface 'MasterCardCoreSDK\Interfaces\IApiTracker' not found in phar:///home/chris/src/revo/organization/masterpass-debug/lib/MastercardMerchantCheckout.phar/Impl/APITrackerImpl.php on line 13
*/
