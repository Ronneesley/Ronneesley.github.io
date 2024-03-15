struct Cliente
  id::Int
  nome::String
end

struct Produto
  id::Int
  nome::String
  preco::Float64
end

struct Venda
   cliente::Cliente
   produtos::Vector{Tuple{Produto, Int}}
end

function salvar(p::Produto)
	println("Inserir produto")

	if (p.nome == "")
		error("Preencha o nome")
	end


end

function inserir(v::Venda)
	println("Inserir venda")
end

total(v::Venda) =
  sum(p.preco * q for (p, q) in v.produtos)


c1 = Cliente(1, "Roni");

p1 = Produto(1, "Arroz", 10.5)
p2 = Produto(2, "Feijão", 8.1)

v1 = Venda(c1, [ (p1, 5), (p2, 2) ])

inserir(p1)

inserir(v1)

total(v1)
