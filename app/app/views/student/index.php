Add Student
<form action="../student/createStudent" method="post">
 <p>Student    ID: <input type="text" name="id" /></p>
 <p>Student NAME: <input type="text" name="name" /></p>
 <p>Student DEGREE: <input type="text" name="degree" /></p>
 <p>Student ADDRESS: <input type="text" name="address" /></p>


 <p><input type="submit" /></p>
</form>
<a href="../student/showAllStudent">Show All Students</a><br><br>


Update Student
<form action="../student/updateStudent" method="post">
 <p>Student    ID: <input type="text"  name="id" /></p>
 <p>Student NAME: <input type="text" value="" name="name" /></p>
 <p>Student DEGREE: <input type="text" value="" name="degree" /></p>
 <p>Student ADDRESS: <input type="text" value="" name="address" /></p>


 <p><input type="submit" /></p>
</form>
Delete Student
<form action="../student/deleteStudent" method="post">
 <p>Student    ID: <input type="text" name="id" /></p>


 <p><input type="submit" /></p>
</form>
