<x-mail::message>
# Bonjour Mme/Me.

Vous aviez reçu une notification de la part de {{$from_user_name}} du departement {{$from_dept_name}} <br>
Le Numero de dossier est ; {{$no_dossier}}



Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
