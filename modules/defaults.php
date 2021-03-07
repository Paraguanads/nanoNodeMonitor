<?php

// DO NOT MODIFY THIS FILE
// Please head to the config.sample.php
// and follow the instructions

// ----------- General Variables -----------

// Currency 
$currency = 'banano';

// Theme of your Node Monitor
// Default theme: 'banano'
$themeChoice = 'banano';

// Choice of block explorer
// Banano Official Explorer: 'banano'
$blockExplorer = 'banano';

// autorefresh interval for the status webpage in seconds
$autoRefreshInSeconds = 5;

// Name of your node (default: your hostname)
$bananoNodeName = gethostname();

// Location of your node
$nodeLocation = NULL;

// A welcome message shown on top
$welcomeMsg = '';

// ----------- Cache Engine -----------

// The cache engine allows for caching of RPC calls to reduce load on your Banano node.

// Duration in seconds between cache invalidation, i.e. RPC calls to the node
$cacheTimeToLive = 30;

// Possible options for "engine" are:
//    - NULL (no caching)
//    - "files" (caches to file; kind of slow)
//    - "apc" (APC cache; requires extension; fast)
//      - Options: 'ttl' => cache time in seconds
//    - "apcu" (APCu cache; requires extension; fast)
//      - Options: 'ttl' => cache time in seconds

$cache = [
   "engine" => "files",
   "options" => ["ttl" => $cacheTimeToLive]
];

// ----------- Nano Node Variables -----------

// IP address for RPC (default: 127.0.0.1)
$bananoNodeRPCIP   = '[::1]';

// Banano nodes typically use port 7072.
$bananoNodeRPCPort = '7072';

// Account of this node
$bananoNodeAccount = '';

// Donation account for maintaining this node
$bananoDonationAccount = $nanoNodeAccount;

// Number of decimal places to display Nano balances, i.e.
$bananoNumDecimalPlaces = 0;

// ----------- Monitoring -----------

// Uptimerobot.com API key for external monitoring
$uptimerobotApiKey = '';

// Google Analytics Tracking ID.
$googleAnalyticsId = '';

// ----------- Social -----------
$socials = array();
