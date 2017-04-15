<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('news/edit/'.$news_item['id']); ?>
    <table>
                <tr>
            <td><label for="Complete Name">Complete Name</label></td>
            <td><input type="input" name="Complete_Name" size="50" value="<?php echo $news_item['Complete_Name'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="text">Nickname</label></td>
            <td><input type="input" name="Nickname" size="50"></td>
        </tr>
		<tr>
            <td><label for="text">Email Address</label></td>
            <td><input type="input" name="Email_Address" size="50"></td>
        </tr>
		<tr>
            <td><label for="text">Home Address</label></td>
            <td><textarea name="Home_Address" rows = "2" cols = "52"></textarea></td>
        </tr>
		<tr>
            <td><label for="text">Gender</label></td>
            <td><input type="input" name="Gender" size="2"></td>
        </tr>
		<tr>
            <td><label for="text">Cellphone Number</label></td>
            <td><input type="input" name="Cellphone_Number" size="50"></td>
        </tr>
		<tr>
            <td><label for="text">Comments</label></td>
             <td><textarea name="Comments" rows = "5" cols = "52"></textarea></td>
        </tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit news item" /></td>
        </tr>
    </table>
</form>