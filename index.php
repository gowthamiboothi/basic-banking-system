<html>
<head>
    <title>Basic Banking System</title>
    <link rel="shortcut icon" href="images/cm.png">
   
	 <link rel="stylesheet" href="index_button.css">
	<style>
	button{
		background-color:hotpink;
		width:15%;
		background-color: #04AA6D; /* Green */
        border: 1%;
        color: white;
        padding: 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
	}
	body
	{
		text-align:center;
	}
		body{
		background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url("frontpage.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}
	</style>
</head>
<body >
	
		<div class="logo">
			<img align="center" src="logo.jpg" width="100px" height="100px">
	</div>
	<div id="header">
       <br>
       <h1  align="center" style=" font-family: Times New Roman ; font-size: 70px; color:yellow;text-shadow: 3px 3px black;"> Basic Banking System</h1>
       <h2  align="center" style=" font-family:Arial; font-size: 45px;color:white;text-shadow: 2px 2px black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; sparksfoundation  </h2>
    </div>
        <div id="section">
            <table>
                <tr></tr>
                <tr><br>
				<a href="getdetail.php">
               <button class="primary_btn" id="button "type="button" href="getdetail.php">View users</button>
                </a>
               
                </tr>
                <tr>        
               <br> <br> <br>
			   <a href="transfer.php">
			   <button class="primary_btn" id="button" type="button">Credit Transfer</button>
               </a>
               
               </tr>
			   
			    <tr>        
               <br> <br> <br>
			   <a href="transaction.php">
			   <button class="primary_btn" id="button" type="button">All Transaction</button>
               </a>
            </table>
    </div>
    <footer class="text-center mt-5 py-2">
        <p>&#169;.Made by<b>  B.Gowthami </b> <br>For the Project of The Spark Foundation</p>
      </footer>
	           
</body>
</html>