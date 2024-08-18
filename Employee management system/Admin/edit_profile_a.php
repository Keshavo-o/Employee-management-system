<?php include_once'header.php'?>
<?php include_once'nav_bar.php'?>
<h2 align="center" style="font-family:Verdana, Geneva, Tahoma, sans-serif;">
EDIT YOUR PROFILE
</h2>
<form action="">
<table class="table table-dark table-hover" style="font-family:Verdana, Geneva, Tahoma, sans-serif;">
    <tr table >
    <td >
        <img width="200px" class="img-thumbnail" src="../Images/ryan.jpeg" alt="">

    </td>
    <td>
    <button style="margin-top:70px;" type="submit" class="btn btn-primary">
            Submit
    </button>
    </td>
    </tr>
    <tr>
        <td >
             Employee ID:
        </td>
        <td>
             <input type="text" disabled value="#1-ADMIN">
        </td>
    </tr>
    <tr>
        <td>
             Name:
        </td>
        <td>
             <input type="text" value="Keshav Verma" disabled>
        </td>
    </tr>
    <tr>
        <td>
             Department:
        </td>
        <td>
             <input type="text" value="ADMIN" disabled>
        </td>
    </tr>   
        <td>
             Email:
        </td>
        <td>
             <input type="text" value="keshav@gmail.com">
        </td>
    </tr>
    <tr>
        <td>
             Phone:
        </td>
        <td>
             <input type="text" value="1234567890">
        </td>
    </tr>
    <tr>
        <td>
             Password:
        </td>
        <td>
             <input type="text" value="Keshav@123" disabled>
        </td>
    </tr>
    <tr>
        <td>
             Date of Joining:
        </td>
        <td>
             <input type="date" value="2021-07-01" disabled>
        </td>
    </tr>
    <tr>
        <td>
             Skills:
        </td>
        <td>
             <input type="text" value="HTML,CSS,JS,C++,C,MySQL,Bootstrap,Python">
        </td>
    </tr>
    <tr>
        <td>
             Experience:
        </td>
        <td>
             <input type="text" value="2 years" disabled>
        </td>
    </tr>

</table>
</form>
<?php include_once'footer.php'?>