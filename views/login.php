<?php
session_start();
if(isset($_SESSION['regValid'])){
    echo $_SESSION['regValid'];
    unset($_SESSION['regValid']);
}
if(isset($_SESSION['logerr'])){
    echo $_SESSION['logerr'];
    unset($_SESSION['logerr']);
}
if(isset($_SESSION['password'])){
    echo $_SESSION['password'];
    unset($_SESSION['password']);
}
?>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <table>
        <tr>
            <td>
                <form action="../controllers/loginValidator.php" method="post">
                    <table>
                        <tr>
                            <td>
                                <a href="../index.php"><img src="../Smart_Hostel.gif" height="200px"></a>
                            </td>
                            <td>
                                <table>
                                    <tr>
                                        <th>
                                            Login
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" name="uid" value="" placeholder="User ID" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="password" name="password" value="" placeholder="Password" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="submit" name="" value="Submit" />
                                            <a href="forgetpass.php">
                                                Forget Password
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
    </table>
</body>

</html>

