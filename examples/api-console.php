<?php
	$sandbox = 'https://sandbox.onehourtranslation.com';
	$prod = 'https://www.onehourtranslation.com';

	$account_id = 269; //demo user
	$secret_key = '5a68561984276108fa42d7cffbbf91a5'; //demo user
	
	
	/*
	 * Switch between "$prod" to use production or "$sandbox" to use sandbox environment.
	 */
	$url = $sandbox;

?>
<h1>OneHourTranslation API Test Console</h1>
<div>Submit a New Project:</div>
<form method="post" action="<?php echo $url?>/api/1/project/new/" target="resIframe">
	URL: <input type="text" name="url" value="<?php echo $url?>" readonly="readonly" disabled="disabled"/> <br />
	Account ID: <input type="text" name="account_id" value="<?php echo $account_id?>" /> <br />
	Secret Key: <input type="text" name="secret_key" value="<?php echo $secret_key?>"  /><br />
	Source: <input type="text" name="source" /><br />
	Target: <input type="text" name="target" /><br />
	Content: <textarea name="content" cols="50" rows="20"></textarea><br />
	Word Count: <input type="text" name="word_count" /><br />
	Notes: <input type="text" name="notes" /><br />
	Content Type: <input type="text" name="content_type" value="text/plain"/><br />
	Callback URL: <input type="text" name="callback_url" /><br />
	
	User Reference: <input type="text" name="user_reference" value=""/><br />
	Project Reference: <input type="text" name="project_reference" value=""/><br />
	<?php for($i=0;$i<10;$i++) : ?>
		Custom <?php echo $i?>: <input type="text" name="custom<?php echo $i?>" value=""/><br />
	<?php endfor?>
	
	<input type="submit" value="Submit a new Project"/>
</form>




<iframe name="resIframe" style="width: 400px;height: 300px;border: 2px solid black;"></iframe>

