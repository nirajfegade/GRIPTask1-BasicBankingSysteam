<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="all.css" />     
        <link rel="stylesheet" type="text/css" href="bootstrap.css" />
    </head>
    <title>Page (Transaction)</title>
    <body>
        <header>
            <b>Basic Banking Systeam</b>
        </header>
        <div class="menu-bar">
        <ul>
            <li class="active"><a href="page1.php">Home</a></li>
            <li><a href="page2.php">Contact</a></li>
            <li><a href="page3.php">About Us</a></li>
        </ul>
        </div>
<pre>

</pre>

    
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Transaction</h1>
          </div>
          <div class="panel-body">
            <form action="connection.php" method="post">
             
              
              <div class="form-group">
                <label for="transferfrom" style="color: black;">Transfer From</label>
                <input type="text" class="form-control" id="transferfrom" name="transfrom" required />
              </div>
              <div class="form-group">
                <label for="transferto" style="color: black;">Transfer To</label>
                <input type="text" class="form-control" id="transferto" name="transto" required/>
              </div>

               <div class="form-group">
                <label for="amount" style="color: black;">Amount</label>
                <input type="text" class="form-control" id="amount" name="amt" required/>
              </div>

              <input type="submit" class="btn btn-primary" value="Submit" style=" width: 80px; height:50px; font-size:20px; "/>
              
              
            </form>
          </div>
        </div>
      </div>
    </div>                                                                                            

    <footer>Developed By </footer>
     <footer>Niraj</footer>
    </body>
</html> 
