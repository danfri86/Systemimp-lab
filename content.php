<!DOCTYPE html 
PUBLIC "-//W3C//Dli XHTML 1.0 Sliict//EN"
"http://www.w3.org/li/xhtml1/Dli/xhtml1-sliict.dli">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sv" lang="sv">    

	<head>
		<!--meta-->
		<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8" />            		
		<title>Tillståndslös miljö, PHP och Array</title>	
		
		<!--css-->
		<link rel="stylesheet" href="style/basicstyle.css" type="text/css" /> 
	</head>
	
	<body>
		<div id="sitewrapper">
		
			<div id="siteheader">
				<h1>Tillståndslös miljö, PHP och Array</h1>			
			</div><!-- /#siteheader -->
			
			
			<div id="contentwrapper">
			                                
				<div id="contentnav">
					<ul>
						<li>
							<a href="#">Gömda fält</a>
						</li>
						
						<li>
							<a href="#">Modifierad URL</a>
						</li>
						
						<li>
							<a href="#">Kakor</a>
						</li>
						
						<li>
							<a href="#">Sessioner</a>
						</li>
					</ul>
				</div><!-- /#contentnav -->
						
				<div id="contentsection">
					 
					<form id="buttonlink" action="#">
						<div>
							<input type="submit" name="btnAction" value="Slumpa" />
							<input type="submit" name="btnAction" value="Sortera" />
						</div>
					</form>
				
					<ul id="table">
						<li>
							<ul>
								<li><img src="image/image2.jpg" alt="Bild" /></li>
								<li><img src="image/image4.jpg" alt="Bild" /></li>
								<li><img src="image/image5.jpg" alt="Bild" /></li>
								<li><img src="image/image7.jpg" alt="Bild" /></li>
								<li><img src="image/image9.jpg" alt="Bild" /></li>
								<li><img src="image/image9.jpg" alt="Bild" /></li>
								<li><img src="image/image10.jpg" alt="Bild" /></li>
								<li><img src="image/image11.jpg" alt="Bild" /></li>
								<li><img src="image/image11.jpg" alt="Bild" /></li>
								<li><img src="image/image12.jpg" alt="Bild" /></li>
							</ul>
						</li>
						
						<li>
							<ul>
								<li><img src="image/image13.jpg" alt="Bild" /></li>
								<li><img src="image/image15.jpg" alt="Bild" /></li>
								<li><img src="image/image16.jpg" alt="Bild" /></li>
								<li><img src="image/image17.jpg" alt="Bild" /></li>
								<li><img src="image/image17.jpg" alt="Bild" /></li>
								<li><img src="image/image18.jpg" alt="Bild" /></li>
								<li><img src="image/image19.jpg" alt="Bild" /></li>
								<li><img src="image/image21.jpg" alt="Bild" /></li>
								<li><img src="image/image21.jpg" alt="Bild" /></li>
								<li><img src="image/image23.jpg" alt="Bild" /></li>
							</ul>
						</li>
						
						<li>
							<ul>
								<li><img src="image/image24.jpg" alt="Bild" /></li>
								<li><img src="image/image24.jpg" alt="Bild" /></li>
								<li><img src="image/image26.jpg" alt="Bild" /></li>
								<li><img src="image/image26.jpg" alt="Bild" /></li>
								<li><img src="image/image26.jpg" alt="Bild" /></li>
								<li><img src="image/image28.jpg" alt="Bild" /></li>
								<li><img src="image/image30.jpg" alt="Bild" /></li>
								<li><img src="image/image30.jpg" alt="Bild" /></li>
								<li><img src="image/image32.jpg" alt="Bild" /></li>
								<li><img src="image/image35.jpg" alt="Bild" /></li>
							</ul>
						</li>
						
						<li>
							<ul>
								<li><img src="image/image37.jpg" alt="Bild" /></li>
								<li><img src="image/image37.jpg" alt="Bild" /></li>
								<li><img src="image/image37.jpg" alt="Bild" /></li>
								<li><img src="image/image38.jpg" alt="Bild" /></li>
								<li><img src="image/image39.jpg" alt="Bild" /></li>
								<li><img src="image/image39.jpg" alt="Bild" /></li>
								<li><img src="image/image40.jpg" alt="Bild" /></li>
								<li><img src="image/image40.jpg" alt="Bild" /></li>
								<li><img src="image/image40.jpg" alt="Bild" /></li>
								<li><img src="image/image41.jpg" alt="Bild" /></li>
							</ul>
						</li>
						
						<li>
							<ul>
								<li><img src="image/image41.jpg" alt="Bild" /></li>
								<li><img src="image/image41.jpg" alt="Bild" /></li>
								<li><img src="image/image42.jpg" alt="Bild" /></li>
								<li><img src="image/image42.jpg" alt="Bild" /></li>
								<li><img src="image/image43.jpg" alt="Bild" /></li>
								<li><img src="image/image45.jpg" alt="Bild" /></li>
								<li><img src="image/image45.jpg" alt="Bild" /></li>
								<li><img src="image/image45.jpg" alt="Bild" /></li>
								<li><img src="image/image47.jpg" alt="Bild" /></li>
								<li><img src="image/image48.jpg" alt="Bild" /></li>
							</ul>
						</li>
						
						<li>
							<ul>
								<li><img src="image/image49.jpg" alt="Bild" /></li>
								<li><img src="image/image50.jpg" alt="Bild" /></li>
								<li><img src="image/image50.jpg" alt="Bild" /></li>
								<li><img src="image/image52.jpg" alt="Bild" /></li>
								<li><img src="image/image53.jpg" alt="Bild" /></li>
								<li><img src="image/image53.jpg" alt="Bild" /></li>
								<li><img src="image/image55.jpg" alt="Bild" /></li>
								<li><img src="image/image55.jpg" alt="Bild" /></li>
								<li><img src="image/image55.jpg" alt="Bild" /></li>
								<li><img src="image/image55.jpg" alt="Bild" /></li>
							</ul>
						</li>
						
						<li>
							<ul>
								<li><img src="image/image56.jpg" alt="Bild" /></li>
								<li><img src="image/image57.jpg" alt="Bild" /></li>
								<li><img src="image/image57.jpg" alt="Bild" /></li>
								<li><img src="image/image58.jpg" alt="Bild" /></li>
								<li><img src="image/image58.jpg" alt="Bild" /></li>
								<li><img src="image/image60.jpg" alt="Bild" /></li>
								<li><img src="image/image60.jpg" alt="Bild" /></li>
								<li><img src="image/image61.jpg" alt="Bild" /></li>
								<li><img src="image/image65.jpg" alt="Bild" /></li>
								<li><img src="image/image66.jpg" alt="Bild" /></li>
							</ul>
						</li>
						
						<li>
							<ul>
								<li><img src="image/image66.jpg" alt="Bild" /></li>
								<li><img src="image/image66.jpg" alt="Bild" /></li>
								<li><img src="image/image67.jpg" alt="Bild" /></li>
								<li><img src="image/image71.jpg" alt="Bild" /></li>
								<li><img src="image/image73.jpg" alt="Bild" /></li>
								<li><img src="image/image75.jpg" alt="Bild" /></li>
								<li><img src="image/image75.jpg" alt="Bild" /></li>
								<li><img src="image/image79.jpg" alt="Bild" /></li>
								<li><img src="image/image80.jpg" alt="Bild" /></li>
								<li><img src="image/image81.jpg" alt="Bild" /></li>
							</ul>
						</li>
						
						<li>
							<ul>
								<li><img src="image/image81.jpg" alt="Bild" /></li>
								<li><img src="image/image81.jpg" alt="Bild" /></li>
								<li><img src="image/image82.jpg" alt="Bild" /></li>
								<li><img src="image/image82.jpg" alt="Bild" /></li>
								<li><img src="image/image85.jpg" alt="Bild" /></li>
								<li><img src="image/image85.jpg" alt="Bild" /></li>
								<li><img src="image/image86.jpg" alt="Bild" /></li>
								<li><img src="image/image86.jpg" alt="Bild" /></li>
								<li><img src="image/image87.jpg" alt="Bild" /></li>
								<li><img src="image/image89.jpg" alt="Bild" /></li>
							</ul>
						</li>
						
						<li>
							<ul>
								<li><img src="image/image90.jpg" alt="Bild" /></li>
								<li><img src="image/image90.jpg" alt="Bild" /></li>
								<li><img src="image/image93.jpg" alt="Bild" /></li>
								<li><img src="image/image94.jpg" alt="Bild" /></li>
								<li><img src="image/image95.jpg" alt="Bild" /></li>
								<li><img src="image/image96.jpg" alt="Bild" /></li>
								<li><img src="image/image96.jpg" alt="Bild" /></li>
								<li><img src="image/image98.jpg" alt="Bild" /></li>
								<li><img src="image/image99.jpg" alt="Bild" /></li>
								<li><img src="image/image100.jpg" alt="Bild" /></li>
							</ul>
						</li>
					</table>					
									
				</div><!-- /#contentsection -->
			
			</div><!-- /#contentwrapper -->
			
			<div id="sitefooter">
				<p> ISGB11 Systemimplementeringsteknik VT13<br />
					<b style="font-size: 20px;">Här skall lösningsmetoden skrivas ut utan inline style!</b></p>	 <p>
					<a href="http://validator.w3.org/check?uri=referer"><img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Sliict" 							height="31" width="88" /></a>
				</p>	
			</div>
			
		</div><!-- /#sitewrapper -->
	</body>
</html>