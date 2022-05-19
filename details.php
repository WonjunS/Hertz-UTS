<html>
<head>
    <title>Hertz-UTS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/details.css">
</head>
<body>
    <header>
        <div id="logo">
            <h2><i>Hertz-UTS</i></h2>
        </div>
        <div id="title">
            <a href="index.html"><h1>Online Car Rental Service</h1></a>
        </div>
    </header>
    <main id="details">
        <h2>Reservation Details</h2>
        <div id='checkout'>
            <table>
                <colgroup>
                    <col style='background-color:#eee; width: 300px;'>
                    <col>
                </colgroup>
                <tr>
                    <td>First Name</td>
                    <td style="text-align:right;"><?php $firstname = $_GET['user_first_name']; echo $firstname; ?></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td style="text-align:right;"><?php $lastname = $_GET['user_last_name']; echo $lastname; ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td style="text-align:right;"><?php $email = $_GET['user_email']; echo $email; ?></td>
                </tr>
                <tr>
                    <td>Address Line 1</td>
                    <td style="text-align:right;"><?php $address1 = $_GET['user_address1']; echo $address1; ?></td>
                </tr>
                <tr>
                    <td>Address Line 2</td>
                    <td style="text-align:right;"><?php $address2 = $_GET['user_address2']; echo $address2; ?></td>
                </tr>
                <tr>
                    <td>City</td>
                    <td style="text-align:right;"><?php $city = $_GET['user_city']; echo $city; ?></td>
                </tr>
                <tr>
                    <td>State</td>
                    <td style="text-align:right;"><?php $state = $_GET['user_state']; echo $state; ?></td>  
                </tr>
                <tr>
                    <td>Post Code</td>
                    <td style="text-align:right;"><?php $postcode = $_GET['user_postcode']; echo $postcode; ?></td>
                </tr>
                <tr>
                    <td>Payment Type</td>
                    <td style="text-align:right;"><?php $payment = $_GET['user_payment']; echo $payment; ?></td>  
                </tr>
                <tr>
                    <td>Total Price</td>
                    <td class="total_price" style="text-align:right;"></td>
                </tr>
            </table>
        </div>
    </main>
</body>
<script src="js/totalPrice.js" type="text/javascript"></script>
</html> 
