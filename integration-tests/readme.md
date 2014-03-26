# Integration Tests

## What is it

Test of package integration inside a laravel environement

## How to run

Copy (or symlink) the integration-tests folder inside the app/test folder, then run phpunit from the laravel root dir.

## Notes

PHPUnit requires File_Iterator v1.3.4 (and not below) to follow symlinks. If integration-tests don't run at all, please upgrade File_Iterator with pear.
