<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>This is the contact page!</h1>

<span>List of contacts: </span>
<ul>
    <li>The name of the contact is: {{$listOfContacts[0]["name"]}}</li>
    <li>The name of the contact is: {{$listOfContacts[1]["name"]}}</li>
    <li>The name of the contact is: {{$listOfContacts[2]["name"]}}</li>
</ul>

<span>List of emails: </span>
<ul>
    <li>The name of the contact is: {{$listOfContacts[0]["email"]}}</li>
    <li>The name of the contact is: {{$listOfContacts[1]["email"]}}</li>
    <li>The name of the contact is: {{$listOfContacts[2]["email"]}}</li>
</ul>

<span>Navigate to contact: </span>
<ul>
    <li>
        <a href="/contacts/{{$listOfContacts[0]["id"]}}">Go to contact: {{$listOfContacts[0]["name"]}}</a>
    </li>
    <li>
        <a href="/contacts/{{$listOfContacts[1]["id"]}}">Go to contact: {{$listOfContacts[1]["name"]}}</a>
    </li>
    <li>
        <a href="/contacts/{{$listOfContacts[2]["id"]}}">Go to contact: {{$listOfContacts[2]["name"]}}</a>
    </li>
</ul>


</body>
</html>
