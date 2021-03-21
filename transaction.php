<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Transaction History</title>
	<style type="text/css">
		 table{
            width: 800px;
            height: 100px;
            color: black;
            font-size: 20px;
            border-color: white;
            
        }
        tr, th, td {
        	border: 1px solid #071a3d ;
            width: 800px;
        }
        th,td{
        	text-align: center;
            width: 800px;
        }
        th{
        	background-color: red ;
        	color: white;
            width: 800px;
        }
        body{
        	background-image: url("https://img.freepik.com/free-photo/colour-smoke-background_71163-197.jpg?size=626&ext=jpg");
        	margin: 0;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .middle{
        	margin-left: auto;
        	margin-right: auto;
            width: 800px;
        }
        h1{
        	text-align: center;
        	font-size: 40px;
            color: white;
        }
        a{
            color: white;
            font-size:20px;
        }
        tr{
            font-size:25px;
            border: 2px solid black;    
            background-color: #f2f2f2;
            
        }
        tr:hover{
            background-color: #d279a6;
        }
	</style>
	<link rel="stylesheet" type="text/css" href="navbar.css">
</head>
<body>
    <div id="navbar">
    <a class="hi" href="index.php"><i class="fa fa-home"></i> Home</a>
    <a class="hello" href="table.php"><i class="fa fa-list"></i> User List</a>
    <a class="bye" href="transaction.php"><i class="fa fa-history"></i> Transaction History</a>
    </div>

  </div>
	<?php include'connection.php' ?>

	<h1>Transaction History</h1>

	

	<table class="middle">
    <thead>
        <tr>
        <th>Sr. No</th>
            <th>Sender</th>
            <th>Receiver</th>
            <th>Amount</th>
            <th>Timestamp</th>
        </tr>
    </thead>
    <tbody>



		<?php $sql = "SELECT * FROM trans";
        $result = mysqli_query($conn, $sql);?>
    	<?php while( $row = mysqli_fetch_array($result)) : ?>
        
           
		<tr>
            <!--Each table column is echoed in to a td cell-->
            <td><?php echo $row['transaction id']; ?></td>
            <td><?php echo $row['sender']; ?></td>
            <td><?php echo $row['reciever']; ?></td>
            <td><?php echo $row['amount']; ?></td>
            <td><?php echo $row['date_time']; ?> </td>
        </tr>
        <?php endwhile ?>
    </tbody>
	</table>




</body>
</html>