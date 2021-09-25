

		<footer class="footer">
			<div class="container mb-10">
				<div class="row">
					<div class="col-12">
						<div class="block-footer-container">
							<div class="block-footer">
								<h3>Ayuda y Contacto</h3>
								<p>Jorge Manrique, 12. 28006 Madrid</p>
								<a href="tel:917 020 274">917 020 274</a>
								<a href="mailto:tressis@tressis.com">tressis@tressis.com</a>
							</div>
							<div class="block-footer">
								<h3>Nosotros</h3>
								<ul>
									<li><a href="">Tressis Way Comprometidos con las personas</a></li>
									<li><a href="">Comprometidos con el medio ambiente </a></li>
									<li><a href="">Trabaja con nosotros </a></li>
									<li><a href="">Localizador de oficinas </a></li>
									<li><a href="">Escúchanos</a></li>
								</ul>

							</div>
							<div class="block-footer">
								<h3>Ahorro e inversión</h3>
								<ul>
									<li><a href="">Tressis Way Comprometidos con las personas</a></li>
									<li><a href="">Comprometidos con el medio ambiente </a></li>
									<li><a href="">Trabaja con nosotros </a></li>
									<li><a href="">Localizador de oficinas </a></li>
									<li><a href="">Escúchanos</a></li>
								</ul>
							</div>
							<div class="block-footer">
								<h3>Nuestras plazas</h3>
								<ul class="two-columns">
									<li><a href="">invierte en Madrid </a></li>
									<li><a href="">Invierte en Valladolid </a></li>
									<li><a href="">Invierte en Valencia </a></li>
									<li><a href="">Invierte en Alicante </a></li>
									<li><a href="">Invierte en Las Palmas de Gran Canaria </a></li>
									<li><a href="">Invierte en Lleida</a></li>
									<li><a href="">Invierte en Pontevedra</a></li>
									<li><a href="">Invierte en Barcelona</a></li>
									<li><a href="">Invierte en Santander</a></li>
									<li><a href="">Invierte en Córdoba</a></li>
									<li><a href="">Invierte en Bilbao </a></li>
									<li><a href="">Invierte en Sevilla</a></li>
									<li><a href="">Invierte en Logoño</a></li>
								</ul>
							</div>

						</div>

					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="block-footer-container extra">
							<div>
								<a href="" class="d-inline-block me-10 mb-5 mb-md-0"><strong>Descárgate nuestra App</strong></a>
							</div>
							<ul class="list list-inline d-inline-block">
								<li><a href="">Anuncios oficiales y convocatoria de Juntas</a>
								<li><a href="">Comunicaciones a partícipes y accionistas</a>
								<li><a href="">Portal del accionista</a>
								<li><a href="">Trabajar en Tressis</a>

							</ul>
						</div>
					</div>
				</div>
				<hr />
				<div class="row">
					<div class="col-12">
						<div class="block-footer-container extra">
							<div>
								<strong class="d-inline-block mb-5 mb-md-0">© Copyright 2021, Tressis</strong>
							</div>
							<ul class="list list-inline d-inline-block">
								<li><a href="">Política de privacidad y cookies</a>
								<li><a href="">Términos de uso</a>
								<li><a href="">Normativa</a>
								<li><a href="">Políticas MiFID</a>
								<li><a href="">Documentos legales</a>

							</ul>
						</div>
						<div class="social">
							<ul class="list list-inline d-inline-block">
								<li><a href=""></a>
								<li><a href=""></a>
								<li><a href=""></a>
								<li><a href=""></a>
								<li><a href=""></a>

							</ul>		
						</div>
					</div>
				</div>

			</div>

		</footer>

		<?php wp_footer(); ?>
	</body>
</html>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://www.tressis.com/js/valoresASG/valores_Tendencias.js"></script>
<script src="https://www.tressis.com/js/valoresASG/valores_Alisio.js"></script>
<script src="https://www.tressis.com/js/valoresASG/valores_Boreas.js"></script>


<script>
	
	$('.menu-item-has-children  > a').click(function(e) {
		var urlTogo = $(this).attr('href')
		e.preventDefault();
		$(this).next().addClass('visible');
  	})
	$('.sub-menu li:first-child > a').click(function(e){
		e.preventDefault();
		$(this).closest('.sub-menu').removeClass('visible');
	})


	$('.planificador .form-control').on('keyup', function(){
		var length = $(this).val().length;
		if (length > 3) {
			$(this).closest('.planificador-form').find('.btn').addClass('visible');
		}else {
			$(this).closest('.planificador-form').find('.btn').removeClass('visible');

		}
	});

		
</script>


<style>
/***** Grï¿½ficos *****/
.cssGraph{
    display: -webkit-box;      /* OLD - iOS 6-, Safari 3.1-6 */
    display: -moz-box;         /* OLD - Firefox 19- (buggy but mostly works) */
    display: -ms-flexbox;      /* TWEENER - IE 10 */
    display: -webkit-flex;     /* NEW - Chrome */
    display: flex;
    justify-content: space-around;
}
.cssGraph.mainGraph {
    margin-top: 18px;
    margin-bottom: 36px;
}
.cssGraph .scalimeter_v {
    position: relative;
    border-right: 1px solid #4a4a49;
    height: 100%;
}
.cssGraph .scalimeter_v span.marker {
    display: block;
    position: absolute;
    right: -5px;
    width: 10px;
    height: 1px;
    background-color: #4a4a49;
}
.cssGraph .scalimeter_v span.legend {
    position: absolute;
    right: 36px;
    font-family: 'metaplusroman';
    font-size: 20px;
    color: #4a4a49;
    margin-top: -18px;
}
.cssGraph .bar_v {
    position: relative;
    width: 7%;
    height: 100%;
    background-color: #f0f1f0;
}
.cssGraph .bar_v > div {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
}
.cssGraph .underValue {
    width: 7%;
    text-align: center;
    font-family: 'metaplusroman';
    font-size: 20px;
    color: #4a4a49;
}
.cssGraph.underGraph {
    padding: 9px 0;
    align-items: center;
}
.cssGraph.underGraph + .cssGraph.underGraph {
    border-top: 1px solid #4a4a49;
}
@media screen and (max-width: 799px){
    .cssGraph .scalimeter_v span.legend,
    .cssGraph .underValue {
        font-size: 14px;
    }
}
.graph01{
    max-width: 970px;
    margin: 0 auto;
}
.graph01.mainGraph {
    height: 225px;
}
.graph01 .scalimeter_v,
.graph01 .underLegend {
    width: 36%;
    max-width: 270px;
    text-align: right;
}
/**** literature *****/
.literature{
    margin-bottom: 36px;
}
.literature p{
    margin: 18px 0;
    font-weight: normal;
}
.literature li a,
.literature p a {
    display: inline;
    font-family: inherit;
    font-size: inherit;
    color: #B01C2E;
    /*text-decoration: underline;*/
}
.literature p a:hover{
    color: #000;
}
.literature a.btn {
    text-decoration: none;
}
.literature h2{
    font-family: 'metaplusroman';
    font-size: 22px;
    text-transform: uppercase;
    margin: 28px 0;
}
.literature h3{
    font-family: 'metaplusroman';
    font-size: 20px;
    text-transform: uppercase;
    margin: 14px 0 0 0;
}
.literature h4 {
    font-family: 'metaplusroman';
    font-size: 18px;
    text-transform: uppercase;
    margin: 18px 0;
}
.literature h5{
    font-size: 14px;
    font-weight: bold;
    text-transform: uppercase;
}
.literature.halfspace p,
.literature .halfspace p {
    margin: 8px 0;
}
.literature.halfspace h2,
.literature .halfspace h2 {
    margin: 14px 0;
}
.literature.halfspace h3,
.literature .halfspace h3 {
    margin: 12px 0;
}
.literature.halfspace h4,
.literature .halfspace h4 {
    margin: 8px 0;
}
.literature .link4a {
    margin: 0;
}
.literature ul > li:before{
    content: "\2022";
    color: #B01C2E;
    margin-right: 4px;
}
/***** *****/

    /*----------*/
            /* GRAFICAS */
            /*----------*/
            .cssGraph.mainGraph.conValoresSobreBar { margin-bottom:10px; }
            .graph01.narrowGraph { max-width: 760px;}
            .graph01.narrowGraph .scalimeter_v,
            .graph01.narrowGraph .underLegend { width: 10%; min-width: 85px;}
            .cssGraph .underValue { position:relative; }
            .cssGraph .bar_v > div > .overBar {position: absolute; top: -24px; left: 0px; right: 0; text-align: center; font-family:'metaplusroman'; }
            .bgMedRed { background-color: #e2abb4;}

            /*----------*/
            /* GRAFICAS */
            /*----------*/

            .container4fondosASG { width:100%; margin:0 auto; }

            .container4fondosASG h5 { margin-bottom:20px;}

            .container4fondosASG .huellaIndices,
            .container4fondosASG .huellaIndices * { transition:all 2s ease-out;}

            .huellaCarbono { /*display:none;*/}
            .huellaCarbono .conValoresSobreBar { align-items: end; align-items:last baseline; align-items:flex-end; margin-bottom:0;}
            .huellaCarbono .cssGraph .bar_v { background-color: rgba(255,255,255,0);}
            .huellaCarbono .cssGraph .referencia { background-color: #f0f1f0;}
            .huellaCarbono .underGraph .underValue { position:relative; font-size:12px; }
            .huellaCarbono .underGraph .underValue strong { font-size:15px; }
            .huellaCarbono .cssGraph .bar_v > div > .overBar { top: -1.45em; font-family:verdana, 'metaplusroman'; }
            .huellaCarbono .coloresReferenciaCO2 { display:flex; margin:0 auto; width:60%; max-width:530px; min-width:300px; transform:translateX(25%);}

            @media (max-width: 460px) {
                .huellaCarbono .coloresReferenciaCO2 { min-width:50%;}
            }

            .huellaCarbono .ref100 { background-color:#353d40;  }
            .huellaCarbono .ref5 { background: #b01c2e;}
            .huellaCarbono .ref4 { background: gold;}
            .huellaCarbono .ref2 { background: #298a29;}
            .huellaCarbono .ref3 { background: #99d000;}
            .huellaCarbono .coloresReferenciaCO2 .ref {position:relative; height:8px;}
            .huellaCarbono .coloresReferenciaCO2 .ref span {position: absolute; top: -1.7em; right: -1.5em;}
            .huellaCarbono .coloresReferenciaCO2 .textomini { font-size: 0.7em;}
            .huellaCarbono .titularCarbono {height: 100%; display: table;bottom: 0;position: absolute;width: 100%;}
            .huellaCarbono .titularDiferencia {display:none;}
            .huellaCarbono .titularCarbono > span,
            .huellaCarbono .titularDiferencia > span {display: table-cell;vertical-align: middle;padding-right: 20px; line-height:1.2;}
            .huellaCarbono .diferenciaHuella .underLegend > span {padding-right:20px; display:inline-block; line-height:1; }
            .huellaCarbono .cssGraph.underGraph { padding: 15px 0;}
            .huellaCarbono .textomini { line-height: 1.235;}


            .huellaCarbono.diferenciaUnder .conValoresSobreBar,
            .huellaCarbono.diferenciaUnder .conValoresSobreBar * { transition:all 2s ease-out;}

            .huellaCarbono.diferenciaUnder .cssGraph.mainGraph.conValoresSobreBar { margin-top:20px;}
            .huellaCarbono.diferenciaUnder .cssGraph .referencia { background-color: transparent;}
            .huellaCarbono.diferenciaUnder .cssGraph .referencia.valCo2_Harmatan { background-color: #fff;}
            .huellaCarbono.diferenciaUnder .cssGraph .referencia.valCo2_Alisio { background-color: #fff;}
            .huellaCarbono.diferenciaUnder .cssGraph .referencia.valCo2_Mistral { background-color: #fff;}
            .huellaCarbono.diferenciaUnder .cssGraph .referencia.valCo2_Boreas { background-color: #fff;}
            .huellaCarbono.diferenciaUnder .graph01 .scalimeter_v,
            .huellaCarbono.diferenciaUnder .graph01 .underLegend { width:20%; }

            .huellaCarbono.diferenciaUnder.invertido,
            .huellaCarbono.diferenciaUnder.facturado { width:90%; /* width:50%; float:left;*/ margin:0 auto;}

            .huellaCarbono.diferenciaUnder.invertido .bar_v .overBar,
            .huellaCarbono.diferenciaUnder.facturado .bar_v .overBar,
            .huellaCarbono.diferenciaUnder.invertido .underValue small,
            .huellaCarbono.diferenciaUnder.facturado .underValue small { font-size:12px; font-family:verdana, arial;transition:all 2s ease-out; }

            .huellaCarbono.diferenciaUnder.invertido .carbonoCarteras .underValue span,
            .huellaCarbono.diferenciaUnder.facturado .carbonoCarteras .underValue span {display:inline-block; transform: translate(-20%, 0);}
            .huellaCarbono .diferenciaHuella .underLegend > span

            .huellaCarbono.diferenciaUnder .graph01 { /*max-width:60%;*/max-width:95%;}
                        
            .huellaCarbono.invertido .underGraph .underValue strong,
            .huellaCarbono.facturado .underGraph .underValue strong { line-height:1;}
			
			@media (max-width: 1023px) {
				#resizeInvertido.col-sm-6,
				#resizeFacturado.col-sm-6 { width:100%; }
				
				#resizeFacturado.col-sm-6 {padding-top: 60px;}
			}			

            @media (max-width: 991px) {
                .huellaCarbono.diferenciaUnder .graph01 { max-width: 90%;  /*background:yellow;*/}
                .huellaCarbono.diferenciaUnder.invertido .graph01,
                .huellaCarbono.diferenciaUnder.facturado .graph01,
                .huellaCarbono.diferenciaUnder.invertido .graph01,
                .huellaCarbono.diferenciaUnder.facturado .graph01 {max-width: 90%; /*background:yellow;*/}
				.huellaCarbono .diferenciaHuella .underLegend > span,
				.huellaCarbono .titularCarbono > span, 
				.huellaCarbono .titularDiferencia > span { font-size:12px;}
            }

            @media (max-width: 768px) {
                .huellaCarbono.diferenciaUnder.invertido,
                .huellaCarbono.diferenciaUnder.facturado { /*width:80%;*/margin: 0 auto; float:none;}
                .huellaCarbono.diferenciaUnder.invertido .graph01,
                .huellaCarbono.diferenciaUnder.facturado .graph01,
                .huellaCarbono.diferenciaUnder.invertido .graph01,
                .huellaCarbono.diferenciaUnder.facturado .graph01 {/*max-width: 60%;*/ /*background:#cccc00;*/}
            }
            @media (max-width: 600px) {
                /*.huellaCarbono.diferenciaUnder .graph01 { max-width: 100%; background:#cccc00;}*/
                .huellaCarbono.diferenciaUnder.invertido .graph01,
                .huellaCarbono.diferenciaUnder.facturado .graph01,
                .huellaCarbono.diferenciaUnder.invertido .graph01,
                .huellaCarbono.diferenciaUnder.facturado .graph01 {max-width: 100%; /*background:#ffcc00;*/}
            }
            @media (max-width: 550px) {
				.huellaCarbono.invertido .underGraph .underValue strong,
				.huellaCarbono.facturado .underGraph .underValue strong { line-height: 1; transform: rotate(-90deg); display: block; direction: rtl; }
			}
			@media (max-width: 500px) {
				.huellaCarbono.diferenciaUnder.invertido .bar_v .overBar, 
				.huellaCarbono.diferenciaUnder.facturado .bar_v .overBar, 
				.huellaCarbono.diferenciaUnder.invertido .underValue small, 
				.huellaCarbono.diferenciaUnder.facturado .underValue small {font-size: 11px;}
				.huellaCarbono.diferenciaUnder.invertido .underValue small, 
				.huellaCarbono.diferenciaUnder.facturado .underValue small { transform: rotate(-45deg);}
			}
            @media (max-width: 460px) {
                .huellaCarbono.diferenciaUnder .underGraph.diferenciaHuella .underValue.ref { transform: translateX(-1.5em); }
                .huellaCarbono.diferenciaUnder .carbonoCarteras .underValue.cautelosa { transform: translateX(-0.6em) }
                .huellaCarbono.diferenciaUnder .carbonoCarteras .underValue .opacity8 { margin-left: -1.5em; }
            }

            /*----*/

            .huellaTons .graph01 {max-width: 700px;}
            .huellaTons.huellaCarbono .cssGraph .scalimeter_v { height:100%;}
            .huellaTons .graph01 .underLegend,
            .huellaTons .graph01 .scalimeter_v { width:20%; }
            .huellaTons .cssGraph .leyenda {width: 20%; height: 100%;position: relative;}
            .huellaTons .cssGraph.borderTop .leyenda {width: 18%;}
            .huellaTons .cssGraph .bar_v > div.col1 { right:50%;}
            .huellaTons .cssGraph .bar_v > div.col2 { left:50%; }
            .huellaTons .col1 { background:#353d40;}
            .huellaTons .col2 { background:#b01c2e;}
            .huellaTons .cssGraph .bar_v,
            .huellaTons .cssGraph .underValue { width:20%;}
            .huellaTons .cssGraph.graph01.borderTop {/*justify-content: end; justify-content:flex-end;*/}
            .huellaTons .cssGraph.graph01.borderTop > .borde {border-top: 1px solid #4a4a49; width:58%;}
            .huellaTons .cssGraph.graph01.borderTop > .dummyBorde { width:20%}

            .huellaTons .leyenda .td { vertical-align:middle;font-size: 12px;font-family: arial;}
            .huellaTons .leyenda span { width:1.5em; height:1.5em; display:inline-block; margin:5px; border-radius:50%;}

            .huellaTons .leyenda.atTop span {width:1em; height:1em;}

            #cautelosaCo2 .huellaTons .cssGraph .bar_v > div.col1,
            #cautelosaCo2 .huellaTons .cssGraph .bar_v > div.col2,
            #equilibradaCo2 .huellaTons .cssGraph .bar_v > div.col1,
            #equilibradaCo2 .huellaTons .cssGraph .bar_v > div.col2,
            #arriesgadaCo2 .huellaTons .cssGraph .bar_v > div.col1,
            #arriesgadaCo2 .huellaTons .cssGraph .bar_v > div.col2 { transition:all 2s ease-out;}
            /*#boreasCo2 .huellaTons .cssGraph .bar_v > div.col1,
            #boreasCo2 .huellaTons .cssGraph .bar_v > div.col2 { transition:all 2s ease-out;}*/

            /*-----*/

            .huellaIndices .cssGraph .bar_v,
            .huellaIndices .cssGraph .underValue { /*width:18%;*/ width:16%; }
            .huellaIndices .cssGraph .separa_bar { /*width:18%;*/ width:5%; }
            .huellaIndices .coloresReferenciaCO2 { transform: translateX(-15%); }

            .containerASG .huellaIndices .coloresReferenciaCO2 { transform: none; }

            .huellaIndices .coloresReferenciaCO2 .ref1 {  }
            .huellaIndices .ref2,
            .huellaIndices .coloresReferenciaCO2 .ref2 { /*background-color:#445661;*/background-color:#c41130; }
            .huellaIndices .ref2 { /*border:2px solid #445661;*/ border:2px solid #c41130; }
            .huellaIndices .coloresReferenciaCO2 .ref2 { border:0;}
            .huellaIndices .ref3,
            .huellaIndices .coloresReferenciaCO2 .ref3 { /*background-color:#c5d0da;*/ background-color:#e17318; background-color:#ffa459; }
            .huellaIndices .ref3 { /*border:2px solid #c5d0da;*/ border:2px solid #e17318; border:1px solid #ffa459; }
            .huellaIndices .coloresReferenciaCO2 .ref3 { border:0;}
            .huellaIndices .ref4,
            .huellaIndices .coloresReferenciaCO2 .ref4 { background-color:gold;}
            .huellaIndices .ref4 { border:2px solid gold; }
            .huellaIndices .coloresReferenciaCO2 .ref4 { border:0;}
            .huellaIndices .ref5,
            .huellaIndices .coloresReferenciaCO2 .ref5 { background-color:#99d000; }
            .huellaIndices .ref5 { border:2px solid #99d000; }
            .huellaIndices .coloresReferenciaCO2 .ref5 { border:0;}
            .huellaIndices .ref100,
            .huellaIndices .coloresReferenciaCO2 .ref100 { background-color:#298a29; }
            .huellaIndices .ref100 { border:2px solid #298a29; }
            .huellaIndices .coloresReferenciaCO2 .ref100 { border:0;}

            .huellaIndices .coloresReferenciaCO2 .ref00 { background-color:transparent; font-size: 0.8em; }


            .huellaIndices .cssGraph .bar_v > div.col2 { /*transform:translateX(2px);*/}

            .huellaIndices .coloresReferenciaCO2 .ref span { right: -1em;}
            .huellaIndices .col1 { border:2px dashed #445661; }

            .huellaIndices .coloresReferenciaCO2 .ref00 span { top: -1em;}
            .huellaIndices .coloresReferenciaCO2 .ref00.ref00First span { direction: rtl; right:2em; }
            .huellaIndices .coloresReferenciaCO2 .ref00.ref00Last span { right: unset; left: 2em; }

            .huellaIndices .envelopeLeyendaASG { width:78%; }
            .huellaIndices .envelopeLeyendaASG .coloresReferenciaCO2 .ref00.ref00First span { right:1em; }
            .huellaIndices .envelopeLeyendaASG .coloresReferenciaCO2 .ref00.ref00Last span { left: 1em; }
            .huellaIndices .envelopeLeyendaASG .coloresReferenciaCO2 .ref.ref100 span { right:-0.4em;}

            .huellaIndices .leyenda .col1 { background-color:#fff; border:2px dotted #445661; border-style:dashed; transform: translateX(-1px); }
            .huellaIndices .leyenda .col2 { background-color:#fff; border:1px solid #445661;}

            .esIE11 .huellaIndices .col1 { border-width:2px; }

            /*----*/

            .container4fondosASG { /*background:#f0f0f0;*/}
            .container4fondosASG .huellaTons .graph01 { max-width: 90%;}
            @media (max-width: 991px) {
                .container4fondosASG .huellaTons .graph01 { max-width: 100%;}
            }

            .containerASG .huellaTons .overBar,
            .containerASG .huellaTons .overBar span { font-size:0.95em;}


            @media (max-width: 767px) {
                .containerASG { width:100%;}
                .huellaTons .graph01 .underLegend,
                .huellaTons .graph01 .scalimeter_v { width: 25%;}
                .containerASG .huellaCarbono .titularCarbono > span {padding-right:10px; }
                .containerASG .huellaTons .overBar,
                .containerASG .huellaTons .overBar span {font-size: 0.9em; }
                .cssGraph .bar_v > div > .overBar { font-size:12px;}

                .huellaTons .cssGraph.graph01.borderTop > .dummyBorde {width: 25%; /*background: red;*/}
                .huellaTons .cssGraph.graph01.borderTop > .borde {width: 52%;}
                .huellaTons .cssGraph.borderTop .leyenda {width: 21%; /*border-top: 1px solid orange;*/}
            }

            @media (max-width: 500px) {
                .containerASG .huellaTons .overBar,
                .containerASG .huellaTons .overBar span {font-size: 0.85em; }
            }


            .container4fondosASG .huellaTons { position:relative; z-index:1;}
            .container4fondosASG .huellaTons .graph01 { max-width: 90%;}
            @media (max-width: 991px) {
                .container4fondosASG .huellaTons .graph01 { max-width: 100%;}
            }
            .container4fondosASG .huellaIndices .cssGraph .bar_v,
            .container4fondosASG .huellaIndices .cssGraph .underValue { width:20.5%;}

            .container4fondosASG .huellaTons .cssGraph .bar_v > div { /*width:17.5%;  width:20%;*/  width:22%;
                right:initial; border:0; box-shadow: 5px 0 9px -4px rgba(61, 77, 87, 0.4);
            }
            .container4fondosASG .huellaTons .cssGraph .bar_v > div:first-of-type,
            .container4fondosASG .huellaTons .cssGraph .bar_v > div:last-of-type { box-shadow:none;}

            .container4fondosASG .huellaTons .cssGraph .bar_v > div.col1 { left:0; z-index:6;}
            .container4fondosASG .huellaTons .cssGraph .bar_v > div.col00 { left:22%; z-index:5;}
            .container4fondosASG .huellaTons .cssGraph .bar_v > div.col2 { /*left:20%;*/ left:34%; z-index:4; }
            .container4fondosASG .huellaTons .cssGraph .bar_v > div.col3 { /*left:40%;*/ left:56%; z-index:3; }
            .container4fondosASG .huellaTons .cssGraph .bar_v > div.col4 { /*left:60%;*/ left:78%;  z-index:2; }
            .container4fondosASG .huellaTons .cssGraph .bar_v > div.col5 { /*left:80%;*/ left:82%;  z-index:1; }


            .container4fondosASG .cssGraph.fondo_MSCI { padding-top:5px; padding-bottom:15px;}
            .container4fondosASG .cssGraph.fondo_MSCI .underCarteras { display:flex; justify-content:center; margin:0 auto; /*background:#aeaeae;*/}
            .container4fondosASG .cssGraph.fondo_MSCI .underCarteras .smaller { transform: rotate(-25deg);
                font-size:12px;
                width:18%;
                top: 0;
                position: relative;
                /*text-align: center;
                left: -6%;*/
                transform-origin: right;
                direction:rtl;
                /*background-color: #cccc00;*/
                letter-spacing: 1px;
                line-height: 0.9;}
            .container4fondosASG .huellaTons .cssGraph .bar_v > div.col00,
            .container4fondosASG .cssGraph.fondo_MSCI .underCarteras .smaller.dummySmaller { width:10%;}


            .container4fondosASG .cssGraph.fondo_MSCI .underCarteras .smaller { position:absolute;}
            .container4fondosASG .cssGraph.fondo_MSCI .underCarteras .smaller:nth-of-type(1) { left:0%;}
            .container4fondosASG .cssGraph.fondo_MSCI .underCarteras .smaller:nth-of-type(2) { }
            .container4fondosASG .cssGraph.fondo_MSCI .underCarteras .smaller:nth-of-type(3) { left:28%;}
            .container4fondosASG .cssGraph.fondo_MSCI .underCarteras .smaller:nth-of-type(4) { left:51%;}
            .container4fondosASG .cssGraph.fondo_MSCI .underCarteras .smaller:nth-of-type(5) { left:72%;}
            .container4fondosASG .cssGraph.fondo_MSCI .underCarteras .smaller:nth-of-type(6) { left:82%;}

            @media (max-width: 1024px) {
                .container4fondosASG .cssGraph.fondo_MSCI .underCarteras .smaller:nth-of-type(1) { left:-5%; line-height: 0.85;}
            }
            @media (max-width: 768px) {
                .container4fondosASG .cssGraph.fondo_MSCI .underCarteras .smaller:nth-of-type(1) { left:-8%;}
            }
            @media (max-width: 767px) {
                .container4fondosASG .cssGraph.fondo_MSCI .underCarteras .smaller {transform: rotate(-90deg);   }
                .container4fondosASG .cssGraph.underGraph.mar30b { margin-top: 3em !important;}
                .container4fondosASG .cssGraph.fondo_MSCI .underCarteras .smaller:nth-of-type(1) { left:-1em; line-height: 0.9}
                .container4fondosASG .cssGraph.fondo_MSCI .underCarteras .smaller:nth-of-type(2) { }
                .container4fondosASG .cssGraph.fondo_MSCI .underCarteras .smaller:nth-of-type(3) { left:24%;}
                .container4fondosASG .cssGraph.fondo_MSCI .underCarteras .smaller:nth-of-type(4) { left:46%;}
                .container4fondosASG .cssGraph.fondo_MSCI .underCarteras .smaller:nth-of-type(5) { left:68%;}
                .container4fondosASG .cssGraph.fondo_MSCI .underCarteras .smaller:nth-of-type(6) { left:74%;}
            }

            .container4fondosASG .noBorder .underValue { border-top: 1px solid #4a4a49; padding-top:10px; margin-top:10px;}

            .container4fondosASG .huellaCarbono .coloresReferenciaCO2 { background-color:transparent;}

            #container4fondosASG .cssGraph.underGraph + .cssGraph.underGraph,
            #container4fondosASG .cssGraph.underGraph.bordeTopUnderGraph { border-top: 0 !important;}
					
			
			/*-- TABLA RESULTADOS con bgGrayLight--*/
			.bgGrayLight #tablaResultados .table > tbody > tr:nth-child(2n), 
			.bgGrayLight #tablaResultados .inner13-bck_gray { background-color: #ddd;}
			
			.bgGrayLight .border-trans { border-right-color: transparent}
			
			.vMiddle {vertical-align: middle !important;}
</style>