<?php
// RFI Vulnerable Page
if (isset($_GET['page'])) {
    include($_GET['page']); // ⚠️ RFI vulnerability
} else {
    echo "Welcome to RFI Challenge! Try to include something via ?page=";
}
// Flag: RFI{you_included_a_remote_file} ,

?>
