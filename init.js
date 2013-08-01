function copyLink(url) {
	try {
		window.prompt("Copy to Clipboard: Ctrl-C, Enter",url);

	} catch (e) {
		exception_error("copyLink", e);
	}
}


