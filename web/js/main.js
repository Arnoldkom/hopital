$(document).ready(function() {

    toggle_nav_container();
    gotoByScroll();


});



var toggle_nav_container = function() {



    var $toggleButton = $('#toggle_m_nav');
    $navContainer = $('#m_nav_container');
    $menuButton = $('#m_nav_menu')
    $menuButtonBars = $('.m_nav_ham');
    $wrapper = $('#wrapper');

    // toggle the container on click of button (can be remapped to $menuButton)

    $toggleButton.on("click", function() {

        // declare a local variable for the window width
        var $viewportWidth = $(window).width();

        // if statement to determine whether the nav container is already toggled or not

        if ($navContainer.is(':hidden')) {
            $wrapper.removeClass('closed_wrapper');
            $wrapper.addClass("open_wrapper");
            $navContainer.slideDown(200).addClass('container_open').css("z-index", "2");
            // $(window).scrollTop(0);
            $menuButtonBars.removeClass('button_closed');
            $menuButtonBars.addClass('button_open');
            $("#m_ham_1").addClass("m_nav_ham_1_open");
            $("#m_ham_2").addClass("m_nav_ham_2_open");
            $("#m_ham_3").addClass("m_nav_ham_3_open");

        } else {
            $navContainer.css("z-index", "0").removeClass('container_open').slideUp(200)
            $menuButtonBars.removeClass('button_open')
            $menuButtonBars.addClass('button_closed')
            $wrapper.removeClass('open_wrapper')
            $wrapper.addClass("closed_wrapper")
            $("#m_ham_1").removeClass("m_nav_ham_1_open");
            $("#m_ham_2").removeClass("m_nav_ham_2_open");
            $("#m_ham_3").removeClass("m_nav_ham_3_open");

        }
    });



}


// Function that takes the href value of links in the navbar and then scrolls 
//the div on the page whose ID matches said value. This only works if you use 
//a consistent naming scheme for the navbar anchors and div IDs

var gotoByScroll = function() {

    $(".m_nav_item a").on("click", function(e) {



        $('html,body').animate({
            scrollTop: $($(this).attr("href")).offset().top - 50
        }, "slow");

    });

    $("#save_medecin").click(function() {

        var nom = $("#md_nom").val();
        var telephone = $("#md_telephone").val();
        var email = $("#md_email").val();
        var experience = $("#md_experience").val();
        var genre = $("#md_genre").val();
        var adresse = $("#md_adresse").val();
        var ville = $("#md_ville").val();
        var password = $("#md_password").val();
        var specialite = $("#md_specialite").val();
        var hopital3 = $("#hopital2").val();
        alert('Enregistrement reussit...')
        $('#md_ville').val('');
        $('#md_nom').val('');
        $('#md_telephone').val('');
        $('#md_email').val('');
        $('#md_experience').val('');
        $('#md_genre').val('');
        $('#md_adresse').val('');
        $('#md_password').val('');


        $.ajax({

            url: "save_medecin.php",
            type: "POST",
            async: false,
            data: {
                "nom": nom,
                "telephone": telephone,
                "email": email,
                "experience": experience,
                "genre": genre,
                "address": adresse,
                "password": password,
                "specialite": specialite,
                "hopital2": hopital3,
                "ville": ville
            },
            success: function() {
                $('.success').fadeOut(200).show();
            }
        });
    });

    $("#save_specialite1").click(function() {

        var nom4 = $("#nom4").val();
        var prix4 = $("#prix4").val();
        var hopital4 = $("#hopital4").val();
        alert('Enregistrement reussit...')
        $('#nom4').val('');
        $('#prix4').val('');


        $.ajax({

            url: "save_specialite.php",
            type: "POST",
            async: false,
            data: {
                "nom": nom4,
                "prix": prix4,
                "hopital": hopital4
            },
            success: function() {
                $('.success').fadeOut(200).show();
            }
        });
    });



    $('#region').change(function() {

        var id_region = $(this).val();

        $.ajax({
            url: "ville.php",
            method: "POST",
            data: { id_region: id_region },
            success: function(data) {
                $('#ville').html(data);
            }

        });

    });

    $('#medecins').change(function() {

        var medecin44 = $(this).val();

        $.ajax({
            url: "medecin_detail.php",
            method: "POST",
            data: { 'medecin': medecin44 },
            success: function(data) {
                $('#charge15').html(data);
            }

        });

    });
    $('#select_horaire').change(function() {

        var date33 = $(this).val();
        var medecin31 = $('#medecins1').val();

        $.ajax({
            url: "charge_horaire2.php",
            method: "POST",
            data: {
                'medecin': medecin31,
                'date': date33
            },
            success: function(data) {
                $('#horaire4').html(data);
            }

        });

    });
    $('#horaire4').change(function() {

        var date33 = $(this).val();
        var medecin31 = $('#medecins1').val();

        $.ajax({
            url: "charge_horaire2.php",
            method: "POST",
            data: {
                'medecin': medecin31,
                'date': date33
            },
            success: function(data) {
                $('#charge16').html(data);
            }

        });

    });

    $('#ville').change(function() {

        var id_ville = $(this).val();

        $.ajax({
            url: "hopital.php",
            method: "POST",
            data: { id_ville: id_ville },
            success: function(data) {
                $('#hopital').html(data);
            }

        });

    });



    $('#hopital').change(function() {

        var id_hopital = $(this).val();

        $.ajax({
            url: "specialite.php",
            method: "POST",
            data: { id_hopital: id_hopital },
            success: function(data) {
                $('#specialite').html(data);
            }

        });

    });
    $('#specialite').change(function() {

        var id_specialite = $('#specialite').val();

        $.ajax({
            url: "medecin.php",
            method: "POST",
            data: { 'id_specialite': id_specialite },
            success: function(data) {
                $('#medecins').html(data);
            }

        });

    });
    $('#test1').click(function() {

        var id_region = $('#region').val();

        $.ajax({
            url: "ville.php",
            method: "POST",
            data: { id_region: id_region },
            success: function(data) {
                $('#ville').html(data);
            }

        });

    });
    $('#test2').click(function() {

        var id_ville = $('#ville').val();

        $.ajax({
            url: "hopital.php",
            method: "POST",
            data: { id_ville: id_ville },
            success: function(data) {
                $('#hopital').html(data);
            }

        });


    });
    $('#test3').click(function() {

        var id_hopital = $('#hopital').val();

        $.ajax({
            url: "specialite.php",
            method: "POST",
            data: { id_hopital: id_hopital },
            success: function(data) {
                $('#specialite').html(data);
            }

        });

    });

    $('#test11').click(function() {

        var id_specialite = $('#specialite').val();

        $.ajax({
            url: "medecin.php",
            method: "POST",
            data: { 'id_specialite': id_specialite },
            success: function(data) {
                $('#medecins').html(data);
            }

        });
    });


    $('#refresh2').click(function() {

        var hopital = $('#hopital2').val();

        $.ajax({
            url: "charger_medecin.php",
            method: "POST",
            data: { hopital: hopital },
            success: function(data) {
                $('#charge').html(data);
            }

        });

    });

    $('#refresh3').click(function() {

        var hopital4 = $('#hopital4').val();

        $.ajax({
            url: "charger_specialite.php",
            method: "POST",
            data: { hopital: hopital4 },
            success: function(data) {
                $('#charge2').html(data);
            }

        });

    });
    $('#refresh4').click(function() {

        var hopital5 = $('#hopital5').val();

        $.ajax({
            url: "charger_rdv.php",
            method: "POST",
            data: { hopital: hopital5 },
            success: function(data) {
                $('#charge3').html(data);
            }

        });

    });

    $('#refresh5').click(function() {

        var hopital6 = $('#hopital6').val();

        $.ajax({
            url: "charger_rdv2.php",
            method: "POST",
            data: { 'hopital': hopital6 },
            success: function(data) {
                $('#charge4').html(data);
            }

        });

    });

    $('#refresh6').click(function() {

        var hopital6 = $('#hopital6').val();

        $.ajax({
            url: "charger_rdv1.php",
            method: "POST",
            data: { 'hopital': hopital6 },
            success: function(data) {
                $('#charge5').html(data);
            }

        });

    });


    $('#refresh7').click(function() {

        var medecin2 = $('#medecin2').val();

        $.ajax({
            url: "charger_rdv3.php",
            method: "POST",
            data: { 'medecin': medecin2 },
            success: function(data) {
                $('#charge6').html(data);
            }

        });

    });

    $('#save_horaires').click(function() {

        var medecin11 = $('#medecin11').val();
        var horaire_date = $('#horaire_date').val();
        var heure_debut = $('#heure_debut').val();
        var minutedebut = $('#minutedebut').val();
        var heure_fin = $('#heure_fin').val();
        var minutefin = $('#minutefin').val();
        $('#minutedebut').val('');
        $('#minutefin').val('');
        $('#heure_debut').val('');
        $('#heure_fin').val('');
        $.ajax({
            url: "save_horaire.php",
            method: "GET",
            data: {
                'medecin': medecin11,
                'horaire_date': horaire_date,
                'heure_debut': heure_debut,
                'minutedebut': minutedebut,
                'heure_fin': heure_fin,
                'minutefin': minutefin
            },
            success: function(data) {
                alert("enregistrement reussit ... ")
            }

        });

    });

    $('#refresh11').click(function() {

        var medecin11 = $('#medecin11').val();

        $.ajax({
            url: "charge_horaire.php",
            method: "POST",
            data: { 'medecin': medecin11 },
            success: function(data) {
                $('#charge11').html(data);
            }

        });

    });

    $('#horaire_date_r').change(function() {

        var date11 = $(this).val();
        var medecin11 = $('#medecin11').val();

        $.ajax({
            url: "charge_horaire1.php",
            method: "POST",
            data: {
                medecin: medecin11,
                date: date11
            },
            success: function(data) {
                $('#charge11').html(data);
            }

        });

    });

    $('#refresh8').click(function() {

        var medecin2 = $('#medecin2').val();

        $.ajax({
            url: "charger_rdv4.php",
            method: "POST",
            data: { 'medecin': medecin2 },
            success: function(data) {
                $('#charge7').html(data);
            }

        });

    });


    $('#refresh10').click(function() {

        var patient2 = $('#patient2').val();

        $.ajax({
            url: "charger_rdv5.php",
            method: "POST",
            data: { 'patient': patient2 },
            success: function(data) {
                $('#charge8').html(data);
            }

        });


        function viewData() {
            $.ajax({
                url: "charge_test.php?p=view",
                method: "GET"
            }).done(function(data) {
                $('tbody').html(data)
                tableData()
            });

        }

        function tableData() {
            $('#tabledit').Tabledit({
                url: 'charge_test.php',
                columns: {
                    identifier: [0, 'id'],
                    editable: [
                        [1, 'id_user'],
                        [2, 'id_specialite'],
                        [3, 'Experience']
                    ]
                }
            });


        }

        $.ajax({
            url: "charger_rdv6.php",
            method: "POST",
            data: { 'patient': patient2 },
            success: function(data) {
                $('#charge9').html(data);
            }

        });

        $.ajax({
            url: "charger_rdv7.php",
            method: "POST",
            data: { 'patient': patient2 },
            success: function(data) {
                $('#charge10').html(data);
            }

        });

    });


    $('#test5').click(function() {
        alert('test3')


    });
    $('#specialite').change(function() {

        var id_specialite = $(this).val();

        $.ajax({
            url: "medecin.php",
            method: "POST",
            data: { id_specialite: id_specialite },
            success: function(data) {
                $('#medecin').html(data);
            }

        });

    });




}