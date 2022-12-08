<?php
    session_start();
    if(!isset($_COOKIE['logstatus'])){
        header('location:../login.php');
    }
    if(isset($_SESSION['err'])){
        echo $_SESSION['err'];
        unset($_SESSION['err']);
    }
    if(isset($_SESSION['addValid'])){
        echo $_SESSION['addValid'];
        unset($_SESSION['addValid']);
    }
    if(isset($_SESSION['insertemployee'])){
        echo $_SESSION['insertemployee'];
        unset($_SESSION['insertemployee']);
    }
    if(isset($_SESSION['insertemployeelogin'])){
        echo $_SESSION['insertemployeelogin'];
        unset($_SESSION['insertemployeelogin']);
    }
?>
<?php?>
<html>
    <head>
        <title>Admin Dashboard</title>
    </head>
    <body>
        <table border="4" width="100%" height="100%">
            <tr>
                <td>
                    <table height="100%" width="100%">
                        <tr height="70px">
                            <td>
                                <a href="admindashboard.php"><h2><i>Smart Hostel</i></h2></a>
                            </td>
                            <td align="right"> <h4>Welcome, <?php echo $_SESSION['user']['username']?></h4></td>
                            <td align="right">
                                <a href="../../controllers/logout.php"><img src="../../assets/image/logout-icon.jpg" width="35" height="35" align="center"></a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table width="100%">
                        <tr>
                            <td width="30%">
                                <form method="post" action="../../controllers/adminsection/adminselection.php">
                                    <fieldset>
                                        <table>
                                            <tr align="left">
                                                <td>
                                                    <select name="employeemanagement" onchange="change1()" id='emp1'>
                                                        <option value="addemployee">Employee Management</option>
                                                        <option value="addemployee">Add Employee</option>
                                                        <option value="employeedetails">Employee Details</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr align="left">
                                                <td>
                                                    <select name="usermanagement" onchange="change2()" id='emp2'>
                                                        <option value="">User Management</option>
                                                        <option value="adduser">Add User</option>
                                                        <option value="userdetails">User Details</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr align="left">
                                                <td>
                                                    <select name="facilityAndServices" onchange="change3()" id='emp3'>
                                                        <option value="">Facility & Services</option>
                                                        <option value="addnewfacility">Add new Facility</option>
                                                        <option value="facilitydetails">Show All Facilities</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr align="left">
                                                <td>
                                                    <select name="branch" onchange="change4()" id='emp4'>
                                                        <option value="">Branch</option>
                                                        <option value="addnewbranch">Add new branch</option>
                                                        <option value="branchdetails">Branch Details</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr align="left">
                                                <td>
                                                    <select name="room" onchange="change5()" id='emp5'>
                                                        <option value="">Room</option>
                                                        <option value="addnewroom">Add new room</option>
                                                        <option value="roomdetails">Update Facility</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr align="left">
                                                <td>
                                                    <select name="accounts" onchange="change6()" id='emp6'>
                                                        <option value="">Accounts</option>
                                                        <option value="totalrevenue">Total Revenue</option>
                                                    </select>
                                                </td>
                                            </tr>
                                        </table>
                                    </fieldset>
                                </form>
                            </td>
                            <td>
                                <table>
                                    <tr>
                                        <td align="center">
                                            <form method="POST" action="../../controllers/adminsection/employeedetailsvalidator.php">
                                                <tabble>
                                                    <tr>
                                                        <td colspan='9'>
                                                            <input type='text' name='name' value='' id='na1' onkeyup='search()' onclick='def()'>
                                                            <input type='submit' value='Search by name'>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p id='na1write'>Employee Information is going to show here...</p>
                                                        </td>
                                                    </tr>
                                                </tabble> 
                                            </form>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <script>
            function change1() {
                let name = document.getElementById('emp1').value;
                if (name != "") {
                    let xhttp = new XMLHttpRequest();
                    xhttp.open('GET', '../../controllers/adminsection/adminselection.php?name=' + name, true);
                    xhttp.send();
                    xhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            window.location.href = this.responseText;
                        }
                    }
                }
            }
            function change2() {
                let name = document.getElementById('emp2').value;
                if (name != "") {
                    let xhttp = new XMLHttpRequest();
                    xhttp.open('GET', '../../controllers/adminsection/adminselection.php?name=' + name, true);
                    xhttp.send();
                    xhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            window.location.href = this.responseText;
                        }
                    }
                }
            }
            function change3() {
                let name = document.getElementById('emp3').value;
                if (name != "") {
                    let xhttp = new XMLHttpRequest();
                    xhttp.open('GET', '../../controllers/adminsection/adminselection.php?name=' + name, true);
                    xhttp.send();
                    xhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            window.location.href = this.responseText;
                        }
                    }
                }
            }
            function change4() {
                let name = document.getElementById('emp4').value;
                if (name != "") {
                    let xhttp = new XMLHttpRequest();
                    xhttp.open('GET', '../../controllers/adminsection/adminselection.php?name=' + name, true);
                    xhttp.send();
                    xhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            window.location.href = this.responseText;
                        }
                    }
                }
            }
            function change5() {
                let name = document.getElementById('emp5').value;
                if (name != "") {
                    let xhttp = new XMLHttpRequest();
                    xhttp.open('GET', '../../controllers/adminsection/adminselection.php?name=' + name, true);
                    xhttp.send();
                    xhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            window.location.href = this.responseText;
                        }
                    }
                }
            }
            function change6() {
                let name = document.getElementById('emp6').value;
                if (name != "") {
                    let xhttp = new XMLHttpRequest();
                    xhttp.open('GET', '../../controllers/adminsection/adminselection.php?name=' + name, true);
                    xhttp.send();
                    xhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            window.location.href = this.responseText;
                        }
                    }
                }
            }
            function search() {
                let name = document.getElementById('na1').value;
                let xhttp = new XMLHttpRequest();
                xhttp.open('POST', '../../controllers/adminsection/employeedetailsvalidator.php', true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send('name='+name);
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementsByTagName('p')[0].innerHTML = this.responseText;                        
                    }
                }
            }
            function def() {
                let name = document.getElementById('na1').value;
                let xhttp = new XMLHttpRequest();
                xhttp.open('GET', '../../controllers/adminsection/employeedetailsvalidator.php?name=' + name, true);
                xhttp.send();
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementsByTagName('p')[0].innerHTML = this.responseText;                        
                    }
                }
            }
        </script>
    </body>
</html>