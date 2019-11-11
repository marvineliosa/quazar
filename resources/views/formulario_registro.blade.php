@extends('plantillas.menu')
@section('content')

    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
            	<!-- Credit Card -->
                <div id="pay-invoice">
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center">Pay Invoice</h3>
                        </div>
                        <hr>
                        <div action="#" method="post" novalidate="novalidate">
                            <div class="form-group text-center">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class="text-muted fa fa-cc-visa fa-2x"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-cc-mastercard fa-2x"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-cc-amex fa-2x"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-cc-discover fa-2x"></i></li>
                                </ul>
                            </div>
                            <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Payment amount</label>
                                <input id="cc-payment" name="cc-payment" type="text" class="form-control" aria-required="true" aria-invalid="false" value="100.00">
                            </div>
                            <div class="form-group has-success">
                                <label for="cc-name" class="control-label mb-1">Name on card</label>
                                <input id="cc-name" name="cc-name" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name">
                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                            </div>
                            <div class="form-group">
                                <label for="cc-number" class="control-label mb-1">Card number</label>
                                <input id="cc-number" name="cc-number" type="tel" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number">
                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="cc-exp" class="control-label mb-1">Expiration</label>
                                        <input id="cc-exp" name="cc-exp" type="tel" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration" data-val-cc-exp="Please enter a valid month and year" placeholder="MM / YY">
                                        <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="x_card_code" class="control-label mb-1">Security code</label>
                                    <div class="input-group">
                                        <input id="x_card_code" name="x_card_code" type="tel" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" autocomplete="off">
                                        <div class="input-group-addon">
                                            <span class="fa fa-question-circle fa-lg" data-toggle="popover" data-container="body" data-html="true" data-title="Security Code"
                                            data-content="<div class='text-center one-card'>The 3 digit code on back of the card..<div class='visa-mc-cvc-preview'></div></div>"
                                            data-trigger="hover"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button id="payment-button" class="btn btn-lg btn-info btn-block" onclick="RegistrarSocio()">
                                    <i class="fa fa-lock fa-lg"></i>&nbsp;
                                    <span id="payment-button-amount">Pay $100.00</span>
                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

  <script>
     // $("#cc-payment").val(123456);

    function RegistrarSocio2(){
      var success;
      var url = "/socios/registrar_socio";
      var dataForm = new FormData();
      dataForm.append('p1',"p1");
      dataForm.append('p2','p2');
      //lamando al metodo ajax
      metodoAjax(url,dataForm,function(success){
        //aquí se escribe todas las operaciones que se harían en el succes
        //la variable success es el json que recibe del servidor el método AJAX
        MensajeModal("TITULO DEL MODAL","MENSAJE DEL MODAL");
      });
    }


        function RegistrarSocio(){
          // alert('entra');
          var url = "/socios/registrar_socio";
          var dataForm = new FormData();
          var resultado = null;

          $.ajax({
          // jQuery.ajax({
          url :url,
          data : dataForm,
          contentType:false,
          processData:false,
          headers:{
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
          type: 'POST',
          dataType : 'json',
          beforeSend: function (){
            $("#modalCarga").modal();
          },
          success : function(json){
            //resultado = json;
            //callback(json);
            //$("#nombre_producto").focus();
          },
          error : function(xhr, status) {
            $("#textoModalMensaje").text('Existió un problema con la operación');
            $("#modalMensaje").modal();
            MensajeModal('¡ERROR!','Existió un problema, intentelo de nuevo, si el problema persiste favor de reportarlo a la extensión --.')
          },
          complete : function(xhr, status){
             $("#modalCarga").modal('hide');
             $("#nombre_producto").focus();
          }
          });//*/
        }


  </script>
