<?php

// the project version
define('PROJECT_VERSION', '1.5.6');

// project URL
define('PROJECT_URL', 'https://github.com/Paraguanads/BaNanoNodeMonitor');

// URL to get version of latest release from github
define('GITHUB_LATEST_API_URL', 'https://api.github.com/repos/Paraguanads/BaNanoNodeMonitor/releases/latest');

// banano rep account for Nano Node Monitor 
define ('NODEMON_BAN_REP_ACCOUNT', 'ban_3srechjntpdomi9dbaksfxkpk4o134kchii8iozd98aa5f3txbej96wb77mg');

// baano donation account for Nano Node Monitor development
define ('NODEMON_BAN_DON_ACCOUNT', 'ban_1parahmfwaxtsbxhzekwb5na9uozejrit16o7j6y4an5qrticixicd5rce4b');

// total number of characters for displaying Nano addresses including ellipsis
define ('BAN_ADDR_NUM_CHAR', 17);

// curl timeout in seconds to receive data from external services (max delay is EXTERNAL_TIMEOUT + EXTERNAL_CONECTTIMEOUT)
define ('EXTERNAL_TIMEOUT', 3);

// curl timeout in seconds to connect to external services (max delay is EXTERNAL_TIMEOUT + EXTERNAL_CONECTTIMEOUT)
define ('EXTERNAL_CONECTTIMEOUT', 2);

// maximum allowed age of data to be part of the block confirmation time percentiles calculation (milliseconds)
define ('CONFIRMATION_TIME_LIMIT', 600000);
