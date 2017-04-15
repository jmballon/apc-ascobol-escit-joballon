<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('news/create'); ?>    
    <table>
        <tr>
            <td><label for="Complete Name">Complete Name</label></td>
            <td><input type="input" name="Complete_Name" size="50" /></td>
        </tr>
        <tr>
            <td><label for="Nickname">Nickname</label></td>
            <td><input type="input" name="Nickname" size="50"></td>
        </tr>
		<tr>
            <td><label for="Email Address">Email Address</label></td>
            <td><input type="input" name="Email_Address" size="50"></td>
        </tr>
		<tr>
            <td><label for="Home Address">Home Address</label></td>
            <td><textarea name="Home_Address" rows = "2" cols = "52"></textarea></td>
        </tr>
		<tr>
            <td><label for="Gender">Gender</label></td>
            <td><input type="input" name="Gender" size="2"></td>
        </tr>
		<tr>
            <td><label for="Cellphone Number">Cellphone Number</label></td>
            <td><input type="input" name="Cellphone_Number" size="50"></td>
        </tr>
		<tr>
            <td><label for="Comments">Comments</label></td>
             <td><textarea name="Comments" rows = "5" cols = "52"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Create news item" /></td>
        </tr>
    </table>    
</form>