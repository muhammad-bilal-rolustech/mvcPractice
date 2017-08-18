Add Course
<form action="../course/createCourse" method="post">
 <p>Course    ID: <input type="text" name="c_id" /></p>
 <p>Course NAME: <input type="text" name="c_name" /></p>
 <p>Course Department: <input type="text" name="c_dept" /></p>


 <p><input type="submit" /></p>
</form>

<a href="../course/showAllCourse">Show All Courses</a><br><br>


Update Course
<form action="../course/updateCourse" method="post">
 <p>Course    ID: <input type="text" name="c_id" /></p>
 <p>Course NAME: <input type="text" name="c_name" /></p>
 <p>Course Deoartment: <input type="text" name="c_dept" /></p>


 <p><input type="submit" /></p>
</form>


Delete Course

Add Course
<form action="../course/deleteCourse" method="post">
 <p>Course    ID: <input type="text" name="c_id" /></p>


 <p><input type="submit" /></p>
</form>
All Student of this Course<br><br>

<form action="../course/showAll" method="post">
 <p>Course    ID: <input type="text" name="id" /></p>

 <p><input type="submit" /></p>
</form>
