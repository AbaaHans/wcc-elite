<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Instantiation and passing `true` enables exceptions
if(isset($_POST['submit'])){
    extract($_POST);

	$name = $_POST['name'];
	$fristname = $_POST['fristname'];
	$email = $_POST['email'];
	$telephone = $_POST['phone'];
	$message = $_POST['message'];
	$content_dir = 'document/';
	$tmp_file =  $_FILES['file']['tmp_name'];
	if (! is_uploaded_file($tmp_file)) {
		exit('Ce fichier  est introuvable');
	}
	$type_file = $_FILES['file']['type'];

	if(!strstr($type_file, 'PDF') and !strstr($type_file, 'pdf')){
		exit("ce type de fichier n'est pas pris en charge");
	}
	$name_file = time().'.pdf';

	if(!move_uploaded_file($tmp_file, $content_dir.$name_file)){
		exit('impossible de copier ce fichier');
	}
	$mail = new PHPMailer(true);
	

	try {
		//Server settings
		$mail->SMTPDebug  = 0;                      // Enable verbose debug output
		$mail->isSMTP();                                            // Send using SMTP
		$mail->Host       = '';                    // Set the SMTP server to send through
		$mail->SMTPAuth   = true; 
		$mail->Charset ='UTF-8';                                  // Enable SMTP authentication
		$mail->Username   = '';                     // SMTP username
		$mail->Password   = '';                               // SMTP password
		$mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
		$mail->Port       = 465;                                    // TCP port to connect to

		//Recipients
		$mail->setFrom('recrutement@wcc-elite.com');
		$mail->addAddress('recrutement@wcc-elite.com', 'Recruteur');
		$mail->addCC('brownshans@gmail.com', 'Support Technique');
		$mail->addCC('h.abaallogo@rachabusinessgroup.com', 'Développeur freelance');

		// Attachments
		$mail->addAttachment('document/'.$name_file);         // Add attachments
		// $mail->addAttachment($formFile, 'doc_file/doc');    // Optional name

		// Content
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = "Nouvelle candidature";
		$mail->Body    = '<!DOCTYPE html>
		<html xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" lang="en">
		
		<head>
			<title></title>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]-->
			<style>
				* {
					box-sizing: border-box;
				}
		
				body {
					margin: 0;
					padding: 0;
				}
		
				a[x-apple-data-detectors] {
					color: inherit !important;
					text-decoration: inherit !important;
				}
		
				#MessageViewBody a {
					color: inherit;
					text-decoration: none;
				}
		
				p {
					line-height: inherit
				}
		
				.desktop_hide,
				.desktop_hide table {
					mso-hide: all;
					display: none;
					max-height: 0px;
					overflow: hidden;
				}
		
				@media (max-width:520px) {
					.desktop_hide table.icons-inner {
						display: inline-block !important;
					}
		
					.icons-inner {
						text-align: center;
					}
		
					.icons-inner td {
						margin: 0 auto;
					}
		
					.row-content {
						width: 100% !important;
					}
		
					.column .border,
					.mobile_hide {
						display: none;
					}
		
					table {
						table-layout: fixed !important;
					}
		
					.stack .column {
						width: 100%;
						display: block;
					}
		
					.mobile_hide {
						min-height: 0;
						max-height: 0;
						max-width: 0;
						overflow: hidden;
						font-size: 0px;
					}
		
					.desktop_hide,
					.desktop_hide table {
						display: table !important;
						max-height: none !important;
					}
				}
			</style>
		</head>
		
		<body style="background-color: #FFFFFF; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;">
			<table class="nl-container" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #FFFFFF;">
				<tbody>
					<tr>
						<td>
							<table class="row row-1" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #acbabb;">
								<tbody>
									<tr>
										<td>
											<table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 500px;" width="500">
												<tbody>
													<tr>
														<td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
															<table class="image_block" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
																<tr>
																	<td style="width:100%;padding-right:0px;padding-left:0px;">
																		<div align="center" style="line-height:10px"><img src="https://zupimages.net/up/22/21/9ej5.jpg" style="display: block; height: auto; border: 0; width: 125px; max-width: 100%;" width="125"></div>
																	</td>
																</tr>
															</table>
															<table class="heading_block" width="100%" border="0" cellpadding="5" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
																<tr>
																	<td>
																		<h1 style="margin: 0; color: #fff; font-size: 23px; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; line-height: 180%; text-align: center; direction: ltr; font-weight: 700; letter-spacing: normal; margin-top: 0; margin-bottom: 0;"><span class="tinyMce-placeholder">Nouvelle candidature</span></h1>
																	</td>
																</tr>
															</table>
															<table class="paragraph_block" width="100%" border="0" cellpadding="10" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;">
																<tr>
																	<td>
																		<div style="color:#000000;font-size:14px;font-family:Arial, "Helvetica Neue", Helvetica, sans-serif;font-weight:700;line-height:120%;text-align:left;direction:ltr;letter-spacing:0px;">
																			<p style="margin: 0; margin-bottom: 12px;">Nom du candidat :'. $name.'</p>
																			<p style="margin: 0; margin-bottom: 12px;">Prenom du candidat : '. $fristname.'</p>
																			<p style="margin: 0; margin-bottom: 12px;">Email du candidat : '. $email.'</p>
																			<p style="margin: 0; margin-bottom: 12px;">Contact du candidat : '. $telephone .'</p>
																			<p style="margin: 0; margin-bottom: 12px;">Message du candidat : '. $message .'</p>
																			<p style="margin: 0;">&nbsp;</p>
																		</div>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
								</tbody>
							</table>
							<table class="row row-2" align="center" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
								<tbody>
									<tr>
										<td>
											<table class="row-content stack" align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 500px;" width="500">
												<tbody>
													<tr>
														<td class="column column-1" width="100%" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;">
															<table class="icons_block" width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
																<tr>
																	<td style="vertical-align: middle; color: #9d9d9d; font-family: inherit; font-size: 15px; padding-bottom: 5px; padding-top: 5px; text-align: center;">
																		<table width="100%" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
																			<tr>
																				<td style="vertical-align: middle; text-align: center;">
																					<!--[if vml]><table align="left" cellpadding="0" cellspacing="0" role="presentation" style="display:inline-block;padding-left:0px;padding-right:0px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;"><![endif]-->
																					<!--[if !vml]><!-->
																					<table class="icons-inner" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block; margin-right: -4px; padding-left: 0px; padding-right: 0px;" cellpadding="0" cellspacing="0" role="presentation">
																						<!--<![endif]-->
																						<tr>
																							<td style="font-family: Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 15px; color: #9d9d9d; vertical-align: middle; letter-spacing: undefined; text-align: center;"><a href="https://www.wcc-elite.com" target="_blank" style="color: #9d9d9d; text-decoration: none; text-align: center">WCC-ELITE.COM</a></td>
																						</tr>
																					</table>
																				</td>
																			</tr>
																		</table>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
										</td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
				</tbody>
			</table><!-- End -->
		</body>
		
		</html>';
		$mail->AltBody = '';
	
		if($mail->send()){
			$message = '<div class="alert alert-success text-center" role="alert">
			Le formulaire a bien été envoyé! </div>';
			
		}
		else
		{
			$message = '<div class="alert alert-danger text-center" role="alert">
			Veillez revoir le remplissage des champs! </div>';
		};

	} catch (Exception $e) {
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}