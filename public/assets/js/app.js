"use strict";

/**
 * Definitions des expressions régulières
 */
var re = {
    firstname: /^[a-z-]+$/i,
    lastname: /^[a-z-]+$/i,
    email: /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
};

$(document).ready(() => {
    
    var $win = $(window);
    var $body = $('body');

    // - - - - - - - - - - - -
    // Scroll Spy
    // - - - - - - - - - - - -

    $win.on("scroll", function(){
        $win.scrollTop() > 10 
            ? $body.addClass('scrolled')
            : $body.removeClass('scrolled');
    });


    // - - - - - - - - - - - -
    // Showcase
    // - - - - - - - - - - - -

    let carousel_items = $("[data-illustration]");

    $.each(carousel_items, (index, item) => {
        let $item = $(item);
        let $illustration = $item.data('illustration');
        $item.css('background-image', 'url(assets/images/'+$illustration+')');

        console.log($illustration);
        
    })


    // - - - - - - - - - - - -
    // Contact Form
    // - - - - - - - - - - - -

    // Regular Expressions
    let $contact = $('form[name=contact]');

    // $contact.on('submit', () => {

    //     var send = true;

    //     let $firstname = $('#firstname');
    //     let $lastname = $('#lastname');
    //     let $email = $('#email');
    //     let $message = $('#message');

    //     // Controle du champ Firstname
    //     if (!re.firstname.test($firstname.val())) {
    //         $firstname.parents('.form-group').addClass('has-error');
    //         send = false;
    //     }
    //     else {
    //         $firstname.parents('.form-group').removeClass('has-error');
    //     }

    //     // Controle du champ Lastname
    //     if (!re.lastname.test($lastname.val())) {
    //         $lastname.parents('.form-group').addClass('has-error');
    //         send = false;
    //     }
    //     else {
    //         $lastname.parents('.form-group').removeClass('has-error');
    //     }

    //     // Controle du champ Email
    //     if (!re.email.test($email.val())) {
    //         $email.parents('.form-group').addClass('has-error');
    //         send = false;
    //     }
    //     else {
    //         $email.parents('.form-group').removeClass('has-error');
    //     }

    //     // Controle du champ Message
    //     if ($message.val().length < 10) {
    //         $message.parents('.form-group').addClass('has-error');
    //         send = false;
    //     }
    //     else {
    //         $message.parents('.form-group').removeClass('has-error');
    //     }

    //     if (!send) {
    //         return false;
    //     }
    // });

});