
jQuery(document).ready(function() {

    $("#modalRegistro").hide();
    /*
        Background slideshow
    */
    /*$.backstretch([
      "assets/img/backgrounds/1.jpg"
    , "assets/img/backgrounds/2.jpg"
    , "assets/img/backgrounds/3.jpg"
    ], {duration: 3000, fade: 750});*/

    /*
        Tooltips
    */
    $('.links a.home').tooltip();
    $('.links a.blog').tooltip();

    /*
        Form validation
    */
    $('#frmRegistrar').submit(

        function(event){
            
            event.preventDefault();

            $(this).find("label[for='iglesia']").html('Iglesia *');
            $(this).find("label[for='encargado']").html('Pastor Principal *');
            $(this).find("label[for='pais']").html('País *');
            $(this).find("label[for='email']").html('Email');
            
            var nom_iglesia = $(this).find('input#nom_iglesia').val();
            var encargado = $(this).find('input#encargado').val();
            var pais = $(this).find('input#pais').val();
            var email = $(this).find('input#email').val();
            var gllpLatitude = $(this).find('input#gllpLatitude').val();
            var gllpLongitude = $(this).find('input#gllpLongitude').val();

            if(nom_iglesia == '') {
                $(this).find("label[for='iglesia']").append("<span style='display:none' class='red'> - Porfavor ingrese el nombre de la Iglesia.</span>");
                $(this).find("label[for='iglesia'] span").fadeIn('medium');
                return false;
            }
            if(encargado == '') {
                $(this).find("label[for='encargado']").append("<span style='display:none' class='red'> - Porfavor ingrese el nombre del Pastor.</span>");
                $(this).find("label[for='encargado'] span").fadeIn('medium');
                return false;
            }
            if(pais == '') {
                $(this).find("label[for='pais']").append("<span style='display:none' class='red'> - Porfavor ingrese el País.</span>");
                $(this).find("label[for='pais'] span").fadeIn('medium');
                return false;
            }


            /*if(email == '') {
                $(this).find("label[for='email']").append("<span style='display:none' class='red'> - Porfavor ingrese email valido.</span>");
                $(this).find("label[for='email'] span").fadeIn('medium');
                return false;
            }*/
            //console.log($("#frmRegistrar").serializeObject());
            /*$.ajax({
                type: "POST",       
                dataType: "JSON",
                url: $("#frmRegistrar").attr("action"),
                data: $("#frmRegistrar").serializeObject()
            });*/

    });

    $("#btn-Iglesia").click(function(event){
        event.preventDefault();

        $(this).find("label[for='iglesia']").html('Iglesia *');
            $(this).find("label[for='encargado']").html('Pastor Principal *');
            $(this).find("label[for='pais']").html('País *');
            $(this).find("label[for='email']").html('Email');
            
            var nom_iglesia = $(this).find('input#nom_iglesia').val();
            var encargado = $(this).find('input#encargado').val();
            var pais = $(this).find('input#pais').val();
            var email = $(this).find('input#email').val();
            var gllpLatitude = $(this).find('input#gllpLatitude').val();
            var gllpLongitude = $(this).find('input#gllpLongitude').val();

            if(nom_iglesia == '') {
                $(this).find("label[for='iglesia']").append("<span style='display:none' class='red'> - Porfavor ingrese el nombre de la Iglesia.</span>");
                $(this).find("label[for='iglesia'] span").fadeIn('medium');
                return false;
            }
            if(encargado == '') {
                $(this).find("label[for='encargado']").append("<span style='display:none' class='red'> - Porfavor ingrese el nombre del Pastor.</span>");
                $(this).find("label[for='encargado'] span").fadeIn('medium');
                return false;
            }
            if(pais == '') {
                $(this).find("label[for='pais']").append("<span style='display:none' class='red'> - Porfavor ingrese el País.</span>");
                $(this).find("label[for='pais'] span").fadeIn('medium');
                return false;
            }

            $.ajax({
                url: $("#frmRegistrar").attr("action-1"),
                data: $("#frmRegistrar").serialize(),
                type: "Post",       
                dataType: "json",
                success: function(data) {
                   //console.log(data);
                   $('#modalRegistro').modal('show');
                 }
            });

    });


});