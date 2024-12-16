
// fonction d'estimation
function calcul(){
    var montant = document.getElementById('montant').value;
    var qte = document.getElementById('qte').value;
    var total = montant*qte;


    document.getElementById('total').innerHTML = total
}

