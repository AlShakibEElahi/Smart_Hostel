<html>

<head>
    <title>Smart Hostel</title>
    <link href="style.css" rel="stylesheet" />
</head>

<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#branches">Branches</a></li>
            <li><a href="#contactus">Contact us</a></li>
            <li style="float:right"><a href="views/login.php">Login</a></li>
            <li style="float:right"><a href="views/registration.php">Sign up</a></li>
        </ul>
    </nav>
    <section id="home">
        <form method="post" action="controllers/checkavailability.php">
            <center>
                <table height="200px">
                    <tr>
                        <td><br /></td>
                    </tr>
                    <tr>
                        <td>
                            <b>Select </b> Date
                            <input type="date" name="date">
                        </td>
                        <td></td>
                        <td>
                            Branch
                            <select name="class">
                                <option>Branch 01</option>
                                <option>Branch 02</option>
                                <option>Branch 03</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" align="center"><input type="submit" value="Check Availability" /></td>
                    </tr>
                    <tr>
                        <td align="center" colspan="3">
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="3">
                            <p>One solution for bachelors' life</p>
                        </th>
                    </tr>
                </table>
            </center>
        </form>
    </section>

    <section id="services">
        <table height="100%" width="100%">
            <tr>
                <th colspan="3">
                    <h2>Services</h2>
                </th>
            </tr>
            <tr>
                <th>
                    <img src="assets/image/1.jpg" width="280" height="200"><br>
                    <p>GYM</p>
                </th>
                <th>
                    <img src="assets/image/2.png" width="280" height="200"><br>
                    <p>DINING</p>
                </th>
                <th>
                    <img src="assets/image/3.jpg" width="280" height="200"><br>
                    <p>SWIMMING</p>
                </th>
            </tr>
            <tr>
                <th colspan="3">
                    <br>
                </th>
            </tr>
            <tr>
                <th>
                    <img src="assets/image/4.png" width="280" height="200"><br>
                    <p>24/7 CCTV</p>
                </th>
                <th>
                    <img src="assets/image/5.jpg" width="280" height="200"><br>
                    <p>WIFI</p>
                </th>
                <th>
                    <img src="assets/image/6.jpg" width="280" height="200"><br>
                    <p>LAUNDRY</p>
                </th>
            </tr>
            <tr>
                <th colspan="3">
                    <br>
                </th>
            </tr>
        </table>
    </section>

    <section id="branches">
        <table height="100%" width="100%">
            <tr>
                <td colspan="2" align="center">
                    <h2>Branches</h2>
                </td>
            </tr>
            <tr>
                <td>
                    <fieldset>
                        <center>
                            <img src="assets/image/portrush.jpg" width="310" height="260" /><br /><br />
                            <h3>Branch #01</h3>

                            <p>
                                HOUSE# 28, ROAD#
                                24, <br />
                                KURIL BISWAROAD
                                <br />
                                DHAKA
                            </p>
                        </center>
                    </fieldset>
                </td>
                <td>
                    <fieldset>
                        <center>
                            <img src="assets/image/front.jpg" width="310" height="260" /><br /><br />
                            <h3>Branch #01</h3>
                            <p>
                                HOUSE# 17/A,
                                ROAD# 08, ,
                                <br />
                                BASUNDHORA
                                BLOCK-C<br />
                                DHAKA
                            </p>
                        </center>
                    </fieldset>
                </td>
            </tr>
        </table>
    </section>

    <section id="contactus">
        <center>
            <form method="post" action="views/contactus.php">
                <table>
                    <tr>
                        <td colspan="2"><br /></td>
                    </tr>
                    <tr>
                        <td align="right">Name:</td>
                        <td>
                            <input type="text" name="name" />
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
                            <input type="number" name="phone" />
                        </td>
                    </tr>
                    <tr>
                        <td align="right">
                            Email:
                        </td>
                        <td>
                            <input type="email" name="email" />
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
                            <input type="submit" name="" value="Submit" />
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </section>

    <footer align="center">
        <br><br><h4>copyright @ smart_hostel</h4><br><br>
    </footer>
</body>

</html>