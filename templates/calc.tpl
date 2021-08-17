<h2>Calculator</h2>
<p>This is very-very-very simple calculator which can only to sum two integers.</p>
<p><input name="a" id="a" size="3"> + <input name="b" id="b" size="3"> = <input id="result" size="5" readonly="readonly"></p>
<p><input type="button" onclick="<{ajax_call function="calculate" params_func="calculate.params" callback="calculate.cb"}>" value="Calculate"></p>
<script type="text/javascript">
    <{literal}>
    var calculate = {
        params: function () {
            return {
                a: $F("a"),
                b: $F("b")
            }
        },
        cb: function (originalRequest) {
            $("result").value = originalRequest.responseText;
        }
    }
    <{/literal}>
</script>
