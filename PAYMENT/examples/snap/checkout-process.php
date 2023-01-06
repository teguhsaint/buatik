<?php

namespace Midtrans;

require_once dirname(__FILE__) . '/../../Midtrans.php';

//Set Your server key
Config::$serverKey = "SB-Mid-server-u1WC8Zfa_qNmpisNXEaGw3ke";

// Uncomment for production environment
// Config::$isProduction = true;

// Enable sanitization
Config::$isSanitized = true;

// Enable 3D-Secure
Config::$is3ds = true;

// Uncomment for append and override notification URL
// Config::$appendNotifUrl = "https://example.com";
// Config::$overrideNotifUrl = "https://example.com";

$nama = $_POST['nama'];
$kota = $_POST['kota'];
$desa = $_POST['desa'];
$menu = $_POST['menu'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];
$total = $harga * $jumlah;
$wa = $_POST['wa'];

$order_id = rand();
$kueri = "INSERT INTO transaksi VALUES(NULL,'$order_id','$nama','$desa $kota','$menu','$harga','$jumlah','$total','0','$wa')";
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'db_catering';
$koneksi = mysqli_connect($host, $user, $pass, $dbname);

mysqli_query($koneksi, $kueri);

// Required
$transaction_details = array(
    'order_id' => $order_id,
    'gross_amount' => 94000, // no decimal allowed for creditcard
);

// Optional
$item1_details = array(
    'id' => 'a1',
    'price' => $harga,
    'quantity' => $jumlah,
    'name' => "$nama"
);



// Optional
$item_details = array($item1_details);

// Optional
$billing_address = array(
    'first_name'    => "$nama",
    'last_name'     => "",
    'address'       => "$desa",
    'city'          => "$kota",
    'phone'         => "$wa",
    'country_code'  => 'IDN'
);

// Optional
$shipping_address = array(
    'first_name'    => "$nama",
    'last_name'     => "",
    'address'       => "$desa",
    'city'          => "$kota",
    'phone'         => "$wa",
    'country_code'  => 'IDN'
);

// Optional
$customer_details = array(
    'first_name'    => "$nama",
    'last_name'     => "",
    'phone'         => "$wa",
    'billing_address'  => $billing_address,
    'shipping_address' => $shipping_address
);

// Optional, remove this to display all available payment methods
$enable_payments = array('credit_card', 'cimb_clicks', 'mandiri_clickpay', 'echannel');

// Fill transaction details
$transaction = array(
    'enabled_payments' => $enable_payments,
    'transaction_details' => $transaction_details,
    'customer_details' => $customer_details,
    'item_details' => $item_details,
);

$snapToken = Snap::getSnapToken($transaction);
echo "snapToken = " . $snapToken;
?>

<!DOCTYPE html>
<html>

<body>
    <button id="pay-button">Pay!</button>
    <pre><div id="result-json">JSON result will appear here after payment:<br></div></pre>

    <!-- TODO: Remove ".sandbox" from script src URL for production environment. Also input your client key in "data-client-key" -->
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="<Set your ClientKey here>"></script>
    <script type="text/javascript">
        document.getElementById('pay-button').onclick = function() {
            // SnapToken acquired from previous step
            snap.pay('<?php echo $snapToken ?>', {
                // Optional
                onSuccess: function(result) {
                    /* You may add your own js here, this is just example */
                    document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                },
                // Optional
                onPending: function(result) {
                    /* You may add your own js here, this is just example */
                    document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                },
                // Optional
                onError: function(result) {
                    /* You may add your own js here, this is just example */
                    document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                }
            });
        };
    </script>
</body>

</html>