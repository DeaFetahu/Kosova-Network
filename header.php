<html>
        <style>
#logo{
  width:290px;
  aspect-ratio:1,2;
}
/*navigation bar*/
.header1{
  display: flex;
  align-items: center;
  justify-content: space-between;
  height: 60px;
  padding: 20px 0;
  font-size: 13px;
}
 
a{
  text-decoration: none;
  color:darkgrey;
  font-size: 18px;
}
a:hover{
  opacity: 0.7;
}

ul{
  display:flex;
  align-items:center;
  list-style: none;
}
/*me u qas tek lista ne navigation bar*/
ul>li{
  padding-right: 10px;

}
        </style>
    </head>
    <div style="min-width: 700px; margin: 0 auto;">
    <body>
        <header class="header1">
            <li>
                <img id= "logo" src="fotot/logo2.png" />
            </li>
            <ul>
              <li><a href="faza1.php">Home</a></li>
              <li><a href="news.php">News</a></li>
              <li><a href="qytetet.php">Cities</a></li>
              <li><a href="Aboutus.php">About us</a></li>
              <li><a href="contactus.php">Contact us</a></li>
              <li><a href="dashboard.php" id="dashboardLink">Dashboard</a></li>
              <li><a href="account.php" id="accountLink">Account</a></li>
            </ul>
        </header>
</html>