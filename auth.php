<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $account = $_POST['account'];
    $signature = $_POST['signature'];

    // Verify MetaMask signature (this is a simple example, implement proper verification in production)
    $message = "MetaMask Authentication";
    // Use web3.php or similar library for proper verification
    // For demonstration, we assume verification is successful

    // Start a session and set user information
    session_start();
    $_SESSION['account'] = $account;

    echo "User authenticated: " . htmlspecialchars($account);
} else {
    echo "Invalid request.";
}
?>
