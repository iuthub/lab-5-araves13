<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
            <?php 
            if($_REQUEST["name"]==""||$_REQUEST["creditcard"]==""||$_REQUEST["card"]==""){ ?>
            <h1>Sorry</h1>
            <br>You didn't fill out the form completely.
            <a href="buyagrade.html">Try again?</a>
            <?php 
            }
            else{ ?>
		<h1>Thanks, sucker!</h1>

		<p>Your information has been recorded.</p>

		<dl>
			<dt>Name</dt>
                        <dd><?php
                        echo $_POST["name"];?>    
                        </dd>

			<dt>Section</dt>
			<dd><?php
                        echo $_POST["section"];?>   </dd>

			<dt>Credit Card</dt>
			<dd><?php
                        echo $_POST["creditcard"];?><br>
                        <?php 
                        echo $_POST["card"];?>
                        </dd>
		</dl>
                <?php 
                $myfile=fopen("suckers.txt","a") or die("Unable to open file!");
                $name=$_POST["name"];
                $section=$_POST["section"];
                $creditcard=$_POST["creditcard"];
                $card=$_POST["card"];
                $txt="$name;$section;$creditcard;$card\n";
                fwrite($myfile, $txt);
                fclose($myfile);
                ?>
                <pre>
<p>Here are all the suckers submitted here:</p>
<?php
                    $myfile1= fopen("suckers.txt","r");
echo fread($myfile1, filesize("suckers.txt"));
                    fclose($myfile1);
                   ?>
                </pre>
            <?php }?>
	</body>
</html>