<form action='ListPasswd.php'>
Nombre de mot de passe à générer : <input type='text' Name='nbrPasswd' value='1'>
<br>
Taille du/des mot(s) de passe (Nombre de caractères) : <input type='text' Name='nbrCaract' value='5'>
<br>
Type de mot de passe : <select name='typePasswd'>
<option value='1'>🔢Chiffres uniquement🔢</option>
<option value='2'>📬Lettres uniquement📬</option>
<option value='3'>🔢📬Chiffres et lettres📬🔢</option>
<option value='4'>❇️Tout caractères❇️</option>
</select>
<br>
<input type='submit' value='✔️Générer✔️'>