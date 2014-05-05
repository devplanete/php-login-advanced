
<?php
	// specific file given
	if (isset($_REQUEST['file'])) {
		$file = CONTENT_DIRECTORY . $_REQUEST['file'];
		$finfo = finfo_open(FILEINFO_MIME_TYPE);
		header('Content-Type: ' . finfo_file($finfo, $file));
		header('Content-Description: File Transfer');
		header('Content-Disposition: attachment; filename="' . basename($file) . '"');
		header('Expires: 0');
		header('Cache-Control: must-revalidate');
		header('Pragma: public');
		header('Content-Length: ' . filesize($file));
		ob_clean();
		flush();
		readfile($file);
	}
	// specific file NOT given, show available contents
	else {
		$found = content_search(CONTENT_DIRECTORY);
		if (!$found)
			echo "no content";
	}

	function content_search($dir) {
		$found = false;
		$files = array();
		$dh = opendir($dir);
		// add all found files in directory to array
		while(false != ($file = readdir($dh))) {
			if ($file != "." && $file != ".." && $file != ".htaccess") {
				$files[] = $file;
			}
		}
		// sort
		natsort($files);
		// itertate over each file/directory
		foreach ($files as $file) {
			if (is_dir($dir . $file)) {
				// show header for directory
				echo "<br/><b>" . str_replace("_", " ", $file) . "</b><br/>";
				// dive into this directory
				content_search($dir . $file . "/");
			} else {
				// show link to file
				echo "<a target=\"_blank\" href=\".?content&file=" . str_replace(CONTENT_DIRECTORY, "", $dir) . $file . "\">" . $file . "</a><br/>";
			}
			$found = true;
		}
		return $found;
	}
?>
