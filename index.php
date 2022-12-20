<head>
<meta name="viewport" content="with=device-widthm, initial-scale=1.0">
<title>Public Home</title>
    <link href="indexstyle.css" rel="stylesheet" />
</head>
<body class="body">
    <div class="header">
        <nav>
        <a class="logo" href="index.php"><img src="assets/image/Logo.png" height="70" width="70"></a>
        <div class="nav-links">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#branches">Branches</a></li>
                <li><a href="#contactus">Contact us</a></li>
                <li style="float:right"><a href="views/login.php">Login</a></li>
                <li style="float:right"><a href="views/registration.php">Sign up</a></li>
            </ul>

        </div>
        </nav>
    </div>

    <div class="section_2">
        <p>
        <center>
        <table>
            <tr>
                <td colspan="3" align="center">
                    <h1>Smart Hostel</h1>
                    <h6>One solution for bachelors' life</h5>
                </td>
            </tr>
            <tr>
                <td align="center" colspan="3">
                    <br>
                </td>
            </tr>
            <tr>
                <td align="center" colspan="3">
                    <br>
                </td>
            </tr>
            <tr>
                <td>
                    <h5>Select Branch
                    <select name="branch">
                        <option>Branch 01</option>
                        <option>Branch 02</option>
                    </select></h5>
                </td>
                <td></td>
                <td>
                    <h5>Class Type
                    <select name="class">
                        <option>Economy Class</option>
                        <option>Business Class</option>
                        <option>First Class</option>
                    </select></h5>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="" class="availability"><h5>Check Availability</h5></a>
                </td>
            </tr>
         </table>
        </center>
        </p>
    </div>

    <div class="section_3">
    <center>
    <table>
        <tr>
            <th colspan="3">
                <h2>Services</h2>
            </th>
        </tr>
        <tr>
            <th><div class="service-hov">
                <img src="assets/image/1.jpg" width="280" height="200"><br>
                <p>GYM</p></div>
            </th>
            <th><div class="service-hov">
                <img src="assets/image/2.png" width="280" height="200"><br>
                <p>DINING</p></div>
            </th>
            <th><div class="service-hov">
                <img src="assets/image/3.jpg" width="280" height="200"><br>
                <p>SWIMMING</p></div>
            </th>
        </tr>
        <tr>
            <th colspan="3">
                <br>
            </th>
        </tr>
        <tr>
            <th><div class="service-hov">
                <img src="assets/image/4.png" width="280" height="200"><br>
                <p>24/7 CCTV</p></div>
            </th>
            <th><div class="service-hov">
                <img src="assets/image/5.jpg" width="280" height="200"><br>
                <p>WIFI</p></div>
            </th>
            <th><div class="service-hov">
                <img src="assets/image/6.jpg" width="280" height="200"><br>
                <p>Laundry</p></div>
            </th>
        </tr>
        <tr>
            <th colspan="3">
                <br>
            </th>
        </tr>
    </table>
    </center>
    </div>

    <div class="branch">
        <h4>Branches</h4>

        <div class="row-s">
            
            <div class="branch-col">
                <img src="assets/image/portrush.jpg" width="310" height="260"/><br /><br />
                <h3>Branch #01</h3>
                <p>
                    HOUSE# 28, ROAD#
                    24, <br />
                    KURIL BISWAROAD
                    <br />
                    DHAKA
                </p>
            </div>

            <div class="branch-col">
                <img src="assets/image/1.jpg" width="310" height="260"/><br /><br />
                <h3>Branch #01</h3>
                <p>
                    HOUSE# 28, ROAD#
                    24, <br />
                    KURIL BISWAROAD
                    <br />
                    DHAKA
                </p>
            </div>
            
            <div class="branch-col">
                <img src="assets/image/3.jpg" width="310" height="260"/><br /><br />
                <h3>Branch #01</h3>
                <p>
                    HOUSE# 28, ROAD#
                    24, <br />
                    KURIL BISWAROAD
                    <br />
                    DHAKA
                </p>
            </div>

            <div class="branch-col">
                <img src="assets/image/front.jpg" width="310" height="260"/><br /><br />
                <h3>Branch #02</h3>
                <p>
                    HOUSE# 17/A,
                    ROAD# 08, ,
                    <br />
                    BASUNDHORA
                    BLOCK-C<br />
                    DHAKA
                </p>
            </div>

        </div>

        <div class="contact-div">
            <center>
            <form method="post" action="views/contactus.php">
                <table class="contact">
                    <tr>
                        <td colspan="2"><br /></td>
                    </tr>
                    <tr>
                        <td align="right">Name:</td>
                        <td>
                            <input type="text" name="name"/>
                        </td>
                        <td rowspan="4" align="center">
                            <fieldset>
                                <h4>
                                    <u>Contact Infotmation</u>
                                    <br><br>
                                    Phono: 017** ***
                                    ***<br />
                                    Email:
                                    super***@gmail.com<br />
                                </h4>
                            </fieldset>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            Phone:
                        </td>
                        <td>
                            <input type="number" name="phone"/>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            Email:
                        </td>
                        <td>
                            <input type="email" name="email"/>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">Text:</td>
                        <td>
                            <textarea name="txtarea" name="txtbox"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td align="right">
                            <input type="submit" name="" value="Send"/>
                        </td>
                    </tr>
                </table>
            </form>
            </center>
        </div>


<script>
var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("branch-col");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none"; 
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1} 
  x[slideIndex-1].style.display = "block"; 
  setTimeout(carousel, 2000); 
}
</script>

</body>
</html>
