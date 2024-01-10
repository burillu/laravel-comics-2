import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])
//far apparire un modal al click del pulsante delete
//prendo i bottoni delete
const buttons = document.querySelectorAll('.cancel-button');
//per ogni bottone aggiungo un event listener al click
buttons.forEach((button) => {
    button.addEventListener('click', event => {
        //evito che al click faccia il submit del form
        event.preventDefault();
        // prendo il titolo dell'item dal bottone
        const itemTitle = button.getAttribute('data-item-title');
        //prendo la modale
        const modal = document.getElementById('deleteModal');
        //creo nuova modale con bootstrap
        const myModal = new bootstrap.Modal(modal);
        //mostro la modale usando il metodo show
        myModal.show();
        //prendo la modale dove voglio cambiare il titolo

        //inserisco il titolo all'interno della modale

        //prendo dalla modale il bottone di conferma

        //aggiungo il listener del click nel bottone 

        //eseguo il submit del form all'evento click del bottone  di conferma


    })
})