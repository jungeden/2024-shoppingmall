<?

echo("
   <table border=0 width=600>
   <tr><td align=center   colspan=2><h1>자료실</h1></td></tr>
   <form method=post action=pds-process.php?board=$board enctype='multipart/form-data'>
   <tr>
   <td align=right><font size=2>등록자</font></td>
   <td><input type=text name=writer size=15></td>
   </tr>
   <tr>
   <td align=right><font size=2>타이틀</font></td>
   <td><input type=text name=title size=60 maxsize=100></td>
   </tr>
   <tr>
   <td align=right><font size=2>첨부화일</font></td>
   <td><input type=file name='userfile' size=45 maxlength=80></td>
   </tr>
   <tr>
   <td align=right><font size=2>암 호</font></td>
   <td><input type=password name=passwd size=15></td>
   </tr>
   <tr align=center>
   <td colspan=2><input type=submit value=등록>
   <input type=reset value=지우기></td>
   </tr>
   </table>
   </form>
");

?>
