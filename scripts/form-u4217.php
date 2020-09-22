<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2015.2.0.352
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Helpful Links Form Submission',
	'heading' => 'New Form Submission',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Checked',
		'checkbox_unchecked' => 'Unchecked',
		'submitted_from' => 'Form submitted from website: %s',
		'submitted_by' => 'Visitor IP address: %s',
		'too_many_submissions' => 'Too many recent submissions from this IP',
		'failed_to_send_email' => 'Failed to send email',
		'invalid_reCAPTCHA_private_key' => 'Invalid reCAPTCHA private key.',
		'invalid_field_type' => 'Unknown field type \'%s\'.',
		'invalid_form_config' => 'Field \'%s\' has an invalid configuration.',
		'unknown_method' => 'Unknown server request method'
	),
	'email' => array(
		'from' => 'carolynduran@carolynduran.com',
		'to' => 'carolynduran@carolynduran.com'
	),
	'fields' => array(
		'custom_U4234' => array(
			'order' => 1,
			'type' => 'string',
			'label' => ' Your Name',
			'required' => true,
			'errors' => array(
				'required' => 'Field \' Your Name\' is required.'
			)
		),
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'Your Email',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Your Email\' is required.',
				'format' => 'Field \'Your Email\' has an invalid email.'
			)
		),
		'custom_U4222' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Message',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Message\' is required.'
			)
		),
		'custom_U4226' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'Your Website',
			'required' => false,
			'errors' => array(
			)
		)
	)
);

process_form($form);
?>
