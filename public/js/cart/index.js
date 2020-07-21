
$(document).ready(function() {
    loadCulqi();
    calcularSubtotal();
    calcularTotal();
    function loadCulqi(){
        var amount = $(".price-total").html();
        amount = amount.replace("S/","");
        amount = amount.replace(".","");
        console.log("[amount]",amount)
        // Configura tu llave pública
        Culqi.publicKey = 'pk_test_33XmGUB2OWUAplwf';
        // Configura tu Culqi Checkout
        Culqi.settings({
            title: 'Minimarket',
            currency: 'PEN',
            description: 'Compra de productos',
            amount: `${amount}`
        });
        // Usa la funcion Culqi.open() en el evento que desees
    }
    $('#buyButton').on('click', function(e) {
        if($("#idUser").val() === ""){
            $('#myModal').modal('show');
            return false;
        }
        $('#mDelivery').modal('show');
    });

    $("#mDeliverySi").on('click', function(e) {
        $('#mDelivery').modal('hide');
        $("#staticBackdrop").modal('show');
    });
    
    $('#btnPay').on('click', function(e) {
        $('#mDelivery').modal('hide');
        // validar las opciones que no estén vacias
        $("#staticBackdrop").modal('hide');
        // Abre el formulario con las opciones de Culqi.settings
        loadCulqi();
        Culqi.open();
        e.preventDefault();
    });
    $('.qtyminus').on('click', function(e) {
        // Abre el formulario con las opciones de Culqi.settings
        e.preventDefault();
        var parent = $(this).parent();
        var qty = parseInt(parent.find(".qty").val());
        var id = parent.find(".idCart").val()
        var tr = $(this).parent().parent().parent().parent();
        var borrar = false;
        if((qty - 1) <= 0){
            parent.find(".qty").val(0);
            console.log(tr);
            tr.hide();
            borrar = true;
            // return false;
        }else{
            parent.find(".qty").val(qty - 1);
        }
        // buscando el precio y sacando total
        var price = $(this).parent().parent().parent().find("td:eq(0)").find(".price").html();
        price = price.replace("S/","");
        price = parseFloat(price);
        var total = price * (qty - 1);
        console.log("[price]",price,total);
        $(this).parent().parent().parent().find("td:eq(2)").find(".total").html(`S/${parseFloat(total).toFixed(2)}`);
        var url = '/update-cart';
        var data = {id:id, qty:-1,borrar:borrar};
        fetch(url, {
        method: 'POST', // or 'PUT'
        body: JSON.stringify(data), // data can be `string` or {object}!
        headers:{
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        }).then(res => res.json())
        .catch(error => console.error('Error:', error))
        .then(response => {
            console.log('Success:', response);
            var subtotal = $(".subtotal").html();
            // var igv = $(".igv").html();
            var total = $(".price-total").html();
            var subtotal = subtotal.replace("S/","");
            // var igv = igv.replace("S/","");
            var total = total.replace("S/","");
            // $(".subtotal").html(`S/${response.body.subtotal}`);
            // $(".igv").html(`S/${response.body.igv}`);
            // $(".price-total").html(`S/${response.body.total}`);
            loadCulqi();
            calcularSubtotal();
            calcularTotal();
        });
    });
    $('.qtyplus').on('click', function(e) {
        // Abre el formulario con las opciones de Culqi.settings
        e.preventDefault();
        var parent = $(this).parent();
        var qty = parseInt(parent.find(".qty").val());
        var id = parent.find(".idCart").val()
        parent.find(".qty").val(qty + 1);
        // buscando el precio y sacando total
        var price = $(this).parent().parent().parent().find("td:eq(0)").find(".price").html();
        price = price.replace("S/","");
        price = parseFloat(price);
        var total = price * (qty + 1);
        console.log("[price]",price,total);
        $(this).parent().parent().parent().find("td:eq(2)").find(".total").html(`S/${total.toFixed(2)}`);
        // maandar un ajax
        // $.ajax({
        //     type:"POST",
        //     url:"/update-cart",
        //     data:{id:id, qty:(qty + 1)},
        //     success:function(datos){
        //          console.log(datos)
        //      },
        //     dataType: 'json'
        // })
        var url = '/update-cart';
        var data = {id:id, qty:1};

        fetch(url, {
        method: 'POST', // or 'PUT'
        body: JSON.stringify(data), // data can be `string` or {object}!
        headers:{
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        }).then(res => res.json())
        .catch(error => console.error('Error:', error))
        .then(response => {
            console.log('Success:', response);
            var subtotal = $(".subtotal").html();
            // var igv = $(".igv").html();
            var total = $(".price-total").html();
            var subtotal = subtotal.replace("S/","");
            // var igv = igv.replace("S/","");
            var total = total.replace("S/","");
            // $(".subtotal").html(`S/${response.body.subtotal}`);
            // $(".igv").html(`S/${response.body.igv}`);
            // $(".price-total").html(`S/${response.body.total}`);
            loadCulqi()
            calcularSubtotal();
            calcularTotal();
        });
    });

    function calcularSubtotal() {
        console.log("[calcularSubtotal]");
        var total = 0;
        $(".qty").each((i,e) => {
            console.log("[i,e]",i,e);
            var price = parseFloat($(".sumPriceCart").eq(i).val()) || 0;
            var qty = parseInt(e.value) || 0;
            var t = price * qty;
            total += parseFloat( t ) || 0;
        });
        $(".subtotal").html(`S/${total.toFixed(2)}`);
    }

    function calcularTotal() {
        console.log("[calcularSubtotal]");
        var total = 0;
        $(".qty").each((i,e) => {
            console.log("[i,e]",i,e);
            var price = parseFloat($(".sumPriceCart").eq(i).val()) || 0;
            var qty = parseInt(e.value) || 0;
            var t = price * qty;
            // aqui se suma el delivery
            total += parseFloat( t ) || 0;
        });
        $(".price-total").html(`S/${total.toFixed(2)}`);
    }

});{}

function culqi() {
    if (Culqi.token) { // ¡Objeto Token creado exitosamente!
        console.log("[culqi]",Culqi);
        var token = Culqi.token.id;
        var amount = $(".price-total").html();
        amount = amount.replace("S/","");
        amount = amount.replace(".","");
        // alert('Se ha creado un token: ' + token);
        //En esta linea de codigo debemos enviar el "Culqi.token.id"
        //hacia tu servidor con Ajax
        var url = '/payme';
        var data = {
            amount:amount,
            token: token,
            address: document.querySelector("#ship_address").value,
            phone: document.querySelector("#phone").value,
            phone: document.querySelector("#phone").value,
            type: 'Delivery',
            full_name: document.querySelector("#ship_name").value,
            city: document.querySelector("#ship_city").value,
            region: document.querySelector("#ship_region").value,
            code: document.querySelector("#ship_postal_code").value
        };

        fetch(url, {
        method: 'POST', // or 'PUT'
        body: JSON.stringify(data), // data can be `string` or {object}!
        headers:{
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        }).then(res => res.json())
        .catch(error => {
            console.error('Error:', error);
            $(".showMessage").html('Ocurrio un error, en el sistema, vuelve a intentar');
            $("#msg").modal('show');
        })
        .then(response => {
            console.log('Success:', response);
            $(".showMessage").html(response.body.message);
            $("#msg").modal('show');
            setTimeout(()=>{
                window.location.reload();
            },2500)
        });

    } else { // ¡Hubo algún problema!
        // Mostramos JSON de objeto error en consola
        console.log(Culqi.error);
        $(".showMessage").html(Culqi.error.user_message);
        $("#msg").modal('show');
        // alert(Culqi.error.user_message);
    }
  };
