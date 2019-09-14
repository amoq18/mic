
	///////////////////////////////////////////////////////
	function Mef(valeur)	// pour cadrage des valeurs //
	/////////////////////////////////////////////////////
	{ 	return valeur.toFixed(2);	}
	///////////////////////////////////////////////
	function Calcul()	// calcul des echeances //
	/////////////////////////////////////////////
	{	var Af=Number(document.Saisie.Montant.value);
		if ( Af<1 )
					alert ("montant du pret errone");
		else	{	var Y=Number(document.Saisie.Duree.value);
					if ( Y<1 || Y>35 )
							alert("Duree erronee");
					else	{	var Ir=Number(document.Saisie.Taux.value);
								if ( Ir<1 || Ir>20 )
										alert("Taux errone");
								else	{	var Nf = Y * 12;
											var Rf = (Ir / 1200);
											var P1 = Af * ( Rf / ( 1 - ( 1 / ( Math.pow ( ( 1 + Rf ), Nf ) ) ) ) ) ;
											var Pf = Math.floor ( ( P1 + 0.005 ) * 100) / 100;
											var impr=	"<"+"br /> "+
														document.Saisie.nom.value+ " a preté une somme de " +
														document.Saisie.Montant.value+ document.Saisie.devise.value+
														" sur "+
														document.Saisie.Duree.value+
														" ans, au taux de "+
														document.Saisie.Taux.value+
														"% => Echeances de " +
														Pf+
														"euros par mois<"+"br /><"+"br />";
											var Amort=new Array();
											Amort[0,1] = Af;
											var Cp=0;
											var Ci=0;
											impr+=("<"+"table border='0' cellpadding='3'>");
											impr+=("<"+"tr><"+"th>Mois</"+"th><"+"th>Annee</"+"th>");
											impr+=("    <"+"th>Echeance</"+"th>");
											impr+=("    <"+"th>Principal</"+"th><"+"th>Interets</"+"th>");
											impr+=("    <"+"th>Reste</"+"th><"+"th>Paye</"+"th></"+"tr>");
											for ( var I=1 ; I <= Nf ; I++ )
											{	Amort[I, 2] = Amort[I - 1, 1] * Rf;
												Amort[I, 2] = Math.floor((Amort[I, 2] + 0.005) * 100) / 100;
												Amort[I, 1] = Amort[I - 1, 1] - Pf + Amort[I, 2];
												Amort[I, 1] = Math.floor ( ( Amort[I, 1] + 0.005 ) * 100 ) / 100;
												var T1 = I - Math.floor ( ( I - 1 ) / 12 ) * 12;
												var T2 = 1 + Math.floor ( ( I - 1 ) / 12 );
												impr+=("<"+"tr><"+"td>"+T1+"</"+"td>");
												impr+=("    <"+"td>"+T2+"</"+"td>");
												impr+=("    <"+"td>"+I+"</"+"td>");
												impr+=("    <"+"td>"+Mef(Pf - Amort[I, 2])+"</"+"td>");
												impr+=("    <"+"td>"+Mef(Amort[I,2])+"</"+"td>");
												impr+=("    <"+"td>"+Mef(Amort[I, 1])+"</"+"td>");
												impr+=("    <"+"td>"+Mef(Pf * I)+"</"+"td></"+"tr>");
												Cp = Cp + Pf - Amort[I, 2];
												Ci = Ci + Amort[I, 2];
											}
											Cp = Math.floor((Cp + 0.005) * 100) / 100;
											Ci = Math.floor((Ci + 0.005) * 100) / 100;
											impr+=("<"+"tr><"+"td></"+"td><"+"td></"+"td><"+"td></"+"td>");
											impr+=("    <"+"td>"+Mef(Cp)+"</"+"td>");
											impr+=("    <"+"td>"+Mef(Ci)+"</"+"td>");
											impr+=("    <"+"td></"+"td>");
											impr+=("    <"+"td>"+Mef(Cp+Ci)+"</"+"td></"+"tr>");
											impr+=("</"+"table>");
											document.getElementById("result").innerHTML=impr;
											if ( document.Saisie.imprimer.checked )
											{	window.print();	}
										}
							}
				}
	}
