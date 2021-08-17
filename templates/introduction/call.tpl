<h2>ajax_call</h2>
<p>This smarty function can be used for call PHP function on server side and retrieve its output.</p>
<p>Sample usage:</p>
<pre><span class="def_HTML"><{literal}>{ajax_call function="calculate" params_func="calc_params" callback="calc_cb"}<{/literal}></span></pre>
<p>Possible parameters:</p>
<ul>
  <li><strong>url</strong> - url for AJAX-query (when no url was specified current one will be used)</li>
  <li><strong>method</strong> - query method (by default <i>get</i>, can be <i>get</i> or <i>post</i>)</li>
  <li><strong>function</strong> - function which will be called</li>
  <li><strong>params</strong> - url-encoded parameters</li>
  <li><strong>callback</strong> - javascript function which will be called when query will be completed</li>
  <li><strong>params_func</strong> - javascript function used when you need custom parameters calculated on client side</li>
</ul>
