<h1>Ciao Admin</h1>
<p>
    Hai ricevuto una nuova mail: <br>
    Nome: {{ $lead->name}} <br>
    Cognome: {{ $lead->surname}} <br>
    Email: {{ $lead->email}} <br>
    Contenuto: <br>
    {{ $lead->description}} 
</p>