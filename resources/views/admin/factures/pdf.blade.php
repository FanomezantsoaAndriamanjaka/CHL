<!DOCTYPE html>
<html>

<head>

<meta charset="utf-8">

<title>
Facture {{ $facture->numero_facture }}
</title>


<style>

body{

font-family: Arial, sans-serif;
font-size:14px;

}


.header{

text-align:center;
margin-bottom:30px;

}


.logo{

width:80px;

}


h1{

color:#1d4ed8;

}


table{

width:100%;
border-collapse:collapse;

}


td,th{

border:1px solid #ddd;
padding:10px;

}


.total{

font-size:20px;
font-weight:bold;

}


.footer{

margin-top:50px;
text-align:center;

}


</style>


</head>



<body>




<div class="header">


<h1>
CHL
</h1>


<p>
Facture médicale
</p>


</div>





<h3>
Facture N° :
{{ $facture->numero_facture }}
</h3>



<p>

Date :
{{ $facture->created_at->format('d/m/Y') }}

</p>







<h3>
Patient
</h3>



<table>


<tr>

<td>
Nom
</td>


<td>

@if($facture->reservation->user)

{{ $facture->reservation->user->nom }}

{{ $facture->reservation->user->prenom }}

@endif

</td>


</tr>



<tr>

<td>
Email
</td>


<td>

{{ $facture->reservation->user->email ?? '' }}

</td>


</tr>


</table>







<h3>
Prestation
</h3>


<table>


<tr>


<th>
Service
</th>


<th>
Montant
</th>


</tr>



<tr>


<td>

{{ $facture->reservation->consultation }}

</td>


<td>

{{ number_format($facture->montant,0,',',' ') }}
Ar

</td>


</tr>


</table>







<p class="total">


Total :
{{ number_format($facture->montant,0,',',' ') }}
Ar


</p>






<p>

Statut :

{{ $facture->statut }}

</p>






<div class="footer">


<p>
Merci pour votre confiance.
</p>


<p>
Clinique Hadassah Liantsoa
</p>


</div>




</body>

</html>