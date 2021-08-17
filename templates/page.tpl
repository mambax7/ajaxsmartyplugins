<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251"/>
    <link rel="stylesheet" href="styles.css" type="text/css"/>
    <title><{$site_title}><{if $title}> | <{$title}><{/if}></title>
    <script type="text/javascript" src="<{$mod_url}>/js/prototype.js"></script>
    <script type="text/javascript" src="<{$mod_url}>/js/smarty_ajax.js"></script>
</head>
<body>
<div id="ajax-process"></div>
<div id="container">
    <div id="header">
        <h1>smarty_ajax &#151; AJAX-enabled Smarty plugins</h1>
        <p>This is demo site for the <a href="http://kpumuk.info/ajax/smarty_ajax/">smarty_ajax</a>. Please, choose the sample:</p>
        <ul>
            <li><a href="index.php">Introduction</a> &#151; update demonstration, library description</li>
            <li><a href="register.php">Register</a> &#151; form processing sample (registration form)</li>
            <li><a href="calc.php">Calculator</a> &#151; function call sample</li>
            <li><a href="chat.php">Chat</a> &#151; simple AJAX chat sample</li>
        </ul>
    </div>
    <div id="content">
        <{include file="db:$page_template.tpl"}>
    </div>
    <div id="footer">
        Copyright &copy; 2006 by Dmytro Shteflyuk
    </div>
</div>
</body>
</html>
