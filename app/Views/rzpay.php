<?php
// Include necessary configurations
$key_id = 'rzp_test_W7OVOj5FKA4iHt';
$key_secret = 'Zxd9QTlFDfsVPoxqrLtMivcP';

// Create a new order
$data = [
    'amount' => 50000, // Amount in paise (50000 paise = ₹500)
    'currency' => 'INR',
    'receipt' => 'order_rcptid_11',
];

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => 'https://api.razorpay.com/v1/orders',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => json_encode($data),
    CURLOPT_HTTPHEADER => [
        'Content-Type: application/json'
    ],
    CURLOPT_USERPWD => $key_id . ':' . $key_secret
]);

$response = curl_exec($curl);
curl_close($curl);

$order = json_decode($response, true);

echo json_encode([
    'order_id' => $order['id']
]);
?>
