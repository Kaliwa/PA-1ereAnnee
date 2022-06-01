<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);

$email = $_POST['email'];

$header="MIME-Version: 1.0\r\n";
$header.='From:"TechClass"<support@techclass.fr>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message='
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
	<!--[if gte mso 9]>
	<xml>
		<o:OfficeDocumentSettings>
		<o:AllowPNG/>
		<o:PixelsPerInch>96</o:PixelsPerInch>
		</o:OfficeDocumentSettings>
	</xml>
	<![endif]-->
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="format-detection" content="date=no" />
	<meta name="format-detection" content="address=no" />
	<meta name="format-detection" content="telephone=no" />
	<meta name="x-apple-disable-message-reformatting" />
    <!--[if !mso]><!-->
	<link href="https://fonts.googleapis.com/css?family=Yantramanav:300,400,500,700" rel="stylesheet" />
    <!--<![endif]-->
	<title>TechClass</title>
	<!--[if gte mso 9]>
	<style type="text/css" media="all">
		sup { font-size: 100% !important; }
	</style>
	<![endif]-->
	

	<style type="text/css" media="screen">
		/* Linked Styles */
		body { padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#f4f4f4; -webkit-text-size-adjust:none }
		a { color:#2f774a; text-decoration:none }
		p { padding:0 !important; margin:0 !important } 
		img { -ms-interpolation-mode: bicubic; /* Allow smoother rendering of resized image in Internet Explorer */ }
		.mcnPreviewText { display: none !important; }

				
		/* Mobile styles */
		@media only screen and (max-device-width: 480px), only screen and (max-width: 480px) {
			u + .body .gwfw { width:100% !important; width:100vw !important; }

			.m-shell { width: 100% !important; min-width: 100% !important; }
			
			.m-center { text-align: center !important; }
			
			.center { margin: 0 auto !important; }
			.nav { text-align: center !important; }
			.text-top { line-height: 22px !important; }
			
			.td { width: 100% !important; min-width: 100% !important; }
			.bg { height: auto !important; -webkit-background-size: cover !important; background-size: cover !important; }

			.m-br-15 { height: 15px !important; }
			.p30-15 { padding: 30px 15px !important; }
			.p0-15-30 { padding: 0px 15px 30px 15px !important; }
			.pb40 { padding-bottom: 40px !important; }
			.pb0 { padding-bottom: 0px !important; }
			.pb20 { padding-bottom: 20px !important; }

			.m-td,
			.m-hide { display: none !important; width: 0 !important; height: 0 !important; font-size: 0 !important; line-height: 0 !important; min-height: 0 !important; }

			.m-height { height: auto !important; }

			.m-block { display: block !important; }

			.fluid-img img { width: 100% !important; max-width: 100% !important; height: auto !important; }

			.column,
			.column-top,
			.column-dir,
			.column-bottom,
			.column-dir-top,
			.column-dir-bottom { float: left !important; width: 100% !important; display: block !important; }

			.content-spacing { width: 15px !important; }
		}
	</style>
</head>
<body class="body" style="padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#f4f4f4; -webkit-text-size-adjust:none;">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f4f4f4" class="gwfw">
		<tr>
			<td align="center" valign="top">
				<!-- Main -->
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td align="center" style="padding-bottom: 40px;" class="pb0">
							<!-- Shell -->
							<table width="650" border="0" cellspacing="0" cellpadding="0" class="m-shell">
								<tr>
									<td class="td" style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
										<!-- Top Bar -->
										<table width="100%" border="0" cellspacing="0" cellpadding="0">
											<tr>
												<td style="padding: 60px 40px 35px 40px;" class="p30-15">
													<table width="100%" border="0" cellspacing="0" cellpadding="0">
														<tr>
															<th class="column-top" width="204" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	<tr>
																		<td class="text-top m-center" style="color:#999999; font-family:Arial, sans-serif; font-size:12px; line-height:16px; text-align:left; min-width:auto !important;"><?= date();?></td>
																	</tr>
																</table>
															</th>
															<th style="padding-bottom: 20px !important; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;" class="column" width="1"></th>
															<th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																</table>
															</th>
														</tr>
													</table>
												</td>
											</tr>
										</table>
										<!-- END Top Bar -->

										<!-- Header -->
										<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff" style="border-radius: 6px 6px 0px 0px;">
											<tr>
												<td style="padding: 40px;">
													<table width="100%" border="0" cellspacing="0" cellpadding="0">
														<tr>
															<th class="column" width="118" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	<tr>
																		<td class="img m-center" style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="https://techclass.fr/bann/logo.png" width="118" height="125" border="0" alt="" /></a></td>
																	</tr>
																</table>
															</th>
															<th style="padding-bottom:20px !important; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;" class="column" width="1"></th>
															<th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	<tr>
																		<td align="right">
																			<table border="0" cellspacing="0" cellpadding="0" class="center" style="text-align:center;">
																				
																			</table>
																		</td>
																	</tr>
																</table>
															</th>
														</tr>
													</table>
												</td>
											</tr>
										</table>
										<!-- END Header -->
										
										<!-- Article Image On The Left -->
										<div mc:repeatable="Select" mc:variant="Article Image On The Left">
											<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
												<tr>
													<td style="padding: 0px 40px 40px 40px;" class="p0-15-30">
														<table width="100%" border="0" cellspacing="0" cellpadding="0">
															<tr>
																<th class="column" width="260" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
																	<table width="100%" border="0" cellspacing="0" cellpadding="0">
																		<tr>
																			<td class="fluid-img" style="font-size:0pt; line-height:0pt; text-align:left;"><a href="#" target="_blank"><img src="https://techclass.fr/bann/image1.jpg" width="260" height="390" border="0" alt="" /></a></td>
																		</tr>
																	</table>
																</th>
																<th style="padding-bottom:20px !important; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;" class="column" width="60"></th>
																<th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
																	<table width="100%" border="0" cellspacing="0" cellpadding="0">
																		<tr>
																			<td class="h2" style="padding-bottom: 20px; color:#444444; font-family:Yantramanav, Arial, sans-serif; font-size:40px; line-height:46px; text-align:center; font-weight:300;">Venez apprendre<span class="m-hide"><br><br></span>TechClass</td>
																		</tr>
																		<tr>
																			<td class="text" style="padding-bottom: 25px; color:#666666; font-family:Arial, sans-serif; font-size:16px; line-height:30px; text-align:left; min-width:auto !important;">
																				<br><br>

																			</td>
																		</tr>
																		<tr>
																			<td align="center">
																				<table border="0" cellspacing="0" cellpadding="0">
																					<tr>
																						<td class="text-button" style="color:#ffffff; background:#212529; border-radius:5px; font-family:Yantramanav, Arial, sans-serif; font-size:14px; line-height:18px; text-align:center; font-weight:500; padding:12px 25px;"><a href="https://techclass.fr/confirmation.php?pseudo='.urlencode($pseudo).'&key='.$key.'" target="_blank" class="link-white" style="color:#ffffff; text-decoration:none;"><span class="link-white" style="color:#ffffff; text-decoration:none;">Cliquez ici</span></a></td>
																					</tr>
																				</table>
																			</td>
																		</tr>
																	</table>
																</th>
															</tr>
														</table>
													</td>
												</tr>
											</table>
										</div>
										<!-- END Article Image On The Left -->
										
										<!-- Title + Full-Width Image + Text Center + Button -->
										<div mc:repeatable="Select" mc:variant="Title + Full-Width Image + Text Center + Button">
											<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
												<tr>
													<td style="padding: 0px 40px 40px 40px;" class="p0-15-30">
														<table width="100%" border="0" cellspacing="0" cellpadding="0">
															<tr>
																<td class="h3 center" style="padding-bottom: 30px; color:#444444; font-family:Yantramanav, Arial, sans-serif; font-size:28px; line-height:37px; font-weight:300; text-align:center;">Vérifiez votre email</td>
															</tr>
														</table>
													</td>
												</tr>
											</table>
										</div>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>
';

mail($email, "Vérifiez votre email pour accéder au site TechClass", $message, $header);

?>
