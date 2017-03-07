<?
error_reporting(E_ALL);
ini_set('display_errors', True);
date_default_timezone_set('Europe/Warsaw');

echo "
<!DOCTYPE html>
<html>
<head>
        <meta charset=\"UTF-8\">
	<style type=\"text/css\">
  	 p { font-family: Verdana; font-size: 20pt; text-align: center; line-height: 2.0em;}
 	</style>
        <title>Homework</title>
</head>
<body>
<p><a href=\"http://$_SERVER[SERVER_NAME]:8080\">HTTP page on port 8080</a></p>
<p><a href=\"https://$_SERVER[SERVER_NAME]:8443\">HTTPS page on port 8443</a></p>
<p><a href=\"http://$_SERVER[SERVER_NAME]:8888/odata\">OData app page on port 8888</a></p>
<p><a href=\"http://$_SERVER[SERVER_NAME]:8888/manager/html\">Tomcat manager page on port 8888 (login: tomcat password: admin)</a></p>
<p><a href=\"http://$_SERVER[SERVER_NAME]:8080/tomcat/odata\">OData app page over reverse proxy on port 8080</a></p>
<p><a href=\"http://$_SERVER[SERVER_NAME]:8080/nagios3\">Nagios (login: nagiosadmin password: q)</a></p>
<p><a href=\"http://$_SERVER[SERVER_NAME]:8080/cgi-bin/nagios3/status.cgi?host=all\">Service Status Details For All Hosts (look for TOMCAT_SESSIONS service)</a></p>
<p>Command for running stress test:<br />ab -n 1000 -c 5 http://$_SERVER[SERVER_NAME]:8080/tomcat/odata/<br />(TOMCAT_SESSIONS should grow and trigger the alarm)</p>
<p>Use 'Expire sessions' on Tomcat manager page to turn off the alarm</p>
";


echo "<p>Vagrantfile</p>";
echo "<pre>"; include '/vagrant/Vagrantfile'; echo "</pre>";
echo "<p>playbook.yml</p>";
echo "<pre>"; include '/vagrant/playbook.yml'; echo "</pre>";
echo "<p>tomcat-proxypass</p>";
echo "<pre>"; include '/vagrant/tomcat-proxypass'; echo "</pre>";

echo "</body></html>";

?>
