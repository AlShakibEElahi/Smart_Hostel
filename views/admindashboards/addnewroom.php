<?php
    require_once '../../models/branchmodel.php';
    if(!isset($_COOKIE['logstatus'])){
        header('location:../login.php');
    }
    if(isset($_SESSION['insertbrancherr'])){
        echo $_SESSION['insertbrancherr'];
        unset($_SESSION['insertbrancherr']);
    }
    if(isset($_SESSION['insertbranch'])){
        echo $_SESSION['insertbranch'];
        unset($_SESSION['insertbranch']);
    }
    if(isset($_SESSION['addValid'])){
        echo $_SESSION['addValid'];
        unset($_SESSION['addValid']);
    }
?>
<?php?>
<html>
    <head>
        <title>Admin Dashboard</title>
        <script src="../dashboard.js"></script>
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
                            <td align="center">
                                <form method="post" action="../../controllers/adminsection/addroomval.php">
                                    <fieldset>
                                        <legend>Add New Room</legend>
                                        <table>
                                            <tr>
                                                <td>
                                                    <input type="text" name="roomno" id='roomno' placeholder="Room no."/>
                                                    <p id='romexits'></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <?php 
                                                        $results=showbranchid();
                                                        $rows=mysqli_num_rows($results);
                                                        if($rows>0){
                                                            echo "<select name='branch' id='branchroom' onchange='showavaiablepackage()'><option value='' id='branchroom' onchange='showavaiablepackage()'>Select Branch</option>";          
                                                            while($row = mysqli_fetch_assoc($results)){
                                                                echo "<option value='".$row['id']."'>".$row['id']."</option>";
                                                            }
                                                            echo "</select>";
                                                        }
                                                        else{
                                                            echo "No Branch added yet...";
                                                        }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select name="branchtype">
                                                        <option value="">Select a Package</option>
                                                    </select>
                                                    <p></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" colspan="2"><input type="submit" name="insert" value="ADD" onclick='checkroomexits()'></td>
                                            </tr>
                                        </table>
                                    </fieldset>
                                </form>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <script>
            function checkroomexits() {
                let roomno = document.getElementById('roomno').value;
                if (roomno != " ") {
                    let xhttp = new XMLHttpRequest();
                    xhttp.open('POST', '../../controllers/adminsection/roomexistancecheck.php?roomno=' + roomno, true);
                    xhttp.send();
                    xhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementsByTagName('p')[0].innerHTML = this.responseText;
                        }
                    }
                }
            }
        </script>
    </body>
</html>