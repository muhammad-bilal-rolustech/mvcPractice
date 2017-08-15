Add Teacher
<form action="../teacher/createTeacher" method="post">
 <p>Teacher    ID: <input type="text" name="t_id" /></p>
 <p>Teacher NAME: <input type="text" name="t_name" /></p>
 <p>Teacher ADDRESS: <input type="text" name="t_address" /></p>
 <p>Teacher Department: <input type="text" name="t_dept" /></p>


 <p><input type="submit" /></p>
</form>


<a href="../teacher/showAllTeacher">Show All Teachers</a><br><br>

Update Teacher
<form action="../teacher/updateTeacher" method="post">
 <p>Teacher    ID: <input type="text" name="t_id" /></p>
 <p>Teacher NAME: <input type="text" name="t_name" /></p>
 <p>Teacher ADDRESS: <input type="text" name="t_address" /></p>
 <p>Teacher Department: <input type="text" name="t_dept" /></p>


 <p><input type="submit" /></p>
</form>
<br>
Delete Teacher
<form action="../teacher/deleteTeacher" method="post">
 <p>Teacher    ID: <input type="text" name="t_id" /></p>

 <p><input type="submit" /></p>
</form>
