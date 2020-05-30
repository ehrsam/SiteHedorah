
<h2 class="major">Contact</h2>
								<form method="POST"  action="./Formulaire/formulaire.php" enctype="multipart/form-data" name="form" onsubmit="return isEmail(val)">
									<div class="fields">
										<div class="field half">
											<label for="name" >Name</label>
											<input type="text" required name="name" id="name" placeholder="Entrer votre nom" />
										</div>
										<div class="field half">
											<label for="email" >Email</label>
											<input type="email" required name="email" id="email" placeholder="Entrer votre email" value="@"/>
										</div>
										<div class="field">
											<label for="message" >Message</label>
											<textarea name="message" required id="message" placeholder="Ecrivez votre message" rows="4"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message"/></li>
										<li><input type="reset" value="Reset"/></li>
									</ul>
								</form>
								<ul class="icons">
									<li><a href="https://www.facebook.com/deathmetalblackswan" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.instagram.com/black_swan_officiel/?hl=fr" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
									</ul>

								
