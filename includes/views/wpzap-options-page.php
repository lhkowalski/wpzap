<div class="wrap">
	<h1>WP Zap</h1>

	<form action="options.php" method="post">
	<?php settings_fields('wpzap'); ?>
	<?php do_settings_sections( 'wpzap' ); ?>
	<?php submit_button( 'Salvar Opções' ); ?>
	</form>



<h2>Ajuda Rápida</h2>

<p><code>[wpzap_numero]</code> exibe o número configurado.</p>

<p><code>[wpzap_link texto="clique aqui"]</code> exibe um link com o texto indicado.</p>

<p><code>[wpzap_botao texto="clique aqui"]</code> exibe um botão com o texto indicado.</p>

<p><code>[wpzap_formulario texto="clique aqui"]mensagem pré-definida[/wpzap_formulario]</code> exibe uma caixa de texto preenchida com a mensagem pré-definida e um botão com o texto indicado.</p>

<p>Um link mágico de redirecionamento é criado ao marcar a opção "Sim, redirecionar para WhatsApp" de uma página.</p>

<p>Use o widget "WPZap Número" para incluir o número do seu WhatsApp na barra lateral ou rodapé do site.</p>

<p>Use o widget "WPZap Botão" para incluir um botão de conversa na barra lateral ou rodapé do site.</p>

<p>Use o widget "WPZap Formulário" para incluir uma caixa de texto e um botão de conversa na barra lateral ou rodapé do site.</p>

<p>Para falar com o suporte, mande um email para <code>suporte@acaodeliberada.com.br</code>, explique o seu problema e mencione o WPZap.</p>

</div>