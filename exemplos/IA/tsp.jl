struct Cidade
	nome::String
end

colinas = Cidade("Colinas")
araguaina = Cidade("Araguaina")

cidades = [ 	colinas, 
		araguaina,
		Cidade("Bernardo Sayão"),
		Cidade("Palmeirantes"),
		Cidade("Juarina"),
		Cidade("Presidente Kennedy"),
		Cidade("Guaraí"),
		Cidade("Brasilândia") 
	 ]

struct Estrada
	cidade_origem::Cidade
	cidade_destino::Cidade
	custo::Float64
end

e1 = Estrada(colinas, araguaina, 100)

#estradas = [ e1, e2, e3... ]

println(e1.custo)