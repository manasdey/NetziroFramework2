<?php
/*
* ----------------------------------------------------------------------
*                 NETZIRO FRAMEWORK - NFConfig
* ----------------------------------------------------------------------
* FILE RELATIVE LOCATION:	config/NFConfig.core.php
* CREATOR:					Alessio Nobile
* CREATING DATA:			02/01/12
* ----------------------------------------------------------------------
* FILE DESCRIPTION:			
* ----------------------------------------------------------------------
* TRACKING  LOG - LOG YOUR CHANGES ONLY IF YOU ARE DOING IMPORTANT UPDATES ( CHANGE OF METHOD, ADDING/DELETING LINES OF CODE, BUGFIX)
* ----------------------------------------------------------------------
* UPDATE : 
* MODDER: ALESSIO NOBILE / DATE AND HOUR : 02/11/2011 - 12:45
* ----------------------------------------------------------------------
*/

// ------------------------------------- | START Database settings
//$credentials[ "Profile1" ][ "profile" ] = "Profile1";
$credentials[ "Profile1" ][ "hostname" ] = "localhost";
$credentials[ "Profile1" ][ "database" ] = "test";
$credentials[ "Profile1" ][ "username" ] = "root";
$credentials[ "Profile1" ][ "password" ] = "ph03nix";
// ------------------------------------- | END

// ------------------------------------- | START Debugging settings
define( "NF_INSTANCE_DEBUG", true );
// ------------------------------------- | END

// ------------------------------------- | START Logging settings
define( "NF_INSTANCE_LOG_OUTPUT", true );
define( "NF_INSTANCE_LOG_BACKTRACE", true );
// ------------------------------------- | END

// ------------------------------------- | START Locale&TimeZone settings
define( "NF_INSTANCE_LOCALE_DEFAULT", "en-GB" );
define( "NF_INSTANCE_TIMEZONE_DEFAULT", "Europe/Amsterdam" );
// ------------------------------------- | END

// ------------------------------------- | START PHP Settings
define( "NF_INSTANCE_UPLOAD_MAXFILESIZE", "10M" );
// ------------------------------------- | END
