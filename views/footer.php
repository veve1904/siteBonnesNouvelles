		<div id="pied">
			<strong>Excellente journée qu'aujourd'hui le <?php echo $date ?></strong> :: 
			<?php $time_end = microtime(true);
				  $time = number_format(($time_end - $time_start)*1000,6);
				  echo $time; ?>ms pour exécuter le script PHP :: 
			<!-- ! adresse email non cryptée : spam possible -->
	        <a href="mailto:<?php echo EMAIL ?>"><?php echo EMAIL ?></a>
			<p id="copyright">Mise en page faite par le site suivant :
				<a href="http://www.alsacreations.com/tutoriels/">Alsarzecréations</a>
			</p>
            <p><?php echo EMAIL2 ?></p>
		</div><!-- #pied -->
	</div><!-- #global -->
	</body>
</html>