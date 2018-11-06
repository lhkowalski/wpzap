<p>
	<select name="wpzap_options[ddi]">
		<option <?php selected( $options['ddi'], '55'); ?> value='55'>Brasil (DDI +55)</option>
		<option <?php selected( $options['ddi'], ''); ?> value=''>Outro (digitar DDI)</option>
	</select>
	<input type="text" name="wpzap_options[phone_number]" class="regular-text" value="<?php echo isset($options['phone_number']) ? $options['phone_number'] : false; ?>" />
</p>
<p>Ao cadastrar o telefone, não esqueça de incluir o código DDD da sua região, sem o zero.</p>
</p>Você pode seguir as regras de formatação que achar conveniente. A sugestão é usar (00) 00000-0000, para que a exibição fique bonita. Bons exemplos:</p>
<ul>
	<li>62 99988-7766</li>
	<li>(62) 99988-7766</li>
	<li>62 99988 7766</li>
</ul>