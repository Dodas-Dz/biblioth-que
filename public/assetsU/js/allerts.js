const { fromPairs } = require("lodash");


function delete_confirmation (form) {
  from.preven
    Swal.fire({
        title: 'Etes-vous sur?',
        text: "vous ne pouvez pas restaurer les données supprimer!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Oui , supprimer!'
      }).then((rseult) => {
        if (result.isConfirmed) {
         
          Swal.fire(
            'supprimé!',
            'données supprimées.',
            'success'
          )
      
        }
      }
      )
     return false;
    
}
function messageverif (form){
  if(form.mail.value.length<=5 || form.message.value == ""|| form.objet.value == "" )
  {
    

    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'Saisir les cases vides !',
      
    })
  
    return false;
  }
   if(form.message.value.length<=15 ){
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'Saisir Un message valid !',
      
    })
    return false;
  }
  if(form.objet.value.length<=4 || form.objet.value.length>=30 ){
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'Saisir objet ou valid !',
      
    })
    return false;
  }


    Swal.fire({
      position: 'top-end',
      icon: 'success',
      title: 'Message envoyé ',
      showConfirmButton: false,
      timer: 1000
    })
  
 return true;

}


function aboneformcheck(form) {
       if(form.nom.value =="" || form.prenom.value =="" || form.date.value ==""){
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            timer: 2000,
            text: 'un ou plusieur chemain sont vides',
            
          })
return false;
       }
       else if(form.nom.value.length<=3 || form.prenom.value.length<=3 ){

        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          timer: 2000,
          text: 'entrer un nom ou prénom valid !',
          
        })
        return false;
       }
     
Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Abonée ajouté avec succée ',
  showConfirmButton: false,
  timer: 1500
})
return true;

}


function userformcheck(form) {
  if(form.name.value =="" ||  form.prenom.value ==""  || form.email.value =="" || form.password.value ==""){
     Swal.fire({
       icon: 'error',
       title: 'Oops...',
       timer: 2000,
       text: 'un ou plusieur chemain sont vides',
       
     })
return false;
  }
  else if(form.name.value.length<=3 || form.prenom.value.length<=3  || form.email.value.length<=6 || form.password.value.length<=7 ){

   Swal.fire({
     icon: 'error',
     title: 'Oops...',
     timer: 2000,
     text: 'entrer un nom ou prénom ou email ou mot de pass valid !',
     
   })
   return false;
  }

  else if (form.password.value != form.password_confirmation.value){
   Swal.fire({
     icon: 'error',
     title: 'Oops...',
     timer: 2000,
     text: 'confirmation mo de pass incorrect',
     
   })
   return false;

  }

  Swal.fire({
   position: 'top-end',
   icon: 'success',
   title: 'emplyee ajouté avec succée',
   showConfirmButton: false,
   timer: 1500
 })
return true;
}
$(document).ready(function(){

  $('select').selectpicker();


})



function livreformcheck(form) {
  if(form.name.value =="" ||  form.isbn.value ==""  || form.nbr.value =="" || form.nom_auteur.value =="" || form.date.value =="" || form.categories.value=="" || form.langue.value =="" || form.image.value =="" || form.description.value ==""){
     Swal.fire({
       icon: 'error',
       title: 'Oops...',
       timer: 2000,
       text: 'un ou plusieur chemain sont vides',
       
     })
return false;
  }
  else if(/\d/.test(form.nom_auteur.value) ){
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      timer: 2000,
      text: 'le nom ne doit pas contenire un chiffre',
      
    })
return false;

  }
 
  else if(  form.isbn.value.length<=4 || form.nom_auteur.value.langue<=3 || form.description.value.length<=5){

   Swal.fire({
     icon: 'error',
     title: 'Oops...',
     timer: 2000,
     text: 'entrer un nom ou prénom ou email ou mot de pass valid !',
     
   })
   return false;
  }

  Swal.fire({
   position: 'top-end',
   icon: 'success',
   title: 'votre livre a etais ajouté !',
   showConfirmButton: false,
   timer: 1500
 })
return true;
}
