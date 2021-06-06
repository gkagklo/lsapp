@component('mail::message')
#Ενεργοποίηση λογαριασμού

Ευχαριστούμε για την εγγραφή σας, παρακαλούμε να πατήσετε το παρακάτω κουμπί για την ενεργοποίηση του λογαριασμού.

@component('mail::button', ['url' => route('auth.activate',[
    'token' => $user->activation_token,
    'email' => $user->email
])])
Ενεργοποίηση
@endcomponent

Ευχαριστούμε,<br>
{{ config('app.name') }}
@endcomponent
