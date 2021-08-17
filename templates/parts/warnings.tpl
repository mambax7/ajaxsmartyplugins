<{strip}>

<div class="data-<{if $messages_warning}>warning<{else}>error<{/if}>" id="messages"<{if !count($messages)}> style="display:none"<{/if}>>
	<p id="messages-title"><{if $messages}>Please note<{else}>Please fix following errors<{/if}>:</p>
	<ul id="messages-list">
		<{foreach from=$messages item=message}>
			<li>{$message}</li>
		<{/foreach}>
	</ul>
</div>

<{/strip}>
