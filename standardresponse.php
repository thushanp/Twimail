<?php
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
echo "
<Response>
	<Dial hangupOnStar="true" action=" . $_REQUEST['Digits'] . "
		<Conference waitUrl="http:twimlets.com/holdmusic?Bucket=com.twilio.music.ambient">MyConference</Conference>
	</Dial>
</Response>";
?>