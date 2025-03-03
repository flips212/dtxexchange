<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $wallet = trim($_POST["wallet_address"]);

    // Example check: You would replace this with real eligibility verification
    $eligible_wallets = ["0x123456789abcdef", "0xabcdef123456789"]; // Example eligible addresses

    if (in_array($wallet, $eligible_wallets)) {
        header("Location: index.html?status=eligible");
    } else {
        header("Location: index.html?status=not-eligible");
    }
    exit();
}
?>
