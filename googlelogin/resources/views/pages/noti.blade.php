<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>jquery</title>
	<script src="//code.jquery.com/jquery-3.1.1.slim.min.js"></script>
</head>
<style type="text/css">
	.formRow {
  position: relative;
  width: 100%;
  /*display: none;*/
  border: none;
}

.formRow--item {
  display: block;
  width: 100%;
}

.formRow--input {
  position: relative;
  padding: 15px 20px 11px;
  width: 100%;
  outline: none;
  border: solid 1px #95989a;
  border-radius: 4px;
  color: #2c3235;
  letter-spacing: .2px;
  font-weight: 400;
  font-size: 16px;
  resize: none;
  -webkit-transition: all .2s ease;
  transition: all .2s ease;
}

.formRow--input-wrapper {
  position: relative;
  display: block;
  width: 20%;
}

.formRow--input-wrapper.active .placeholder {
  top: -5px;
  background-color: #ffffff;
  color: #291bcc;
  text-transform: uppercase;
  letter-spacing: .8px;
  font-size: 11px;
  line-height: 14px;
  -webkit-transform: translateY(0);
  transform: translateY(0);
}

.formRow--input-wrapper.active .formRow--input:not(:focus):not(:hover) ~ .placeholder { color: #fec8c9; }

.formRow--input-wrapper .formRow--input:focus, .formRow--input-wrapper .formRow--input:hover { border-color: #f99ccfd; }

.formRow .placeholder {
  position: absolute;
  top: 50%;
  left: 10px;
  display: block;
  padding: 0 10px;
  color: #95989a;
  white-space: nowrap;
  letter-spacing: .2px;
  font-weight: normal;
  font-size: 16px;
  -webkit-transition: all, .2s;
  transition: all, .2s;
  -webkit-transform: translateY(-50%);
  transform: translateY(-50%);
  pointer-events: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
</style>
<body>
<fieldset class="formRow">
  <div class="formRow--item">
    <label for="firstname" class="formRow--input-wrapper js-inputWrapper">
      <input type="text" class="formRow--input js-input" id="firstname" placeholder="First name">
    </label>
  </div>
</fieldset>
</body>
</html>
<script type="text/javascript">
	var $inputItem = $(".js-inputWrapper");
$inputItem.length && $inputItem.each(function() {
  var $this = $(this),
      $input = $this.find(".formRow--input"),
      placeholderTxt = $input.attr("placeholder"),
      $placeholder;
  
  $input.after('<span class="placeholder">' + placeholderTxt + "</span>"),
  $input.attr("placeholder", ""),
  $placeholder = $this.find(".placeholder"),
  
  $input.val().length ? $this.addClass("active") : $this.removeClass("active"),
      
  $input.on("focusout", function() {
      $input.val().length ? $this.addClass("active") : $this.removeClass("active");
  }).on("focus", function() {
      $this.addClass("active");
  });
});
</script>