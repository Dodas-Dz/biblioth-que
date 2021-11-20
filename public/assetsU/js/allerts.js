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