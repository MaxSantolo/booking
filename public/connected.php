<?php
$hostname='213.215.209.146';
$dbname = 'crm';
$username='root';
$password='fm105pick';
$port=3306;

$conn = new mysqli($hostname, $username, $password, $dbname,$port) ;
if ($conn->connect_error) {
    die('Errore di connessione (' . $conn->connect_errno . ') '
        . $conn->connect_error);
} else {
	// echo 'ciao';
	$result = $conn->query("
			select wifi_wifi_accounts.*, email_address, email_account.name as cliente from wifi_wifi_accounts
left join wifi_wifi_accounts_accounts_c on wifi_wifi_accounts.id = wifi_wifi_accounts_accounts_c.wifi_wifi_accounts_accountswifi_wifi_accounts_idb
left join email_account on wifi_wifi_accounts_accountsaccounts_ida = email_account.id
where wifi_wifi_accounts.deleted = '0' and wifi_wifi_accounts_accountsaccounts_ida is not NULL
			")->fetch_assoc();
			
			var_dump ($result);
	
	
}
