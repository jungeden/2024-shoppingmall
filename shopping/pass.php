<?
session_start();
if (isset($_COOKIE['userid'])) {
    $userid = $_COOKIE['userid'];
  
} else {
    $userid='';
}

$userpasswd=$_POST['userpasswd'];
$con = mysqli_connect("localhost", "root", "0000", "shop");

$getpasswd = mysqli_query($con, "SELECT * FROM user WHERE userid='$userid'");
$row = mysqli_fetch_assoc($getpasswd);
$passwd = $row['userpasswd'];


if($passwd !== $userpasswd) {
    echo ("<script>
        window.alert('비밀번호가 일치하지 않습니다.');
        window.location.href = 'passPage.php?userid=" . urlencode($userid) . "&page=" . urlencode($page) .  "';
    </script>");
    exit;
} 

mysqli_close($con);
echo ("<meta http-equiv='Refresh' content='0; url=modifyuserPage.php?userid=$userid'>");

// switch($page) {
//     case 'usermodify':
//         echo ("<meta http-equiv='Refresh' content='0; url=modifyuserPage.php?userid=$userid&userpasswd=$passwd&username=$username&userphone=$userphone&useremail=$useremail&userbirth=$userbirth&userjoindate=$userjoindate&zipcode=$zipcode&address1=$address1&address2=$address2&approved=$approved'>");
//         break;
//     case 'passwdmodify':
//         echo ("<meta http-equiv='Refresh' content='0; url=modifypasswdPage.php?userid=$userid'>");
//         break;
// }


?>