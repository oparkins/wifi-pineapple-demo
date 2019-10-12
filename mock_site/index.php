<?php
require_once('helper.php');
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
	<HTML>
		<head>
			<TITLE>New Mexico Tech Web Login</TITLE>
			<META http-equiv=Content-Type content="text/html; charset=windows-1252">
			<meta http-equiv="Pragma" content="no-cache">
			<meta http-equiv="Cache-Control" content="no-cache">
			<meta http-equiv="Expires" content="0">
			<STYLE type=text/css>BODY {
				FONT-SIZE: 11px; COLOR: #000000; FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif
			}
			TD {
				FONT-SIZE: 11px; COLOR: #000000; FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif
			}
			H3 {
				FONT-SIZE: 14px; COLOR: #000066; FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif
			}
			</STYLE>
		</head>
	<BODY>
	<center>
		<?php
			$img = '/root/portals/super_computing_challenge_portal/nmtbanner.jpg';
			$imageData = base64_encode(file_get_contents($img));
			// Format the image SRC:  data:{mime};base64,{data};
			$src = 'data: image/jpg;base64,'.$imageData;
			echo '<img height=54 width=723 align=center border=0 src="'.$src.'">';
		?>
    </center>
	<?php
		$img = '/root/portals/super_computing_challenge_portal/logo.jpg';
		$imageData = base64_encode(file_get_contents($img));
		// Format the image SRC:  data:{mime};base64,{data};
		$src = 'data: image/jpg;base64,'.$imageData;
		echo '<img width=150 height=150  src="'.$src.'">';
	?>
    <H3>Welcome to the New Mexico Tech Guest Network for Supercomputing Challenge 2019-2020 </H3>
	<HR>
	<BR>Use your&nbsp; username and password used during Supercomputing Challenge registration to obtain access.&nbsp; 
	<FORM name=weblogin method="POST" action="/captiveportal/index.php">
	<input type="hidden" name="target" value="supercomputingchallenge.org">
	<input type="hidden" name="clientName" value="<?=getClientHostName($_SERVER['REMOTE_ADDR']);?>">
	<TABLE cellPadding=3 width=217 border=0>
  	<TBODY>
  	<TR>
    	<TD align=right>Username:</TD>
    	<TD><INPUT type="text" maxLength=15 size=15 name="username"></TD></TR>
  	<TR>
    	<TD align=right>Password:</TD>
    	<TD><INPUT type="password" maxLength=15 size=15 name="key"></TD></TR>
  	<TR>
    	<TD align=right colSpan=2><INPUT onclick="this.value = 'Submitted'" type=submit value=" Login ">
	</TD></TR></TBODY></TABLE></FORM>
	<BR>
	<B>WARNING:
	</B>Access to the information and contents available through this network are
	proprietary and confidential. Only authorized users may access this system. You
	may use the information and contents solely in the manner for which it is
	intended and authorized. We reserve the right to monitor your use of this
	network at any time and in any manner. Misuse or unauthorized access may result
	in legal prosecution, penalties or enforcement of regulations governing conduct
	and terms and conditions of employment. 
	</BODY>
</HTML>
