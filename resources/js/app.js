import './bootstrap';

import 'flowbite';

import Swal from 'sweetalert2/dist/sweetalert2.js'

window.swal = Swal;

import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';
//import Clipboard from '@ryangjchandler/alpine-clipboard'

//Alpine.plugin(Clipboard)

Livewire.start()



window.addEventListener('error', event => {

    Swal.fire({
        title: 'Error!',
        text: 'Do you want to continue',
        icon: 'error',
        confirmButtonText: 'Cool'
    });

});
window.addEventListener('success', event => {

    Swal.fire({
        position: 'top-end',
        icon: 'success',
        toast: true,
        title: 'Operation effectuer avec success',
        showConfirmButton: false,
        timer: 1500
    })

});
