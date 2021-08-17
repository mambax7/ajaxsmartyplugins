<h2>Simple AJAX chat example</h2>
<div style="overflow:auto;height: 200px;border: 1px solid #5b6a90" id="chat_log"></div>
Your message: <input id="message" size="80" class="edit">
<input type="button" value="Send" id="send" onclick="<{ajax_call method="post" function="add_message" params_func="Chat.getParams" callback="Chat.onMessageSent"}>">
<script type="text/javascript">
<{literal}>
var Chat = {
  initialize: function() {
    new PeriodicalExecuter(this.update, 1);
    Event.observe($("message"), "keypress", this.onKeyPress, false);
  },

  update: function() {
<{/literal}>
    <{ajax_update update_id="chat_log" function="get_messages"}>
<{literal}>
  },

  getParams: function() {
    return { message: $F("message") }
  },

  onKeyPress: function(e) {
    if (e.keyCode == Event.KEY_RETURN) $("send").click();
  },

  onMessageSent: function() {
    Field.clear("message");
    Field.focus("message");
  }
}
Chat.initialize();
<{/literal}>
</script>

