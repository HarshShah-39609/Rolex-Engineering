<?php
include 'connection.php';
if (isset($_POST['name']) && isset($_POST['password'])) 
{
    $aname = $_POST['name'];
    $apass = $_POST['password'];
    $sql = "SELECT * FROM Admin WHERE Admin_Name='$aname' AND Admin_Password='$apass'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)) {

      $adetial = mysqli_fetch_assoc($result);
        echo $adetial;
      if ($adetial['Admin_Name'] === $aname && $adetial['Admin_Password'] === $apass) {

        echo "Logged in!";

        if (!isset($_SESSION))
        {
          session_start();
          $_SESSION['counter'] = 1;
        }

        $_SESSION['admin_name']=$adetial['Admin_Name'];
        header("Location: index.php");

      } 
      else
      {
        ?>
        <script>
            alert("invalid credentials");
        </script>
        <?php
        header("Location: login.php");
      }
    } 
    else
     {
        ?>
        <script>
            alert("invalid credentials");
        </script>
        <?php
      header("Location: login.php");    
    }
}
?>