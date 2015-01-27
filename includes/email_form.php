<form method="post" action="../cgi-sys/formmail.pl">		
	<input type="hidden" name="recipient" value="justin@herseydesigns.com">
	<input type="hidden" name="subject" value="Portfolio Contact">
	<input type="hidden" name="env_report" value="REMOTE_HOST,HTTP_USER_AGENT">  
	<input type="hidden" name="redirect" value="http://www.pair.com/sent.html">  
	<div class="col-8">
		<textarea name="message" rows="4" wrap="virtual" placeholder="What's your question?"></textarea>
		<input name="email" type="email" placeholder="Your email address" />
	</div>
	<div class="col-4">
		<input type="hidden" name="required" value="email,message">
		<button class="button" type="submit">Send question</button>
	</div>
</form>