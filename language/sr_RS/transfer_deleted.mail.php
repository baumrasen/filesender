<?php 
// WARNING, this is a read only file created by import scripts
// WARNING
// WARNING,  Changes made to this file will be clobbered
// WARNING
// WARNING,  Please make changes on poeditor instead of here
// 
// 
?>
subject: Fajlovi više nisu dostupni za preuzimanje
subject: {transfer.subject}

{alternative:plain}

Poštovani,

Transfer n°{transfer.id} je obrisan sa {cfg:site_name} od pošiljaoca ({transfer.user_email}) i nije više dostupan za preuzimanje.

Lep pozdrav,
{cfg:site_name}

{alternative:html}

<p>
    Poštovani,
</p>

<p>
    Transfer n°{transfer.id} je obrisan sa <a href="{cfg:site_url}">{cfg:site_name}</a> od pošiljaoca (<a href="mailto:{transfer.user_email}">{transfer.user_email}</a>) i nije više dostupan za preuzimanje.
</p>

<p>
    Lep pozdrav,<br />
    {cfg:site_name}
</p>
