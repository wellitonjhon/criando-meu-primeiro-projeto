
<?php
include '../modulo-menu/new-Menu.php';
?>
<title>cadastro</title>
<div class="container jumbotron">
    <div>
        <div class="tab-pane "><p>Já sou cadastrado </p>
        </div>  

        <div>
            <!--=================================Corrigir formulario=====================================-->
            <form class="form-inline">
                <div class="form-group form-group-sm">
                    <label for="exampleInputName2"></label>
                    <input type="text" class="form-control" id="exampleInputName2" placeholder="Seu e-mail...">
                </div>
                <div class="form-group form-group-sm">
                    <label for="exampleInputEmail2"></label>
                    <input type="password" class="form-control" id="exampleInputEmail2" placeholder="Sua senha...">
                </div>
                <button type="submit" class="btn btn-success btn-sm">Contituar</button>
            </form>
        </div>
    </div>

    <div class="container"><p>01 Informações pessoais</p></div>

    <div class="row">

        <form class="form-group form-group-sm">
            <div class="col-md-6">CPF
                <input type="text" class="form-control" placeholder="Entrada de texto">
            </div>
            <div class="col-md-6">E-mail para acesso
                <input type="text" class="form-control" placeholder="Entrada de texto">
            </div>
            <div class="col-md-3">Sua senha
                <input type="password" class="form-control" placeholder="Entrada de texto">
            </div>
            <div class="col-md-3">Repetir senha
                <input type="password" class="form-control" placeholder="Entrada de texto">
            </div><div class="col-md-3">Data de nascimento
                <input type="text" class="form-control" placeholder="Entrada de texto">
            </div>
            <div class="col-md-3">Género
                <select class="form-control">
                    <option>---</option>
                    <option>Masculino</option>
                    <option>Femenino</option>
                </select>
            </div>
        </form>
        <div class="container"><p>Dados de cobrança</p></div>
        <form class="form-group form-group-sm">
            <div class="col-md-6">Seu nome
                <input type="text" class="form-control" placeholder="Entrada de texto">
            </div>
            <div class="col-md-6">Seu sobrenome
                <input type="text" class="form-control" placeholder="Entrada de texto">
            </div>
            <div class="col-md-2">Telefone fixo
                <input type="text" class="form-control" placeholder="Entrada de texto">
            </div>
            <div class="col-md-2"> Telefone celular
                <input type="text" class="form-control" placeholder="Entrada de texto">
            </div><div class="col-md-2">CEP
                <input type="text" class="form-control" placeholder="Entrada de texto">
            </div>
            <div class="col-md-3">Endereço completo
                <input type="text" class="form-control" placeholder="Entrada de texto">
            </div>
            <div class="col-md-1">Número
                <input type="text" class="form-control" placeholder="Entrada de texto">
            </div>
            <div class="col-md-2"> Complemento
                <input type="text" class="form-control" placeholder="Entrada de texto">
            </div><div class="col-md-3"> Bairro
                <input type="text" class="form-control" placeholder="Entrada de texto">
            </div>
            <div class="col-md-3"> Cidade
                <input type="text" class="form-control" placeholder="Entrada de texto">
            </div>
            <div class="col-md-3"> Estado
                <select class="form-control">
                    <option>Selecione</option>
                    <option>amzonas</option>
                    <option>amzonas</option>
                    <option>amzonas</option>
                    <option>amzonas</option>
                    <option>amzonas</option>
                    <option>amzonas</option>
                    <option>amzonas</option>
                    <option>amzonas</option>
                    <option>amzonas</option>
                    <option>amzonas</option>
                    <option>amzonas</option>
                    <option>amzonas</option>
                    <option>amzonas</option>
                    <option>amzonas</option>
                    <option>amzonas</option>
                </select>
            </div>
            <div class="col-md-3"> Ponto de referência
                <input type="text" class="form-control" placeholder="Entrada de texto">
            </div>

        </form>
        <div class="container"><small>usar etse endereço para entregar?</small></div>
        <div class="container">
            <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Sim
            </label>
            <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Não
            </label>
        </div>
        <div class="container"><p>Forma de envio</p></div>
        <!--===================================Corregir========================================--> 
        <div class="container">
            <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Padrão
            </label>
            <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Não
            </label>
        </div>
        <div class="container"><p>Forma de pagamento</p></div>
        <!--===================================Corregir========================================--> 
        <div>
            <form class="form-group form-group-sm">
                <div class="col-md-2">Nome do titular
                    <input type="text" class="form-control" placeholder="Entrada de texto">
                </div>
                <div class="col-md-2">Número do cartão
                    <input type="text" class="form-control" placeholder="Entrada de texto">
                </div>
                <div class="col-md-1"> Mês
                    <input type="text" class="form-control" placeholder="Entrada de texto">
                </div>
                <div class="col-md-1"> Ano
                    <input type="text" class="form-control" placeholder="Entrada de texto">
                </div>
                <div class="col-md-3">CVV    <small>Codígo de seguraça do cartão</small>
                    <input type="text" class="form-control" placeholder="Entrada de texto">
                </div>
                <div class="col-md-3">
                    <label><br>
                        <input type="checkbox" value="">
                        <small>               Utilizar para faturas compras</small>
                    </label>
                </div>
                 
            </form>
                    </div>
        
    </div>
    
    <!--================================formulario aplicar desconto=======================================-->
    <div class="row">
    <form>
        <div class="container" ><p>Inserir cupom de desconto</p></div>
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Entrada de texto">
                </div>
                <div class="col-md-2">
                <button type="submit" class="btn btn-success btn-sm">Aplicar</button>
                </div>
        </form> 
        </div>
</div>   

<?php
//include '../modulo-menu/new-Menu.php';
?>