<?php
	
	$bdd= new PDO("mysql:host=127.0.0.1;dbname=crim; charset=iso-8859-1","root", "");

	
	if(isset($_POST['formcriminel']))
	{
		$prenom= htmlspecialchars($_POST['prenom']);
		$nom=htmlspecialchars($_POST['nom']);
		$surnom= htmlspecialchars($_POST['surnom']);
		$date_naissance=htmlspecialchars($_POST['date_naissance']);
		$lieu_naissance=htmlspecialchars($_POST['lieu_naissance']);
		$profession=htmlspecialchars($_POST['profession']);
		$duree_profession=htmlspecialchars($_POST['duree_profession']);
		$telephone=htmlspecialchars($_POST['telephone']);
		$domicilie=htmlspecialchars($_POST['domicilie']);
		$ville_frequente=htmlspecialchars($_POST['ville_frequente']);
		$situation_matrimoniale=htmlspecialchars($_POST['situation_matrimoniale']);
		$groupe_sanguin=htmlspecialchars($_POST['groupe_sanguin']);
		$taille=htmlspecialchars($_POST['taille']);
		$teint=htmlspecialchars($_POST['teint']);
		$race=htmlspecialchars($_POST['race']);
		$couleur_cheveux=htmlspecialchars($_POST['couleur_cheveux']);
		$cicatrice_particuliere=htmlspecialchars($_POST['cicatrice_particuliere']);
		$caractere=htmlspecialchars($_POST['caractere']);
		$temperament=htmlspecialchars($_POST['temperament']);
		$situation_medicale=htmlspecialchars($_POST['situation_medicale']);
		$vie_sentimental=htmlspecialchars($_POST['vie_sentimental']);
		$valeur_a_propos=htmlspecialchars($_POST['valeur_a_propos']);
		$famille_origine=htmlspecialchars($_POST['famille_origine']);
		$famille_constituee=htmlspecialchars($_POST['famille_constituee']);
		$valeur_a_propos_famille=htmlspecialchars($_POST['valeur_a_propos_famille']);
		$loisir=htmlspecialchars($_POST['loisir']);
		$diplome=htmlspecialchars($_POST['diplome']);
		$situation_professionelle=htmlspecialchars($_POST['situation_professionelle']);
		$message1=htmlspecialchars($_POST['message1']);
		$message2=htmlspecialchars($_POST['message2']);
		$croyance_religieuse=htmlspecialchars($_POST['croyance_religieuse']);
		$conviction_politique=htmlspecialchars($_POST['conviction_politique']);
		$situation_financiere=htmlspecialchars($_POST['situation_financiere']);
		


			
			

		if(!empty($_POST['prenom']) AND
			!empty($_POST['nom']) AND
			!empty($_POST['surnom']) AND
			!empty($_POST['date_naissance']) AND
			!empty($_POST['lieu_naissance']) AND
			!empty($_POST['profession']) AND
			!empty($_POST['duree_profession']) AND
			!empty($_POST['telephone']) AND
			!empty($_POST['domicilie']) AND
			!empty($_POST['ville_frequente']) AND
			!empty($_POST['situation_matrimoniale']) AND
			!empty($_POST['groupe_sanguin']) AND
			!empty($_POST['taille']) AND
			!empty($_POST['teint']) AND
			!empty($_POST['race']) AND
			!empty($_POST['couleur_cheveux'])AND
			!empty($_POST['cicatrice_particuliere']) AND
			!empty($_POST['caractere']) AND
			!empty($_POST['temperament']) AND
			!empty($_POST['situation_medicale'])AND
			!empty($_POST['vie_sentimental']) AND
			!empty($_POST['valeur_a_propos']) AND
			!empty($_POST['famille_origine']) AND
			!empty($_POST['famille_constituee']) AND
			!empty($_POST['valeur_a_propos_famille']) AND
			!empty($_POST['loisir']) AND
			!empty($_POST['diplome']) AND
			!empty($_POST['situation_professionelle']) AND
			!empty($_POST['message1']) AND
			!empty($_POST['message2']) AND
			!empty($_POST['croyance_religieuse']) AND
			!empty($_POST['conviction_politique']) AND
			!empty($_POST['situation_financiere']))
		{
			$prenomlength=strlen($prenom);
			if($prenomlength <= 255)
			{
				$nomlength=strlen($nom);
				if($nomlength<=255) 
				{
					$surnomlength=strlen($surnom);
					if($surnomlength<=255)
					{
						$lieu_naissancelength=strlen($lieu_naissance);
						if($lieu_naissancelength<=255)
						{
							$professionlength=strlen($profession);
							if($professionlength<=255) 
							{	
								$duree_professionlength=strlen($duree_profession);
								if($duree_professionlength<=10) 
								{	
									$telephonelength=strlen($telephone);
									if($telephonelength<=11) 
									{	
										$domicilielength=strlen($domicilie);
										if($domicilielength<=255) 
										{
											$ville_frequentelength=strlen($ville_frequente);
											if($ville_frequentelength<=255)
											{
												$taillelength=strlen($taille);
												if ($taillelength<=10) 
												{
													$teintlength=strlen($teint);
													if ($teintlength<=15)
													{
														$racelength=strlen($race);
														if ($racelength<=20)
														{
															$couleur_cheveuxlength=strlen($couleur_cheveux);
															if($couleur_cheveuxlength<=25) 
															{
																$cicatrice_particulierelength=strlen($cicatrice_particuliere);
																if($cicatrice_particulierelength<=15) 
																{
																	$caracterelength=strlen($caractere);
																	if($caracterelength<=255) 
																	{
																		$temperamentlength=strlen($temperament);
																		if($temperamentlength<=255) 
																		{
																			$situation_medicalelength=strlen($situation_medicale);
																			if ($situation_medicalelength<=255) 
																			{
																				$vie_sentimentallength=strlen($vie_sentimental);
																				if ($vie_sentimentallength<=25) 
																				{
																					$valeur_a_proposlength=strlen($valeur_a_propos);
																					if($valeur_a_proposlength<=25) 
																					{
																						$famille_originelength=strlen($famille_origine);
																						if($famille_originelength<=255) 
																						{
																							$famille_constitueelength=strlen($famille_constituee);
																							if($famille_constitueelength<=255) 
																							{
																								$valeur_a_propos_famillelength=strlen($valeur_a_propos_famille);
																								if($valeur_a_propos_famillelength<=255) 
																								{
																									$loisirlength=strlen($loisir);
																									if ($loisir<=255) 
																									{
																										$diplomelength=strlen($diplome);
																										if ($diplome<=255) 
																										{
																											$situation_professionellelength=strlen($situation_professionelle);
																											if ($situation_professionelle<=255) 
																											{
																												$message1length=strlen($message1);
																												if ($message1<=500) 
																												{
																													$message2length=strlen($message2);
																													if ($message2<=500) 
																													{
																														$croyance_religieuselength=strlen($croyance_religieuse);
																														if ($croyance_religieuse<=255) 
																														{
																															$conviction_politiquelength=strlen($conviction_politique);
																															if ($conviction_politique<=255) 
																															{	
																																$situation_financierelength=strlen($situation_financiere);
																																if ($situation_financiere<=255) 
																																{
																																	if (!empty($_FILES)) 
																																	{
																																		$file_name=$_FILES['fichier1']['name'];
																																		$file_extension=strrchr($file_name, ".");
																																		$file_tmp_name=$_FILES['fichier1']['tmp_name'];
																																		$file_dest='image/'.$file_name;
																																		$extension_autorisees=array('.pdf', '.PDF', '.jpg', '.JPG');
																																		if(in_array($file_extension, $extension_autorisees))
																																		{
																																			if(move_uploaded_file($file_tmp_name, 'image/'.$file_name))
																																			{
																																				if (!empty($_FILES)) 
																																				{
																																					$file_name2=$_FILES['fichier2']['name'];
																																					$file_extension=strrchr($file_name2, ".");
																																					$file_tmp_name=$_FILES['fichier2']['tmp_name'];
																																					$file_dest='files/'.$file_name2;
																																					$extension_autorisees=array('.pdf', '.PDF', '.jpg', '.JPG');
																																					if(in_array($file_extension, $extension_autorisees))
																																					{
																																						if(move_uploaded_file($file_tmp_name, 'image/'.$file_name2))
																																						{
																																							if (!empty($_FILES)) 
																																							{
																																								$file_name3=$_FILES['fichier3']['name'];
																																								$file_extension=strrchr($file_name3, ".");
																																								$file_tmp_name=$_FILES['fichier3']['tmp_name'];
																																								$file_dest='files/'.$file_name3;
																																								$extension_autorisees=array('.pdf', '.PDF', '.jpg', '.JPG');
																																								if(in_array($file_extension, $extension_autorisees))
																																								{
																																									if(move_uploaded_file($file_tmp_name, 'image/'.$file_name3))
																																									{
																																										if (!empty($_FILES)) 
																																										{
																																											$file_name4=$_FILES['fichier4']['name'];
																																											$file_extension=strrchr($file_name4, ".");
																																											$file_tmp_name=$_FILES['fichier4']['tmp_name'];
																																											$file_dest='files/'.$file_name4;
																																											$extension_autorisees=array('.pdf', '.PDF', '.jpg', '.JPG');
																																											if(in_array($file_extension, $extension_autorisees))
																																											{
																																												if(move_uploaded_file($file_tmp_name, 'image/'.$file_name4))
																																												{
																																													$insertmbr=$bdd->prepare("INSERT INTO criminel(prenom, nom, date_naissance, lieu_naissance,
																																													profession,duree_profession,telephone,domicile,ville,civilite,groupe_sanguin,taille,teint,
																																													race,couleur_cheveux,cicatrice_particuliere,caractere,temperament,situation_medicale,
																																													vie_sentimental,valeur_a_propos,famille_origine,famille_constituee,valeur_a_propos_famille,
																																													loisir,diplome,situation_professionelle,message1,message2,croyance_religieuse,
																																													conviction_politique,situation_financiere,file_url,file_url2,file_url3,file_url4)
																																													VALUES(?, ?, ?, ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
																																													$insertmbr->execute(array($prenom, $nom, $date_naissance, $lieu_naissance,$profession,
																																													$telephone,$domicilie,$ville_frequente,$situation_matrimoniale,$groupe_sanguin,$taille,
																																													$duree_profession,$teint,$race,$couleur_cheveux,$cicatrice_particuliere,$caractere,
																																													$temperament,$situation_medicale,$vie_sentimental,$valeur_a_propos,$famille_origine,
																																													$famille_constituee,$valeur_a_propos_famille,$loisir,$diplome,$situation_professionelle,
																																													$message1,$message2,$croyance_religieuse,$conviction_politique,$situation_financiere,'image/'.$file_name,'image/'.$file_name2,
																																													'image/'.$file_name3,'image/'.$file_name4));
																																													$erreur="Votre criminel à ete Enregistre !";
																																												}
																																												else
																																												{
																																													echo "Une erreur est survenu lors de l'envoi du fichier";
																																												}
																																											}
																																											else
																																											{
																																												echo 'Seul les fichier pdf sont autosrisés';
																																											}
																																										}
																																									}
																																									else
																																									{
																																										echo "Une erreur est survenu lors de l'envoi du fichier";
																																									}
																																								}
																																								else
																																								{
																																									echo 'Seul les fichier pdf sont autosrisés';
																																								}
																																							}
																																						}
																																						else
																																						{
																																							echo "Une erreur est survenu lors de l'envoi du fichier";
																																						}
																																					}
																																					else
																																					{
																																						echo 'Seul les fichier pdf sont autosrisés';
																																					}
																																				}
																																			}
																																			else
																																			{
																																				echo "Une erreur est survenu lors de l'envoi du fichier";
																																			}
																																		}
																																		else
																																		{
																																			echo 'Seul les fichier pdf sont autosrisés';
																																		}
																																	}	
																																}
																																else
																																{
																																	$erreur="Votre situation financiere ne dois depasse 255 caractere !";
																																}
																															}
																															else
																															{
																																$erreur="Votre convictionpolitique ne dois depasse 255 caractere !";
																															}
																														}
																														else
																														{
																															$erreur="Votre croyance religieuse ne dois depasse 255 caractere !";
																														}
																													}
																													else
																													{
																														$erreur="Votre 2ème message ne dois depasse 500 caractere !";
																													}
																												}
																												else
																												{
																													$erreur="Votre 1er message ne dois depasse 500 caractere !";
																												}
																											}
																											else
																											{
																												$erreur="Votre valeur à propos ne dois depasse 255 caractere !";
																											}
																										}
																										else
																										{
																											$erreur="Votre famille origine ne dois depasse 255 caractere !";
																										}
																									}
																									else
																									{
																										$erreur="Votre famille constituée ne dois depasse 255 caractere !";
																									}	
																								}
																								else
																								{
																									$erreur="Vos valeur à propos de sa famille ne dois depasse 255 caractere !";
																								}
																							}
																							else
																							{
																								$erreur="Votre loisir ne dois depasse 255 caractere !";
																							}
																						}
																						else
																						{
																							$erreur="Votre diplome ne dois depasse 255 caractere !";
																						}
																					}
																					else
																					{
																						$erreur="votre situation_professionelle ne pas depasse 255 caractere !";
																					}
																				}
																				else
																				{
																					$erreur="Votre vie sentimentale ne dois pas depasse 25 caractere !";
																				}
																			}
																			else
																			{
																				$erreur="Votre situation medicale ne dois pas depasse 255 caractere !";
																			}
																		}
																		else
																		{
																			$erreur="Votre temperament ne dois pas depasse 255 caractere !";
																		}
																	}
																	else
																	{
																		$erreur="Votre caractere ne dois pas depasse 255 caractere !";
																	}
																}
																else
																{
																	$erreur="La couleur de vos cheveux ne dois pas 15 caractere !";
																}
															}
															else
															{
																$erreur="Votre cicatrice ne dois pas depasse 25 caractere";
															}	
														}
														else
														{
															$erreur="Le nom de votre race ne dois pas depasse 20 caractere !";
														}
													}
													else
													{
														$erreur="votre teint ne dois pas depasse 15 caractere !";
													}
												}
												else
												{
													$erreur="La taille ne dois pas depasse 10 caractere !";
												}
											}
											else
											{
												$erreur="La ville frequente ne dois pas depasse 255 caractere !";
											}
										}
										else
										{
											$erreur="Votre nom de domicile ne dois pas depasse 255 caractere !";
										}
									}
									else
									{
										$erreur="Votre numero de telephone ne dois pas depasse 11 caractere !";
									}	
								}
								else
								{
									$erreur="Votre duree dans la profession ne dois pas depasse 10 caractere !";
								}
							}
							else
							{
								$erreur="Votre profession ne dois pas depasse 255 caractere !";
							}
							
						}
						else
						{
							$erreur="Votre lieu de naissance ne dois pas depasse 255 caractere !";
						}
					}
					else
					{
						$erreur="Votre surnom ne dois pas depasse 255 caractere !";
					}
				}
				else
				{
					$erreur="Votre nom ne dois pas depasse 255 caractere !";
				}
			}
			else
			{
				$erreur="Votre prenom ne dois pas depasse 255 caractere !";
			}
		}
		else
		{
			$erreur="Tous les champs doivent etre complétés !";
		}
	}
					

?>







<!DOCTYPE html>
<html>
	<head>
		<title>Mon portfolie en ligne</title>
		
		<!--font-->	
		
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
		
		<!--css-->	
	<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style3.css">
		<meta charset="UTF-8"/>
	</head>
	<body background="image/crim.JPG">

		<header class="conteneur-flud header">
			<div class="contenaire">
				<a href="#" class="logo" style="font-size:20px">FICHE D'IDDENTIFICATION</a>
				<a href="recherche.php" class="logo" style="margin-left:55%">Lite des criminels</a>
				<a href="deconnexion.php" class="logo" >deconnexion</a>

				
			</div>
		</header>
		<section class="conteneur-flud banner">
		  <div class="ban">
		  	<img src="image/crim.jpg" alt="bannier du site !">
		  </div>
		  <div class="inner-banner">
		  	<h1>IDDENTIFICATION DU CRIMINEL</h1>
		  
		  		<form method="post" action="" enctype="multipart/form-data">
					<table style="margin-top:15%;margin-left:5%;margin-bottom:0%">
						<tr>
							<td><p><b>Prenom:</b></p></td>
							<td><input type="text" placeholder="Le prenom" name="prenom" id="prenom" style="margin-bottom:1%;margin-right:2%;background-color:#663366" value="<?php if(isset($prenom)){echo $prenom;}?>"/></td>												
							<td><p><b>Nom:</b></p></td>
							<td><input type="text" placeholder="Le nom" name="nom" id="nom" style="margin-bottom:1%;background-color:#663366" value="<?php if(isset($nom)){echo $nom;}?>"/></td>
							<td><p><b>Surnom:</b></p></td>
							<td><input type="text" placeholder="Le surnom" name="surnom" id="surnom" style="margin-bottom:1%;background-color:#663366" value="<?php if(isset($surnom)){echo $surnom;}?>"/></td>
						</tr>
						<tr>
							<td><p><b>Date de naissance:</b></p></td>
							<td><input type="date" placeholder="Naissance" name="date_naissance" id="date_naissance" style="margin-bottom:1%;margin-right:2%;background-color:#663366" value="<?php if(isset($naissance)){echo $naissance;}?>"/></td>
							<td><p><b>Lieu de naissance:</b></p></td>
							<td><input type="text" placeholder="Lieu de naissance" name="lieu_naissance" id="lieu_naissance" style="margin-bottom:1%;background-color:#663366" value="<?php if(isset($lieu)){echo $lieu;}?>"/></td>
					   </tr>
					   <tr>
							<td><p><b>Profession:</b></p></td>
							<td><input type="text" placeholder="Profession" name="profession" id="profession" style="margin-bottom:1%;margin-right:2%;background-color:#663366" value="<?php if(isset($Profession)){echo $Profession;}?>"/></td>
							<td><p><b>Duree dans la profession:</b></p></td>
							<td><input type="text" placeholder="Duree dans la profession" name="duree_profession" id="duree_profession" style="margin-bottom:1%;background-color:#663366" value="<?php if(isset($duree)){echo $duree;}?>"/></td>
					  	</tr>
						<tr>
							<td><p><b>Telephone:</b></p></td>
							<td><input type="text" placeholder="telephone" name="telephone" id="telephone" style="margin-bottom:1%;margin-right:2%;background-color:#663366" value="<?php if(isset($telephone)){echo $telephone;}?>"/></td>
					  	<tr>
					  	<tr>
							<td><p><b>Domicilie:</b></p></td>
							<td><input type="text" placeholder="domicilié" name="domicilie" id="domicilie" style="margin-bottom:1%;margin-right:2%;background-color:#663366" value="<?php if(isset($domicilié)){echo $domicilié;}?>"/></td>
							<td><p><b>Ville ou pays<br/> frequente:</b></p></td>
							<td><input type="text" placeholder="Ville ou pays frequente" name="ville_frequente" id="ville_frequente" style="margin-bottom:1%;background-color:#663366" value="<?php if(isset($ville)){echo $ville;}?>"/></td>
					  </tr>
					   <tr>
						<td><p><b>Situation matrimoniale:</b></p></td>
						<td><select name="situation_matrimoniale" id="situation_matrimoniale" style="margin-bottom:1%;margin-right:2%;background-color:#663366;width:200px;height:40px">
							<option></option>
							<option>Celibataire</option>
							<option>Mariee</option>
							<option>Veuf ou veuve</option>
						</td>
					  </tr>					  
					  <tr>
						<td><p><b>Groupe sanguin</b></p></td>
						<td><select name="groupe_sanguin" id="groupe_sanguin" style="margin-bottom:1%;margin-right:2%;background-color:#663366;width:200px;height:40px">
							<option></option>
							<option>O+</option>
							<option>O-</option>
							<option>A+</option>
							<option>A-</option>
							<option>B+</option>
							<option>B-</option>
							<option>AB+</option>
							<option>AB-</option>
						</td>
					  </tr>
					  <tr>
						<td><p><b>Taille:</b></p></td>
						<td><input type="text" placeholder="taille" name="taille" id="taille" style="margin-bottom:1%;margin-right:2%;background-color:#663366" value="<?php if(isset($taille)){echo $taille;}?>"/></td>
						<td><p><b>Teint:</b></p></td>
						<td><input type="text" placeholder="teint" name="teint" id="teint" style="margin-bottom:1%;background-color:#663366" value="<?php if(isset($teint)){echo $teint;}?>"/></td>
						<td><p><b>Race:</b></p></td>
						<td><input type="text" placeholder="race" name="race" id="race" style="margin-bottom:1%;margin-right:2%;background-color:#663366" value="<?php if(isset($race)){echo $race;}?>"/></td>
					  </tr>
					  <tr>
					  	<td><p><b>Couleur de cheveux:</b></p></td>
						<td><input type="text" placeholder="couleur de cheveux" name="couleur_cheveux" id="couleur_cheveux" style="margin-bottom:1%;margin-right:2%;background-color:#663366" value="<?php if(isset($couleur)){echo $couleur;}?>"/></td>
						<td><p><b>Cicatrice particuliere:</b></p></td>
						<td><input type="text" placeholder="Cicatrice particuliere" name="cicatrice_particuliere" id="cicatrice_particuliere" style="margin-bottom:1%;background-color:#663366" value="<?php if(isset($cicatrice)){echo $cicatrice;}?>"/></td>
					   </tr>
					   <tr>
					  	<td><p><b>Caractere:</b></p></td>
						<td><input type="text" placeholder="Caractere" name="caractere" id="caractere" style="margin-bottom:1%;margin-right:2%;background-color:#663366" value="<?php if(isset($caractere)){echo $caractere;}?>"/></td>
						<td><p><b>Temperament:</b></p></td>
						<td><input type="text" placeholder="Temperament" name="temperament" id="temperament" style="margin-bottom:1%;background-color:#663366" value="<?php if(isset($temperament)){echo $temperament;}?>"/></td>
						</tr>
						<tr>
					  	<td><p><b>Situation medicale<br/> et psycologie</b></p></td>
						<td><input type="text" placeholder="Situation medicale et psycologie" name="situation_medicale" id="situation_medicale" style="margin-bottom:1%;margin-right:2%;background-color:#663366" value="<?php if(isset($psycologige)){echo $psycologige;}?>"/></td>
						</tr >
						<tr >
					  	<td><p><b>Vie sentimentale:</b></p></td>
						<td><input type="text" placeholder="Vie sentimentale" name="vie_sentimental" id="vie_sentimental" style="margin-bottom:1%;margin-right:2%;background-color:#663366" value="<?php if(isset($sentimentale)){echo $sentimentale;}?>" /></td>
						<td><p><b>Valeur a propos d'elle meme:</b></p></td >
						<td ><input type="text" placeholder="Valeur a propos d'elle meme" name="valeur_a_propos" id="Valeur_a_propos" style="margin-bottom:1%;background-color:#663366" value="<?php if(isset($valeur)){echo $valeur;}?>"/></td>
						</tr >
						 <tr >
						<td ><p><b>Famille d'origine:</b></p></td>
						<td><input type="text" placeholder="Famille d'origine" name="famille_origine" id="famille_origine" style="margin-bottom:1%;margin-right:2%;background-color:#663366" value="<?php if(isset($origine)){echo $origine;}?>"/></td>
						</tr >
						<tr >
						<td ><p><b>Famille constituee<br/>passees et actuelle:</b></p></td>
						<td ><input type="text" placeholder="Famille constituee passees" name="famille_constituee" id="famille_constituee" style="margin-bottom:1%;background-color:#663366" value="<?php if(isset($constituee)){echo $constituee;}?>"/></td>
						</tr >
						<tr >
						<td ><p><b>Valeur a propos<br/>de sa famille:</b></p></td>
						<td ><input type="text" placeholder="Valeur a propos de sa famille" name="valeur_a_propos_famille" id="valeur_a_propos_famille" style="margin-bottom:1%;margin-right:2%;background-color:#663366" value="<?php if(isset($propos)){echo $propos;}?>"/></td>
						</tr >
						<tr >
						<td ><p><b>Loisir ou centre<br/>d'interet:</b></p></td>
						<td ><input type="text" placeholder="Loisir ou centre d'interet" name="loisir" id="loisir" style="margin-bottom:1%;background-color:#663366" value="<?php if(isset($loisir)){echo $loisir;}?>"/></td>
					  </tr >
					  <tr >
						<td ><p><b>Formation et diplome<br/>obtenu:</b></p></td>
						<td ><input type="text" placeholder="Formation et diplome obtenu" name="diplome" id="diplome" style="margin-bottom:1%;margin-right:2%;background-color:#663366" value="<?php if(isset($diplome)){echo $diplome;}?>"/></td>
						<td ><p><b>Situation professionnelle:</b></p></td>
						<td ><input type="text" placeholder="Situation professionnelle" name="situation_professionelle" id="situation_professionelle" style="margin-bottom:1%;background-color:#663366" value="<?php if(isset($situationpro)){echo $situationpro;}?>"/></td>
						</tr >
						 <tr >
						<td ><p><b>Antecedants judiciaire:</b></p></td>
						<td ><textarea id="message" name="message1" class="span6" placeholder="Your Message" rows="2" style="margin-bottom:1%;margin-right:2%;background-color:#663366"></textarea></td>
						</tr >
						<tr >
						<td ><p><b>Iddentification et relation<br/>entretenu avec le milieu frequente:</b></p></td>
						<td ><textarea id="message" name="message2" class="span6" placeholder="Your Message" rows="2" style="margin-bottom:1%;margin-right:2%;background-color:#663366"></textarea></td>
						</tr >
						<tr >
						<td ><p><b>Croyance ou pratique religieuses:</b></p></td>
						<td ><input type="text" placeholder="Croyance ou pratique religieuses" name="croyance_religieuse" id="croyance_religieuse" style="margin-bottom:1%;margin-right:2%;background-color:#663366" value="<?php if(isset($croyance)){echo $croyance;}?>"/></td>
						</tr >
						<tr >
						<td ><p><b>Conviction politique:</b></p></td>
						<td ><input type="text" placeholder="Conviction politique" name="conviction_politique" id="conviction_politique" style="margin-bottom:1%;background-color:#663366" value="<?php if(isset($convictionpo)){echo $convictionpo;}?>"/></td>
						</tr >
						<tr >
						<td ><p><b>Situation financiere:</b></p></td>
						<td><input type="text" placeholder="Situation financiere" name="situation_financiere" id="situation_financiere" style="margin-bottom:1%;background-color:#663366" value="<?php if(isset($finance)){echo $finance;}?>"/></td>
						</tr >
						<tr>
							<td ></td>
							<td><input type="file" name="fichier1"/><br/><br/></td>
							<td ></td>
							<td><input type="file" name="fichier2"/><br/><br/></td>
						</tr>
						<tr>
							<td ></td>
							<td><input type="file" name="fichier3"/><br/><br/></td>
							<td ></td>
							<td><input type="file" name="fichier4"/><br/><br/></td>
						</tr>
						<tr>
							<td ></td>
							<td ></td>
							<td ></td>
							<td align="left"><button id="contact-submit" type="submit" name="formcriminel" class="btn btn-custom input-medium pull-right">Enregistre</button></td>
						</tr >
					</table>	
			</form>

			<?php
			    //cretion de notre message à affiché
			    if(isset($erreur)) 
			    {
			      echo $erreur;
			    }
			  ?>
		  	
		  </div>
		</section>

		<section class="conteneur-flud banner">
		  <div class="ban">
		  	<img src="image/crim.jpg" alt="bannier du site !">
		  </div>
		</secteur>
		
			
		 
	</body>
</html>