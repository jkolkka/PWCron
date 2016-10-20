# PWCron Module

## Summary:

There are two methods of running your task.

* a) use an autoload module that hooks on the PWCron->cronHook()
* b) use "Modules to run" configuration field to add your Module and Method to be ran at desired intervals

A requires that your module supports PWCron and handles the logging and rundelays internally
B allows any module to be loaded and any function to be called and doesnt require direct support

## Installation instructions:

PWCron requires that you have Cron or equivalent system to execute the module in the background.
Suggested interval is 5-60 minutes depending on how often you want the subsystem calls to run.
Cron example is that is run every 5 minutes:

**System cron:**
```
*/5 * * * * <user> <path_to_php-cli> <path_to_processwire>/site/modules/PWCron/cron.php
```
**User cron:**
```
*/5 * * * * <path_to_php-cli> <path_to_processwire>/site/modules/PWCron/cron.php
```
