<h2>ajax_update</h2>
<p>This smarty function can be used for update some parts of web-page.</p>
<p>Sample usage:</p>
<pre><span class="def_HTML"><{literal}>&lt;a href=<span class="def_HTMLAttribute">"#"</span> onclick=<span class="def_HTMLAttribute">"{ajax_update update_id="intro_content"
  function="update_intro" params="page=about"}"</span>&gt;<span class="def_HTMLText">About</span>&lt;/a&gt;<{/literal}></span></pre>
<p>Possible parameters:</p>
<ul>
  <li><strong>url</strong> - url for AJAX-query (when no url was specified current one will be used)</li>
  <li><strong>method</strong> - query method (by default <i>get</i>, can be <i>get</i> or <i>post</i>)</li>
  <li><strong>update_id</strong> - id of HTML element for update</li>
  <li><strong>function</strong> - function which will be called</li>
  <li><strong>params</strong> - url-encoded parameters</li>
</ul>
