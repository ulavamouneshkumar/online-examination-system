<!DOCTYPE HTML>
<html>  
<body bgcolor="#33FFF0">
<form style="text-align: center;" action="createTimeTable1.php" method="POST">
<div class="form-group">
<br>
    <font size= "20px"><label>DAY</label></font>
<select name="day"></br>
       <font size="20px"><option selected disabled>Select</option></font>
        <option value="MONDAY">MONDAY</option>
        <option value="TUESDAY">TUESDAY</option>
        <option value="WEDNESDAY">WEDNESDAY</option>
        <option value="THURSDAY">THURSDAY</option>
        <option value="FRIDAY">FRIDAY</option>
        <option value="SATURDAY">SATURDAY</option>
    </select>
</div><font size="20px">
Period1 : <input type="text" name="1" required><br>
Period2: <input type="text" name="2" required><br>
Period3: <input type="text" name="3" required><br>
Period4: <input type="text" name="4" required><br>
Period5: <input type="text" name="5" required><br>
Period6: <input type="text" name="6" required><br>
Period7: <input type="text" name="7"required><br>
<input type="submit" ><br><br>
<a  href="delete.php"> <input type="button" name="del table" id="timetable" value=" del table"></a>
</font>
</form>
</body>
</html>
