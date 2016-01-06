function number_format(a, b, c, d)
{
	if (!b) b = 2;
	if (!c) c = ',';
	if (!d) d = '.';

	a = Math.round(a * Math.pow(10, b)) / Math.pow(10, b);
	e = a + '';
	f = e.split('.');
	
	if (!f[0]) {
		f[0] = '0';
 	}
 	if (!f[1]) {
  		f[1] = '';
 	}
 	if (f[1].length < b) {
		g = f[1];
		for (i=f[1].length + 1; i <= b; i++) {
			g += '0';
		}
		f[1] = g;
	}
	if(d != '' && f[0].length > 3) {
		h = f[0];
		f[0] = '';
		for(j = 3; j < h.length; j+=3) {
			i = h.slice(h.length - j, h.length - j + 3);
			f[0] = d + i +  f[0] + '';
		}
		j = h.substr(0, (h.length % 3 == 0) ? 3 : (h.length % 3));
		f[0] = j + f[0];
	}
	c = (b <= 0) ? '' : c;
	return f[0] + c + f[1];
}

Carrinho = {
	setEntrega: function(valor) {
		$('#valorFrete').val(valor);
		var valorCarrinho = parseFloat($('#valorCarrinho').val());
		
		var valorFrete = parseFloat(valor);
		var valorTotal = valorCarrinho + valorFrete;

		$('#infoValorFrete').html('R$ '+ number_format(valorFrete));
		$('#infoValorCarrinho').html('R$ '+ number_format(valorTotal));
		$('#valorFrete').val(valor);
	}
}