
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CSS Form Style</title>

<link href="form_style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<h3>Add Student</h3>
<form act ion="santosh.php" method="post" class="basic-grey">
    <h1>Student Form 
        <span>Student details</span>
    </h1>
    <label>
        <span>Student Name:</span>
        <input id="name" type="text" name="name" placeholder="Your Full Name" />
    </label>
    
    <label>
        <span>Student ID:</span>
        <input id="email" type="text" name="s_id" placeholder="Valid id" />
    </label>
    <label>
        <span>Branch:</span><select name="branch">
        <option value="CSE">CSE</option>
        <option value="IT">IT</option>
        </select>
    </label>
    
     <label>
        <span>Batch:</span><select name="batch">
        <option value="2013-14">2013-14</option>
        <option value="2014-15">2014-15</option>
        <option value="2015-16">2015-16</option>
        <option value="2016-17">2016-17</option>
        
         
         
         </select>
    </label>    
     <label>
        <span>&nbsp;</span> 
        <input type="submit" class="button" value="Send" /> 
    </label>    
    <!--p><a href="delete_student_data.php">Delete student data</p-->
</form>


</body>
</html>
