function mostra_Newpro_Ad(){
    document.getElementById('conta_newproAd').style.display ='block';

    document.getElementById('conta_ExtrAd').style.display ='none';
    document.getElementById('conta_ProexAd').style.display ='none';
    document.getElementById('conta_ElimAd').style.display ='none';
}

function mostra_Extra_Ad(){
    document.getElementById('conta_ExtrAd').style.display ='block';
    
    document.getElementById('conta_newproAd').style.display ='none';
    document.getElementById('conta_ProexAd').style.display ='none';
    document.getElementById('conta_ElimAd').style.display ='none';
}

function mostra_Exist_Ad(){
    document.getElementById('conta_ProexAd').style.display ='block';
    
    document.getElementById('conta_ExtrAd').style.display ='none';
    document.getElementById('conta_newproAd').style.display ='none';
    document.getElementById('conta_ElimAd').style.display ='none';
}

function mostra_Delet_Ad(){
    document.getElementById('conta_ElimAd').style.display ='block';
    
    document.getElementById('conta_ExtrAd').style.display ='none';
    document.getElementById('conta_ProexAd').style.display ='none';
    document.getElementById('conta_newproAd').style.display ='none';
}