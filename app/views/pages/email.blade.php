<div class="modal-header">
	<h3>Rubah Username</h3>
</div>
<div class="modal-body">
	<div class="form-horizontal form-rubah-username">
		<div class="control-group" id="control-username-sekarang">
			{{ Form::label('email_sekarang', 'Email Sekarang', array('class' => 'control-label')) }}
			<div class="controls">
				{{ Form::text('email_sekarang', null, array( 'id' => 'email_sekarang', 'onkeypress' => 'enterRubahUsername(event)', 'maxlength' => 20, 'autocomplete' => 'off', 'placeholder' => 'Ketikkan username sekarang...')) }}
				<span class="help-block" id="error-username-sekarang"></span>
			</div>
		</div>

		<div class="control-group" id="control-username-baru">
			{{ Form::label('email_baru', 'Email Baru', array('class' => 'control-label')) }}
			<div class="controls">
				{{ Form::text('email_baru', null, array( 'id' => 'email_baru', 'onkeypress' => 'enterRubahUsername(event)', 'maxlength' => 20, 'autocomplete' => 'off', 'placeholder' => 'Ketikkan username baru...')) }}
				<span class="help-block" id="error-username-baru"></span>
			</div>
		</div>

		<div class="control-group" id="control-konfirmasi-username">
			{{ Form::label('konfirmasi_email', 'Konfirmasi Email', array('class' => 'control-label')) }}
			<div class="controls">
				{{ Form::text('konfirmasi_email', null, array( 'id' => 'konfirmasi_emaily', 'onkeypress' => 'enterRubahUsername(event)', 'maxlength' => 20, 'autocomplete' => 'off', 'placeholder' => 'Ketik ulang username baru...')) }}
				<span class="help-block" id="error-konfirmasi-username"></span>
			</div>
		</div>
	</div>
</div>
<div class="modal-footer">
	{{ Form::button('Simpan', array('class' => 'btn btn-primary', 'onclick' => 'rubahUsername()')) }}
	{{ Form::button('Batal', array('class' => 'btn', 'data-dismiss' => 'modal', 'aria-hidden' => 'true')) }}
</div>