<?php
   if (isset($_POST["submit"])) {
      $file = simplexml_load_file("$books.xml");
      $child = $file->addChild("book");
      $child->addChild("name", $_POST["name"]);
      $child->addChild("publisher", $_POST["publisher"]);
      $child->addChild("isbn", $_POST["isbn"]);
      $child->addChild("price", $_POST["price"]);
      $child->addChild("image", $_POST["resources/"]);
      $child->addChild("cat", $_POST["category"]);
      $child->addChild("des", $_POST["description"]);
   }
?>
<html>
<head>
	<title>Books</title>
</head>
<body>
    <form action="" method="post" style="width: 600px;">
	    <fieldset style="background-color: white;">
	    	<table align="center">
	    		<h1 align="center"> Add Books <h1>
	    		<tr style="line-height: 60px;">
	    			<td align="right">
	    				Book Name:
	    			</td>
	    			<td>
	    				<input type="text" name="bname">
	    				
	    			</td>
	    		<tr style="line-height: 60px;">
	    			<td align="right">
	    				Category:
	    			</td>
	    			<td>
	    			<select>
					<option> Architecture </option>
					<option> Sports </option>
					<option> Astrology </option>
					<option> Business </option>
					</select>
	    			</td>
	    		</tr>
	    		<tr style="line-height: 60px;">
	    			<td align="right">
	    				<p>Description:</p>
	    			</td>
	    			<td>
	    				<input type="text" name="text">
	    				
	    			</td>
	    		</tr>
	    		<tr style="line-height: 60px;">
	    			<td align="right">
	    				Publisher:
	    			</td>
	    			<td>
	    				<input type="text" name="pname">
	    			
	    			</td>
	    		</tr>
	    		<tr style="line-height: 60px;">
	    			<td align="right">
	    				ISBN:
	    			</td>
                    <td>
                    	<input type="text" name="ename">
                    	
                    </td>
	    		</tr>
	    		<tr style="line-height: 60px;">
	    			<td align="right">
	    				Pages:
	    			</td>
	    			<td>
	    				<input type="number" name="number">
	    				
	    			</td>
	    		</tr>
	    		<tr style="line-height: 60px;">
	    			<td align="center">
	    			    Price:
	    			</td>
	    			<td>
	    				<input type="number" name="price">
	    			</td>
	    		</tr>
	    		
	    	
	    	</table>
	    </fieldset>
    </form>
</body>
</html>
