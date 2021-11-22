function delete_confirmation () {
    Swal.fire({
        title: 'Etes-vous sur?',
        text: "vous ne pouvez pas restaurer les données supprimer!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Oui , supprimer!'
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire(
            'supprimé!',
            'données supprimées.',
            'success'
          )
        }
      })

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
  icon: 'succée',
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
   icon: 'succée',
   title: 'emplyee ajouté avec succée',
   showConfirmButton: false,
   timer: 1500
 })
return true;





}
