<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">

<style>

@page{
    size:A4;
    margin:20px;
}


body{

    font-family: DejaVu Sans, sans-serif;
    color:#222;
    font-size:12px;

}


/* HEADER */

.top{

    height:15px;
    background:#063b91;
    margin-bottom:15px;

}


.header-table{

    width:100%;
    border-collapse:collapse;

}


.header-table td{

    border:none;
    vertical-align:top;

}


.logo{

    width:70px;

}


.clinique{

    font-size:22px;
    font-weight:bold;
    color:#0088c8;

}


.clinique span{

    color:#063b91;

}


.slogan{

    color:#0088c8;
    margin-top:5px;

}


.contact{

    font-size:10px;
    line-height:15px;

}


/* TITRE */

.title{

    text-align:center;
    margin-top:15px;

}


.title h1{

    color:#063b91;
    font-size:30px;
    margin:5px;

}


.numero{

    background:#063b91;
    color:white;
    padding:7px 20px;
    border-radius:15px;
    font-weight:bold;

}


.date{

    text-align:right;
    color:#063b91;
    margin-top:10px;

}



/* PATIENT INFO */

.info-table{

    width:100%;
    border-collapse:collapse;
    margin-top:15px;

}


.info-table td{

    width:50%;
    border:1px solid #9abce8;
    padding:12px;
    vertical-align:top;

}


.box-title{

    background:#063b91;
    color:white;
    padding:6px 15px;
    border-radius:15px;
    font-weight:bold;

}



/* DETAIL */

.detail-table{

    width:100%;
    border-collapse:collapse;
    margin-top:20px;

}


.detail-table th{

    background:#063b91;
    color:white;
    padding:8px;

}


.detail-table td{

    border:1px solid #ddd;
    padding:8px;

}



/* TOTAL */


.total-table{

    width:45%;
    margin-left:55%;
    margin-top:15px;
    border-collapse:collapse;

}


.total-table td{

    border:1px solid #ddd;
    padding:8px;
    font-weight:bold;

}


.total{

    background:#063b91;
    color:white;

}



/* SIGNATURE */


.signature{

    width:100%;
    margin-top:30px;
    border-collapse:collapse;

}


.signature td{

    width:50%;
    border:none;
    text-align:center;

}


.cachet{

    width:90px;

}



/* FOOTER */


.footer{

    margin-top:25px;
    background:#063b91;
    color:white;
    padding:10px;
    text-align:center;
    font-size:10px;

}


</style>

</head>


<body>


<div class="top"></div>


<!-- HEADER -->

<table class="header-table">

<tr>

<td width="15%">

<img class="logo"
src="{{ public_path('images/logo.png') }}">

</td>


<td width="45%">

<div class="clinique">

CLINIQUE

<br>

<span>
HADASSAH LIANTSOA
</span>

</div>


<div class="slogan">

Votre santé, notre priorité

</div>


</td>


<td class="contact">

27 rue du Faubourg Saint-Jacques

<br>

75014 Paris, France

<br>

Téléphone : +33 1 43 35 22 22

<br>

contact@hadassahliantsoa.com


</td>


</tr>

</table>




<!-- TITRE -->


<div class="title">


<h1>
FACTURE
</h1>


<span class="numero">

N° {{ $facture->numero_facture }}

</span>


</div>



<div class="date">

Date :
{{ now()->format('d/m/Y') }}

</div>




<!-- INFORMATION -->


<table class="info-table">


<tr>


<td>


<div class="box-title">

PATIENT

</div>


<br>


<b>Nom :</b>

{{ $facture->reservation->user->name }}


<br><br>


<b>Email :</b>

{{ $facture->reservation->user->email }}


<br><br>


<b>Chambre :</b>

{{ $facture->reservation->type_chambre }}



</td>



<td>


<div class="box-title">

FACTURATION

</div>


<br>


<b>Service :</b>

{{ $facture->reservation->publication->nom }}


<br><br>


<b>Statut :</b>

{{ $facture->statut }}


<br><br>


<b>Date entrée :</b>

{{ $facture->reservation->date_reception->format('d/m/Y') }}



</td>


</tr>


</table>




<!-- DETAIL FACTURE -->


<table class="detail-table">


<tr>


<th>
DÉSIGNATION
</th>


<th>
QUANTITÉ
</th>


<th>
MONTANT
</th>


</tr>



<tr>


<td>

{{ $facture->reservation->publication->nom }}

</td>


<td>

1

</td>


<td>

{{ number_format($facture->montant,0,',',' ') }}

Ar

</td>


</tr>



</table>




<!-- TOTAL -->


<table class="total-table">


<tr>

<td>

TOTAL

</td>


<td class="total">

{{ number_format($facture->montant,0,',',' ') }} Ar

</td>


</tr>


</table>




<!-- SIGNATURE -->


<table class="signature">


<tr>


<td>


<b>

VISA PATIENT

</b>


<br><br><br>


_________________

</td>



<td>


<b>

CLINIQUE

</b>


<br>


<img class="cachet"

src="{{ public_path('images/cachet.png') }}">



</td>


</tr>


</table>




<div class="footer">


<b>
CLINIQUE HADASSAH LIANTSOA
</b>

<br>

Soins de qualité - Écoute - Humanité

</div>



</body>

</html>