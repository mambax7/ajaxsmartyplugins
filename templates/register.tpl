<h2>Please, fill form data</h2>
<{ajax_form method="post" id="form_register"}>
	<table width="50%" border="0">
	  <tr>
	    <td colspan="2">
	      <{include file="db:parts/warnings.tpl"}>
	    </td>
	  </tr>
		<tr>
			<td class="data-field"><span class="data-mark">*</span><label for="login">Login</label>:</td>
			<td><input type="text" id="login" name="login" class="edit" /></td>
		</tr>
		<tr>
			<td class="data-field"><span class="data-mark">*</span><label for="password">Password</label>:</td>
			<td><input type="password" id="password" name="password" class="edit" /></td>
		</tr>
		<tr>
			<td class="data-field"><span class="data-mark">*</span><label for="email">E-mail</label>:</td>
			<td><input type="text" id="email" name="email" class="edit" /></td>
		</tr>
		<tr>
			<td class="data-field">&nbsp;&nbsp;<label for="firstname">First Name</label>:</td>
			<td><input type="text" id="firstname" name="firstname" class="edit" /></td>
		</tr>
		<tr>
			<td class="data-field">&nbsp;&nbsp;<label for="lastname">Last Name</label>:</td>
			<td><input type="text" id="lastname" name="lastname" class="edit" /></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" value="Try to Register" />
			</td>
		</tr>
	</table>
<{/ajax_form}>
