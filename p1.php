<!DOCTYPE HTML>
<HTML LANG = "EN">
    
<HEAD>
    <META CHARSET ="UTF-8">
    <META NAME = "VIEWPORT" content ="WIDTH=DEVICE-">
    <TITEL>MARKSHEET</TITEL>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  
    <BODY>
<?php
$MP = 88;
$CC = 80;
$CS = 79;
$IP = 77;

?>
  <H1> SEM 6 MARKSHEET </H1>

  <TABLE class="table table-striped-columns">
      <TR>
          <TH>SUBJECT</TH>
          <TH>MARKS</TH>
      </TR>
      
      <TR>
          <TD> MOBILE PROGRAMING </TD>
          <TD> <?PHP ECHO $MP;?>
        </TR>

        <TR>
          <TD> CLOUD COMUPURTIG </TD>
          <TD> <?PHP ECHO $CC;?>
        </TR>

        <TR>
          <TD>CYBER SEURITY </TD>
          <TD> <?PHP ECHO $CS;?>
        </TR>

        <TR>
          <TD> IMAGE PROGRAMING </TD>
          <TD> <?PHP ECHO $IP;?>
        </TR>

        <TR>
            <TD> TOTAL </TD>
            <TD> <?PHP ECHO $MP+$CC+$CS+$IP; ?>
        </TR>
    
        <TR>
             <TD>PERVENTAGE </TD>
             <TD> <?PHP  ECHO ($MP+$CC+$CS+$IP)/4; ?>
        </TR>

        <TR>
             <TD> GRADE </TD>
             <TD><?PHP ECHO "B"; ?>
        </TR>

</TABLE>
</BODY>