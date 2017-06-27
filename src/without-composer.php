<?php

// phar file inclusion path
define('LIB_ROOT', realpath(__DIR__ . '/../lib'));

require_once(LIB_ROOT . '/MasterCardCoreSDK.phar');
/*
Output:
PHP Warning:  require_once(PEAR.php): failed to open stream: No such file or directory in phar:///home/chris/src/revo/organization/masterpass-debug/lib/MasterCardCoreSDK.phar/XML/Serializer.php on line 53
PHP Fatal error:  require_once(): Failed opening required 'PEAR.php' (include_path='phar:///home/chris/src/revo/organization/masterpass-debug/lib/MasterCardCoreSDK.phar:.:/usr/share/php') in phar:///home/chris/src/revo/organization/masterpass-debug/lib/MasterCardCoreSDK.phar/XML/Serializer.php on line 53
*/

require_once(LIB_ROOT . '/MastercardMerchantCheckout.phar');
/*
Output:
PHP Fatal error:  Interface 'MasterCardCoreSDK\Interfaces\IApiTracker' not found in phar:///home/chris/src/revo/organization/masterpass-debug/lib/MastercardMerchantCheckout.phar/Impl/APITrackerImpl.php on line 13
*/
