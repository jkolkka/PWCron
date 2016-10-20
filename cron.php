<?php
/**
 * Cron file to call from /etc/crontab
 *
 * Call this file from system crontab
 *
 * example:
 * 0,15,30,45 * * * * user  php <path_to_pw>/site/modules/PWCron/cron.php
 *
 * @author Joonas Kolkka <joonas.kolkka@comspot.fi>
 * @author Ville Sulin <ville.sulin@comspot.fi>
 */

/** Bootstrap ProcessWire */
require_once(__DIR__ . '/../../../index.php');

$cron = wire('modules')->get('PWCron');

if($cron) {
  $cron->run();
}