<?php
echo form_open(main/form_validation)
echo form_input('email')
echo form_password('password')
echo form_submit('login_submit', 'Login')
echo form_close();
