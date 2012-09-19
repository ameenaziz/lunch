<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>go4Lunch | admin</title>
<link rel="stylesheet" href="../styles/lunch.css" type="text/css" />
<script type="text/javascript" src="../js/admin.js"></script>
</head>

<body>
    <div class="main">
    	<h1>Go4lunch</h1>
        <h2>Create some choices</h2>
        	<form  class="locations" name="rep" method="post" action="index.php">

				<ul class="clearfix">
                	<li>
                        <select id="category_name" name="category_name" multiple="multiple" size="5" style="" width="150px">
                            <option value="Tesco">Tesco</option>
                            <option value="GoodgeSt">GoodgeSt</option>
                            <option value="Sainburys">Sainburys</option>
                            <option value="Subway">Subway</option>
                            <option value="Pret">Pret</option>
                            <option value="Chinese">Chinese</option>
                        </select>
                    </li>
                    <li>
                        <input value="&gt;&gt;" onclick="move('right', 'rep')" type="button"><br>
                        <input value="&lt;&lt;" onclick="move('left', 'rep')" type="button">
                    </li>
                    <li>
                        <select id="category_selected" name="category_selected" multiple="multiple" size="5" style="" width="150px">
                        </select>
                    </li>
                </ul>
                <div>
                	<input class="doneBtn" type="button" value="done" />
                </div>
             </form>   
    </div>
</body>
</html>
