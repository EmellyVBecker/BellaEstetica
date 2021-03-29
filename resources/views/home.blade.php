@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card text-center">
                <img src="https://img.icons8.com/officel/80/000000/crowd.png" width="20%" style="margin-left:210px; margin-top:7px" />
                <div class="card-header" style="background-color: white; font-size:20px; margin-top:-10px"></div>
                <a href="clientes/" class="btn btn-outline-#bfbfbf btn-lg btn-block" style="background-color: white; color:#bfbfbf;">Clientes -></a></button>
            </div><br>
        </div>
        <div class="col-md-6">
            <div class="card text-center">
                <img src="https://img.icons8.com/officel/80/000000/wooden-massagetable.png" width="20%" style="margin-left:210px; margin-top:7px" />
                <div class="card-header" style="background-color: white; font-size:20px; margin-top:-10px"></div>
                <a href="procedimentos/" class="btn btn-outline-#bfbfbf btn-lg btn-block" style="background-color: white; color:#bfbfbf;">Procedimentos -></a>
            </div><br>
        </div>
        <div class="col-md-6">
            <div class="card text-center">
                <img src="https://img.icons8.com/officel/80/000000/supplier.png" width="20%" style="margin-left:210px; margin-top:7px" />
                <div class="card-header" style="background-color: white; font-size:20px;">Fonecedores</div>
                <a href="fornecedores/" class="btn btn-outline-#bfbfbf btn-lg btn-block" style="background-color: white; color:#bfbfbf;">Fornecedores -></a></button>
            </div><br>
        </div>
        <div class="col-md-6">
            <div class="card text-center">
                <img src="https://img.icons8.com/officel/80/000000/payment-history.png" width="20%" style="margin-left:210px; margin-top:7px" />
                <div class="card-header" style="background-color: white; font-size:20px;">Despesas</div>
                <a href="despesas/" class="btn btn-outline-#bfbfbf btn-lg btn-block" style="background-color: white; color:#bfbfbf;">API despesas -></a></button>
            </div><br>
        </div>
        <div class="col-md-6">
            <div class="card text-center">
                <img src="https://img.icons8.com/officel/80/000000/address-book.png" width="20%" style="margin-left:220px; margin-top:7px" />
                <div class="card-header" style="background-color: white; font-size:20px;">Agenda</div>
                <a href="agendas/" class="btn btn-outline-#bfbfbf btn-lg btn-block" style="background-color: white; color:#bfbfbf;">Agenda-></a></button>
            </div><br>
        </div>
    </div>
        <h2 style="text-align:center; margin-top:10px"> Conheça alguns de nossos produtos: </h2>
    <div class="col-md-12" style="margin-top:30px">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" style="background-color: #e6e6e6; width:1120px; height:640px; margin-left:-20px">
                <div class="carousel-item active">
                    <img class="d-block w-20" src="https://res.cloudinary.com/beleza-na-web/image/upload/w_1500,f_auto,fl_progressive,q_auto:eco,w_800/v1/imagens/product/69493/dbf85a9a-e724-4c4d-bb39-65c106511e88-kit-adcos-booster-de-vitamina-c-3-produtos.png" alt="First slide" style="width:50%; margin-left:280px; margin-top:-80px">
                    <h5 style="font-size:40px; text-align:center; margin-top:15px">Kit corporal</h5>
                    <p style="font-size:25px; text-align:center">R$150,00</p>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-40" src="https://www.adcos.com.br/mt-content/uploads/2018/02/fotoprotecao-final-25anos.png" alt="Second slide" style="width:45%; margin-left:290px; margin-top:80px">
                    <h5 style="font-size:40px; text-align:center; margin-top:15px">Kit protetor solar</h5>
                    <p style="font-size:25px; text-align:center">R$200,00</p>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-40" src="https://images.rappi.com.br/products/2100519085-1600292746157.png?e=webp" alt="Third slide" style="width:42%; margin-left:330px; margin-top:15px">
                    <h5 style="font-size:40px; text-align:center; margin-top:15px">Kit lavagem facial</h5>
                    <p style="font-size:25px; text-align:center">R$180,00</p>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div><br><br>
<h2 style="text-align:center; margin-top:10px"> Localização: </h2>
<div class="mapa" style="margin-left:340px; margin-top:30px">
    <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d1779.3973186388769!2d-52.4053027504329!3d-26.87826501372452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x94e4c3cac7e44303%3A0x4508a85f3fd1238c!2sR.%20Rui%20Barbosa%2C%20266%20-%20Centro%2C%20Xanxer%C3%AA%20-%20SC%2C%2089820-000!3m2!1d-26.8785034!2d-52.404637!5e0!3m2!1spt-BR!2sbr!4v1605896991084!5m2!1spt-BR!2sbr" width="1120" height="500" frameborder="0" style="border:10;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
@endsection