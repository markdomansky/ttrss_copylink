<?php
class CopyLink extends Plugin {
	private $host;

	function about() {
		return array(1.0,
			"Copy article link to clipboard",
			"markdomansky");
	}

	function init($host) {
		$this->host = $host;

		$host->add_hook($host::HOOK_ARTICLE_BUTTON, $this);
	}

	function get_js() {
		return file_get_contents(dirname(__FILE__) . "/init.js");
	}

	function hook_article_button($line) {
		return "<img src=\"plugins/copylink/clipcopy.png\"
					class='tagsPic' style=\"cursor : pointer\"
					onclick=\"copyLink('".htmlspecialchars($line["link"])."')\"
					alt='Copy Link to Clipboard' title='Copy to Clipboard'>";
	}

	function api_version() {
		return 2;
	}

}
?>
