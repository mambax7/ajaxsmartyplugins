<h2>ajax_form</h2>
<p>This smarty block can be used for submit Web-forms without post-back.</p>
<p>Sample usage:</p>
<pre><span class="def_HTML"><{literal}>{ajax_form method="post" id="form_register"}<{/literal}></span></pre>
<p>Possible parameters:</p>
<ul>
  <li><strong>url</strong> - url for AJAX-query (when no url was specified current one will be used)</li>
  <li><strong>method</strong> - query method (by default <i>get</i>, can be <i>get</i> or <i>post</i>)</li>
  <li><strong>params</strong> - url-encoded parameters</li>
  <li><strong>id</strong> - form id</li>
  <li><strong>callback</strong> - javascript function which will be called when query will be completed</li>
</ul>
