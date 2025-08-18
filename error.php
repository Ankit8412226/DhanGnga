<?php include "conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Failed</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.2);
        }
        h1 {
            font-size: 28px;
            color: #ff0000;
            margin-bottom: 30px;
            text-align: center;
        }
        p {
            font-size: 18px;
            margin-bottom: 20px;
            line-height: 1.5;
            text-align: center;
        }
        .button-container {
            text-align: center;
        }
        .button {
            display: inline-block;
            background-color: #ff0000;
            color: #fff;
            font-size: 18px;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 30px;
            transition: all 0.3s ease;
        }
        .button:hover {
            background-color: #cc0000;
        }
    </style>
</head>
<body>
    	<?php                       
							        $id=$_GET['id'];
                                    $query = "SELECT * FROM transaction where ORDERID='$id'";
                                    $result = mysqli_query($connect, $query);
                                    $row = mysqli_fetch_assoc($result);
                                    ?>
    <div class="container">
        <h1>Payment Failed</h1>
        <p><?php echo $row['RESPMSG'];?></p>
        <p>Sorry, your payment could not be processed at this time.</p>
        <p>Please check your payment details and try again later.</p>
        <div class="button-container">
            <a href="https://nayesochnayakadam.com/" class="button">Try Again</a>
        </div>
    </div>
</body>
</html>
