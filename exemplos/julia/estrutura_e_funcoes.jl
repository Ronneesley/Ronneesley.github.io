struct Produto
	nome::String
	preco_compra::Float64
	preco_venda::Float64
end

lucro(p::Produto) = p.preco_venda - p.preco_compra

p1 = Produto("Arroz", 15, 50)
println("O lucro é: ", lucro(p1))