<?php

/*
                          /-------------------------------------------------------------------------\
                         |-------------------------MINE FRAMEWORK v0.1 ALPHA-------------------------|
                          \-------------------------------------------------------------------------/ 
*/



/*
|
| ------------------------- HEADERS
|
*/

define('WEBSITE', 'online'); // online/offline

define('ENVIRONMENT', 'development'); // development/test/released

$resources_path = "src";
$plugins_path = "plugins";



/*
|
| ------------------------- ACTIVATED PLUGINS
|
*/

$array = array('sql', 'users');

/*
|
| ------------------------- ONLINE/OFFLINE
|
*/

if (!defined('WEBSITE'))
{
       exit('website error');
}
else
{
    switch (WEBSITE)
    {
        case 'online':
        case 'offline': 
            exit('website offline');
    }
    
/*
|
| ------------------------- ERROR REPORTING
|
*/

if (defined('ENVIRONMENT'))
{
	switch (ENVIRONMENT)
	{
		case 'development':
			error_reporting(E_ALL);
		break;
	
		case 'testing':
		case 'production':
			error_reporting(0);
		break;

		default:
			exit("L'application n'est pas correctement configurée.");
	}
}


/*
|
| ------------------------- CORPS HTML
|
*/
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="">
  </head>
  
  <body>
  
    <header>
        <?php           
            include($resources_path."/parts/header.php");    
        ?>
    </header>
    
    <section>
        <?php           
            include($resources_path."/parts/main.php");    
        ?>
    </section>
    
    <footer>
        <?php           
            include($resources_path."/parts/footer.php");    
        ?>
    </footer>
    
  </body>
</html>
