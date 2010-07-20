<?php

$result = array();

$type = (!empty($_POST['type'])) ? $_POST['type'] : NULL ;
$result['type'] = $type;

switch ($type) {
	case 'status_change' :
		$result['project_id'] = (!empty($_POST['project_id'])) ? 	(int)$_POST['project_id'] : NULL ;
		$result['word_count'] = (!empty($_POST['word_count'])) ? 	(int)$_POST['word_count'] : NULL ;
		$result['source'] = (!empty($_POST['source'])) ? 	$_POST['source'] : NULL ;
		$result['target'] = (!empty($_POST['target'])) ? 	$_POST['target'] : NULL ;
		$result['credits'] = (!empty($_POST['credits'])) ? (int)$_POST['credits'] : NULL ;
		$result['project_status'] = (!empty($_POST['project_status'])) ? $_POST['project_status'] : NULL ;
		$result['estimate_finish'] = (!empty($_POST['estimate_finish'])) ? $_POST['estimate_finish'] : NULL ;
		$result['translation_ready'] = (!empty($_POST['translation_ready'])) ? (bool)$_POST['translation_ready'] : NULL ;
		$result['project_url'] = (!empty($_POST['project_url'])) ? $_POST['project_url'] : NULL ;
		break;
	case 'translation_submitted':
		$result['project_id'] = (!empty($_POST['project_id'])) ? (int)$_POST['project_id'] : NULL ;
		$result['original_content'] = (!empty($_POST['original_content'])) ? base64_decode($_POST['original_content']) : NULL ;
		$result['translated_content'] = (!empty($_POST['translated_content'])) ? base64_decode($_POST['translated_content']) : NULL ;
		$result['content_type'] = (!empty($_POST['content_type'])) ? $_POST['content_type'] : NULL ;
		break;
		
}

ob_start();

print_r($result);

$ob = ob_get_clean();
ob_end_clean();

$h = fopen('/tmp/callback','a');
fwrite($h,"*************\n");
fwrite($h,date('Y-m-d H:i:s')."\n");
fwrite($h,$ob);
fwrite($h,"\n*************\n\n");
fclose($h);

?>