@component('mail::message')
# Introduction

Je vous envoie ce mail à propos les derniers statistiques que nous avous fait.
<!-- On doit définir ce variable url dans le fichier Mail\TestMarkdouwnmail-->
<!-- cad quand on clic sur ce bouton raydina l had lien url   -->
@component('mail::button', ['url' => $url, 'color' => 'success'])
Cliquez ici
@endcomponent


<!-- config('app.name') cad dans le pieds de page il va appeler laravel car il existe
dans le fichier .env en haut de ficier il y a APP_NAME=Laravel on peut le changer 
on met par exemple GVCD Company -->
Merci,<br>
{{ config('app.name') }}
@endcomponent
